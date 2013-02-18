<?php
class appController extends Controller
{
	public $render=array();
	#public $id='';
	#public $role='';
	public function __construct($controller,$action,$id,$role)
	{
		$this->controller=$controller;
		$this->action=$action;
		$this->id=$id;
		$this->role=$role;
		
		parent::__construct();
	}
	
	public function action()
	{	
		require_once 'application/controller/'.$this->controller.'Controller.php';
		$className=$this->controller.'Controller';
		$class=new $className($this->controller,$this->action,$this->id,$this->role);
		
		$func=$this->action;
		$class->$func();
		$class->AllViews();
		$class->view->view();
		
		return;
	}
	
	public function AllViews()
	{
		$this->render=array_merge($this->render,array('title' => 'raspina CmS'));
		$this->set($this->render);
	}
	
	public function setTitle($subject)
	{
		$this->render=array_merge($this->render,array('subject' =>$subject));
		$this->set($this->render);
	}
	
	public function set($array)
	{
		$this->view->baseRender=$array;
	}
}
?>