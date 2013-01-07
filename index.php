<?php
/*
 * Blank template
 * @package Joomla
 * @subpackage Template
 * @copyright (c) Expert Solutions, Inc. All rights reserved
 * @license GNU General Publi License version 2 or later; see LICENSE.txt
 */

// prevent direct access
defined('_JEXEC') or die;

// define variables
$path = $this->baseurl . 'templates/' . $this->template;
$app = JFactory::getApplication();
$doc = JFactory::getDoc();
$ga = $this->params->get('google-analitycs');
$menu = $app->getMenu();

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
	<head>
		<jdoc:include type="head" />
		<link rel="stylesheet" type="text/css" href="<?php echo $path; ?>/css/template.css">
		<script type="text/javascript" src="<?php echo $path; ?>/js/template.js"></script>
		<!--[if lt IE 9]>
	    <link rel="stylesheet" href="<?php echo $path; ?>/css/ie.css">
	    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	    <script type="text/javascript" src="<?php echo $path; ?>/js/selectivizr-min.js"></script>     	
	    <![endif]--> 
	</head>
	<body>
		<div class="geral">
			<div class="header" name="top">
				<header>

				</header>
			</div>
			<div class="content">
				<?php 
				if($menu->getActive() == $menu->getDefault()) : 
					require_once "html/home/default.php";
				else: 
				?>
				<div class="breadcrumbs">
					<!-- incluir modulo de breadcrumbs -->
				</div>
				<div class="sidebar">

				</div>
				<div class="texto">
					<jdoc:incluce type="message" />
					<jdoc:incluce type="content" />
				</div>
				<?php endif; ?>
			</div>
			<div class="footer">
				<footer>

				</footer>
			</div>
		</div>
	</body>
</html>
