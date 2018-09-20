
<?php include_once ('navigation.php');?>

<pannel><div class="panel panel-success">
      <div class="panel-heading">Enter Client details</div>
       <div class="panel-body">
<div class="col-md-12">
          <h1> Add new Client</h1>
          <form action="/project1/welcome/add" method="POST">
          
          <div class="col-md-10 col-md-offset-1">
              <div class="form-group">
                  <label>Client ID</label>
                  <input class="form-control" name="Client_id" placeholder="Enter id">
              </div>
              <div class="form-group">
                  <label> First Name</label>
                  <input class="form-control" name="first_name" placeholder="Enter First name">
              </div>
              <div class="form-group">
                  <label> Last Name</label>
                  <input class="form-control" name="last_name" placeholder="Enter Last name">
              </div>
              <div class="form-group">
                  <label> Address</label>
                  <input class="form-control" name="address" placeholder="Enter Address">
              </div>
              <div class="form-group">
                  <label> Mobile no.</label>
                  <input class="form-control" name="mobile" placeholder="Enter mobile number">
                </div>
             
               <div class="form-group">
                  <label>Email</label>
                  <input class="form-control" name="email" placeholder="Enter email address">
                 
              </div>
              <button class="btn btn-success" name="add" >Add new Client</button>
          </div>  
      </form>
      </div>
         
       </div>
    </div>
       </pannel>
 




