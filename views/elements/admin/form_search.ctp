 <div id="search-record">
<?php echo $form->create(null, array('type' => 'get', 'action' => 'index')); ?>

 <?php 
 $q = isset($this->params['named']['q']) ? $this->params['named']['q'] : null;
 echo $form->input('q', array('label' => '', 'div' => false, 'value' => $q, 'length' => 20));?> 
<?php  echo $form->button('Search', array('type'=>'submit')); ?>
<?php echo $form->end(); ?>
</div>