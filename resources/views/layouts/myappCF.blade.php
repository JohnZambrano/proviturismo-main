<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProviTurismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/mylog.png') }}">

    <!-- Styles Css-->
    <link rel="stylesheet" href="{{ asset('css/graficos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/cards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uniqueCards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styleswelcome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/likes.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    @vite('resources/css/app.css')


     <!-- Hero Section -->
     <section class="hero-section">
        <div class="hero-content">
            <br><br><br><br>
            <div class="logo-container">
                <img src="{{ asset('img/mylog.png') }}" alt="ProviTurismo Logo" class="footer-logo">
            </div>
            <div class="hero-content">
                <h1 id="hero-title-unique">Descubre ProviTurismo</h1>
                <p id="hero-subtitle-unique">♻️El turismo de Nariño y sus experiencias auténticas🌟🌄</p>
            </div>

            <br><br>

            <a href="/" class="btn btn-primary" style="background-color: #28b463; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                Página Principal
            </a>

            <a href="/dashboard" class="btn btn-primary" style="background-color: #28b463; color: white; padding: 10px 20px; border-radius: 25px; text-decoration: none; font-weight: bold; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: background-color 0.3s;">
                Panel Principal
            </a>
            
            <br>
        </div>
        <br>
    </section>
    <br>
</head>
<body>

    <br><br> 
    
    <div class="container">
    
        @yield('content')
    </div>

     <!--Sección de registro a noticias y novedades-->

     <section class="signup-container">
                <div class="background-pattern"></div>
                <div class="signup-content">
                    <h2 class="signup-title">¡Únete a nuestra comunidad!</h2>
                    <p class="signup-description">
                        Regístrate para compartir tus experiencias y mantenerte informado sobre las últimas novedades en Providencia, Nariño
                    </p>

                    <div class="benefits-list">
                       <div class="benefit-item" onclick="location.href='/resenas';" style="cursor: pointer;">
                            <i class="fas fa-star benefit-icon"></i>
                            <h3>Comparte Reseñas:</h3>
                            <br>
                            <p>Comparte tus experiencias y ayuda a otros viajeros.</p>
                        </div>
                        <div class="benefit-item" onclick="location.href='/noticias';" style="cursor: pointer;">
                            <i class="fas fa-bell benefit-icon"></i>
                            <h3>Noticias:</h3>
                            <br>
                            <p>Informate sobre noticias, eventos y novedades.</p>
                        </div>
                        <div class="benefit-item" onclick="location.href='/servicios/servicios';" style="cursor: pointer;">
                            <i class="fas fa-user-friends service-icon"></i>
                            <h3>Ofrece un servicio:</h3>
                            <br>
                            <p>Regístrate y ten la oportunidad de promocionar tu servicio a través de ProviTurismo.</p>
                        </div>
                    </div>


                    <div class="signup-form">
                        <form id="register-form">
                            <p style="font-weight: bold; color: black;">
                                <i class="fas fa-users"></i> Únete a ProviTurismo <i class="fas fa-map-marker-alt"></i>
                            </p>
                            <br>
                            <a href="/register" class="reserve-button">Registrarse</a>
                        </form>
                    </div>
                </div>
            </section>

            <!-- Contenedor para proveedores -->
                <section class="proveedor-section">
                    <div class="proveedor-container">
                        <h3>¿Eres un proveedor<span class="resaltado"> de servicios local?</span> 🚀</h3>
                        <p>
                            Promociona tu servicio en <strong>ProviTurismo</strong>.  
                            Pídele permisos al dueño de la plataforma para publicar tus ofertas y llegar a más turistas. 🌍
                        </p>
                        <a href="/about/index" class="btn-proveedor">
                            📩 Contactar y solicitar permisos
                        </a>
                    </div>
                </section>

                <!-- Estilos -->
                <style>
                    /* Fondo púrpura oscuro general */
                    .proveedor-section {
                        background:#1c1633; /* púrpura oscuro  #1c1633*/
                        padding: 60px 20px;
                        text-align: center;
                        position: relative;
                        overflow: hidden;
                    }

                    /* Contenedor con degradado llamativo */
                    .proveedor-container {
                        background: linear-gradient(135deg, #0E9E7E, #1DB593, #382e61);
                        color: #fff;
                        text-align: center;
                        padding: 2.5rem;
                        border-radius: 25px;
                        margin: 0 auto;
                        max-width: 850px;
                        box-shadow: 0 12px 35px rgba(0,0,0,0.35);
                        animation: fadeInUp 1.5s ease;
                        position: relative;
                        z-index: 1;
                    }

                    .proveedor-container h3 {
                        font-size: 2rem;
                        font-weight: bold;
                        margin-bottom: 15px;
                        text-shadow: 1px 1px 4px rgba(0,0,0,0.4);
                    }

                    .proveedor-container .resaltado {
                        color: #ffeaa7;
                        text-shadow: 2px 2px 6px rgba(0,0,0,0.3);
                    }

                    .proveedor-container p {
                        font-size: 1.2rem;
                        margin-bottom: 25px;
                        line-height: 1.6;
                    }

                    /* Botón atractivo */
                    .btn-proveedor {
                        display: inline-block;
                        padding: 14px 30px;
                        background: linear-gradient(90deg, #ff7675, #e84393);
                        color: #fff;
                        font-size: 1.2rem;
                        font-weight: bold;
                        text-decoration: none;
                        border-radius: 50px;
                        box-shadow: 0 8px 20px rgba(0,0,0,0.3);
                        transition: all 0.3s ease-in-out;
                        animation: pulse 1.8s infinite;
                    }

                    .btn-proveedor:hover {
                        background: linear-gradient(90deg, #d63031, #c0392b);
                        transform: scale(1.1);
                    }

                    /* Partículas decorativas (como en hoteles) */
                    .proveedor-section::before,
                    .proveedor-section::after {
                        content: '';
                        position: absolute;
                        border-radius: 50%;
                        background: rgba(255,255,255,0.08);
                        animation: float 10s infinite ease-in-out;
                    }
                    .proveedor-section::before {
                        width: 100px; height: 100px;
                        top: 15%; left: 10%;
                    }
                    .proveedor-section::after {
                        width: 80px; height: 80px;
                        bottom: 20%; right: 15%;
                    }

                    /* Animaciones */
                    @keyframes fadeInUp {
                        0% { opacity: 0; transform: translateY(40px); }
                        100% { opacity: 1; transform: translateY(0); }
                    }

                    @keyframes pulse {
                        0% { transform: scale(1); }
                        50% { transform: scale(1.1); }
                        100% { transform: scale(1); }
                    }

                    @keyframes float {
                        0%, 100% { transform: translateY(0); }
                        50% { transform: translateY(-15px); }
                    }
                </style>
          <!-------------------------------------------------------------------->


           <div class="social-promotion">
                    <h2 class="social-title">¡Síguenos en Nuestras Redes Sociales!</h2>
                    <p class="social-subtitle">Conéctate con nosotros y descubre contenido exclusivo</p>
                    
                    <div class="social-icons">
                        <a href="https://www.facebook.com/proviturismo"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.tiktok.com/@proviturismo20?_t=ZS-90DxuV7BRWm&_r=1"><i class="fab fa-tiktok"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.youtube.com/@ProviTurismoNari%C3%B1o"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="bubbles-container"></div>
                </div>

                <style>
                .social-promotion {
                    position: relative;
                    padding: 50px 20px;
                    background: linear-gradient(135deg, #3B303D, #095947, #45b7d1,#3B303D);
                    border-radius: 15px;
                    overflow: hidden;
                    margin: 30px auto;
                    max-width: 800px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
                    text-align: center;
                }

                .social-title {
                    font-size: 2.5rem;
                    margin-bottom: 15px;
                    color: white;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    font-weight: 700;
                    position: relative;
                    z-index: 2;
                    animation: titleGlow 3s infinite alternate;
                }

                @keyframes titleGlow {
                    0% {
                        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
                    }
                    100% {
                        text-shadow: 0 0 10px rgba(255, 255, 255, 0.7), 0 0 20px rgba(255, 255, 255, 0.5);
                    }
                }

                .social-subtitle {
                    font-size: 1.2rem;
                    margin-bottom: 30px;
                    color: rgba(255, 255, 255, 0.9);
                    position: relative;
                    z-index: 2;
                }

                .social-icons {
                    display: flex;
                    justify-content: center;
                    gap: 25px;
                    flex-wrap: wrap;
                    position: relative;
                    z-index: 2;
                }

                .social-icons a {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    width: 70px;
                    height: 70px;
                    border-radius: 50%;
                    background: rgba(255, 255, 255, 0.2);
                    color: white;
                    font-size: 1.8rem;
                    text-decoration: none;
                    transition: all 0.4s ease;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                    position: relative;
                    overflow: hidden;
                }

                .social-icons a:before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(45deg, rgba(255,255,255,0.3), transparent);
                    transform: translateX(-100%);
                    transition: transform 0.6s;
                }

                .social-icons a:hover:before {
                    transform: translateX(100%);
                }

                .social-icons a:hover {
                    transform: translateY(-10px) scale(1.1);
                    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.3);
                }

                /* Efectos específicos para cada red social */
                .social-icons a:nth-child(1):hover { 
                    background: #3b5998; 
                    color: white;
                }
                .social-icons a:nth-child(2):hover { 
                    background: #000000; 
                    color: white;
                }
                .social-icons a:nth-child(3):hover { 
                    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
                    color: white;
                }
                .social-icons a:nth-child(4):hover { 
                    background: #ff0000; 
                    color: white;
                }

                /* Animación de burbujas */
                .bubbles-container {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                }

                .bubble {
                    position: absolute;
                    bottom: -50px;
                    background: rgba(255, 255, 255, 0.2);
                    border-radius: 50%;
                    animation: float 15s infinite ease-in;
                    opacity: 0.7;
                }

                @keyframes float {
                    0% {
                        transform: translateY(0) rotate(0deg);
                        opacity: 0.7;
                    }
                    100% {
                        transform: translateY(-1000px) rotate(720deg);
                        opacity: 0;
                    }
                }

                /* Responsive */
                @media (max-width: 768px) {
                    .social-title {
                        font-size: 2rem;
                    }
                    
                    .social-icons a {
                        width: 60px;
                        height: 60px;
                        font-size: 1.5rem;
                    }
                }

                @media (max-width: 480px) {
                    .social-title {
                        font-size: 1.7rem;
                    }
                    
                    .social-subtitle {
                        font-size: 1rem;
                    }
                    
                    .social-icons {
                        gap: 15px;
                    }
                }
                </style>

                <script>
                // Generar burbujas dinámicamente
                document.addEventListener('DOMContentLoaded', function() {
                    const bubblesContainer = document.querySelector('.bubbles-container');
                    const bubbleCount = 15;
                    
                    for (let i = 0; i < bubbleCount; i++) {
                        const bubble = document.createElement('div');
                        bubble.classList.add('bubble');
                        
                        // Tamaño aleatorio
                        const size = Math.random() * 50 + 20;
                        bubble.style.width = `${size}px`;
                        bubble.style.height = `${size}px`;
                        
                        // Posición horizontal aleatoria
                        bubble.style.left = `${Math.random() * 100}%`;
                        
                        // Retraso y duración de animación aleatorios
                        const delay = Math.random() * 15;
                        const duration = Math.random() * 10 + 15;
                        bubble.style.animationDelay = `${delay}s`;
                        bubble.style.animationDuration = `${duration}s`;
                        
                        bubblesContainer.appendChild(bubble);
                    }
                });
                </script>
               


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/likes.js') }}"></script>
    <script src="{{ asset('js/formulario.js') }}"></script>
</body>



<!-- Footer -->
<footer class="footer">
        <div class="footer-container">
        <div class="footer-info">
                <div class="logo-container">
                    <img src="{{ asset('img/myprovidencia.png') }}" alt="ProviTurismo Logo" class="footer-logo">
                </div>
                <br><br>
                <p>🌄Transformando el turismo con experiencias auténticas y sostenibles.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/proviturismo"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.tiktok.com/@proviturismo20?_t=ZS-90DxuV7BRWm&_r=1"><i class="fab fa-tiktok"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@ProviTurismoNari%C3%B1o"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>📌Enlaces Rápidos</h4>
                <ul>
                    <li><a href="/">Inicio</a></li>
                    <li><a href="/lugar_turistico/index">Destinos</a></li>
                    <li><a href="/servicios/servicios">Servicios</a></li>
                    <li><a href="https://municipiodeprovidencia.blogspot.com/2012/12/presentacion-guanama-chiquito.html">Blog</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>🌐Servicios</h4>
                <ul>
                    <li><a href="/evento_cultural/vista11">Tours Guiados</a></li>
                    <li><a href="/noticias">Noticias</a></li>
                    <li><a href="https://www.viajarenverano.com/providencia-narino/">Experiencias</a></li>
                    <li><a href="/about/municipio">Municipio</a></li>
                </ul>
            </div>
            <div class="text-center py-3 border-top border-secondary">
                <p class="mb-0">&copy; {{ date('Y') }} ProviTurismo. Todos los derechos reservados.<br/><br/><br/><b>  Versión</b> 1.0.1
                <span class="px-2">|</span>
                <i class="fas fa-clock"></i> <span id="current-time"></span></p>
            </div>

            

            <div style="margin: 1rem 0;">
                 <a href="https://wa.me/573209911620" target="_blank" style="text-decoration: none; color: #25D366;">
                    <i class="fab fa-whatsapp"></i> WhatsApp Directo
                 </a>
            </div>

            <a href="https://www.digitalocean.com/?refcode=87c26049ef2e&utm_campaign=Referral_Invite&utm_medium=Referral_Program&utm_source=badge"><img src="https://web-platforms.sfo2.cdn.digitaloceanspaces.com/WWW/Badge%201.svg" alt="DigitalOcean Referral Badge" /></a>
        </div>
            
    </footer>
</html>
