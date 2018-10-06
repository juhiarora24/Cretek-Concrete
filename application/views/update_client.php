
<?php include_once ('navigation.php');?>
<div class="col-md-12">
          <h1> Update Client</h1>
          <form action="" method="POST">
          <div class="col-md-10 col-md-offset-1">
             <div class="form-group">
                  <label>Client Id</label>
                  <input class="form-control" name="Client_id" placeholder="Client ID"
                         value="<?php echo $clients->Client_id; ?>">
              </div>
              <div class="form-group">
                  <label> First Name</label>
                  <input class="form-control" name="first_name" placeholder="Enter First name"
                         value="<?php echo $clients->first_name; ?>">
              </div>
              <div class="form-group">
                  <label> Last Name</label>
                  <input class="form-control" name="last_name" placeholder="Enter Last name"
                          value="<?php echo $clients->last_name; ?>">
              </div>
              <div class="form-group">
                  <label> Address</label>
                  <input class="form-control" name="address" placeholder="Enter Address"
                          value="<?php echo $clients->address; ?>">
              </div>
              <div class="form-group">
                  <label> Mobile no.</label>
                  <input class="form-control" name="mobile" placeholder="Enter mobile number"
                          value="<?php echo $clients->mobile; ?>">
                </div>
             
               <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" placeholder="Enter email address"
                             value="<?php echo $clients->email; ?>">
              </div>

      <button name="update" class="btn btn-primary">Update Client</button>
  

        
  
          </div>  
      </form>
      </div>
 


