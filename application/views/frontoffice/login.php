<div class="wrap-login100">
				<?php

				if (!$this->session->csrf_token) {
					$this->session->csrf_token = hash('sha1', time());
				}

				?>
				<form class="login100-form validate-form" role="form" action="<?php echo site_url("/login-gestion-de-voiture") ?>" method="POST">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

					<div class="wrap-input100" data-validate="Enter username">
						<input class="input100" type="email" value="randrianarisoalalatianaantonio@gmail.com" name="email" placeholder="Email">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" value="mdp" name="mdp" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div>

					<input type="hidden" name="token" value="<?php echo $this->session->csrf_token ?>">
					<input type="hidden" name="<?php echo $this->security->get_csrf_token_name() ?>" value="<?php echo $this->security->get_csrf_hash() ?>">
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Login
						</button>

					</div>
					<?php if (isset($errorLogin)) {
					?>
						<div style="text-align: center;color:red; background-color:white;margin-top:10%;border-radius:10px;">
							<h2> mot de passe incorrect</h2>
						</div>
					<?php	}
					?>

					<div class="text-center p-t-90">
						<a class="txt1" href="#">
							Forgot Password?
						</a>
					</div>
					<div class="text-center p-t-90">
						<a class="txt1" href="<?php echo site_url() ?>pageSignUp-gestion-de-voiture">
							Sign up
						</a>
					</div>
				</form>
			</div>