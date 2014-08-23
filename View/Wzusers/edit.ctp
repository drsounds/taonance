<?php
/**
 * The MIT License (MIT)
 *
 * Webzash - Easy to use web based double entry accounting software
 *
 * Copyright (c) 2014 Prashant Shah <pshah.mumbai@gmail.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
?>
<div class="user edit form">
	<?php
		echo $this->Form->create('Wzuser');
		echo $this->Form->input('username', array('label' => __d('webzash', 'Username')));
		echo $this->Form->input('fullname', array('label' => __d('webzash', 'Fullname')));
		echo $this->Form->input('email', array('type' => 'email', 'label' => __d('webzash', 'Email')));
		echo $this->Form->input('status', array('type' => 'select', 'options' => $this->Generic->wzuser_status_options(), 'label' => __d('webzash', 'Status')));
		echo $this->Form->input('email_verified', array('type' => 'checkbox', 'label' => __d('webzash', 'Email verified')));
		echo $this->Form->input('admin_verified', array('type' => 'checkbox', 'label' => __d('webzash', 'Administrator approved')));
		echo $this->Form->input('role', array('type' => 'select', 'options' => $this->Generic->wzuser_role_options(), 'label' => __d('webzash', 'Role')));

		/* Accounts selection */
		echo $this->Form->input('wzaccount_ids', array('type' => 'select', 'options' => $wzaccounts, 'label' => __d('webzash', 'Account access'), 'multiple' => true));

		echo $this->Form->end(__d('webzash', 'Submit'));
		echo $this->Html->link(__d('webzash', 'Back'), array('plugin' => 'webzash', 'controller' => 'wzusers', 'action' => 'index'));
	?>
</div>
