<div class="row">
  <div class="col-md-12">


<div class="keywords view">
<b>Topic:</b>
<h1><?php echo h($keyword['Keyword']['keyword']); ?></h1>


//related articles, allow comments
//how should layout look
//comment directly on page
//How many articles to show
//Scroll articles and scroll comments?
//Highlighted article
//Top articles
//Comments below


</div>

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
foreach ($keyword['Article'] as $article): ?>
<tr><td colspan="3"><b><?php echo $this->Html->link(__($article['title']), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?></b><br>
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


</div>
</div>	</div>

<div class="row">
   <div class="col-md-4">

<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Keyword'), array('action' => 'edit', $keyword['Keyword']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Keyword'), array('action' => 'delete', $keyword['Keyword']['id']), array(), __('Are you sure you want to delete # %s?', $keyword['Keyword']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Keywords'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Keyword'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Articles'), array('controller' => 'articles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Articles'); ?></h3>
	<?php if (!empty($keyword['Article'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Link'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($keyword['Article'] as $article): ?>
		<tr>
			<td><?php echo $article['title']; ?></td>
			<td><?php echo $article['link']; ?></td>
			<td><?php echo $article['rating']; ?></td>
			<td><?php echo $article['created']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'articles', 'action' => 'view', $article['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'articles', 'action' => 'edit', $article['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'articles', 'action' => 'delete', $article['id']), array(), __('Are you sure you want to delete # %s?', $article['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Article'), array('controller' => 'articles', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
</div>
   <div class="col-md-8">

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
</div>





















