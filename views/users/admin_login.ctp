<?php
    if ($session->check('Message.auth')) $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('email', array('value' => 'demo@demo.com'));
    echo $form->input('password', array('value' => 'demo'));
    echo $form->end('Login');
?>
