<?php

		if(isset($_SESSION['message'])){

			switch($_SESSION['message']) {
				case 'exist_username':
							?>
								<script type="text/javascript">
								swal({
									type: "error",
									title: "",
									text: '<h4>Opps Username is already exist</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;
					case 'success_addAdmisnistrator':
							?>
								<script type="text/javascript">
								swal({
									type: "success",
									title: "",
									text: '<h4>Successfully added accounts</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;
					case 'success_updated':
							?>
								<script type="text/javascript">
								swal({
									type: "success",
									title: "",
									text: '<h4>Successfully changed</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;

					case 'exist':
							?>
								<script type="text/javascript">
								swal({
									type: "error",
									title: "",
									text: '<h4>Already exist</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;
					case 'added':
							?>
								<script type="text/javascript">
								swal({
									type: "success",
									title: "",
									text: '<h4>Successfully added</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;
					case 'deleted':
							?>
								<script type="text/javascript">
								swal({
									type: "success",
									title: "",
									text: '<h4>Successfully deleted</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;

					case 'error':
							?>
								<script type="text/javascript">
								swal({
									type: "error",
									title: "",
									text: '<h4>Invalid Username and Password</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;

					case 'deactivate':
							?>
								<script type="text/javascript">
								swal({
									type: "success",
									title: "",
									text: '<h4>Successfully Deactivated account</h4>',
									html: true,
									confirmButtonText: "Close",
									confirmButtonColor: "#336699",
									showConfirmButton: true
									});
								</script>
							<?php
					break;
				
				default:
					# code...
					break;
			}

		}
?>
<script type="text/javascript">
   
        
</script>