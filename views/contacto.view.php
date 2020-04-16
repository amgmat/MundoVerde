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
    <link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">


</head>

<body class="pagina-c">

<header id="header">
        <nav class="menu">
            <div class="logo">
                <a href="index.php"><img src="img/mundo-verde.jpeg" width="170px" alt=""></a>
                <a href="#" class="btn-menu" id="btn-menu"><i class="fa fa-bars"></i></a>
            </div>

            <div class="nombre" id="nombre">
                <a href="index.php">
                    <svg><rect></rect></svg>
                    <img src="img/mundoVerde.jpeg" alt=""></a>

            </div>

            <div class="enlaces" id="enlaces">
                <a href="index.php"><strong>Inicio</strong></a>
                <a href="contacto.php"><strong>Contacto</strong></a>
                <a href="servicios.php"><strong>Servicios</strong></a>
                <a href="nosotros.php"><strong>Nosotros</strong></a>
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
                <input type="number" name="telefono" placeholder="Teléfono(Opcional)" id="telefono">
                <?php if(!$enviado && isset($telefono)) echo $telefono ?>
                <br>
                

                <input type="submit" name="submit" value="Enviar" id='Enviar' >

            </form>
        </div>

    </section>

    <div class="redes">
        <ul>
            <li>
                <a href="https://api.whatsapp.com/send?phone=5215574287773&text=Hola,%20quiero%20informacion sobre:" target="_blank">
                    <span class="whatsapp"></span></a>
            </li>
            <li>
                <a href="https://www.facebook.com/MV-Mundo-Verde-121840909216313/" target="_blank">
                    <span class="facebook"></span></a>
            </li>
            <li>
                <a href="https://instagram.com/mv_mundo_verde?igshid=jome5z6dmze" target="_blank">
                    <span class="instagram"></span></a>
            </li>
        </ul>
    </div>


    <footer>

        <!-- <div class="redes-sociales">
            <h4>Siguenos através de nuestras redes sociales</h4>
            <ul>
                <li><a href="https://www.facebook.com/MV-Mundo-Verde-121840909216313/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="https://instagram.com/mv_mundo_verde?igshid=jome5z6dmze" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
        </div> -->

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