<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Portfolio</title>
        <link rel="stylesheet" type="text/css" href="../css/portfolio.css">
    </head>

    <body>    
        <!-- HEADER -->
        <section id="header">
            <div class="header_container">
                <div class="nav_bar">
                    <div class="my_name_brand">
                        <a href="#main_page"><h1><span>C</span>astaño</h1></a>
                    </div>

                    <div class="nav_list">
                        <ul>
                            <li><a href="#main_page">Home</a></li>
                            <li><a href="#about_me">About me</a></li>
                            <li><a href="#projects">Projects</a></li>
                            <li><a href="#education">Education</a></li>
                            <li><a href="#contact">Contact</a></li> 
                        </ul>                        
                    </div>                   
                </div> 
            </div>
        </section>

        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // obtenemos valores del formulario
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // mostramos, por pantalla, los datos del formulario
                echo "<div style='text-align: center; padding-top: 150.5px;'>";
                    echo "<h2 style='color: rgba(3, 148, 99, 0.874); font-size: 30px;'>¡El mensaje se ha enviado con éxito!</h2><br>";
                    echo "<p style='font-size: 20px;'><strong>Nombre:</strong> $name</p>";
                    echo "<p style='font-size: 20px;'><strong>Correo electrónico:</strong> $email</p>";
                    echo "<p style='font-size: 20px;'><strong>Mensaje:</strong> $message</p>";
                echo "</div>";
            }
        ?>

        <!-- BOTÓN DESDE PHP PARA VOLVER AL PORTFOLIO -->
        <br><br><br>
        <center><a href="../portfolio.html" type="button" class="button" id="formButton">Volver</a></center>


        <br><br><br>
        <!-- FOOTER -->
        <section id="footer">
            <div class="footer container">
                <div class="my_name"><h1><span>L</span>ucía <span>C</span>astaño</h1></div>
                <h2>My portfolio in 2023</h2>
                <div class="social_media">
                    <div class="social_icon">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/linkedin.png" alt=""></i></a>
                    </div>

                    <div class="social_icon">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/instagram-new.png" alt=""></i></a>
                    </div>

                    <div class="social_icon">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/whatsapp.png" alt=""></i></a>
                    </div>

                    <div class="social_icon">
                        <a href="#"><img src="https://img.icons8.com/bubbles/100/000000/facebook-new.png" alt=""></a>
                    </div>
                </div>
                <p>Copyright © 2023 Lucía. All rights reserved</p>
            </div>
        </section>
    </body>
</html>