<?php include_once ('navigation.php');?>
<div class="panel panel-success">
    <div class="panel-heading">Projects</div>
       <div class="panel-body">

 
  
                                                                            

</div>     
 
<div>
    
    <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>Project id</th>
                        <th>Title</th>
                         <th>Description</th>
                         <th>Client id</th>
                         <th>Actions</th>
                        
                        
                        
                      
                       
                    </tr>
                </thead>
                <tbody>
    
  <?php for ($i = 0; $i < count($posts); $i++) { ?>
                    <tr>
                        <td><?php echo $posts[$i]->projectID; ?></td>
                        
                        <td><?php echo $posts[$i]->title; ?></td>
                        <td><?php echo $posts[$i]->description; ?></td>
                        <td><?php echo $posts[$i]->Client_id; ?></td>
                        
                        <td>
                            <a href="<?php echo base_url() . "welcome/delete_project/". $posts[$i]->projectID; ?>"><button class="btn btn-sm btn-danger">Delete</button></a>
                            <a href="<?php echo base_url() . "welcome/update_project/". $posts[$i]->projectID; ?>"><button class="btn btn-sm btn-primary">Update</button></a>
                           
                        </td>
                    </tr>
                     <?php } ?>
                </tbody>
    </table>
   
    
</div>




