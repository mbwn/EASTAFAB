<?php $this->load->view('back/includes/header_inc'); ?>   
  
   
    
     
      
       
<div class="container" style="margin-top:80px;">
            
  <div class="row">
      <div class="col-md-4">
          
      </div>
      <div class="col-md-4">
         <div class="panel panel-default">
             <div class="panel-body">
                   <?php
                 if(validation_errors()){
                     ?>
                        <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong><?php echo validation_errors();?></strong>
                        </div>
                     
                     <?php
                 }
                  ?>
                   
                   
                   
                   
                    <form action="<?php echo site_url('login')?>" method="post">
                    <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                    <label for="pasword">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
     
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                 
                 
             </div>     
         </div>
          
      </div>
      <div class="col-md-4">
          
      </div>
  </div>          
            
            
            
</div>
         















<!-- Footer-->
<?php $this->load->view('back/includes/header_inc'); ?>