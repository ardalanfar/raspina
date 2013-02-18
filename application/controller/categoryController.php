<?php
class categoryController extends appController
{
	public function __construct($controller,$action,$id,$role)
	{
		parent::__construct($controller,$action,$id,$role);
	}
	
	public function index()
	{
		$this->view->render=array();	
	}
	
	public function add()
	{
		$this->setTitle('add');	
		$this->view->render=array();	
		if($this->category->validate())
		{
			$create=array(
				'table'=>'raspina_category',
				'values'=>$this->category->data
			);
			$this->category->create($create);
		}
		$this->category->query->set("SELECT `id`,`title` FROM `raspina_category` ORDER BY `id` DESC");
		$this->category->execute();
		$this->view->render=array('categories'=>$this->category->fetchAll());
	}
	
	public function edit()
	{
		$this->view->render=array();
		$this->setTitle('edit');	
		if($this->category->validate())
		{
			$edit = array(
				'table'=>'raspina_category',
				'update'=>$this->category->data,
				'where'=>array('id', $this->id)
				);
			$this->category->edit($edit);
		}		
		$this->category->query->set("SELECT `id`,`title` FROM `raspina_category` ORDER BY `id` DESC");
		$this->category->execute();
		$categories=$this->category->fetchAll();
		$this->category->query->set("SELECT * FROM `raspina_category` WHERE(`id`='$this->id')");
		$this->category->execute();		
		$information=$this->category->fetch();
		
		$this->view->render=array('categories'=>$categories,'information'=>$information);			
	}
	
	public function delete()
	{
		$this->view->render=array();
		$this->setTitle('delete');
		$delete = array(
			'table'=>'raspina_category',
			'where'=>array('id', $this->id)
			);
		$this->category->query->delete($delete);
		$this->category->execute();
		$this->view->render=array('message'=>'delete');				
	}
	
	public function view()
	{
		
	}
}