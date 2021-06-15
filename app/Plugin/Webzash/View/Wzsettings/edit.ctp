<div class="card-body">
<div class="email form">
<?php

	echo $this->Form->create('Wzsetting', array(
		'inputDefaults' => array(
			'div' => 'form-group',
			'wrapInput' => false,
			'class' => 'form-control',
		),
	));

	echo $this->Form->input('sitename', array(
		'label' => __d('webzash', 'Sitename'),
		'afterInput' => '<span class="help-block">' . __d('webzash', 'Note : Sitename to use in all user registration related emails.') . '</span>',
	));
	echo $this->Form->input('drcr_toby', array(
		'type' => 'select',
		'options' => $this->Generic->wzsetting_drcr_toby_options(),
		'label' => __d('webzash', 'In entries use'),
		'afterInput' => '<span class="help-block">' . __d('webzash', 'Note : Whether to use Dr/Cr or To/By in entries.') . '</span>',
	));
	echo $this->Form->input('enable_logging', array(
		'type' => 'checkbox',
		'label' => __d('webzash', 'Enable logging'),
		'class' => 'checkbox',
		'afterInput' => '<span class="help-block">' . __d('webzash', 'Note : Log changes to the accounts which can be seen in the account dashboard.') . '</span>',
	));
	echo $this->Form->input('row_count', array(
		'type' => 'select',
		'options' => $this->Generic->wzsetting_row_count_options(),
		'label' => __d('webzash', 'Row count'),
		'afterInput' => '<span class="help-block">' . __d('webzash', 'Note : Number of rows to show at a time.') . '</span>',
	));

	echo $this->Form->input('user_registration', array('type' => 'checkbox', 'label' => __d('webzash', 'User can create accounts'), 'class' => 'checkbox'));
	echo $this->Form->input('admin_verification', array('type' => 'checkbox', 'label' => __d('webzash', 'Administrator approval is required for activating user accounts'), 'class' => 'checkbox'));
	echo $this->Form->input('email_verification', array('type' => 'checkbox', 'label' => __d('webzash', 'Email verification required for activating user accounts'), 'class' => 'checkbox'));

	echo "<fieldset><legend>Outgoing Email</legend>";
	echo $this->Form->input('email_protocol', array('type' => 'select', 'options' => $this->Generic->mail_protocol_options(), 'label' => __d('webzash', 'Protocol')));
	echo $this->Form->input('email_host', array('label' => __d('webzash', 'Hostname')));
	echo $this->Form->input('email_port', array('label' => __d('webzash', 'Port')));
	echo $this->Form->input('email_tls', array('type' => 'checkbox', 'label' => __d('webzash', 'Use TLS'), 'class' => 'checkbox'));
	echo $this->Form->input('email_username', array('label' => __d('webzash', 'Username')));
	echo $this->Form->input('email_password', array('type' => 'password', 'label' => __d('webzash', 'Password')));
	echo $this->Form->input('email_from', array('label' => __d('webzash', 'From')));
	echo "</fieldset>";

	echo '<div class="form-group">';
	echo $this->Form->submit(__d('webzash', 'Submit'), array(
		'div' => false,
		'class' => 'btn btn-primary'
	));
	echo $this->Html->tag('span', '', array('class' => 'link-pad'));
	echo $this->Html->link(__d('webzash', 'Cancel'), array('plugin' => 'webzash', 'controller' => 'admin', 'action' => 'index'), array('class' => 'btn btn-default'));
	echo '</div>';

	echo $this->Form->end();
?>
</div>
</div>
 