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

        if($this->category->validate())
        {
            if(!$this->category->data['parent_id'])
                unset($this->category->data['parent_id']);
            $create=array(
                'table'=>'raspina_category',
                'values'=>$this->category->data
            );
                $this->category->create($create);
        }

        $this->category->query->set('SELECT `id`,`title` FROM `raspina_category` ORDER BY `id` DESC');
        $this->category->execute();
        $categories=$this->category->fetchAll();

        $this->category->query->set('SELECT `id` FROM `raspina_category` ORDER BY `id` DESC');
        $this->category->execute();
        $id=$this->category->fetch();

        if (!$id['id'])
            $id['id']=0;
        else
            $id['id']++;       
     
        $this->view->render=array('categories'=>$categories,'id'=>$id['id']);
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
        # 1 begard donbale onaee ke parent id nadaran
        # 2 begard donbale onaee ke parent id daran va parente onha to ghesmate 1 hast
        $this->view->render=array(); 

        $this->category->query->set("SELECT * FROM `raspina_category` ORDER BY `id` DESC");
        $this->category->execute();     
        $categories=$this->category->fetchAll();
        $result=array();
        $parent_id=array();
        $i=0;
        $count=count($categories)-1;
        
        while ((count($categories)-1)>=$i)
        {
            if(!$categories[$i]['parent_id'])
            {
                $result[$categories[$i]['id']]['f']=$categories[$i];
                $parent_id[]=$categories[$i]['id'];
                //unset($categories[$i++]);
                $i++;
            }
            else
            {
                
                $result[$categories[$i]['parent_id']]=$categories[$i];
                $parent_id[]=$categories[$i]['id'];
                //unset($categories[$i++]);
                $i++;          
            }
        }
        // $result[20]['c']='ehsan';   
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
}