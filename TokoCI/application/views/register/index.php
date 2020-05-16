<div class="wrapper">  
    <div class="container">  
     <div class="row">  
      <div class="form-box">  
       <div class="panel panel-primary">  
        <div class="panel-heading text-center">  
         <h3>Register</h3>  
        </div>  
        <div class="panel-body">  
         <div class="row">  
           <div class="col-sm-12">  
             <?php echo $this->session->flashdata('msg'); ?>  
           </div>  
         </div>  
         <form action="<?php echo base_url(); ?>Register/tambah" method="post">  
          <div class="row">  
           <div class="col-sm-6">  
           <div class="form-group">  
                  <label class="control-label" for="namauser">Nama User</label>  
                    <div>  
                      <input type="text" class="form-control" id="namauser" name="namauser" placeholder="Nama User" required="">  
                      <span class="text-danger"><?php echo form_error('text'); ?></span>  
                    </div>  
            </div>
            <div class="form-group">  
                  <label class="control-label" for="username">Username</label>  
                    <div>  
                      <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="">  
                      <span class="text-danger"><?php echo form_error('text'); ?></span>  
                    </div>  
            </div>    
          <!-- <div class="form-group">  
                  <label class="control-label" for="email">Email</label>  
                    <div>  
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">  
                      <span class="text-danger"><?php echo form_error('email'); ?></span>  
                    </div>  
            </div>   -->
                <div class="form-group">  
                  <label class="control-label" for="pswd">Password</label>  
                    <div>  

                      <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="">  
                      <span class="text-danger"><?php echo form_error('password'); ?></span>  
                    </div>  
                </div>  
                <!-- <div class="form-group">  
                  <label class="control-label" for="cn-pswd">Confirm Password</label>  
                    <div>  
                      <input type="password" class="form-control" id="cn-pswd" name="confirmpswd" placeholder="Confirm Password" value="< ?php echo set_value('confirm_pwd'); ?>" required="">  
                      <span class="text-danger">< php echo form_error('confirmpswd'); ?></span>  
                    </div>  
                </div>   -->
                <div class="form-group">   
                  <div class="row">  
                    <div class="col-sm-offset-5 col-sm-3 btn-submit">  
                      <button type="submit" class="btn btn-success">Register</button>  
                    </div>  
                  </div>  
                </div>  
         </form>  
        </div>  
       </div>  
      </div>  
     </div>  
    </div>  
   </div>  