	<?php  

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
		<form action='' method='post' class='tm-contact-form'>
	
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
	
		    <button type='submit' class='pull-xs-right tm-submit-btn'>Send</button>
	
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
	?>