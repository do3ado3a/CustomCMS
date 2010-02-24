	<?php
		echo $form->input('title', array('size' => '89'));
		echo $form->input('body', array('cols' => '86', 'rows' => '15'));
		echo $form->input('status_id');
		echo $form->input('published');
		echo $form->input('tags', array('size' => '70'));
	?>
	<span class="note">Separate tags with commas</span>