<?php


function amar_cmb_metabox(array $ourmetabox){
	
	
	$ourmetabox[]=array(
	
	'title'=>'what color is your favourate',
	'id'=>'color',
	'object_types'=>array('protfolio'),
	'fields'=>array(
	
	array(
	
	'name'=>'type your color',
	'id'=>'mycolor',
	'type'=>'text'
	
	)
	
	)
	
);
	
	return $ourmetabox;
	
	}



add_filter('cmb2_meta_boxes','amar_cmb_metabox');





?>