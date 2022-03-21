
<?php

include 'inc/header.php';


?>
<div class="panel panel-default">
      <div class="panel-heading"> 
          <h2>User Register</h2>
             </div>

                 <div class="panel-body"> 

                     <div style="max-width:600px; margin:0 auto">
                        <form action=" " method="post">
                          <div class="col-md-6">

                                <label for="inputYourname4" class="form-label">Your Name </label>
                                <input type="yourname" class="form-control" id="inputYourname4" required="">
                                
                                <label for="inputUsername4" class="form-label">Username </label>
                                <input type="username" class="form-control" id="inputUsername4" required="">
                                
                                <label for="inputEmail4" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail4" required="">
                                     </div>
                                     <div class="col-md-6">
                                     <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" required="">

                            </div>

                                         <br> <br> 

                            <div class="col-12">
                                    <button type="submit" class="btn btn-success">Sign up</button>
                            </div>
                         </form>
                    </div>

                         <br> <br> 
                    </div>

            </div>


            <?php 
            
            include 'inc/footer.php';
            
            
            ?>
