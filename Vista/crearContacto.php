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
        Crear Contacto. Bee Personal CRM
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
                    <a href="http://localhost/Bee-Personal-CRM/Vista/panelDeControl.php"><b>Panel de control</b></a>
                </li>

                <li>
                    <a href="http://localhost/Bee-Personal-CRM/Vista/listaContactos.php"><b>Contactos</b></a>
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
        

        <section class="fila6">


            <div class="formularioContacto">

                <h2>
                    Agregar contacto nuevo
                <h2>


                <form id="CreateContact">

                    <div>
                        <label for="name">Nombre</label><br>
                        <input type="text" id="Name" required/><br><br>
                    </div>

                    <div>
                        <label for="description">Breve descripción</label><br>
                        <input type="text" id="description" required placeholder="Ej. Vecina"/><br><br>
                    </div>

                    <div>
                        <label for="lastName">Apellidos (opcional)</label><br>
                        <input type="text" id="lastName"/><br><br>
                    </div>

                    <div>
                        <label for="nickName">Apodo (opcional)</label><br>
                        <input type="text" id="nickName"/><br><br>
                    </div>

                    <div>
                        <label for="email">Email (opcional)</label><br>
                        <input type="email"/><br><br>
                    </div>

                    <div>
                        <label for="phone">Teléfono (opcional)</label><br>
                        <input type="tel"/><br><br>
                    </div>

                    <div class="botonesContacto">

                            <button type="submit" class="botonContacto" id="crear">
                                <a href="#">
                                    <b>Agregar<b>

                                </a>
                            </button>


                    </div>

                </form>

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

