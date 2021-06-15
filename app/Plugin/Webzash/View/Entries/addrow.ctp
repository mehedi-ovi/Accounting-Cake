<?php

?>
<?php
	// Generate a random id to use in below form array
	$i = time() + rand  (0, time()) + rand  (0, time()) + rand  (0, time());

	echo '<tr class="ajax-add">';

	if ($this->Session->read('Wzsetting.drcr_toby') == 'toby') {
		echo '<td>' . '<div class="form-group-entryitem required"><select id="Entryitem' . $i . 'Dc" class="dc-dropdown form-control" name="data[Entryitem][' . $i . '][dc]"><option selected="selected" value="D">By</option><option value="C">To</option></select></div>' . '</td>';
	} else {
		echo '<td>' . '<div class="form-group-entryitem required"><select id="Entryitem' . $i . 'Dc" class="dc-dropdown form-control" name="data[Entryitem][' . $i . '][dc]"><option selected="selected" value="D">Dr</option><option value="C">Cr</option></select></div>' . '</td>';
	}

	echo '<td>' . '<div class="form-group-entryitem required"><select id="Entryitem' . $i . 'LedgerId" class="ledger-dropdown form-control" name="data[Entryitem][' . $i . '][ledger_id]">';
	foreach ($ledger_options as $row => $data) {
		if ($row >= 0) {
			echo '<option value="' . $row . '">' . $data . '</option>';
		} else {
			echo '<option value="' . $row . '" disabled="disabled">' . $data . '</option>';
		}
	}
	echo '</select></div>' . '</td>';

	echo '<td>' . '<div class="form-group-entryitem"><input type="text" id="Entryitem' . $i . 'DrAmount" class="dr-item form-control" name="data[Entryitem][' . $i . '][dr_amount]" disabled=""></div>' . '</td>';

	echo '<td>' . '<div class="form-group-entryitem"><input type="text" id="Entryitem' . $i . 'CrAmount" class="cr-item form-control" name="data[Entryitem][' . $i . '][cr_amount]" disabled=""></div>' . '</td>';

	echo '<td>';
	echo $this->Html->tag('span', $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-plus')) , array('class' => 'addrow', 'escape' => false));
	//echo $this->Html->tag('span', '', array('class' => 'link-pad'));
	echo $this->Html->tag('span', $this->Html->tag('i', '', array('class' => 'glyphicon glyphicon-trash')), array('class' => 'deleterow', 'escape' => false));
	echo '</td>';
	

	echo '<td class="ledger-balance"><div></div></td>';
	echo '</tr>';
?>
