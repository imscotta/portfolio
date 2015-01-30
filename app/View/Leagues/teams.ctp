

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
      <li><?php echo $this->Html->link(__('Teams'), array('controller' => 'leagues', 'action' => 'stats', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Stats'), array('controller' => 'leagues', 'action' => 'stats', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Fantasy'), array('controller' => 'leagues', 'action' => 'fantasy', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Blog'), array('controller' => 'leagues', 'action' => 'blog', $league['League']['id'])); ?></li>
      <li><?php echo $this->Html->link(__('Social Media'), array('controller' => 'leagues', 'action' => 'socialmedia', $league['League']['id'])); ?></li>
    </ul>

//Team names (with Logo?), allow different views?
<br><br>
<div class="related">
	<?php if (!empty($league['Team'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-hover">
	<?php foreach ($league['Team'] as $team): ?>
		<tr>
			<td><?php echo $team['name']; ?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
</div>
</div>
