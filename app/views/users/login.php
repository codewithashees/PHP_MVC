<?php
require APPROOT . '/views/includes/header.php';
//require APPROOT . '/views/includes/footer.php';
$data['title'];
?>

<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><?php echo SITENAME ?></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="#" method="post" id="login-form">
		<div id="loginAlert"></div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="email" value="<?php if(isset($_COOKIE['email'])){echo $_COOKIE['email'];} ?>" placeholder="E-Mail" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" value="<?php if(isset($_COOKIE['password'])){echo $_COOKIE['password'];} ?>" placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" <?php if(isset($_COOKIE['email'])){echo "checked";} ?> id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" id="login-btn" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!--<div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div>-->

      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.php">Forgot Password</a>
      </p>
      <!--<p class="mb-0">
        <a href="register.php" class="text-center">Register a new membership</a>
      </p>-->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?=URLROOT?>/public/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=URLROOT?>/public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=URLROOT?>/public/dist/js/adminlte.min.js"></script>
</body>

<script>
	//User Login Ajax Resqest
	$(document).ready(function(){
		$("#login-btn").click(function(e){
			if($("#login-form")[0].checkValidity()){
				e.preventDefault();
				$.ajax({
					url: 'http://localhost/mvc/users/action/',
					method: 'POST',
					data: $("#login-form").serialize()+'&action=login',
					success: function(response){
						alert(response);
						// if(response === 'login'){
						// 	window.location = 'admin-dashboard.php';
						// }else{
						// 	$("#loginAlert").html(response);
						// }
					}
				});
			}
		});
	});
</script>

</html>