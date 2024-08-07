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
        Inicio. Bee Personal CRM
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
                    <button class="botonAmarillo" onclick="window.location.href='http://localhost/Bee-CRM/Bee-Personal-CRM/Vista/registro.php'"><b>Registrarse</b></button>
                </li>

            </ul>



        </nav>
        

        <header>

            <div class="Fila1Columna1">

                <h1>
                    No te olvides de los tuyos y sus cumpleaños
                </h1>

                <p id="pfila1">
                    CRM personal para organizar la información de tus contactos, crear recordatorios de cumpleaños y mantener el contacto con tus seres queridos.
                </p>

                <button class="botonNegro">
                    <a href="http://localhost/Bee-Personal-CRM/Vista/registro.php"><b>Empezar</b></a>
                </button>

            </div>

            <div class="Fila1Columna2">
                <img src="media/llamada.jpg" id="hombreTelefono" alt="Hombre al teléfono">
            </div>


        </header>

        <section class="fila2">

        <div class="col1Fila2">
                <img src="media/llamada3.jpg" id="llamadaJoven">
        </div>

        <div class="col2Fila2">

            <h2>
                Di adiós al olvido de felicitar los cumpleaños
            </h2>

            <p>
                Ahórrate la decepción y las disculpas al olvidar los cumpleaños.
            </p>

            <p>
                Recibe recordatorios para no perderte esas fechas importantes.
            </p>

        </div>

        </section>


        <section class="fila3">


        <div class="col1Fila3">

            <h2>
                ¿Para qué un CRM personal?
            </h2>

            <p>
            ¿Cuándo fue la última vez que hablaste con tu mejor amigo de la secundaria? ¿Felicitaste a tu hermana por su aniversario de boda? ¿Te acuerdas del nombre de los hijos de tus primos?
            </p>

            <p>
                Para todo esto y más sirve un CRM personal.
            </p>

        </div>

        <div class="col2Fila3">
                <img src="media/videollamada.jpg" id="llamadaJoven">
        </div>

</section>


<section class="fila4">

    <div class="col1fila4">
        

        <img 
            src="media/ring-phone.png"
            alt="usuarios"
            id="phone"
            >


        
        <h3>
            Mantén el contacto con amigos y familia
        </h3>
        
        <p>
            Planifica llamadas y mensajes periódicos para construir relaciones más fuertes.
        </p>

    </div>


    <div class="col2fila4">

        <img 
            src="media/campana.png"
            alt="campana"
            >
        
        <h3>
            Recuerda cumpleaños
        </h3>
        
        <p>
            Programa recordatorios para felicitar a familiares y amigos.  También para sus regalos.
        </p>
        
    </div>

    <div class="col3fila4">

    <img 
            src="media/usuarios.png"
            alt="usuarios"
            >
            
            <h3>
                Tus contactos en un lugar
            </h3>
            
            <p>
                Agrega información de contato y detalles a recordar de cualquier persona.
            </p>
        
    </div>


</section>


<section class="fila5">
    
<quote>
    Bee CRM te ayuda a ser mejor persona y construir relaciones más fuertes con las personas que te importan.
</quote>

<img src="media/jon.jpg" id="jon">

<p>
    <b>
        Jonatan Sánchez, fundador de Bee Personal CRM
    <b>
<p>


</section>

<hr>

<section class="fila6">


    <div class="bloqueFormulario">

        <h2>
            Regístrate ahora
        <h2>


        <form>

            <div>
                <label for="Name">Nombre</label><br>
                <input type="text" id="Name"/><br><br>
            </div>

            <div>
                <label for="email">Email</label><br>
                <input type="email"/><br><br>
            </div>

            <div>
                <label for="password">Contraseña</label><br>
                <input type="password"/><br><br>
            </div>

            <div>
                <label for="confirm-password">Confirmar contraseña</label><br>
                <input type="password" id="confirm-password"/><br>
            </div>

            <br/>
            
            <button type="submit" class="botonRegistrar"><a href="#"><b>Registrarse<b></a></button>

        </form>

    </div>

    <div class="mujerTexting">

    <img 
        src="media/texting.jpg"
        alt="mujer con móvil"
        class="imagenFormulario" 
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


