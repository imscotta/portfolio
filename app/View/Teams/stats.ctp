

<div class="row" id="teamviewheader">
  <div class="col-md-12">
	<h1><?php echo $team['Team']['name']; ?></h1></div>
</div>
</div>
<div class="row" id="teamviewheader">
  <div class="col-md-12">
    <ul class="nav nav-tabs nav-justified  nav-fixed-top" id="teamviewheadlist">
      <li><a href="#" class="active">Home</a></li>
      <li><?php echo $this->Html->link(__('News'), array('controller' => 'teams', 'action' => 'news', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Stats'), array('controller' => 'teams', 'action' => 'stats', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Fantasy'), array('controller' => 'teams', 'action' => 'fantasy', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Blog'), array('controller' => 'teams', 'action' => 'blog', $team['Team']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Social Media'), array('controller' => 'teams', 'action' => 'socialmedia', $team['Team']['id'])); ?></li>
    </ul>
<!--
Insert team tool bar with options:

Team News: opens list of articles
Team Stats: opens list of team stats
Fantasy: opens list of players fantasy stats
Blog: Blog on team, recent updates
Social media: Show latest videos or posts from teams or players
!-->
</div>
</div>


<div class="row" id="teamviewheader">
  <div class="col-md-12">


Insert players stats here
	<h3><?php echo __('Squad'); ?></h3>
	<?php if (!empty($team['Player'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Position'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($team['Player'] as $player): ?>
		<tr>
			<td><?php echo $player['last_name']; ?>, <?php echo $player['first_name']; ?></td>
			<td><?php echo $player['position']; ?></td>
			<td><?php echo $player['dob']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'players', 'action' => 'view', $player['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'players', 'action' => 'edit', $player['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'players', 'action' => 'delete', $player['id']), array(), __('Are you sure you want to delete # %s?', $player['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>



</div>
</div>

