<?php
echo $this->Form->create('User', array('action'=>'login'));
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->submit();
echo $this->Form->end();
?>
