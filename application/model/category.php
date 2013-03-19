<?php
class category extends appModel
{
	function __construct()
	{
		$this->validate=array(
			'required'=>'title',
			'number'=>'order_id',
			'stripTag'=>array('title','keyword','parent_id'),
			'escapeString'=>array('title','keyword','parent_id')		
		);		
		parent::__construct();	
	}
}