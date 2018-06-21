<?php
namespace App\Controller;

use App\Controller\AppController;
use FlyingLuscas\ViaCEP\ZipCode;
use Cake\ORM\TableRegistry;

class CepController extends AppController
{
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $this->set('estado',null);
        if($this->request->is('post'))
        {      
            //pega cep   
            $zipcode = new ZipCode;
            $cep = $this->request->getData('CEP');
            //limpa a string de pontos, traços e virgulas
            $cep = trim($cep);
            $cep = str_replace(".", "", $cep);
            $cep = str_replace(",", "", $cep);
            $cep = str_replace("-", "", $cep);
            //valida cep recebido, caso negativo, informações passadas serão nulas
            if(preg_match('/^[0-9]{2}[0-9]{3}[0-9]{3}$/',$cep)){
                //procura endereço conforme cep
                $address = $zipcode->find($cep)->toArray();
                $this -> set('rua',$address['street']);
                $this -> set('bairro',$address['neighborhood']);
                $this -> set('cidade',$address['city']);
                $this -> set('estado',$address['state']);
                
                //removendo espaços do nome da cidade para melhorar busca no api
                $address['city'] = str_replace(" ", "", $address['city']);
                
                //começando a buscar o informações pela api
                $url = 'https://api.hgbrasil.com/weather/?format=json&city_name='.$address['city'].'&key=bf1a4e31';
                $info_clima = file_get_contents($url);
                $data = json_decode($info_clima,TRUE);

                $this->set('temperatura',$data['results']['temp']);
                $this ->set('desc',$data['results']['description']);
                $this->set('umidade',$data['results']['humidity']);
                $this->set('ar',$data['results']['wind_speedy']);
                $this->set('imgid',$data['results']['img_id']);
                
                //salvando dados do usuario no banco
                $this->loadModel('Search');
                $saveBD = $this->Search->newEntity();

                $saveBD->ip=$ip;
                $saveBD->cep=$cep;

                $this->Search->save($saveBD);
            }else{
                $this->Flash->error(__('CEP inválido.'));
                $this -> set('rua',null);
                $this -> set('bairro',null);
                $this -> set('cidade',null);
                $this -> set('estado',null);
            }
        }
    }
}
