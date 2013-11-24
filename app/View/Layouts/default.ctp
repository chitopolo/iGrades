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
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('bootstrap.min', 'module.front.page.index.min', 'components/library/icons/glyphicons/assets/css/glyphicons_social', 'components/library/icons/glyphicons/assets/css/glyphicons_regular' ,'components/library/icons/glyphicons/assets/css/glyphicons_filetypes', 'jquery.miniColors', 'prettify', 'jquery.miniColors', 'module.front.page.pricing.min.css', 'style' ));
		echo $this->Html->script(array('jquery.min', 'jquery-migrate.min', 'less.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<!-- <div id="container"> -->
		
		<!-- Nav Bar -->   
<div class="navbar navbar-coral navbar-fixed-top">
    <!-- Nav Bar Header -->       
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle " data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar "></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html?lang=en">iGrades</a>
        </div>
        <!-- Nav Bar Collapse -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav main-menu">
                <li class="active"><?php  echo $this->Html->link(__('home'), array('controller' => 'pages', 'action' => 'home')); ?></li>
                <li><?php  echo $this->Html->link(__('Pricing'), array('controller' => 'pages', 'action' => 'prices')); ?></li>
                <!--  -->
                <li><a href="blog.html?lang=en">Blog</a></li>
                <li><?php  echo $this->Html->link(__('Team'), array('controller' => 'pages', 'action' => 'team')); ?></li>
                <li><a href="contact.html?lang=en">Contact Us</a></li>
            </ul>
        </div> 
        <!-- NavBar Collapse -->
        <!-- Nav Bar Right -->          
        <ul class="nav navbar-nav navbar-right right-side">
            <!-- User LogIn Button -->
            <li> 
                <div class="btn-group">
                    <a href="#login-menu" class="btn btn-login" data-toggle="collapse"> <?php  echo $this->Html->link(__('Login'), array('controller' => 'pages', 'action' => 'login')); ?></a>
                    <div class="collapse login" id="login-menu">
                        <form action="">
                            <div>
                                <div class="input-group input-group-sm">
                                    <input type="text" class="form-control" placeholder="Email">
                                    <span class="input-group-addon"><i class="fa fa-check"></i></span>
                                </div>
                                <div class="input-group input-group-sm">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <span class="input-group-addon"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                            <div class="pull-right">
                                <i class="fa fa-refresh fa-spin"></i> <button type="button" class="btn btn-login">Login</button>
                            </div>
                            <div class="center">                          
                                <a href="" class="recover-password">Recover Password <i class="fa fa-lock"></i></a>
                            </div>
                        </form>
                    </div>
                    <?php  echo $this->Html->link(__('Login Teacher'), array('controller' => 'teachers', 'action' => 'view/265')); ?>
                </div>
            </li>
            <li class="cart hidden-xs">
                <ul class="dropdown-menu cart-dropdown">  
                    <li class="center innerAll">Your Shopping Cart</li>
                    <li class="product-list">
                        <a href=""><i class="fa fa-times"></i></a><a href="" class="">Coral Bootstrap T...  <span>&dollar;21.00</span> </a> 
                    </li>
                    <li class="product-list">
                        <a href=""><i class="fa fa-times"></i></a> <a href="" class="">Flat KIT <span>&dollar;21.00</span></a> 
                    </li>
                    <li class="product-list">
                        <a href=""><i class="fa fa-times"></i></a> <a href="" class="">Quick Admin<span>&dollar;21.00</span></a> 
                    </li>
                    <li class="product-list">
                        <a href=""><i class="fa fa-times"></i></a>  <a href="" class="">Admin KIT  <span>&dollar;21.00</span></a> 
                    </li>
                    <li class="cart-button">
                        <button type="button" class="btn btn-primary btn-xs glyphicons  shopping_bag "><i></i>View cart</button>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		
		<div id="footer">
			<?php echo $this->element('footerpage') ?>
		</div>
	
	<?php //echo $this->element('sql_dump'); ?>
</body>
 
</html>
