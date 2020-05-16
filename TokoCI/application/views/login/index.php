<?=
form_open('login/proses_login');
?>
<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6 mx-auto">
				
				<!-- form card login -->
				<div class="card rounded-0">
					<div class="card-header">
						<h3 class="mb-0">Login</h3>
					</div>
					<div class="card-body">
						<form class="form" role="form" autocomplete="off" id="formLogin" novalidate="" method="post">
							<div class="form-group">
								<label for="username">Username</label>
								<input type="text" class="form-control form-control-lg rounded-0" name="username" id="username" required="">
								<div class="invalid-feedback">Oops, you missed this one.</div>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input type="password" class="form-control form-control-lg rounded-0" name="password" id="password" required="" autocomplete="new-password">
								<div class="invalid-feedback">Enter your password too!</div>
							</div>
							<button type="submit" class="btn btn-success btn-lg float-right" id="btnLogin">Login</button>
						</form>
						<div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="<?php echo base_url('register/index') ?>">
              Belum Punya Akun? Daftar
              </a>
          </div>
					</div>
					
					<!-- /card-block -->
				</div>
				<!-- /form card login -->
				<!-- cek pesan -->
				<div class="alert alert-info" role="alert">
					<?php
						if (isset($pesan)) {
							echo $pesan;
						}else{
							echo "Masukkan username dan password anda";
						}
					?>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /col -->
</div>
<!-- /container -->

<?=
form_close();
?>