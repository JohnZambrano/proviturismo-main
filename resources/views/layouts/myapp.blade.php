<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ProviTurismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/log.png') }}">

    <!-- Styles Css-->
    
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="stylesheet" href="{{ asset('css/serviciosCards.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">

    @vite('resources/css/app.css')


     <!-- Hero Section -->
  <section class="hero-section">
  <div class="hero-content">
        <br><br>  <br><br>  <br><br>  
        <div class="logo-container">
            <img src="{{ asset('img/LogoProviTurismo.png') }}" alt="ProviTurismo Logo" class="footer-logo">
        </div>
        <div class="hero-content">
            <h1 id="hero-title-unique">Descubre ProviTurismo</h1>
            <p id="hero-subtitle-unique">♻️Turismo sostenible y experiencias auténticas🌄</p>
        </div>
        <br><br><br><br>
        
        <!-- Botones modificados -->
        <div class="button-container">
            <a href="/" class="btn btn-panel">
                Página Principal
            </a>

            <a href="/dashboard" class="btn btn-panel">
                Panel Principal
            </a>
        </div>
        <br><br>  
    </div>

    <style>
        .btn-panel {
            background-color:#0d47a1 !important;
            color: white !important;
            padding: 12px 25px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: none;
            display: inline-block;
            margin: 8px;
            font-size: 16px;
            text-align: center;
        }

        .btn-panel:hover {
            background-color: #2c5282 !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
        }

        /* Responsive para móviles */
        @media (max-width: 768px) {
            .button-container {
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 100%;
            }
            
            .btn-panel {
                width: 90%;
                max-width: 300px;
                padding: 12px 20px;
                margin: 8px 0;
                font-size: 14px;
            }
        }
    </style>
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
                            <p>Registrate y ten la oportunidad de promocionar tu servicio a traves de ProviTurismo.</p>
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


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="{{ asset('js/formulario.js') }}"></script>
</body>



<!-- Footer -->
<footer class="footer">
        <div class="footer-container">
        <div class="footer-info">
                <img src="{{ asset('img/LogoProviTurismo.png') }}" alt="ProviTurismo Logo" class="footer-logo">
                <br><br>
                <p>🌄Transformando el turismo con experiencias auténticas y sostenibles.</p>
                <div class="social-icons">
                    <a href="https://www.facebook.com/proviturismo"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-tiktok"></i></a>
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
                <p class="mb-0">&copy; {{ date('Y') }} ProviTurismo. Todos los derechos reservados.<br/><br/><br/><b>  Versión</b> 1.0.0
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
