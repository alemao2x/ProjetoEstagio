<?php

namespace App\Controller;

use App\Controller\AppController;
/**
 * Search Controller
 *
 * @property \App\Model\Table\SearchTable $Search
 *
 * @method \App\Model\Entity\Search[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SearchController extends AppController
{
	/**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
	public function index()
	{
        $this->loadComponent('Paginator');
        $busca = $this->paginate($this->Search);
        $buscas = $this->Search->find('all')->order(['search.id'=>'DESC'])->limit(15);
		$this->set(compact('buscas'));
	}
}