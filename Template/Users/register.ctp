<?php
echo $this->Form->create('User', array('action' => 'register'));
echo $this->Form->input('email');
echo $this->Form->input('password');
echo $this->Form->input('password_confirm', array('type' => 'password'));
echo $this->Form->submit();
echo $this->Form->end();
?>
