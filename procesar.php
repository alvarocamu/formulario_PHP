
			<?php
				 $nombre = $_POST['nombre']; 
				 $password=$_POST['contrasena']; 
				
				 
				 if($nombre=='alvaro' && $password=="123"){

					header('Location: usuario1.php');
					exit;
					}else if($nombre=='usuario2' && $password=="123"){
						header('Location: usuario2.php');
						exit;
						}else if($nombre=='usuario3' && $password=="123"){

							header('Location: usuario3.php');
							exit;
							}else if($nombre=='usuario4' && $password=="123"){
		
								header('Location: usuario4.php');
								exit;
								} else if($nombre=='usuario5' && $password=="123"){

									header('Location: usuario5.php');
									exit;
									}else {

										header('Location: invitado.php');
										exit;
					}
					?>
