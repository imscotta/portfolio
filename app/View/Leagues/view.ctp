

<div class="row" id="teamviewheader">
  <div class="col-md-12">
	//add logo
	// add stats for number of followers, number of recent articles (within 25 hours), and recent new ie yeahoo symbol <br><h1><?php echo $league['League']['name']; ?></h1></div>
</div>
</div>
<div class="row" id="teamviewheader">
  <div class="col-md-12">
    <ul class="nav nav-tabs nav-justified  nav-fixed-top" id="teamviewheadlist">
      <li><?php echo $this->Html->link(__('Home'), array('controller' => 'leagues', 'action' => 'view', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('News'), array('controller' => 'leagues', 'action' => 'news', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Teams'), array('controller' => 'leagues', 'action' => 'teams', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Stats'), array('controller' => 'leagues', 'action' => 'stats', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Fantasy'), array('controller' => 'leagues', 'action' => 'fantasy', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Blog'), array('controller' => 'leagues', 'action' => 'blog', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Social Media'), array('controller' => 'leagues', 'action' => 'socialmedia', $league['League']['id'])); ?></li>
    </ul>
//Add demographic with description like wiki info
//Add league table, top article table for league, featured article(s), top players, top scorers
<div class="leagues view">
<h2><?php echo __('League'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($league['League']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($league['League']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($league['League']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Link 1'); ?></dt>
		<dd>
			<?php echo h($league['League']['social_link_1']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit League'), array('action' => 'edit', $league['League']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete League'), array('action' => 'delete', $league['League']['id']), array(), __('Are you sure you want to delete # %s?', $league['League']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Leagues'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New League'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Teams'); ?></h3>
	<?php if (!empty($league['Team'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Founded'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('History'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($league['Team'] as $team): ?>
		<tr>
			<td><?php echo $team['name']; ?></td>
			<td><?php echo $team['founded']; ?></td>
			<td><?php echo $team['city']; ?></td>
			<td><?php echo $team['country']; ?></td>
			<td><?php echo $team['history']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'teams', 'action' => 'view', $team['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'teams', 'action' => 'edit', $team['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'teams', 'action' => 'delete', $team['id']), array(), __('Are you sure you want to delete # %s?', $team['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
</div>
