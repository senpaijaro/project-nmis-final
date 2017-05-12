<?php

		if(isset($_SESSION['message'])){

			switch($_SESSION['message']) {
				case 'send':
							?>
								<script type="text/javascript">
								swal({
									type: "success",
									title: "",
									text: '<h4>Successfull send request</h4>',
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
				
				default:
					# code...
					break;
			}


		}