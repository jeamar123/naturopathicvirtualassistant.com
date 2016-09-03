<?php
/*----------------------------------------------------------------------------------*/
/*-------------------------BEGIN BASIC WIDGETS--------------------------------------*/
// Register Widgets
$args = array();
$args['name']="Footer Menu";
$args['id']="footer-menu";
$args['description']="Display Footer Menu";
$args['before_widget']='<div class="box menu">';
$args['after_widget']='</div>';
$args['before_title']='<h2 class="widgettitle">';
$args['after_title']='</h2>';
register_sidebar($args);
/*---------------------------END BASIC WIDGETS--------------------------------------*/
/*----------------------------------------------------------------------------------*/
?>
