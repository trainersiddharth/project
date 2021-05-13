

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url();?>plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>dist/css/adminlte.min.css">
   <link rel="stylesheet" href="<?php echo base_url();?>dist/css/custom.css">  



   <script type="text/javascript">
         
         var x ="";

         function generateCaptcha()
         {
             var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9');
             var i;
             for (i=0;i<5;i++){
               var a = alpha[Math.floor(Math.random() * alpha.length)];
               var b = alpha[Math.floor(Math.random() * alpha.length)];
               var c = alpha[Math.floor(Math.random() * alpha.length)];
               var d = alpha[Math.floor(Math.random() * alpha.length)];
               var e = alpha[Math.floor(Math.random() * alpha.length)];
              }
            var code = a + '' + b + '' + '' + c + '' + d+ ''+e;
            //document.getElementById("mainCaptcha").value = code
            document.getElementById("cpt").innerHTML = code
            x=code;
            document.getElementById("caperror").innerHTML = '';
          }
         
          function CheckValidCaptcha(){
              var string1 = removeSpaces(x);
              var string2 = removeSpaces(document.getElementById('txtInput').value);
               var email = document.getElementById("email").value;
              if (string1 != string2){
                  document.getElementById('caperror').innerHTML = "Captcha is Incorrect."; 
                //alert("Please enter a valid captcha.");
                 return false;
              }

              return true;
          }

          function removeSpaces(string){
            return string.split(' ').join('');
          }
          function validateEmail(email) {
          const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }

      </script>




</head>
<body class="hold-transition login-page" onload="generateCaptcha()">
    
    
    <div class="login-box">
  <div class="login-logo">
  <h1>  <b>ADIT</b> Dashboard</h1>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">


    	<?php

    	if(!empty($this->session->flashdata('success'))){
    		echo "<div class='alert alert-success'>".$this->session->flashdata('success')."</div>";
    	}

    	?>


    	<?php

    	if(!empty($this->session->flashdata('error'))){
    		echo "<div class='alert alert-danger'>".$this->session->flashdata('error')."</div>";
    	}

    	?>
      <p class="login-box-msg">Sign in to your dashboard</p>

      <form action="<?php echo base_url('Login/match');?>" method="POST" onsubmit="return CheckValidCaptcha()">
        <div class="input-group mb-3">
          <input type="text" name="email" required="true" id="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="pass" class="form-control" required="true" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>

          <div class="input-group mb-3">
             
             <div class="row">
                 <div class="col-sm-7 col-xs-12"><input type="text" id="txtInput" class="form-control" placeholder="Enter Captcha" style="border-right: solid 1px #ced4da;" required=""></div>
                 <div class="col-sm-5 col-xs-12">
                 <div class="captchabox" id="cpt">CG6A56</div>
                 </div>
             </div>
         </div> 
         <p id="caperror" style="color: red;"></p>
            <p class="mb-2">
        Captcha Not Clear? <a href="#" onclick="generateCaptcha()">Refresh</a>
      </p>
          
          <div class="input-group mb-3">
          <div class="col-4">
            <button type="submit" name="login" class="btn btn-primary btn-block">Sign In</button>
          </div>

        </div>
        </div>
      </form>


    </div>
    <!-- /.login-card-body -->
  </div>
</div>
    

    
<!-- jQuery -->
<script src="<?php echo base_url();?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>dist/js/adminlte.min.js"></script>

</body>
</html>
