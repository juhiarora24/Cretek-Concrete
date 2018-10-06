<?php include_once ('navigation.php');?>

  <h2>Our Clients</h2>
                                                                            

</div>     
 
<div clss="container">
    
    <table class="table table-striped table-hover ">
                <thead class="thead-light">
                    <tr class="bg-primary">
                      
                        <th>Client id</th>
                        <th>First Name</th>
                        <th>Lastname</th>
                        <th>Address</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
    
  <?php for ($i = 0; $i < count($posts); $i++) { ?>
                    <tr>
                        <td><?php echo $posts[$i]->Client_id; ?></td>
                        
                        <td><?php echo $posts[$i]->first_name; ?></td>
                        <td><?php echo $posts[$i]->last_name; ?></td>
                        <td><?php echo $posts[$i]->address; ?></td>
                        <td><?php echo $posts[$i]->mobile; ?></td>
                        <td><?php echo $posts[$i]->email; ?></td>
                        <td>
                            <a href="<?php echo base_url() . "welcome/delete_client/". $posts[$i]->Client_id; ?>"><button class="btn btn-sm btn-danger">Delete</button></a>
                            <a href="<?php echo base_url() . "welcome/update/". $posts[$i]->Client_id; ?>"><button class="btn btn-sm btn-primary">Update</button></a>
                            <a href="<?php echo base_url() . "welcome/view_project/". $posts[$i]->Client_id; ?>"><button class="btn btn-sm btn-primary">View Project</button></a>
                        </td>
                    </tr>
                     <?php } ?>
                </tbody>
    </table>
    
 
</div>




