<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update User</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css'); ?>">
</head>
<body>

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">Update</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg = $this->session->flashdata('error_msg');
                  if ($error_msg) {
                      echo $error_msg;
                  }
                  ?>
                      <?php foreach ($users as $user) : ?>
                          <form role="form" method="post" action="<?php echo base_url('user/update/update_user'); ?>">
                          <fieldset>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Id" name="user_id" type="text"
                                         value="<?php echo $user->user_id; ?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Name" name="user_name" type="text"
                                         value="<?php echo $user->user_name; ?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="E-mail" name="user_email" type="email"
                                         value="<?php echo $user->user_email; ?>">
                              </div>
                              <div class=" form-group">
                                  <input class="form-control" placeholder="Password" name="user_password"
                                         type="password" value="<?php echo $user->user_password; ?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Age" name="user_age" type="number"
                                         value="<?php echo $user->user_age; ?>">
                              </div>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Mobile No" name="user_mobile" type="number"
                                         value="<?php echo $user->user_mobile; ?>">
                              </div>
                              <div class="form-group">
                                  <input class="form-control" placeholder="Role" name="user_role" type="text"
                                         value="<?php echo $user->user_role; ?>">
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Update" name="add">

                          </fieldset>
                      </form>
                      <?php endforeach; ?>
                      <center></b> <br></b><a href="<?php echo base_url('user/user_profile'); ?>">Back</a></center>
                      <!--for centered text-->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>


</body>
</html>
