<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class wordshedule extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct() {
        parent::__construct();
		$this->load->database('test');
		$this->load->model('work');
		 $this->load->helper('text');
    }
    
	public function index()
	{
		$this->load->view('workshedule/deshboard');
	}
	public function add(){
		if($this->input->get()){
			var_dump($this->input->get());
			$this->work->add($this->input->get());
		}
		else{
			echo "sorry no post";
			//$this->work->add();
		}
	}
	
	function endtask($taskid){
		if($this->input->post()){
			$this->work->update_endtasktime($taskid);
		}
		else{
			$this->work->update_endtasktime($taskid);
		}
	}
	
	function show($unc){
		if($unc=='uncomplete'){
			$r=$this->work->completework();
			echo "<table>";
				if($r){
					foreach($r as $v){
						echo "<tr><td>$v->id</td><td>".character_limiter($v->work,10)."</td><td>$v->start_time</td>
						<td><a href='".site_url()."wordshedule/endtask/".$v->id."' target=new>Done this work</a></td></tr>";
						//var_dump($v);
					}
				}
			echo "</table>";
		}
		elseif($unc=='complete'){
			echo "all complete";
		}
		else{
			echo 'fail';
		}
		
	}
	
	
	
	public function end(){
		if($this->input->post()){
			//echo json_encode(array("error"=>"no post"));
		}
		else{
			echo json_encode(array("error"=>"no post"));
		}
	}
}

?>