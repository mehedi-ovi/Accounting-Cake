<?php
	echo '<div class="col-md-12"><div role="alert" class="alert alert-warning">' .
		__d('webzash', 'Please make sure no user is actively using any account before editing or deleting it.') .
		'</div></div>';
?>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-hover table-bordered stripped ">
	<tr>
		<th><?php echo $this->Paginator->sort('label', __d('webzash', 'Label')); ?></th>
		<th><?php echo $this->Paginator->sort('db_datasource', __d('webzash', 'DB Type')); ?></th>
		<th><?php echo $this->Paginator->sort('db_database', __d('webzash', 'DB Name')); ?></th>
		<th><?php echo $this->Paginator->sort('db_host', __d('webzash', 'DB Host')); ?></th>
		<th><?php echo $this->Paginator->sort('db_port', __d('webzash', 'DB Port')); ?></th>
		<th><?php echo $this->Paginator->sort('db_prefix', __d('webzash', 'DB Prefix')); ?></th>
		<th><?php echo __d('webzash', 'Available Actions'); ?></th>
	</tr>
	<?php foreach ($wzaccounts as $wzaccount) { ?>
		<tr>
			<td><?php echo h($wzaccount['Wzaccount']['label']); ?></td>
			<td><?php echo h($this->Generic->wzaccount_dbtype($wzaccount['Wzaccount']['db_datasource'])); ?></td>
			<td><?php echo h($wzaccount['Wzaccount']['db_database']); ?></td>
			<td><?php echo h($wzaccount['Wzaccount']['db_host']); ?></td>
			<td><?php echo h($wzaccount['Wzaccount']['db_port']); ?></td>
			<td><?php echo h($wzaccount['Wzaccount']['db_prefix']); ?></td>
			<td class="td-actions">
				<?php
				if ($wzaccount['Wzaccount']['id'] == $this->Session->read('ActiveAccount.id')) {
					echo $this->Form->label('active', __d('webzash', 'Active'));
				} else { ?>
				
				
					<?php echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')) , array('plugin' => 'webzash', 'controller' => 'wzaccounts', 'action' => 'edit', $wzaccount['Wzaccount']['id']), array('class' => 'no-hover edit', 'escape' => false ,'rel'=>"tooltip" , 'title'=>'Edit')); ?>
				<?php echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')) , array('plugin' => 'webzash', 'controller' => 'wzaccounts', 'action' => 'delete', $wzaccount['Wzaccount']['id']), array('class' => 'no-hover delete','rel'=>"tooltip" , 'title'=>'Delete', 'escape' => false, 'confirm' => __d('webzash', 'Are you sure you want to delete the account config ?'))); ?>
				

			<?php	}





				?>
			</td>
		</tr>
	<?php } ?>
</table>


</div>


</div>

</div>

<div class="paginate">
	<ul class="pagination">
		<?php
			echo $this->Paginator->first(__d('webzash', 'first'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->prev(__d('webzash', 'prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
			echo $this->Paginator->next(__d('webzash', 'next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
			echo $this->Paginator->last(__d('webzash', 'last'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
		?>
	</ul>
</div>
