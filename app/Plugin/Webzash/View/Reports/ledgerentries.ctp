
<script type="text/javascript">
$(document).ready(function() {

	$("#accordion").accordion({
		collapsible: true,
		<?php
			if ($options == false) {
				echo 'active: false';
			}
		?>
	});

	/* Calculate date range in javascript */
	startDate = new Date(<?php echo strtotime(Configure::read('Account.startdate')) * 1000; ?>  + (new Date().getTimezoneOffset() * 60 * 1000));
	endDate = new Date(<?php echo strtotime(Configure::read('Account.enddate')) * 1000; ?>  + (new Date().getTimezoneOffset() * 60 * 1000));

	/* Setup jQuery datepicker ui */
	$('#ReportStartdate').datepicker({
		minDate: startDate,
		maxDate: endDate,
		dateFormat: '<?php echo Configure::read('Account.dateformatJS'); ?>',
		numberOfMonths: 1,
		onClose: function(selectedDate) {
			if (selectedDate) {
				$("#ReportEnddate").datepicker("option", "minDate", selectedDate);
			} else {
				$("#ReportEnddate").datepicker("option", "minDate", startDate);
			}
		}
	});
	$('#ReportEnddate').datepicker({
		minDate: startDate,
		maxDate: endDate,
		dateFormat: '<?php echo Configure::read('Account.dateformatJS'); ?>',
		numberOfMonths: 1,
		onClose: function(selectedDate) {
			if (selectedDate) {
				$("#ReportStartdate").datepicker("option", "maxDate", selectedDate);
			} else {
				$("#ReportStartdate").datepicker("option", "maxDate", endDate);
			}
		}
	});

	$("#ReportLedgerId").select2({width:'100%'});
});
</script>

<div class="ledgerentries form">
	<?php
		echo $this->Form->create('Report', array(
			'inputDefaults' => array(
				'div' => 'form-group',
				'wrapInput' => false,
				'class' => 'form-control',
			),
		));

		echo $this->Form->input('ledger_id', array('type' => 'select', 'options' => $ledgers, 'escape' => false, 'disabled' => $ledgers_disabled, 'label' => __d('webzash', 'Ledger account')));

		echo '<div id="accordion">';
		echo '<h3>Options</h3>';
		echo '<div>';

		echo $this->Form->input('startdate', array('label' => __d('webzash', 'Start date')));
		echo $this->Form->input('enddate', array('label' => __d('webzash', 'End date')));
		echo '</div>';
		echo '</div>';
		echo '<br />';

		echo '<div class="form-group">';
		echo $this->Form->submit(__d('webzash', 'Submit'), array(
			'div' => false,
			'class' => 'btn btn-primary'
		));
		echo $this->Html->tag('span', '', array('class' => 'link-pad'));
		echo $this->Html->link(__d('webzash', 'Clear'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'ledgerentries'), array('class' => 'btn btn-default'));
		echo '</div>';

		echo $this->Form->end();
	?>
</div>

<?php if ($showEntries) { ?>

<?php
	/* Remove the page:x string from the current url */
	$cur_url = $this->params->url;
	$cur_url = preg_replace("/\/page:\d/", "", $cur_url);

	echo '<div class="btn-group" role="group">';

	echo $this->Html->link(
		__d('webzash', 'DOWNLOAD .CSV'),
		'/' . $cur_url . '/downloadcsv:true',
		array('class' => 'btn btn-default btn-sm')
	);

	echo $this->Html->link(
		__d('webzash', 'DOWNLOAD .XLS'),
		'/' . $cur_url . '/downloadxls:true',
		array('class' => 'btn btn-default btn-sm')
	);

	echo $this->Html->link(__d('webzash', 'PRINT'), '',
		array(
			'class' => 'btn btn-default btn-sm',
			'onClick' => "window.open('" . $this->Html->url('/' . $cur_url . '/print:true') . "', 'windowname','toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,copyhistory=no,width=1000,height=600'); return false;"
		)
	);

	echo '</div>';
	echo '<br /><br />';
?>

<div class="subtitle">
	<?php echo $subtitle; ?>
</div>

	<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-hover table-bordered stripped ">
		<tr>
			<td class="td-fixwidth-summary"><?php echo __d('webzash', 'Bank or cash account'); ?></td>
			<td>
				<?php
					if ($ledger['Ledger']['type'] == 1) {
						echo __d('webzash', 'Yes');
					} else {
						echo __d('webzash', 'No');
					}
				?>
			</td>
		</tr>
		<tr>
			<td class="td-fixwidth-summary"><?php echo __d('webzash', 'Notes'); ?></td>
			<td><?php echo h($ledger['Ledger']['notes']); ?></td>
		</tr>
	</table>


</div>


</div>
</div>
 

	<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-hover table-bordered stripped ">
		<tr>
			<td class="td-fixwidth-summary"><?php echo $opening_title; ?></td>
			<td><?php echo toCurrency($op['dc'], $op['amount']); ?></td>
		</tr>
		<tr>
			<td class="td-fixwidth-summary"><?php echo $closing_title; ?></td>
			<td><?php echo toCurrency($cl['dc'], $cl['amount']); ?></td>
		</tr>
	</table>


</div>


</div>
	 
</div>

	<div class="row">
<div class="col-md-12">
<div class="table-responsive">
<table class="table table-hover table-bordered stripped ">

	<tr>
	<th><?php echo $this->Paginator->sort('date', __d('webzash', 'Date')); ?></th>
	<th><?php echo $this->Paginator->sort('number', __d('webzash', 'Number')); ?></th>
	<th><?php echo __d('webzash', 'Ledger'); ?></th>
	<th><?php echo $this->Paginator->sort('entrytype_id', __d('webzash', 'Type')); ?></th>
	<th><?php echo $this->Paginator->sort('tag_id', __d('webzash', 'Tag')); ?></th>
	<th><?php echo __d('webzash', 'Debit Amount'); ?><?php echo ' (' . Configure::read('Account.currency_symbol') . ')'; ?></th>
	<th><?php echo __d('webzash', 'Credit Amount'); ?><?php echo ' (' . Configure::read('Account.currency_symbol') . ')'; ?></th>
	<th><?php echo __d('webzash', 'Available Actions'); ?></th>
	</tr>

	<?php
	/* Show the entries table */
	foreach ($entries as $entry) {
		$entryTypeName = Configure::read('Account.ET.' . $entry['Entry']['entrytype_id'] . '.name');
		$entryTypeLabel = Configure::read('Account.ET.' . $entry['Entry']['entrytype_id'] . '.label');
		echo '<tr>';
		echo '<td>' . dateFromSql($entry['Entry']['date']) . '</td>';
		echo '<td>' . h(toEntryNumber($entry['Entry']['number'], $entry['Entry']['entrytype_id'])) . '</td>';
		echo '<td>' . h($this->Generic->entryLedgers($entry['Entry']['id'])) . '</td>';
		echo '<td>' . h($entryTypeName) . '</td>';
		echo '<td>' . $this->Generic->showTag($entry['Entry']['tag_id'])  . '</td>';

		if ($entry['Entryitem']['dc'] == 'D') {
			echo '<td>' . toCurrency('D', $entry['Entryitem']['amount']) . '</td>';
			echo '<td>' . '</td>';
		} else if ($entry['Entryitem']['dc'] == 'C') {
			echo '<td>' . '</td>';
			echo '<td>' . toCurrency('C', $entry['Entryitem']['amount']) . '</td>';
		} else {
			echo '<td>' . __d('webzash', 'ERROR') . '</td>';
			echo '<td>' . __d('webzash', 'ERROR') . '</td>';
		}

		echo '<td class="td-actions">';



				echo $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-eye')) , array('plugin' => 'webzash', 'controller' => 'entries',
				 'action' => 'view', h($entryTypeLabel), $entry['Entry']['id']), 
				 array( 'rel'=>"tooltip" , 'title'=>'View' ,
				 'class' => 'no-hover view', 'escape' => false));
				
				echo $this->Html->link($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-edit')),
				 array('plugin' => 'webzash', 'controller' => 'entries', 'action' => 'edit',
				  h($entryTypeLabel), $entry['Entry']['id']), array( 'rel'=>"tooltip" , 'title'=>'Edit' , 'class' => 'no-hover edit', 'escape' => false));

echo $this->Form->postLink($this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')) , array('plugin' => 'webzash',
 'controller' => 'entries', 'action' => 'delete', h($entryTypeLabel), $entry['Entry']['id']),
  array( 'rel'=>"tooltip" , 'title'=>'Delete' , 'class' => 'no-hover delete', 'escape' => false, 'confirm' => __d('webzash', 'Are you sure you want to delete the entry ?')));


		echo '</td>';
		echo '</tr>';
	}
	?>
		</table>


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
    </div>
    </div>
<?php }
