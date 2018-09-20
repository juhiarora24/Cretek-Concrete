 <?php include_once ('navigation.php');?>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- JQuery Javascript -->
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
   <h3 align="center">Our Clients</h3>   
                 
          <?php for ($i = 0; $i < count($posts); $i++) { ?>
                        <?php  ($i+1); ?>          
<div class="container"style="width:700px;">     
      
    
              
    
     <div class="panel-group" id="posts" style="margin:5px;">  
              <div class="panel panel-default">  
                         
                          <div class="panel-heading"> 
                                    <div class="panel-title">  
                               
                                   <a href="#<?php echo $posts[$i]->Client_id; ?>" data-toggle="collapse" data-parent="#posts"><?php echo $posts[$i]->first_name; ?></a>  
                                   
                                
                                        
                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" style="float:right;margin-top:-6px;">Delete</button>
  </div>
                          
                                            <!-- Modal -->
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
                         
                          </div>  
    
                          <div id="<?php echo $posts[$i]->Client_id; ?>" class="panel-collapse collapse" >  
                               <div class="panel-body">
                        <?php echo "<h4>"."ClientID"."</h4>".$posts[$i]->Client_id; ?>
                        <?php echo "<h4>"."FirstName"."</h4>".$posts[$i]->first_name; ?>
                        <?php echo "<h4>"."LastName"."</h4>".$posts[$i]->last_name; ?>
                        <?php echo "<h4>"."Address"."</h4>". $posts[$i]->address; ?>
                         <?php echo "<h4>"."Mobile"."</h4>". $posts[$i]->mobile; ?>  
                             <?php echo "<h4>"."Email"."</h4>". $posts[$i]->email; ?>       
                      
                  
                                   
                                  
                               </div>  
                          </div>  
                     </div>  
                
                </div>  
           </div> 
            
      </body> 

  <?php }