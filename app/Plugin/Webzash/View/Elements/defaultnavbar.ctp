
<!-- Static navbar -->



<div class="sidebar"  data-active-color="danger">
	
	<div class="sidebar-wrapper">
	
	<div class="logo">
	
	<a target="_blank" class="simple-text" href="http://acc.basikapps.com">
	<img src="http://acc.basikapps.com/webzash/img/pickle-logo.png"> </a>
<p> Accounting</p>
	                 
                    
 </div>
	
   
        <ul class="nav settings-title">
          <li>
           <?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-briefcase')).'Accounts', array('plugin' => 'webzash','controller' => 'accounts', 'action' => 'show'), array('escape' => false)) ?>

          </li>
		  
	   <li>	           
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-envelope')).'Entries', array('plugin' => 'webzash','controller' => 'entries', 'action' => 'index'), array('escape' => false)) ?>

</li>



          <li>
            <a data-toggle="collapse" href="#pagesExamples">
             <i class="ti-files"></i>             
                Reports
                <b class="caret"></b>             
            </a>
            <div class="collapse " id="pagesExamples">
              <ul class="nav">
                <li>
                 <?php echo  $this->Html->link(__d('webzash', 'Balance Sheet'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'balancesheet')); ?>
                </li>
				
				<li><?php echo  $this->Html->link(__d('webzash', 'Profit & Loss'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'profitloss')); ?></li>
<li><?php echo $this->Html->link(__d('webzash', 'Trial Balance'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'trialbalance')); ?></li>
<li><?php echo  $this->Html->link(__d('webzash', 'Ledger Statement'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'ledgerstatement')); ?></li>
<li><?php echo  $this->Html->link(__d('webzash', 'Ledger Entries'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'ledgerentries')); ?></li>
<li><?php echo  $this->Html->link(__d('webzash', 'Reconciliation'), array('plugin' => 'webzash', 'controller' => 'reports', 'action' => 'reconciliation')); ?></li>

              </ul>
            </div>
          </li>
		  
		  
 <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-search')).'Search', array('plugin' => 'webzash','controller' => 'search', 'action' => 'index'), array('escape' => false)) ?>

                  
                </li>


 <li> 
         
<?= $this->Html->link($this->Html->tag('i', '', array('class' => 'ti-settings')).'Settings', array('plugin' => 'webzash','controller' => 'settings', 'action' => 'index'), array('escape' => false)) ?>

                              
 
                   
                </li>
		  
        </ul>
         
	</div>
	
</div>
