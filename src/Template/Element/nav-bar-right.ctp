<ul class="nav navbar-nav navbar-right">
<li><a href="#"></a></li>
<?php if($username): ?>
<li><?= $this->Html->link('CEP',['controller' => 'Cep', 'action' => 'index']);?></li>
<li><?= $this->Html->link('Últimas buscas',['controller' => 'search', 'action' => 'index']);?></li>
<li><?= $this->Html->link(__('Logout'), ['class'=>'button','controller'=>'Users','action'=>'logout'])?></li>
<?php endif; ?>
<?php if(!$username): ?>
<li><?= $this->Html->link('Register',['controller' => 'users', 'action' => 'register']);?></li>
<?php endif; ?>
</ul>