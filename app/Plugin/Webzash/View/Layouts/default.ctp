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
<html class="perfect-scrollbar-on">
<head>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo Configure::read('Webzash.AppName') . ' | ' . $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('favicon.ico',
			$this->Html->url('/' . 'webzash/img/favicon.ico', true),
			array('type' => 'icon')
		);
 



		echo $this->Html->css('Webzash.jquery-ui.css');
		echo $this->Html->css('Webzash.jquery-ui.structure.css');
		echo $this->Html->css('Webzash.jquery-ui.theme.css');
		echo $this->Html->css('Webzash.bootstrap.min.css');
		echo $this->Html->css('Webzash.paper-dashboard.min.css');
		echo $this->Html->css('Webzash.custom.css?'.time());
		echo $this->Html->css('Webzash.themify-icons.css');
		echo $this->Html->css('Webzash.jquery-ui.theme.css');		
        echo $this->Html->css('Webzash.bootstrap.min.css');
        echo $this->Html->css('Webzash.paper-dashboard.css');
		echo $this->Html->css('Webzash.style.css');
        echo $this->Html->css('Webzash.demo.css');
 		echo $this->Html->css('Webzash.select2.min.css');

	

		
      
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');

	?>

<?php 
	echo $this->Html->script('Webzash.popper.js');

	echo $this->Html->script('Webzash.jquery-1.10.2.js');
	
		echo $this->Html->script('Webzash.bootstrap.js');	
	//echo $this->Html->script('Webzash.paper-dashboard.min.js');
	echo $this->Html->script('Webzash.jquery-1.11.0.ui.js');
 	echo $this->Html->script('Webzash.chartist.min.js');
    echo $this->Html->script('Webzash.bootstrap-notify.js');
    echo $this->Html->script('Webzash.select2.min.js');
    echo $this->Html->script('Webzash.demo.js');
	echo $this->Html->script('Webzash.perfect-scrollbar.jquery.min.js');
	echo $this->Html->script('Webzash.nouislider.min.js');
    echo $this->Html->script('Webzash.paper-dashboard.js');

?>

</head>
<body>
	<div class="wrapper">
			<?php echo $this->element('defaultnavbar'); ?>
		
        
       
        <div class="main-panel">     
		
		<nav class="navbar navbar-default" role="navigation">
	 <div class="container-fluid">
		<!--<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
		</div>-->
      
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
            <a class="navbar-brand" href="#pablo"><?php echo $this->Html->link(__d('webzash', 'Account Dashboard'), array('plugin' => 'webzash', 'controller' => 'dashboard', 'action' => 'index')); ?></a>
          </div> 
          
          
        
		<div class="collapse navbar-collapse settings-dropdown-box ">
			<?php if ($this->Session->read('Auth.User')): ?>
			<ul class="nav navbar-nav">

				<li></li>
					</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php if ($this->Session->read('Auth.User.role') == 'admin') : ?>
				
					<li><span><?php echo $this->Html->link(__d('webzash', 'Administer'), array('plugin' => 'webzash', 'controller' => 'admin', 'action' => 'index'), array('class' => 'btn navbar-btn')); ?></span></li>
				
				
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Change Account <b class="caret"></b></a>
					<ul class="dropdown-menu account-changes">
						<li><p><?php echo $this->element('accountinfo'); ?></p></li>
					</ul>
				</li>
				
				<?php endif; ?>
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
			<div class="col-md-6 col-sm-6 col-xs-12 pull-right bttn-box">
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
						Copyright &copy; 2017–<script>document.write(new Date().getFullYear())</script> . Basik. v 1.2.0.1			
			  </div>
		 
            </div>
        </footer>
			
	</div>
	</div>

  <script>
    $(document).ready(function() {

      $sidebar = $('.sidebar');
      $sidebar_img_container = $sidebar.find('.sidebar-background');

      $full_page = $('.full-page');

      $sidebar_responsive = $('body > .navbar-collapse');
      sidebar_mini_active = true;

      window_width = $(window).width();

      fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

      // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
      //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
      //         $('.fixed-plugin .dropdown').addClass('show');
      //     }
      //
      // }

      $('.fixed-plugin a').click(function(event) {
        // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
        if ($(this).hasClass('switch-trigger')) {
          if (event.stopPropagation) {
            event.stopPropagation();
          } else if (window.event) {
            window.event.cancelBubble = true;
          }
        }
      });

      $('.fixed-plugin .active-color span').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-active-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('data-active-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-active-color', new_color);
        }
      });

      $('.fixed-plugin .background-color span').click(function() {
        $(this).siblings().removeClass('active');
        $(this).addClass('active');

        var new_color = $(this).data('color');

        if ($sidebar.length != 0) {
          $sidebar.attr('data-color', new_color);
        }

        if ($full_page.length != 0) {
          $full_page.attr('filter-color', new_color);
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.attr('data-color', new_color);
        }
      });

      $('.fixed-plugin .img-holder').click(function() {
        $full_page_background = $('.full-page-background');

        $(this).parent('li').siblings().removeClass('active');
        $(this).parent('li').addClass('active');


        var new_image = $(this).find("img").attr('src');

        if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          $sidebar_img_container.fadeOut('fast', function() {
            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $sidebar_img_container.fadeIn('fast');
          });
        }

        if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $full_page_background.fadeOut('fast', function() {
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
            $full_page_background.fadeIn('fast');
          });
        }

        if ($('.switch-sidebar-image input:checked').length == 0) {
          var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
          var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

          $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
          $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
        }

        if ($sidebar_responsive.length != 0) {
          $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
        }
      });

      $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function() {
        $full_page_background = $('.full-page-background');

        $input = $(this);

        if ($input.is(':checked')) {
          if ($sidebar_img_container.length != 0) {
            $sidebar_img_container.fadeIn('fast');
            $sidebar.attr('data-image', '#');
          }

          if ($full_page_background.length != 0) {
            $full_page_background.fadeIn('fast');
            $full_page.attr('data-image', '#');
          }

          background_image = true;
        } else {
          if ($sidebar_img_container.length != 0) {
            $sidebar.removeAttr('data-image');
            $sidebar_img_container.fadeOut('fast');
          }

          if ($full_page_background.length != 0) {
            $full_page.removeAttr('data-image', '#');
            $full_page_background.fadeOut('fast');
          }

          background_image = false;
        }
      });


      $('.switch-mini input').on("switchChange.bootstrapSwitch", function() {
        $body = $('body');

        $input = $(this);

        if (paperDashboard.misc.sidebar_mini_active == true) {
          $('body').removeClass('sidebar-mini');
          paperDashboard.misc.sidebar_mini_active = false;

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

        } else {

          $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

          setTimeout(function() {
            $('body').addClass('sidebar-mini');

            paperDashboard.misc.sidebar_mini_active = true;
          }, 300);
        }

        // we simulate the window Resize so the charts will get updated in realtime.
        var simulateWindowResize = setInterval(function() {
          window.dispatchEvent(new Event('resize'));
        }, 180);

        // we stop the simulation of Window Resize after the animations are completed
        setTimeout(function() {
          clearInterval(simulateWindowResize);
        }, 1000);

      });

    });
  </script>
  
  
  <?php /*
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
    
    
    
  </script>
  
  */?>
	
	<?php 
	
	
	
	//echo $this->element('sql_dump'); ?>
    
</body>
</html>
