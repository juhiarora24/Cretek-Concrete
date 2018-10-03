<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function _construct(){
            parent::__construct();
            $this->load->helper('url');
            
}
	public function index()
	{
		$this->load->view('homepage');
                
      
        }
        public function add(){
            
             if( isset($_POST['add'])){
                $this->load->model('client_model');
                if($this->client_model->add_client()){
                    $this->session->set_flashdata('sucess','Product Added Sucessfuly');
                    die;
                    redirect('welcome/add', 'refresh');
                    
                } else{
                      $this->session->set_flashdata('error','An error occured');
                      die;
                       redirect('welcome/add', 'refresh');
                        
                    
                }
            
                
            }
            
            $this->load->view('add_Client');
        }
        

            
 public function viewclient(){
            $this->load->model('client_model');
            $this->load->database();
            $this->data['posts'] = $this->client_model->getclient(); 
             $this->load->view('client_List', $this->data);
           
        }  
        
      public function delete_client($id)
    {
               $this->load->database();
        $this->load->model('client_model'); 
        //delete employee record
        $this->db->where('Client_id', $id);
        $this->db->delete('client');
        redirect('welcome/viewclient');
    }
    public function update($id){
        
      $this->load->model('client_model');
      if(isset($_POST['update'])){
            if($this->client_model->updateClient($id)){
                  $this->session->set_flashdata('sucess','Product Added Sucessfuly');
                    die;
                    redirect('welcome/update' . $id, 'refresh');
                    
                } else{
                      $this->session->set_flashdata('error','An error occured');
                      die;
                       redirect('welcome/update' . $id, 'refresh');
                        
                    
                
                
            }
        }
     $clients= $this->client_model->get_all_Client($id);
     
     $data['clients']= $clients;
       $this->load->view('update_client', $data);
                
    }
    
    public function add_project(){
        
         if( isset($_POST['add_project'])){
                $this->load->model('client_model');
                 
              
          
                if($this->client_model->create_project()){
                    $this->session->set_flashdata('sucess','Product Added Sucessfuly');
                    die;
                    redirect('welcome/viewclient', 'refresh');
                    
                } else{
                      $this->session->set_flashdata('error','An error occured');
                      die;
                       redirect('welcome/viewclient', 'refresh');
                        
                    
                }
            
                
            }
         $this->load->model('client_model');
            $this->load->database();
            $this->data['clients'] = $this->client_model->getclient();
            
            $this->load->view('add_project', $this->data);
    }
    
    public function view_project($id){
        
         $this->load->model('client_model');
            $this->load->database(); 
            $this->data['posts'] = $this->client_model->view_project($id); 
             $this->load->view('view_project', $this->data);
    }
    
    public function delete_project($id){
     
         $this->load->database();
        $this->load->model('client_model'); 
        //delete project
        $this->db->where('projectID', $id);
        $this->db->delete('projects');
        redirect('welcome/viewclient');
    
        
    }
    public function update_project($id){
          $this->load->model('client_model');
      if(isset($_POST['update'])){
            if($this->client_model->update_project($id)){
                  $this->session->set_flashdata('sucess','Product Added Sucessfuly');
                    die;
                    redirect('welcome/update' . $id, 'refresh');
                    
                } else{
                      $this->session->set_flashdata('error','An error occured');
                      die;
                       redirect('welcome/update' . $id, 'refresh');
                        
                    
                
                
            }
        }
        
       $clients= $this->client_model->getclient();
     $projects= $this->client_model->get_all_project($id);
     
     $data['projects']= $projects;
     $data['clients']= $clients;
       $this->load->view('update_project', $data);
        
    }
    public  function fetch()
 {
  $this->load->model('client_model');
  echo $this->client_model->fetch_data($this->uri->segment(3));
  $this->load->view('autocomplete_view') ;
 }

}



        
                      
        

                      
