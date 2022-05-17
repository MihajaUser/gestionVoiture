<div class="limiter">
	<div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets1/images/bg-01.jpg');">
		<div class="wrap-login100">
			<?php
			/*  
         if (!$this->session->csrf_token) {
          $this->session->csrf_token =hash('sha1',time());
         }
         */
			?>
			<form class="login100-form validate-form" role="form" action="<?php echo site_url("signUp-gestion-de-voiture") ?>" method="POST">
				<span class="login100-form-logo">
					<i class="zmdi zmdi-landscape"></i>
				</span>

				<span class="login100-form-title p-b-34 p-t-27">
					Inscription
				</span>

				<div class="wrap-input100" data-validate="Enter username">
					<input class="input100" type="email" name="email" placeholder="Email">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter username">
					<input class="input100" type="text" name="nom" placeholder="Nom">
					<span class="focus-input100" data-placeholder="&#xf207;"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Enter password">
					<input class="input100" type="password" name="mdp" placeholder="Mot de passe">
					<span class="focus-input100" data-placeholder="&#xf191;"></span>
				</div>
				<input type="hidden" name="statut" value="normal">
				<?php /*
          <input type="hidden" name="token" value="<?php echo $this->session->csrf_token ?>">
          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name()?>" value="<?php echo $this->security->get_csrf_hash()?>" >
          */ ?>
					<br />
					<br />
				<div class="container-login100-form-btn">
					<button type="submit" class="login100-form-btn">
						Valider
					</button>
				</div>
			</form>
		</div>
	</div>
</div>