<div class="comments index">
	<div class="actions">
		<h3><?php echo __('Actions'); ?></h3>
		<ul style="display:inline-flex">
			<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?></li>
			<li><?php echo $this->Html->link(__('List Titles'), array('controller' => 'titles', 'action' => 'index')); ?> </li>
			<li><?php echo $this->Html->link(__('New Title'), array('controller' => 'titles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
	<h2><?php echo __('Comments'); ?></h2>
	<table cellpadding="2" cellspacing="2">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('title_id'); ?></th>
				<th><?php echo $this->Paginator->sort('user_name'); ?></th>
				<th><?php echo $this->Paginator->sort('modified'); ?></th>
				<th><?php echo $this->Paginator->sort('created'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
		<?php foreach ($comments as $comment): ?>
		<tr>
			<td><?php echo h($comment['Comment']['id']); ?>&nbsp;</td>
			<td>
				<?php echo $this->Html->link($comment['Title']['titel_name'], array('controller' => 'titles', 'action' => 'view', $comment['Title']['id'])); ?>
			</td>
			<td><?php echo h($comment['Comment']['user_name']); ?>&nbsp;</td>
			<td><?php echo h($comment['Comment']['modified']); ?>&nbsp;</td>
			<td><?php echo h($comment['Comment']['created']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $comment['Comment']['id']))); ?>
			</td>
		</tr>
		<td><?php echo "" ?>&nbsp;</td>
		<td colspan="5"><?php echo h($comment['Comment']['text']); ?>&nbsp;</td>
		</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>

</div>
