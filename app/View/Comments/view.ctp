<div class="comments view">
<h2><?php echo __('Comment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Text'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['text']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Name'); ?></dt>
		<dd>
			<?php echo h($comment['Comment']['user_name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Comment'), array('action' => 'edit', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Comment'), array('action' => 'delete', $comment['Comment']['id']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Titles'); ?></h3>
	<?php if (!empty($comment['Title'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Titel Name'); ?></th>
		<th><?php echo __('Comment Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($comment['Title'] as $title): ?>
		<tr>
			<td><?php echo $title['id']; ?></td>
			<td><?php echo $title['modified']; ?></td>
			<td><?php echo $title['created']; ?></td>
			<td><?php echo $title['titel_name']; ?></td>
			<td><?php echo $title['comment_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'titles', 'action' => 'view', $title['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'titles', 'action' => 'edit', $title['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'titles', 'action' => 'delete', $title['id']), array(), __('Are you sure you want to delete # %s?', $title['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
