<?php
class client_model extends CI_Model{
    
public function add_client(){
 
    $data= array(
         'Client_id'=>$this->input->post('Client_id'),
           'first_name'=>$this->input->post('first_name'),
          'last_name'=>$this->input->post('last_name'),
          'address'=>$this->input->post('address'),
          'mobile'=>$this->input->post('mobile'),
          'email'=>$this->input->post('email'),
            );
        $this->db->insert('client',$data);
        $id = $this->db->insert_id();
        return $id;
}
public function getclient(){
  $this->db->select("Client_id,first_name,last_name,address,mobile,email"); 
  $this->db->from('client');
  $query = $this->db->get();
  return $query->result();
 }
public function get_all_Client($id){
    $this->db->select('*');
     $this->db->where('Client_id' , $id);
    $this->db->from('client');
    $query= $this->db->get();
    return $query->row();
    
 }

public function updateClient($id){
    
    $data= array(
         'Client_id'=>$this->input->post('Client_id'),
           'first_name'=>$this->input->post('first_name'),
          'last_name'=>$this->input->post('last_name'),
          'address'=>$this->input->post('address'),
          'mobile'=>$this->input->post('mobile'),
          'email'=>$this->input->post('email'),
            );
    
            $this->db->where('Client_id', $id);
            $this->db->update('client' , $data);
            return $id ;
    
    
}
public function create_project(){
    
     $data= array(
         'title'=>$this->input->post('title'),
           'description'=>$this->input->post('description'),
          'Client_id'=>$this->input->post('Client_id'),
            );
        $this->db->insert('projects',$data);
        $id = $this->db->insert_id();
   
  return $id;
        


 }
 
 public function view_project($id){
   
    $this->db->select("*"); 
  $this->db->from('projects');
$this->db->where('Client_id' ,$id);
  //$this->db->join('client', 'client.Client_id = projects.Client_id');
  $query = $this->db->get();
  return $query->result();
 }
 
 public function get_all_project($id){
         $this->db->select('*');
     $this->db->where('projectID' , $id);
    $this->db->from('projects');
    $query= $this->db->get();
    return $query->row();
    
 }
 public function update_project($id){
        
     $data= array(
         'title'=>$this->input->post('title'),
           'description'=>$this->input->post('description'),
          'Client_id'=>$this->input->post('Client_id'),
            );
    
            $this->db->where('projectID', $id);
            $this->db->update('projects' , $data);
            return $id ;
     
 }
 public function fetch_data($query)
 {
  $this->db->like('first_name', $query);
  $query = $this->db->get('client');
  if($query->num_rows() > 0)
  {
   foreach($query->result_array() as $row)
   {
    $output[] = array(
     'name'  => $row["first_name"],

    );
   }
   echo json_encode($output);
  }
 }


}




