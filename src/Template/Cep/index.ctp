<br>
<style>
body { 
    background-image: url('/ProjetoGian/twitter_bootstrap/img/background2.jpg');
}
</style>
<div class="index large-4 medium-4 large-offset-4 medium-offset-4 colums">
	<div align = "center" class = "panel panel-info col-md-offset-3" style="width: 50%">
	<div class="panel-heading"><h2 class ="text-center"><font face="Lora">Informe seu CEP</font></h2></div>
    <div class="panel-body" style="max-height: 10;">
		<?= $this->Form->create(); ?>
			<?= $this->Form->control('CEP',['style'=>'width:200px']);?>
			<br>
			<input type="submit" class="button btn btn-info" value="Procurar">
        <?= $this->Form->end(); ?>
        </div>
	</div>
</div>
	<?php if($estado): ?>
	<div align = "center" class = "panel panel-success col-md-offset-3" style="width: 50%">
	<div class="panel-heading"><h2 class ="text-center"><font face="Lora">Clima</font></h2></div>
    <div class="panel-body" style="max-height: 10;">
			<?php
				echo "<strong><font face='Courier New'>Endereço:</strong> ".$rua.",".$bairro.",".$cidade.",".$estado."<br>";
				echo $temperatura."°C, ".$desc.".<br>";
				echo "Umidade:".$umidade."%<br>";
				echo "Velocidade do vento: ".$ar."<br></font>";
			?>
			<br>
			<br>
			<img align="center" src="/ProjetoGian/twitter_bootstrap/img/clima/<?php echo $imgid;?>.png";
		</div>
	</div>
</div>
<?php endif; ?>
</body>