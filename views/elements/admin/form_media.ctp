	<?php
		echo $form->input('title', array('size' => '89'));
		echo $form->input('body', array('cols' => '86', 'rows' => '15'));
		echo $form->input('status_id');
		echo $form->input('published', array('label' => 'Publish on'));
		$label = empty($this->data['Media']['attachmentName']) ? 'Attachment' : 'Attachment (overwrite existing attachment)';
		echo $form->input('attachment', array('type' => 'file', 'label' => $label));
	?>