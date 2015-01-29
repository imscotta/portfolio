<div class="row">
  <div class="col-md-12">
<ol class="breadcrumb" id="articlecrumbs">
  <li>Related Topics</li>
  <li><?php echo $this->Html->link(__('Manchester United'), array('controller' => 'teams', 'action' => 'view', '54c1ce8a-6dd8-4025-9db1-8fb1c0aa087a')); ?></li>

	<?php foreach ($breadcrumbs as $breadcrumb): ?>
  <?php	echo("<li>" . $breadcrumb . "</li>"); ?>
<?php endforeach; ?>

</ol>
</div>
</div>
<div class="row">
  <div class="col-md-2">
</div>
  <div class="col-md-8">

<p id="articleviewheader"><b><?php echo $this->Html->link(__($ftitle), array('controller' => 'articles', 'action' => 'view', $fid)); ?></b></p>
<p id="articleviewcreated"><i>Posted on <?php echo $fcreated; ?></i></p>
</div>
  <div class="col-md-2">

</div>
</div>

<div class="row">
  <div class="col-md-2">

<table id="ad">
<tr><td>YOUR AD HERE</td></tr>
</table>

</div>
  <div class="col-md-8">

<?php echo $this->Html->image('fellaini.jpg', array('alt' => 'CakePHP', 'class'=>'img-responsive img-rounded')); ?>


</div>
  <div class="col-md-2">

<table id="ad">
<tr><td>YOUR AD HERE</td></tr>
</table>


</div>
</div>

<div class="row">
  <div class="col-md-2">
</div>
  <div class="col-md-8">
<div class="articles view">

<?php 
echo '<h4>';
echo $fsource;
echo '</h4></p><br><br>';
?>
<p>Article link: </p>
<i>
<a href="<?php echo $flink; ?>"><?php echo $flink; ?></a>
</i>
<p>Where to put insert article stats????</p>

<?php
echo $fdescription; ?>


<p>
<?php
echo $fstory; ?>
</p>

<blockquote>
  <p><?php echo $fdescription; ?></p>
  <footer><?php echo('Source: ' . $fsource . '<br><br>'); ?></footer>
</blockquote>
<h2><?php echo __('Article'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($article['Article']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($article['Article']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link'); ?></dt>
		<dd>
			<?php echo h($article['Article']['link']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($article['Article']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($article['Article']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<p> Include related topics ie players, teams and keywords</p>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Article'), array('action' => 'edit', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Article'), array('action' => 'delete', $article['Article']['id']), array(), __('Are you sure you want to delete # %s?', $article['Article']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Comments'); ?></h3>
	<?php if (!empty($article['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0" class="table table-hover">
	<?php foreach ($article['Comment'] as $comment): ?>
		<tr>
			<td><p id="comment"><?php echo $comment['comment']; ?><p><br>

			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['user_id']; ?></td>
			<td><?php echo $comment['article_id']; ?></td>



</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), array(), __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Keywords'); ?></h3>
	<?php if (!empty($article['Keyword'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Keyword'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($article['Keyword'] as $keyword): ?>
		<tr>
			<td><?php echo $keyword['id']; ?></td>
			<td><?php echo $keyword['keyword']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'keywords', 'action' => 'view', $keyword['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'keywords', 'action' => 'edit', $keyword['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'keywords', 'action' => 'delete', $keyword['id']), array(), __('Are you sure you want to delete # %s?', $keyword['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Keyword'), array('controller' => 'keywords', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Players'); ?></h3>
	<?php if (!empty($article['Player'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Dob'); ?></th>
		<th><?php echo __('Social Link 1'); ?></th>
		<th><?php echo __('Social Link 2'); ?></th>
		<th><?php echo __('Social Link 3'); ?></th>
		<th><?php echo __('Team Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($article['Player'] as $player): ?>
		<tr>
			<td><?php echo $player['id']; ?></td>
			<td><?php echo $player['first_name']; ?></td>
			<td><?php echo $player['last_name']; ?></td>
			<td><?php echo $player['dob']; ?></td>
			<td><?php echo $player['social_link_1']; ?></td>
			<td><?php echo $player['social_link_2']; ?></td>
			<td><?php echo $player['social_link_3']; ?></td>
			<td><?php echo $player['team_id']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Teams'); ?></h3>
	<?php if (!empty($article['Team'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Founded'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th><?php echo __('Country'); ?></th>
		<th><?php echo __('History'); ?></th>
		<th><?php echo __('League Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($article['Team'] as $team): ?>
		<tr>
			<td><?php echo $team['id']; ?></td>
			<td><?php echo $team['name']; ?></td>
			<td><?php echo $team['founded']; ?></td>
			<td><?php echo $team['city']; ?></td>
			<td><?php echo $team['country']; ?></td>
			<td><?php echo $team['history']; ?></td>
			<td><?php echo $team['league_id']; ?></td>
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

</div
  <div class="col-md-2">

</div>
</div>
<div class="row">
  <div class="col-md-12">
Echo keywords
</div>
</div>
