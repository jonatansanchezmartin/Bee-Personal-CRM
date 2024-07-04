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
        Panel de usuario. Bee Personal CRM
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

    <script src="https://kit.fontawesome.com/26deb9666d.js" crossorigin="anonymous"></script>


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
        <a href="http://localhost/Bee-CRM/Bee-Personal-CRM/panelDeControl.php"><b>Panel de control</b></a>
    </li>

    <li>
        <a href="http://localhost/Bee-CRM/Bee-Personal-CRM/listaContactos.php"><b>Contactos</b></a>
    </li>

    <li>
        <a href="http://localhost/Bee-CRM/Bee-Personal-CRM/Vista/crearContacto.php"><b>Crear contacto</b></a>
    </li>

    <li>
        <i class="fa-solid fa-bell" style="color: #ffffff;"></i>
    </li>

    <li>
        <i class="fa-solid fa-gear" style="color: #ffffff;"></i>
    </li>
    
    <li>
    <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
    </li>

</ul>



</nav>
        

<section class="panelDeControl">


    <div class="panelDeControl1">

            <h2>
                Información de tu cuenta
            </h2>


        <div class="bloqueProximosEventos">


            <h3 id="nombreUsuario">
                Nombre
            </h3>

            <p>
                Manuel Pérez Collantes
            </p>


            <h3>
                Email
            </h3>
            <p>
                manuelperez@ejemplo.com
            </p>


            <h3>
                Contraseña
            </h3>

            <button onclick="window.location.href='http://localhost/Bee-CRM/Bee-Personal-CRM/Vista/cambiarContraseña.php'">
                <b>Cambiar contraseña</b>
            </button>



        </div>

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
