<style>
th {
    display: table-cell;
    vertical-align: inherit;
    font-weight: bold;
    text-align: left;
    height: 25px;
    width: 27%;
}
body { 
    background-image: url('/ProjetoGian/twitter_bootstrap/img/background2.jpg');
}
</style>
<div class="search index large-9 medium-8 columns content">
<div align = "center" class = "panel panel-warning col-md-offset-3" style="width: 50%">
	<div class="panel-heading"><h2 class ="text-center"><font face="Lora">Últimas 15 buscas</font></h2></div>
    <div class="panel-body" style="max-height: 10;">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">IP</th>
                <th scope="col">CEP</th>
                <th scope="col">Feita em:</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($buscas as $busca): ?>
            <tr>
                <td><?= $this->Number->format($busca->id) ?></td>
                <td><?= h($busca->ip) ?></td>
                <td><?= h($busca->cep) ?></td>
                <td><?= h($busca->created) ?></td>
            </tr>
            <?php endforeach; ?>
            </div>
            </div>
        </tbody>
    </table>
</div>
