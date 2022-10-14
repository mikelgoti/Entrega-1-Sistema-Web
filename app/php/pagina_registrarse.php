<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--LINK_CSS-->
    <link rel="stylesheet" href="../css/pagina_registrarse.css">
    <!--FONTAWESOME_LINK-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--FUENTE PARA EL TITULO DE GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&display=swap" rel="stylesheet">
    
    <title>Comic Central</title>
    <link rel="icon" href="../img/comic.png" type="image/x-icon">
</head>
<body>
    <header>
		<h1>COMIC CENTRAL<br></h1>
		<h2>Registrate</h2>
		
	</header>
	<main>
		<form action="../php/controlador_registro.php" method="post" class="registro" id="campo">
			
            <!--USUARIO-->
			<div class="campo_grupo" id="grupo__usuario">
				<label class="etiqueta">Usuario</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="usuario" id="usuario" placeholder="mikewuasozki">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-usuario"  style="display: none;">El usuario solo puede contener letras y numeros.</p>
			</div>

			<!--EMAIL-->
			<div class="campo__grupo" id="grupo__email">
				<label class="etiqueta">Email</label>
				<div class="campo__grupo-input">
					<input type="email" class="campo__input" name="email" id="email" placeholder="JohnTheReaper@servidor.extension">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
                </div>
				<p id="campo__input-error-email" style="display: none;">El email tiene que tener el siguiente formato nombre@servidor.extension</p>
			</div>

			<!--NOMBRE-->
			<div class="campo__grupo" id="grupo__nombre">
				<label class="etiqueta">Nombre</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="nombre" id="nombre" placeholder="John">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-nombre" style="display: none;">El nombre tine que contener solo texto.</p>
			</div>

			<!--APELLIDO-->
			<div class="campo__grupo" id="grupo__apellido">
				<label class="etiqueta">Apellido</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="apellido" id="apellido" placeholder="TheReaper">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-apellido" style="display: none;">El apellido tiene que contener solo texto.</p>
			</div>

			<!--APELLIDO2-->
			<div class="campo__grupo" id="grupo__apellido1">
				<label class="etiqueta">Segundo Apellido</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="apellido1" id="apellido1" placeholder="Goikoetxea">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-apellido1" style="display: none;">El segundo apellido tiene que contener solo texto.</p>
			</div>

			<!--TELEFONO-->
			<div class="campo__grupo" id="grupo__telefono">
				<label class="etiqueta">Teléfono</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="telefono" id="telefono" placeholder="4491234567">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-telefono" style="display: none;">El telefono solo puede contener numeros.</p>
            </div>

            <!--FECHA-->
			<div class="campo__grupo" id="grupo__fecha">
				<label class="etiqueta">Fecha</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="fecha" id="fecha" placeholder="aaaa-mm-dd">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-fecha" style="display: none;">La fecha tiene que tener el siguiente formato aaaa-mm-dd.</p>
            </div>

            <!--DNI-->
			<div class="campo__grupo" id="grupo__dni">
				<label class="etiqueta">Dni</label>
				<div class="campo__grupo-input">
					<input type="text" class="campo__input" name="dni" id="dni" placeholder="12345678-A">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-dni" style="display: none;">El dni teien que tener el formato 12345678-Z. La letra deberá conincidir con el numero.</p>
            </div>

            <!--PASS1-->
			<div class="campo__grupo" id="grupo__password">
				<label class="etiqueta">Contraseña</label>
				<div class="campo__grupo-input">
					<input type="password" class="campo__input" name="password" id="password">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-password" style="display: none;">Las contraseñas deben coincidir.</p>
            </div>

            <!--PASS2-->
			<div class="campo__grupo" id="grupo__password1">
				<label class="etiqueta">Repetir Contraseña</label>
				<div class="campo__grupo-input">
					<input type="password" class="campo__input" name="password1" id="password1">
					<i class="campo__icono-estado-x fa-solid fa-xmark"></i>
                    <i class="campo__icono-estado-check fa-solid fa-check"></i>
				</div>
				<p id="campo__input-error-password1" style="display: none;">Las contraseñas deben coincidir.</p>
            </div>

			<div class="campo__grupo campo__grupo-btn-enviar" id="btn_registrar">
				<button disabled type="submit" class="campo__btn" id="btn_regis">REGISTRARSE</button>
			</div>
			<a href="../index.php" id="link_volver">VOLVER</a>
			<div id="alerta_usuario_repetido"><?php if(isset($mensaje_error)){ echo $mensaje_error;}?></div>
			<dvi id="alerta_usuario_correcto"><?php if(isset($mensaje_correcto)){echo $mensaje_correcto;}?></dvi>
		</form>
	</main>
	<footer class="footer">

	</footer>
    <script src="../js/scriptvalidacion.js"></script>
</body>
</html>