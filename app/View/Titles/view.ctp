<div class="titles view">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('Edit Title'), array('action' => 'edit', $title['Title']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Delete Title'), array('action' => 'delete', $title['Title']['id']), array(), __('Are you sure you want to delete # %s?', $title['Title']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('List Titles'), array('action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Title'), array('action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
<h2><?php echo __('Title'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($title['Title']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($title['Title']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($title['Title']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titel Name'); ?></dt>
		<dd>
			<?php echo h($title['Title']['titel_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
