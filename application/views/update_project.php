
<?php include_once ('navigation.php');?>

<div class="col-md-12">
          <h1> Update Project</h1>
          <form action="" method="POST">
          <div class="col-md-10 col-md-offset-1">
              
               <div class="form-group">
                  <label> Project ID</label>
                  <input class="form-control" id="disabledInput" name="projectID" placeholder="Enter project ID"
                         value="<?php echo $projects->projectID; ?>" disabled>
             
              <div class="form-group">
                  <label> Title</label>
                  <input class="form-control" name="title" placeholder="Enter Title"
                         value="<?php echo $projects->title; ?>">
              </div>
              <div class="form-group">
                  <label> Description</label>
                  <input class="form-control" name="description" placeholder="Enter Description"
                          value="<?php echo $projects->description; ?>">
              </div>
              <div class="form-group">
                    <label for="sel1">Client</label>
                    <select class="form-control" name="Client_id" >
                        <?php for ($i = 0; $i < count($clients); $i++) { ?>
                  
                       <option value="<?php echo $clients[$i]->Client_id; ?>"><?php echo $clients[$i]->first_name; ?></option>
                       
                       
                      
                      <?php } ?>
                    </select>
                  </div>
              
              <button class="btn btn-primary" name="update" >Update Project</button>
          </div>  
      </form>
      </div>
       
       
 


