<!DOCTYPE html>
<html lang="es">
<head>

    <meta 
        charset="UTF-8"
        >

    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0"
        >

    <title>
        Cambio de contraseña. Bee Personal CRM
    </title>

    <link 
        rel="stylesheet" 
        type="text/css" 
        href="./styles.css"
        />

    <meta 
            name= "Bee Personal CRM" 
            content= "Remember your loved ones and their birthdays."
        >

    <link 
        rel="icon" 
        href="./media/abejaLogo.png" 
        type="image/x-icon" 
        sizes="any"
    >

</head>


<body>

<div class="container">
            
        <nav>

            <div class="logo">
                <a href="#">
                    <img 
                        src="media/abejaLogo.png" 
                        alt="Bee Personal CRM"
                        class="abejaLogo" 
                        >
                </a>

                <p>
                    <b>
                        Bee Personal CRM
                    </b>
                </p>

            </div>

            <ul class="menu">

                <li>
                    <a href="http://localhost/Bee-CRM/Bee-Personal-CRM/Vista/index.php"><b>Inicio</b></a>
                </li>

                <li>
                    <a href="http://localhost/Bee-CRM/Bee-Personal-CRM/Vista/ingresar.php"><b>Ingresar</b></a>
                </li>

                <li>
                    <button class="botonAmarillo"><a href="http://localhost/Bee-CRM/Bee-Personal-CRM/Vista/registro.php" class="enlaceBoton"><b>Registrarse</b></a></button>
                </li>

            </ul>



        </nav>
        

        <section class="fila6">


            <div class="bloqueFormulario">

                <h2>
                    Cambiar contraseña
                <h2>


                <form>


                    <div>
                        <label for="password">Contraseña nueva</label><br>
                        <input type="password"/><br><br>
                    </div>

                    <div>
                        <label for="confirm-password">Confirmar contraseña</label><br>
                        <input type="password" id="confirm-password"/><br>
                    </div>

                    <br/>

                    <div>

                    <button type="submit" class="botonRegistrar"><a href="#"><b>Registrarse<b></a></button>

                    </div>


                </form>

            </div>

            <div class="bloqueFiesta">

                <img 
                    src="media/fiesta.jpg"
                    alt="fieta de cumpleaños"
                    class="imagenFiesta" 
                    >

            </div>

        </section>


<footer>

<ul class="menuFooter">

<li>
    <a href="#">Aviso legal</a>
</li>

<li>
    <a href="#">Política de privacidad</a>
</li>

<li>
    <a href="#">Política de cookies</a>
</li>

</ul>

<p>&copy Bee Personal CRM all rights reserved</p>

</footer>

<script src="script.js"></script>
   

</body>

</html>