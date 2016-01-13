<div class="titles form">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('List Titles'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<fieldset>
		<legend><?php echo __('Add Title'); ?></legend>
		<?php
		echo $this->Form->input('titel_name');
		?>
		<?php echo $this->Form->create('Title'); ?>
		<?php echo $this->Form->end(__('Submit')); ?>
	</fieldset>

</div>

