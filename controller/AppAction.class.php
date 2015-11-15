<?php
 
class AppAction extends Action{

	public function show(){
		$this->loadModel('Form1');
		$rrs = $this->Form1->find($this->get('keys'));
		$this->rander('show',$rrs); 
	}

	public function add(){	
		$this->loadModel('Form1');
		$this->rander('add',null);

		if(!empty($_POST['submit'])){

			$tit = $_POST['title'];
			$con1 = $_POST['content'];
			$con = str_replace("\n","<br/>",$con1);
			$this->Form1->insert($tit,$con);
			$this->redirect('App','show','add');
		}
	}


	public function view(){
		$this->loadModel('Form1');


		if(!empty($_GET['id'])){
			$id=$_GET['id'];	
			$rrs = $this->Form1->select($id);
			$this->rander('view',$rrs);
		}
		
	}



	public function delete(){

		$this->loadModel('Form1');

		if(!empty($_GET['id'])){
			$id=$_GET['id'];	
			$this->Form1->delete($id);	
			$this->redirect(null,'show','delete');
		}
		
	}


	public function edit(){

		$this->loadModel('Form1');

		if(!empty($_GET['id'] )){
			$id=$_GET['id'];	
			$rrs=$this->Form1->select($id);	
		}


		if(!empty($_POST['submit'])){
			$title = $_POST['title'];
			$content = $_POST['content'];
			$this->Form1->update($id,$title,$content);
			$this->redirect(null,'show','update');
		}	
		$this->rander('edit',$rrs);


	}





}