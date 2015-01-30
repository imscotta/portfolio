

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
</div>
</div>




<div class="row">
  <div class="col-md-4">
<?php //debug($ftitle); ?>
<div class="actions">
<h3> <center>Top Articles</center></h3>
<table class="table">
<tr><th>Recent</th><th>Popular</th><th>Rating</th></tr>
	<?php 
foreach ($articles as $article): ?>
<tr><td colspan="3"><b><?php echo $this->Html->link(__($article['Article']['title']), array('controller' => 'articles', 'action' => 'view', $article['Article']['id'])); ?></b><br>
<p><font size="1">
<span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span> (Time since added)
<span class="glyphicon glyphicon-certificate" aria-hidden="true"></span> (Calculated Rating)
<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span> (Comments)
</font></p>
</td></tr>
<?php endforeach; ?>
</table>

</table>

</p>
<div class="related">
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

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>


	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('controller' => 'keywords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Players'), array('controller' => 'players', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player'), array('controller' => 'players', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
	</ul>
</div>
</div>
  <div class="col-md-8">
<div class="articles index">
<div class="panel panel-default">
  <div class="panel-heading"><b>Top Story</b></div>
  <div class="panel-body">
<p><font size="36px"><b><?php echo $this->Html->link(__($ftitle), array('controller' => 'articles', 'action' => 'view', $fid)); ?></b></font></p>
<?php echo $this->Html->image('fellaini.jpg', array('alt' => 'CakePHP', 'class'=>'img-responsive img-rounded')); ?>

<blockquote>
  <p><?php echo $fdescription; ?></p>
  <footer><?php echo('Source: ' . $fsource . '<br><br>'); ?></footer>
</blockquote>
    <?php 
//echo $this->Html->link('Link', $flink);
echo('<br>Posted By: Admin');

?>
  </div>
</div>


<p>
Insert photo reel or selection of videos
<br>
<br>
Sort articles by teams and players and hottest topic
<br>
<br> Add shortcuts for filters to sort articles by banter, tekkers and news. Add more for players and teams. <br><br>his could possibly be  second navbar <br><br> Article view should include image, header, source, text description, comments, ratings, thumbs up and down <br><br>

Feature article is set by default, if user is logged in, can be different. Feature article data passed as array to view

</p>


	</div>
</div>

</div>
</div>

<div class="row">
<div class="col-mid-12">




</div>
</div>
