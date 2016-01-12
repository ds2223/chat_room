<div class="comments form">
<?php echo $this->Form->create('Comment'); ?>
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">

			<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Comment.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Comment.id'))); ?></li>
			<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		</ul>
	</div>

	<fieldset>
		<legend><?php echo __('Edit Comment'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('text');
		echo $this->Form->input('user_name');
		echo $this->Form->input('title_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
