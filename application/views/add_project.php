
<?php include_once ('navigation.php');?>
<div class="panel panel-success">
      <div class="panel-heading">Enter Client Detils</div>
       <div class="panel-body">
<div class="col-md-12">
          <h1> Add Project</h1>
          <form action="" method="POST">
          <div class="col-md-10 col-md-offset-1">
             
              <div class="form-group">
                  <label>Title</label>
                  <input class="form-control" name="title" placeholder="Enter First name">
              </div>
              <div class="form-group">
                  <label> Description</label>
                  <input class="form-control" name="description" placeholder="Enter Last name">
              </div>
               <div class="form-group">
                    <label for="sel1">Client</label>
                    <select class="form-control" name="Client_id" >
                        <?php for ($i = 0; $i < count($clients); $i++) { ?>
                  
                       <option value="<?php echo $clients[$i]->Client_id; ?>"><?php echo $clients[$i]->first_name; ?></option>
                       
                       
                      
                      <?php } ?>
                    </select>
                  </div>
              
             
              <button class="btn btn-success" name="add_project" >Add Project</button>
          </div>  
      </form>
      </div>
       </pannel>
 


