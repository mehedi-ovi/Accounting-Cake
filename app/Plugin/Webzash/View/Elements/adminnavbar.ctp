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
<!-- Static navbar -->



<div class="sidebar"  data-active-color="danger">
	
	<div class="sidebar-wrapper">
	
	<div class="logo">
	
	<a target="_blank" class="simple-text" href="http://acc.basikapps.com/">
<img src="http://acc.basikapps.com/webzash/img/pickle-logo.png">

</a>
<p> Accounting</p>


	                 
                    
                                </div>
	
		 
		 
		 
		 <ul class="nav settings-title">
		

  <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-pencil-alt')).'Create account', array('plugin' => 'webzash','controller' => 'wzaccounts', 'action' => 'create'), array('escape' => false)) ?>

                              
 
                   
                </li>

 
  <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-briefcase')).'Manage accounts', array('plugin' => 'webzash','controller' => 'wzaccounts', 'action' => 'index'), array('escape' => false)) ?>

                              
 
                   
                </li>
               				 
                 <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-user')).'Manage users', array('plugin' => 'webzash','controller' => 'wzusers', 'action' => 'index'), array('escape' => false)) ?>

                              
 
                   
                </li>

            <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-settings')).'General settings', array('plugin' => 'webzash','controller' => 'wzsettings', 'action' => 'edit'), array('escape' => false)) ?>

                              
 
                   
                </li>
                    

  <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-help-alt')).'System information', array('plugin' => 'webzash','controller' => 'wzsettings', 'action' => 'sysinfo'), array('escape' => false)) ?>

                              
 
                   
                </li>
				                                          				      
			 
			 
	            </ul>
  
		 
	</div>
	
</div>
