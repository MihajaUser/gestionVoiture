<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>/assets1/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets1/css/main.css">
	<!--===============================================================================================-->

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url() ?>assets1/images/bg-01.jpg');">
			<?= include($page);?>
		</div>
	</div>
	<p>This example calls a function to convert from Fahrenheit to Celsius:</p>
	<p id="demo"></p>

	<script>
		var popUp = <?php echo json_encode($popUp); ?>;

		function toShow() {
			$('#myModal').modal('show');
		}
		if (popUp == 1) {
			document.getElementById("demo").innerHTML = popUp;
			toShow();
		}
	</script>

	<div class="modal" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>Modal body text goes here.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() ?>assets1/js/main.js"></script>

</body>

</html>