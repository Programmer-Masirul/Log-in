
<?php

include 'inc/header.php';


?>
<div class="panel panel-default">
      <div class="panel-heading"> 
          <h2>User Login</h2>
             </div>

                 <div class="panel-body"> 

                     <div style="max-width:600px; margin:0 auto">
                        <form action=" " method="post">
                          <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail4" required="">
                                     </div>
                                     <div class="col-md-6">
                                     <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" required="">
                            </div>

                                         <br> <br>
                         <div>
                              <div>
                                    <button type="submit" class="btn btn-success">Sign in</button>
                              </div>
                            

                              <h6> Not register yet ?</h6>  <br>

                              <div class="float-end">
                                   <button type="sign up" class="btn btn-outline-secondary"> 
                                         <a href="register.php" decoration="none"> Sign Up </a>
                                   </button>
                     </div>


                         </div>
                         </form>
                    </div>

                         <br> <br> 
                    </div>

            </div>


            <?php 
            
            include 'inc/footer.php';
            
            
            ?>
