<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo Configure::read('Webzash.AppName') . ' | ' . $title_for_layout; ?>
	</title>

	<?php
		echo $this->Html->meta('favicon.ico',
			$this->Html->url('/' . 'webzash/img/favicon.ico', true),
			array('type' => 'icon')
		);


echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');


		echo $this->Html->css('Webzash.jquery-ui.css');
		echo $this->Html->css('Webzash.jquery-ui.structure.css');
		echo $this->Html->css('Webzash.jquery-ui.theme.css');
		
		
		
		//echo $this->Html->css('Webzash.custom.css?'.time());

                 //echo $this->Html->css('Webzash.custom.css');





		
		echo $this->Html->css('Webzash.animate.min.css');
		echo $this->Html->css('Webzash.themify-icons.css');
		echo $this->Html->css('Webzash.select2.min.css');
		echo $this->Html->css('Webzash.paper-dashboard.min.css');
        echo $this->Html->css('Webzash.demo.css');
 		echo $this->Html->css('Webzash.bootstrap.min.css');
		echo $this->Html->css('Webzash.paper-dashboard.css');
		echo $this->Html->css('Webzash.style.css');
		echo $this->Html->css('Webzash.custom.css?'.time());



		
		

		

	?>
</head>
<body>



	<div class="wrapper">
	
			<?php echo $this->element('adminnavbar'); ?>	
		

<div class="main-panel">
		 
<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
	
       
      <div class="navbar-wrapper">
            <div class="navbar-minimize">
             
            </div>
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href=""><?php echo $this->Html->link(__d('webzash', 'Administrator Dashboard'), array('plugin' => 'webzash', 'controller' => 'admin', 'action' => 'index')); ?></a>
          </div>  
     <div class="collapse navbar-collapse settings-dropdown-box">
			<?php if ($this->Session->read('Auth.User') && $this->Session->read('Auth.User.role') == 'admin'): ?>
			 
			  <ul class="nav navbar-nav navbar-right">
				<li><span><?php echo $this->Html->link(__d('webzash', 'Accounts'), array('plugin' => 'webzash', 'controller' => 'dashboard', 'action' => 'index'), array('class' => 'btn navbar-btn acc-btn')); ?></span></li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link(__d('webzash', 'Update Profile'), array('plugin' => 'webzash', 'controller' => 'wzusers', 'action' => 'profile')); ?></li>
						<li><?php echo $this->Html->link(__d('webzash', 'Change Password'), array('plugin' => 'webzash', 'controller' => 'wzusers', 'action' => 'changepass')); ?></li>
					</ul>
				</li>

				<li><?php echo $this->Html->link(__d('webzash', 'Logout'), array('plugin' => 'webzash', 'controller' => 'wzusers', 'action' => 'logout')); ?></li>
			</ul>
			<?php endif; ?>
		</div><!--/.nav-collapse -->
	</div><!--/.container-fluid -->
	
</nav>
		 
		 
		 
	 
		<div id="page-title">
			<?php echo "<h2>$title_for_layout</h2>" ?>
		</div>
 
		<div id="content">
		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
       
                        <div class="card">                   
                        
                            <div class="content">
<div class="col-md-12 col-sm-12 col-xs-12 pull-right bttn-box">
			<?php echo $this->element('actionlinks'); ?>
</div>
<div class="clearfix"></div>

			<?php echo $this->Session->flash(); ?>
			<?php if ($this->Session->read('emailError') == true) { echo $this->element('emailerror'); } ?>



			<?php echo $this->fetch('content'); ?>
			
			
 </div>

                        </div>
                    </div>


                </div>
            </div>
        </div>
			
		</div>
	 <footer class="footer">
            <div class="container-fluid">            
                <div class="copyright pull-right">
						Copyright &copy; 2017–<script>document.write(new Date().getFullYear())</script> . Ktech  Solutions. v 1.0.1 			
			  </div>
		 
            </div>
        </footer>
	</div>
	</div>
	
		
<?php 


echo $this->Html->script('Webzash.jquery1.8.js');
echo $this->Html->script('Webzash.bootstrap.js');	
echo $this->Html->script('Webzash.paper-dashboard.js');
echo $this->Html->script('Webzash.bootstrap.min.js');


 echo $this->Html->script('Webzash.select2.min.js');



//echo $this->Html->script('Webzash.jquery-1.11.0.ui.js');

      //  echo $this->Html->script('Webzash.bootstrap-notify.js');
		
  echo $this->Html->script('Webzash.demo.js');

?>
 


	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>
