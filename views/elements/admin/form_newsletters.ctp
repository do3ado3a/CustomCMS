	<?php
		echo $form->input('title', array('label' => 'Subject', 'size' => '89'));
		echo $form->input('body', array('cols' => '86', 'rows' => '15'));
		echo $form->input('status_id');
		echo $form->input('published');
	?>