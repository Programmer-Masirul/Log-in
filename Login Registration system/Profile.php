
<?php

include 'inc/header.php';


?>
<div class="panel panel-default">
      <div class="panel-heading"> 
          <h2>User Profile  <span class="float-end"> <a href="index.php" class="btn btn-primary"> Back </a>
      </span> </h2>
             </div>

                 <div class="panel-body"> 

                     <div style="max-width:600px; margin:0 auto">
                        <form action=" " method="post">
                          <div class="col-md-12">

                                <label for="inputYourname4" class="form-label">Your Name </label>
                                <input type="yourname" class="form-control" id="inputYourname4" value="Masirul Islam">
                                
                                <label for="inputUsername4" class="form-label">Username </label>
                                <input type="username" class="form-control" id="inputUsername4" value="masirul">
                                
                                <label for="inputEmail4" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="inputEmail4" value="webdeveloper@gmail.com">
                                     
                              </div>
                                     
                              

                                         <br> <br> 

                            <div class="col-12">
                                    <button type="submit" name="update" class="btn btn-success">Update</button>
                            </div>
                         </form>
                    </div>

                         <br> <br> 
                    </div>

            </div>


            <?php 
            
            include 'inc/footer.php';
            
            
            ?>
