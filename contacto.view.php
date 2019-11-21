<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="shorcut icon" type="image/x-icon" href="img/mv.png">


</head>

<body>

    <header id="header">
        <nav class="menu">
            <div class="logo">
                <a href="index.html"><img src="img/mundo-verde.jpeg" width="170px" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"><i class="fa fa-bars"></i></a>
            </div>

            <div class="nombre" id="nombre">
                <a href="index.html">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span><strong> Mundo Verde </strong></a>

            </div>

            <div class="enlaces" id="enlaces">
                <a href="index.html">Inicio</a>
                <a href="contacto.php">Contacto</a>
                <a href="servicios.html">Servicios</a>
                <a href="acerca-de.html">Acerca de</a>
            </div>
        </nav>

    </header>

    <section class="contacto">
        <div class="contenedor">
        <div class="aviso">
                        <?php if (!empty($errores)): ?>
				             <div class="alert error">
				                <?php echo $errores ?>
				             </div>
			            <?php elseif ($enviado): ?>
			            	<div class="alert success">
			            		<p>Enviado Correctamente</p>
			            	</div>
			            <?php endif ?>
                    </div>
            <h2 class="titulo">Contacto</h2>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="formulario">
            
            
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" placeholder="Nombre"
                value="<?php if(!$enviado && isset($nombre)) echo $nombre ?>" id="nombre">
                <br>

                <label for="apellido">Apellidos</label>
                <input type="text" name="apellido" placeholder="Apellidos" 
                value="<?php if(!$enviado && isset($apellido)) echo $apellido ?>" id="apellido">
                <br>

                <label for="correo">Correo</label>
                <input type="email" name="correo" placeholder="Correo" 
                value="<?php if(!$enviado && isset($correo)) echo $correo ?>" id="correo">
                <br>

                <label for="mensaje">Mensaje</label>
                <textarea name="mensaje" placeholder="Mensaje" id="mensaje" placeholder="Mensaje: ">
                <?php if(!$enviado && isset($mensaje)) echo $mensaje ?>
                </textarea>
                <br>

                <label for="telefono">Teléfono</label>
                <input type="number" placeholder="Teléfono(Opcional)"
                id="telefono">
                <br>
                

                <input type="submit" name="submit" value="Enviar">

            </form>
        </div>

    </section>

    <div class="whatsapp">
        <ul>
            <li>
                <a href="https://api.whatsapp.com/send?phone=5215515070944&text=Hola,%20quiero%20informacion sobre:" target="_blank"><span><i class="fab fa-whatsapp"></i></span></a></li>
        </ul>
    </div>


    <footer>

        <div class="redes-sociales">
            <h4>Siguenos através de nuestras redes sociales</h4>
            <ul>
                <li><a href="https://www.facebook.com/MV-Mundo-Verde-121840909216313/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://instagram.com/mv_mundo_verde?igshid=jome5z6dmze" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div>

        <div class="copy">
            <p>&copy; copyright 2019</p>
        </div>


    </footer>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/headroom.min.js"></script>

</body>

</html>