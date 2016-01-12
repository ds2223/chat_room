<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<fieldset>
		<legend><?php echo __('Add Comment'); ?></legend>
		<div class="actions">
			<h3><?php echo __('Actions'); ?></h3>
			<ul style="display:inline-flex">
				<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
			</ul>
		</div>

		<?php
		echo $this->Form->input('text');
		echo $this->Form->input('user_name');
		echo $this->Form->input('title_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
