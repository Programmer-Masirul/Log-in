<!-- <!DOCTYPE html>
<html lang="en">
    <head>
        <title> Login Register System PHP </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="inc/bootstrap.min.css" rel="stylesheet"/>
        <link href="inc/fontawesome.min.css" rel="stylesheet"/>
        
          <!-- Place your kit's code here -->
        <script src="https://kit.fontawesome.com/83ba04eb6c.js" crossorigin="anonymous"></script>
        <script src="inc/jquery.min.js"> </script>
        <script src="inc/bootstrap.min.js"> </script>
       
    </head>
    <body>
                <!-- 
        <a href="login.php" class="btn btn-primary"> Login </a>
                <br> <br>
        <a href="register.php" class="btn btn-primary"> Register </a>
                <br><br>
        <a href="profile.php" class="btn btn-success">Profile</a> -->

    </body>
</html> -->




<?php

include 'inc/header.php';
include 'lib/User.php';
$user = new User();


?>
<div class="panel panel-default">
      <div class="panel-heading"> 
        <h2 class="p-3 mb-2 bg-light text-dark"> User Login </h2>
                </div>

                     <div class="panel-body"> 
                        <table class="table table table-striped"> 
                            <th width="20%"> Serial Number </th>
                            <th width="20%"> Name </th>
                            <th width="20%"> User Name </th>
                            <th width="20%"> Email-Address </th>
                            <th width="20%"> Action </th>

                            <tr> 
                                <td> 01 </td>
                                <td> Md. Masirul </td>
                                <td>  Masirul </td>
                                <td> webdevelopermasirul@gmail.com</td>
                                <td> <a class="btn btn-primary" href="profile.php?id=1"> View </a>
                            </td>
                            </tr>

                            <tr> 
                                <td> 01 </td>
                                <td> Md. Masirul </td>
                                <td>  Masirul </td>
                                <td> webdevelopermasirul@gmail.com</td>
                                <td> <a class="btn btn-primary" href="profile.php?id=1"> View </a>
                            </td>
                            </tr>

                            <tr> 
                                <td> 01 </td>
                                <td> Md. Masirul </td>
                                <td>  Masirul </td>
                                <td> webdevelopermasirul@gmail.com</td>
                                <td> <a class="btn btn-primary" href="profile.php?id=1"> View </a>
                            </td>
                            </tr>

                        </table>
                 </div>

            </div>
 

            <?php 
            
           include 'inc/footer.php';
            
            
            ?>
