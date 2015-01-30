<div class="row">
  <div class="col-md-12">

	<h2><?php echo __('Forum'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tbody>
	<?php foreach ($comments as $comment): ?>
	<tr>
		<td>
<b>Comment on <?php echo $this->Html->link($comment['Article']['title'], array('controller' => 'articles', 'action' => 'view', $comment['Article']['id'])); ?></b><br><br>

	<p id="forumcommenttext"><?php echo h($comment['Comment']['comment']); ?>
	<br>
	<?php echo $this->Html->link($comment['User']['username'], array('controller' => 'users', 'action' => 'view', $comment['User']['id']), array('id' => 'forumcommentusername')); ?>
		&nbsp;

	<p id="forumcommentdate"><?php echo h($comment['Comment']['created']); ?>
	</td>
			<td class="forumcommentactions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $comment['Comment']['id'])); ?>
<?php 
	if ($currentId = $comment['Comment']['id']) {
?>

			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $comment['Comment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['id']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>

<?php } elseif ($currentRole = 'admin') { ?>

			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $comment['Comment']['id']), array(), __('Are you sure you want to delete # %s?', $comment['Comment']['id'])); ?>


<?php } ?>
<br>
<br>
//add upvotes and downvotes with images and overall rating

		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rankings'), array('controller' => 'rankings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ranking'), array('controller' => 'rankings', 'action' => 'add')); ?> </li>
	</ul>
</div>

</div>
</div>
