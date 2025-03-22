
@extends('layouts.myappLugares')

@section('content')

            <section class="main-hero" data-aos="fade-down" style="background: linear-gradient(rgba(34,139,34,0.9), rgba(34,139,34,0.7)), url('https://picsum.photos/1920/600?travel') center/cover;">
                <div class="hero-header">
                    <h1 class="main-title">🏕️Estadio San Bernardo🗺️</h1>
                    <div class="title-decoration">
                        <div class="decoration-line"></div>
                        <div class="decoration-star">✧</div>
                        <div class="decoration-line"></div>
                    </div>
                    <p class="hero-subtitle">Explora la belleza natural y disfruta de actividades ecoturísticas únicas</p>
                </div>
            </section>
             <br><br>
          <!-- Sección de Video -->
            <section class="video-section">
                <div class="video-container">
                <video autoplay loop muted playsinline class="video-background" controls>
                        <!-- Corregir el type del primer video de "video/m4" a "video/mp4" -->
                        <source src="{{ asset('videos/estadio.mp4') }}" type="video/mp4">
                        <source src="{{ asset('videos/estadio.webm') }}" type="video/webm">
                        <source src="{{ asset('videos/estadio.ogv') }}" type="video/ogg">
                        Tu navegador no soporta la etiqueta de video.
                    </video>
                </div>
            </section>
       
           
    

    <!-- Sección Descripción -->
    <section id="descripcion" class="section-info" data-aos="fade-up">
        <div class="section-header">
            <h2>🌍Conoce sobre el lugar🚶</h2>
            <div class="decorative-line"></div>
        </div>
        
        <div class="info-cards">

          <div class="info-card" data-aos="flip-left">
                <i class="fas fa-map-marked-alt"></i>
                <h3>Ubicación y características:</h3>
                <p> El Estadio San Bernardo, ubicado en la vereda La Floresta, 
                    es un lugar especial para la comunidad de Providencia, especialmente para los jóvenes
                     y amantes del fútbol.</p>
            </div>
            
            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-road"></i>
                <h3>Accesibilidad:</h3>
                <p> El estadio está a 10 minutos a pie desde el casco urbano, con acceso en moto, bicicleta,
                     a pie o en carro, y cuenta con pequeñas tiendas locales para refrescos y comida.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-camera"></i>
                <h3>Experiencia comunitaria: </h3>
                <p> El estadio es un punto de encuentro para la comunidad, ofreciendo un espacio para disfrutar 
                    del deporte y la convivencia, a pesar de sus limitaciones estructurales.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-monument"></i>
                <h3> Historia:</h3>
                <p> Antes de ser un estadio, el sitio era una pista de motocross muy reconocida, que atraía a pilotos
                     de muchas partes y era un espectáculo para la comunidad.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-sun"></i>
                <h3>Actividades y experiencias:</h3>
                <p> El fútbol es la principal atracción, con el campeonato de verano
                     que reúne equipos de distintas veredas y barrios, creando un ambiente de sana competencia
                      y amistad.</p>
            </div>

            <div class="info-card" data-aos="flip-left">
                <i class="fas fa-hiking"></i>
                <h3>Recomendaciones para visitantes:</h3>
                <p> Se recomienda visitar durante el torneo de verano, llevar protección solar y agua, y llegar temprano
                     para disfrutar del ambiente festivo creado por vendedores ambulantes e hinchas.

</p>
            </div>
        </div>
    </section>

         <!-- Sección de Horarios y Rutas -->
     <section class="rutas-section" id="rutas">
        <h2 style="text-align: center; color: var(--primary); margin-bottom: 2rem;">Mapa de localización del municipio de Providencia-Nariño</h2>
        
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63795.45603278168!2d-77.4835976!3d1.5564694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e29943234a82c37%3A0x60f5d84d79b4d4d7!2sProvidencia%2C%20Nari%C3%B1o!5e0!3m2!1ses!2sco!4v1718507271719!5m2!1ses!2sco" 
                    width="100%" 
                    height="100%" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy">
            </iframe>
        </div>

       
    </section>


    <!-- Sección Actividades -->
    <section id="actividades" class="activities-section">
        <h2 data-aos="fade-right">🌿Experiencias únicas que vivirás🌄</h2>
        
        <div class="activity-carousel">
            <!-- Carrusel con tarjetas -->
            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/fut3.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista del Estadio San Bernardo: </h4>
                    <p> Una vista panorámica del estadio, mostrando su amplio terreno.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/cicla.jpg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Camino hacia el Estadio:</h4>
                    <p>  Un camino bien mantenido que lleva al estadio, accesible en moto, bicicleta, a pie o en carro.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/fut2.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Vista del Estadio San Bernardo: </h4>
                    <p> Una vista panorámica del estadio, mostrando su amplio terreno.</p>
                    <div class="icon-group">
                        <i class="fas fa-hiking"></i>
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/fut1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Partido de Fútbol: </h4>
                    <p> Jugadores compitiendo en un partido amistoso en el estadio.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
                <img src="{{ asset('img_actividades/fut.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Campeonato de Verano:</h4>
                    <p>  Equipos locales compitiendo en el esperado torneo de verano.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/fut1.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Ambiente Festivo:</h4>
                    <p> Vendedores ambulantes y hinchas creando un ambiente animado durante los partidos importantes. </p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <div class="activity-card" data-aos="zoom-in">
               <img src="{{ asset('img_lugares/his.jpeg') }}" class="d-block w-100" alt="imagen">
                <div class="card-content">
                    <h4>Historia del Estadio: </h4>
                    <p> Una imagen que recuerda los días del estadio como una pista de motocross reconocida.</p>
                    <div class="icon-group">
                    <i class="fas fa-hiking"></i>
                    <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
            </div>

            <!-- Más tarjetas de actividades -->
        </div>

        <br><br>


        <div class="review-container">
            <a href="{{ route('resenas.create') }}" class="review-btn" onclick="showRating()" >
                <span>⭐ Dejar Reseña</span>
            </a>
        </div>


            <div class="overlay" onclick="closeRating()"></div>

            <div class="rating-container">
                <h3>Califica tu experiencia</h3>
                <div class="stars">
                    <div class="star" onclick="rate(1)">★</div>
                    <div class="star" onclick="rate(2)">★</div>
                    <div class="star" onclick="rate(3)">★</div>
                    <div class="star" onclick="rate(4)">★</div>
                    <div class="star" onclick="rate(5)">★</div>
                </div>
            </div>

    </section>

    <!-- Sección Recomendaciones -->
    <section id="recomendaciones" class="recommendations" data-aos="fade-up">
        <div class="recommendation-box">
            <i class="fas fa-lightbulb"></i>
            <h3>Consejos prácticos:</h3>
            <ul class="tips-list">
                <li><i class="fas fa-clock"></i> Iniciar temprano</li>
                <li><i class="fas fa-tshirt"></i> Ropa cómoda</li>
                <li><i class="fas fa-map-marked-alt"></i> Utilizar Google Maps</li>
            </ul>
            <blockquote>
                "El Estadio San Bernardo es más que un campo de fútbol; es un punto de encuentro para
                 la comunidad de Providencia. Desde sus días como pista de motocross hasta su transformación
                  en un estadio, ha sido un lugar especial que refleja la pasión deportiva y el
                   espíritu comunitario del municipio."
                <span>- Relata un entrevistado que ha participado del evento.</span>
            </blockquote>
        </div>
    </section>
    @endsection