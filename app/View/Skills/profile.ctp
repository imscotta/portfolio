<div class="skills view">
<h2><?php echo __('Skill'); ?></h2>
	<dl>

		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($skill['Skill']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3><?php echo __('Related Projects'); ?></h3>
	<?php if (!empty($skill['Project'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($skill['Project'] as $project): ?>
		<tr>
			<td><?php echo $project['name']; ?></td>
					<td class="actions">
				<?php echo $this->Html->link(__('Read More'), array('controller' => 'projects', 'action' => 'view', $project['id'])); ?>
						</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
