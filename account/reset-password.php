<?php
include "../config.php";
   if(isset($_POST['submit']) )
   {
      $mail_to=$_POST['email'];
      $result = mysqli_query($con,"SELECT * FROM affiliate where email='$mail_to' ");
 $queryResult = mysqli_num_rows($result);
  if ($queryResult > 0) {
while($row = mysqli_fetch_array($result)) 
{ 
       $email_to= $_POST["email"];
     $sql = mysqli_query($con,"UPDATE affiliate SET password='' where  email='$mail_to'");
      
       if( $sql == true ) {
           
            header("location: https://boradesigns.co.ke/affiliate/ndani/password-resetter.php?id=$email_to");
            
         }else {
             
             echo "<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>Somethings wrong while confirming your account, try again later. </div>";
             
             
         }
      
  }

}
else {
             
             echo"<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>That email does not exist. </div>";
             
             
         }
      
   }
?>
<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Recover Password | Bora Designs Affiliate</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Bora Designs affiliate program, earn cash from your followers. " name="description" />
        <meta content="Bora Designs" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="../assets/css/bootstrap.min.css" id="bootstrap-stylesheet" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="../assets/css/app.min.css" id="app-stylesheet" rel="stylesheet" type="text/css" />
        <script>
  window.callbellSettings = {
    token: "8PFCJbqkCGDgA9HhDxkPyhea"
  };
</script>
<script>
  (function(){var w=window;var ic=w.callbell;if(typeof ic==="function"){ic('reattach_activator');ic('update',callbellSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Callbell=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://dash.callbell.eu/include/'+window.callbellSettings.token+'.js';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()
</script>
<!-- End of Async Callbell Code -->

    </head>
    <body class="authentication-bg" style="background-image: url('<?php echo "$bg1";?>');background-size: auto; ">
  

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        
                        <div class="card">

                            <div class="card-body p-4" style="background-color: <?php echo"$color;"?>">
                                <div class="text-center">
                            <a href="https://boradesigns.co.ke" class="logo">
                                <img src="../assets/images/logo-light.png" alt="" height="44" class="logo-light mx-auto">
                               <img src="../assets/images/logo-dark.png" alt="" height="44" class="logo-dark mx-auto">
                            </a>
                            

                        </div><br>
                        
                                <div class="text-center mb-4">
                                    <h4 class="text-uppercase mt-0"  >BBA<br>Recover Password</h4>
                                </div>

                                <form action="reset-password.php" method="POST">

                                    <div class="form-group mb-3">
                                        <label for="emailaddress" >Email address</label>
                                        <input class="form-control" parsley-type="email" type="email" parsley-type="email" id="email" name='email'required=""  placeholder="Enter your Email">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" value="submit" name='submit' type="submit"> Reset Password </button>
                                    </div>

                                </form>
                                

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                
                                <p class="text" >Remembered your Password? <a href="login.php" class="text"  ><b >Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>  
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->
    

        <!-- Vendor js -->
        <script src="../assets/js/vendor.min.js"></script>

        <!-- App js -->
        <script src="../assets/js/app.min.js"></script>
         <script src="../assets/libs/parsleyjs/parsley.min.js"></script>

        <!-- validation init -->
        <script src="../assets/js/pages/form-validation.init.js"></script>

        
    </body>


</html>
