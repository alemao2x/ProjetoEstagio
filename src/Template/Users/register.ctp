<br>
<style>
body { 
    background-image: url('/ProjetoGian/twitter_bootstrap/img/background2.jpg');
}
</style>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 colums">
<div align = "center" class = "panel panel-primary col-md-offset-3" style="width: 50%">
		<div class="panel-heading"><h2 class ="text-center"><font face="Lora">Novo Usuário</font></h2></div>
    	<div class="panel-body fixed-panel" style="min-height: 10; max-height: 10;">
		<?= $this->Form->create($user); ?>
			<?= $this->Form->control('name');?>
			<?= $this->Form->control('email');?>
			<?= $this->Form->control('username');?>
			<?= $this->Form->control('password',['type' => 'password']);?>
			<?= $this->Form->control('confirm_password',['type'=>'password']);?>
			<input type="submit" class="button btn btn-success btn-lg" value="Criar">
			<input type="button" onClick="history.go(-1)" class="button btn btn-warning btn-lg" value="Voltar">
		<?= $this->Form->end(); ?>
	</div>
</div>