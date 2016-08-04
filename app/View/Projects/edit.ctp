<div class="projects form">
<?php echo $this->Form->create('Project'); ?>
	<fieldset>
		<legend><?php echo __('Edit Project'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('date');
		echo $this->Form->input('type');
		echo $this->Form->input('description');
		echo $this->Form->input('summary');
		echo $this->Form->input('technologies');
		echo $this->Form->input('title');
		echo $this->Form->input('dates');
		echo $this->Form->input('link');

		echo $this->Form->input('topic1title');
		echo $this->Form->input('topic1desc');
		echo $this->Form->input('topic2title');
		echo $this->Form->input('topic2desc');
		echo $this->Form->input('topic3title');
		echo $this->Form->input('topic3desc');
		echo $this->Form->input('topic4title');
		echo $this->Form->input('topic4desc');
		echo $this->Form->input('topic5title');
		echo $this->Form->input('topic5desc');
	
		
	
		echo $this->Form->input('Skill');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Project.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Project.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Skills'), array('controller' => 'skills', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Skill'), array('controller' => 'skills', 'action' => 'add')); ?> </li>
	</ul>
</div>
