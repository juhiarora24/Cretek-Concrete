<?php include_once ('navigation.php');?>

  <h2>Our Clients</h2>
                                                                            

</div>     
<?php
include_once('conn.php');
if(isset($_POST['search'])){+
	$q = $_POST['q'];
	$query = mysqli_query($conn,"SELECT * FROM `client` WHERE `first_name` LIKE '%$q%'"); 
//Replace table_name with your table name and `thing_to_search` with the column you want to search
	$count = mysqli_num_rows($query);
	if($count == "0"){
		$output = '<h2>No result found!</h2>';
	}else{
		while($row = mysqli_fetch_array($query)){
                $s = $q;
               
               // Replace column_to_display with the column you want the results from
				$output .= '<h3>'.$s.'</h3><br>';
			}
		}
	}
?>

<html>
	<head>
		<title>Search</title>
	</head>
	<body>
		<form method="POST" action="" style="float:left">
			<input type="text" name="q" placeholder="Search">
			<input type="submit" name="search" value="Search">
		</form>
		<?php echo $output; ?>
	</body>
</html>
 
<div clss="container">
    
    <table class="table table-striped table-hover">
                <thead>
                    <tr class="bg-primary">
                      
                        <th>Client Id</th>
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
                             <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">Delete</button>
                               <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#updateModal">Update</button>
                  <a href="<?php echo base_url() . "welcome/view_project/". $posts[$i]->Client_id; ?>"><button class="btn btn-info btn-sm" >View Project</button></a>
      
                        </td>
                    </tr>
                            <!-- Modal for delete -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Delete</h4>
        </div>
        <div class="modal-body">
          <p>Client will be permantely deleted</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url() . "index.php/welcome/delete_client/". $posts[$i]->Client_id; ?>'">OK</button>
        </div>
      </div>
      
    </div>

  </div>  
                                       <!-- Modal for Update-->
  <div class="modal fade" id="updateModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update</h4>
        </div>
        <div class="modal-body">
          <p>Client information will be updated</p>                                                                         
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" onclick="window.location.href='<?php echo base_url() . "welcome/update/". $posts[$i]->Client_id; ?>'">OK</button>
        </div>
      </div>
      
    </div>

  </div>       
                
                
                
                
                
                
                     <?php } ?>
                </tbody>
    </table>
    
 
</div>




