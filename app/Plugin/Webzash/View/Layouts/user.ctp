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

		echo $this->Html->script('Webzash.jquery-1.10.2.js');

		echo $this->Html->css('Webzash.animate.min.css');
		echo $this->Html->css('Webzash.themify-icons.css');
		echo $this->Html->css('Webzash.jquery-ui.theme.css');
		echo $this->Html->script('Webzash.paper-dashboard.js');
       	        echo $this->Html->script('Webzash.chartist.min.js');
                echo $this->Html->script('Webzash.bootstrap-notify.js');
                echo $this->Html->css('Webzash.bootstrap.min.css');
                echo $this->Html->css('Webzash.paper-dashboard.css');
		echo $this->Html->css('Webzash.style.css');
		echo $this->Html->script('Webzash.bootstrap.min.js');

                echo $this->Html->css('http://fonts.googleapis.com/css?family=Oswald:200,300,400');
		

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>
</head>
<body>

<section class="sign-bg">
	<div id="container">
		<div id="header">
			<?php echo $this->element('usernavbar'); ?>
		</div>
		
	 		
		<div id="content">			 
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
       
                        <div class="sign-in"> 
                         <div class="logo-out text-center"><a href="http://acc.basikapps.com/">
                          <img src="http://acc.basikapps.com/webzash/img/pickle-logo.png"></a>
                         </div> 

 
                      <h2>Accounting</h2>              
                        
                            <div class="content">
			<?php echo $this->element('actionlinks'); ?>

			<?php echo $this->Session->flash(); ?>
			<?php if ($this->Session->read('emailError') == true) { echo $this->element('emailerror'); } ?>

			<?php echo $this->fetch('content'); ?>
		</div>
<div class="row powered">
<div class="col-md-12">

			

					Copyright &copy; 2017–<script>document.write(new Date().getFullYear())</script> . Ktech  Solutions. v 1.0.1			
			
		 
            </div>
</div>
</div>
		            </div>


              


               
    
        </div>
		</div>


 
		</div>


		
		</section>
		
		 
	
	<?php // echo $this->element('sql_dump'); ?>
	
	
</body>
</html>
