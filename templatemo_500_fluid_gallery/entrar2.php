	<?php  
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    	//echo "Welcome to the member's area, " . $_SESSION['username'] . "!";

			$nombre = $_SESSION['name_user'];
			$user = $_SESSION['username'];

			$quer = mysqli_query($connection, "select * from CLIENTE where CLIENTE.username  = '$user';");
			$admin = mysqli_query($connection, "select admin from CLIENTE where CLIENTE.username  = '$user';");

			$es_admin = mysqli_fetch_assoc($admin);
			$status_admin = $es_admin['admin'];

			echo "<table>";
			$row_as = mysqli_fetch_assoc($quer);
			if ($status_admin == 1) {
				echo "<h2 class='tm-text-title'>Perfil de ";
			    echo "".$_SESSION["name_user"]." --- ADMIN"; 
			}else{
				echo "<h2 class='tm-text-title'>Perfil de ";
			    echo "".$_SESSION["name_user"].""; 
			}
		 	echo "</h2>";
			echo "<tr>";
			echo "<th> <b> NOMBRE DE USUARIO </b> </th>";
			echo "<td>".$row_as['username']."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th> <b> NOMBRE </b> </th>";
			echo "<td>".$row_as['cliente_nombre']."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th> <b> MAIL </b> </th>";
			echo "<td>".$row_as['mail']."</td>";
			echo "</tr>";

			echo "<tr>";
			echo "<th> <b> DIRECCION DE ENVIO </b> </th>";
			echo "<td>".$row_as['shipping_ad']."</td>";
			echo "</tr>";
			 
        echo "</table>";
        echo "<button id = 'editar' type='submit' class='pull-xs-right tm-submit-btn'> Editar Perfil</button>";
        echo "<br>";
        echo "<button id = 'logout' type='submit' class='pull-xs-left tm-submit-btn'> LOG OUT </button>";

        echo "<script type='text/javascript'>
        		    document.getElementById('editar').onclick = function () {
        		        location.href = 'editar.php';
        		    };
        		</script>";
         echo "<script type='text/javascript'>
        		    document.getElementById('logout').onclick = function () {
        		        location.href = 'logout.php';
        		        alert('Tu sesion ha sido cerrada'); 
        		    };
        		</script>";
        if ($status_admin == 1) {
				 $users = mysqli_query($connection, "select * from CLIENTE");
				 $prods = mysqli_query($connection, "select * from PRODUCTO where pro_talla ='U' or pro_talla = 'S' or pro_talla is null");

				 echo"<br>";
				 echo"<br>";
				 echo "<h2 class='tm-text-title'>USUARIOS </h2>";
				 echo"<table>";
				echo "			<tr>
									<th>USUARIO</th>
									<th>MAIL</th>
									<th>NOMBRE</th>
									<th>DIRECCION</th>
									<th></th>
								</tr>";
				while ($lollol = mysqli_fetch_assoc($users)) {
				   echo "<tr>";
				   $realuser = $lollol['username'];
				   echo "<td>".$realuser."</td>";
				   echo "<td>".$lollol['mail']."</td>";
				   echo "<td>".$lollol['cliente_nombre']."</td>";
				   echo "<td>".$lollol['shipping_ad']."</td>";
				   if ($realuser != $user) {
				   	echo "<td><button type='submit' class='pull-xs-right tm-submit-btn'>Remover</button></td>";
				   }
				   echo "</tr>";
				 }
				echo"</table>";

				echo"<br>";
				 echo "<h2 class='tm-text-title'>PRODUCTOS </h2>";

				 echo"<table>";
				echo "			<tr>
									<th>ID</th>
									<th>PRECIO</th>
									<th>NOMBRE</th>
									<th>TIPO</th>
									<th>STOCK</th>
									<th>CATEGORIA</th>
								</tr>";
				While ($lellel = mysqli_fetch_assoc($prods)) {
				   echo "<tr>";
				   echo "<td>".$lellel['pro_id']."</td>";
				   echo "<td>".$lellel['pro_precio']."</td>";
				   echo "<td>".$lellel['pro_nombre']."</td>";
				   echo "<td>".$lellel['pro_tipo']."</td>";
				   echo "<td>".$lellel['pro_stock']."</td>";
				   echo "<td>".$lellel['cat_id']."</td>";
				   echo "<td><button type='submit' class='pull-xs-right tm-submit-btn'>Remover</button></td>";
				   echo "</tr>";
				 }

				 echo"</table>";

			}

	} else {
	    echo"
			<script>

			var usr = doc.getElementById('log_user').value;
			var pswd = doc.getElementById('log_pass').value;

			if(usr && pswd){
				$.ajax({
					type: 'post',url: 'entrar.php', data: {
						username: usr
						password: pswd
					},

					success: function(){
						alert('Chingon')
					}

					});
			}

			</script>

			<div class='tm-flex tm-contact-container'>
				<div class='tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact'>
				<h2 class='tm-contact-info'>Registrate en SUPERTIENDA</h2>
				<p class='tm-text'>Para poder disfrutar de toda la experiencia de SUPERTIENDA, registrate, es completamente gratis!</p>
			
				<!-- contact form -->
				<form action='signin.php' method='post' class='tm-contact-form'>
			
				    <div class='form-group'>
				        <input type='text' id='reg_nombre' name='reg_nombre' class='form-control' placeholder='Nombre'  required/>
				    </div>
			
				    <div class='form-group'>
				        <input type='text' id='reg_apell' name='reg_apell' class='form-control' placeholder='Apellido'  required/>
				    </div>
			
				    <div class='form-group'>
				        <input type='text' id='reg_user' name='reg_user' class='form-control' placeholder='Username'  required/>
				    </div>
			
				    <div class='form-group'>
				        <input type='email' id='reg_email' name='reg_email' class='form-control' placeholder='Email'  required/>
				    </div>
			
				    <div class='form-group'>
				        <input type='text' id='reg_address' name='reg_address' class='form-control' placeholder='Dirección'  required/>
				    </div>
			
				    <div class='form-group'>
				        <input type='password' id='reg_pass' name='reg_pass' class='form-control' placeholder='Contraseña'  required/>
				    </div>
			
				    <button id = 'su' sigtype='submit' class='pull-xs-right tm-submit-btn'>Sign Up</button>
				     <script type='text/javascript'>
        		    document.getElementById('su').onclick = function () {
        		        alert('Haz Creado Tu Cuenta'); 

        		    };
        		</script>
			
				</form>
				</div>
			
				<div class='tm-bg-white-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact'>
				<h2 class='tm-contact-info'>ENTRA A TU CUENTA</h2>
				<p class='tm-text'>Si ya eres miembro de SUPERTIENDA, ingresa a tu cuenta para poder continuar con la SUPER-experiencia!</p>
			
				<!-- contact form -->
				<form action='entrar.php' method='post' class='tm-contact-form'>
			
				  <div class='form-group'>
				      <input type='text' id='log_user' name='log_user' class='form-control' placeholder='Username'  required/>
				  </div>
			
				  <div class='form-group'>
				      <input type='password' id='log_pass' name='log_pass' class='form-control' placeholder='Password'  required/>
				  </div>
			
				  <button href= 'index-color.php' type='submit' class='pull-xs-right tm-submit-btn'>Send</button>
			
				</form>
			
				<!--<h2 class='tm-contact-info'>4466 Old New St 28290, SF, California</h2>
				 google map goes here
				<div id='google-map'></div>-->
				</div>
			
				</div>";
				//mequieromorrrrri
			} 

	?>