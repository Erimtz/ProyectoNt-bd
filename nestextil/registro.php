<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NesTextil - Registro</title>
    <link rel="stylesheet" href="registro.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/8753d338f4.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
        // (A) SAVE SURVEY FORM ON SUBMIT
        if (isset($_POST['email'])) {
        require "registro-save.php";
        }
    ?>
    <header class="encabezado">
        <div class="oferta">20% de descuento en todos los productos!</div>
        <div> 
            <div class="menu">   
                <a href="/nestextil"><p>NesTextil</p></a>
            <nav>
                <ul>
                    <li><i class="fab fa-sistrix"></i></li>    
                    <li><i class="far fa-heart"></i></li>
                    <li><i class="fas fa-shopping-bag"></i></li>
                </ul>
            </nav>
            </div>
    </header>

    <main class="contenedor">
            
        <h1>Registro</h1>

        <form  method="POST">
            <div class="registro">
                <input name="name" type="text" class="registro-datos-input" placeholder="Nombre">
                <input name="last-name" type="text" class="registro-datos-input" placeholder="Apellido">
                <input name="cedula" type="number" class="registro-datos-input" placeholder="Cédula">
                <input name="telefono" type="number" class="registro-datos-input" placeholder="Teléfono">
                <input name="direccion" type="text" class="registro-datos-input" placeholder="Dirección">
                <input name="email" type="email" class="registro-correo-input" placeholder="Email">
                <input name="password" type="password" class="registro-password-input" placeholder="Contraseña">
                <select name="registro-ciudad-input" id="ciudad">
                    <option value="bogota">Bogotá</option>
                    <option value="medellin">Medellín</option>
                    <option value="cali">Cali</option>
                    <option value="barranquilla">Barranquilla</option>
                    <option value="villavicencio">Villavicencio</option>
                </select>
                <div>
                    <button class="reseat">Resetear</button>
                    <!-- <button class="send">Registrar</button> -->
                    <input type="submit" class="send" value="Registrar" >
                </div>

                <p>¿Ya tienes una cuenta?<span>Ingresar</span></p>
            </div>
        </form>
    </main>

    <footer>
        <div>
            <span  class="piePagina">Todos los derechos reservados a Erika Martinez</span>
        </div>
    </footer>
</body>

</html>