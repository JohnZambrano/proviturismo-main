@extends('layouts.myapp')

@section('content')

<br><br><br>

 <!-- Sección para revisar los servicios de Providencia-Nariño-->
            <section class="futuristic-services">
                <div class="services-container">
                    <div class="light-effect light-1"></div>
                    <div class="light-effect light-2"></div>
                    
                    <h2 class="services-title">Servicios en Providencia, Nariño</h2>
                    
                    <div class="services-grid">
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-hotel"></i>
                            </div>
                            <h3 class="service-title">Hoteles</h3>
                            <p class="service-description">Los hoteles en Providencia, Nariño, ofrecen una experiencia acogedora y auténtica para todos los visitantes.</p>
                            <a href="/servicios/hoteles" class="service-btn">Ver más</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-utensils"></i>
                            </div>
                            <h3 class="service-title">Restaurantes</h3>
                            <p class="service-description">Los restaurantes en Providencia, Nariño, ofrecen una deliciosa variedad de platos locales y tradicionales.</p>
                            <a href="/servicios/restaurantes" class="service-btn">Ver más</a>
                        </div>
                        
                        <div class="service-card">
                            <div class="service-icon">
                                <i class="fas fa-bus"></i>
                            </div>
                            <h3 class="service-title">Transporte</h3>
                            <p class="service-description">El transporte en Providencia, Nariño, es eficiente y accesible, con opciones que incluyen autobuses locales y servicios de camionetas.</p>
                            <a href="/servicios/transporte" class="service-btn">Ver más</a>
                        </div>
                    </div>
                    
                    <div class="particles" id="particles"></div>
                </div>
            </section>

            <style>
                .futuristic-services {
                    width: 100%;
                    padding: 80px 20px;
                    background: linear-gradient(135deg, #0a0a1a, #1a1a3a, #0a0a1a);
                    position: relative;
                    overflow: hidden;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                
                .services-container {
                    max-width: 1200px;
                    margin: 0 auto;
                    background: rgba(15, 12, 41, 0.7);
                    backdrop-filter: blur(10px);
                    border-radius: 20px;
                    padding: 60px 40px;
                    box-shadow: 0 0 50px rgba(82, 113, 255, 0.3);
                    position: relative;
                    overflow: hidden;
                    border: 1px solid rgba(82, 113, 255, 0.2);
                    animation: containerAppear 1.5s ease-out;
                }
                
                @keyframes containerAppear {
                    0% {
                        opacity: 0;
                        transform: translateY(50px) scale(0.9);
                    }
                    100% {
                        opacity: 1;
                        transform: translateY(0) scale(1);
                    }
                }
                
                .services-title {
                    text-align: center;
                    font-size: 42px;
                    font-weight: 800;
                    margin-bottom: 60px;
                    position: relative;
                    z-index: 2;
                    background: linear-gradient(90deg, #00dbde, #fc00ff, #00dbde);
                    background-size: 200% auto;
                    -webkit-background-clip: text;
                    background-clip: text;
                    -webkit-text-fill-color: transparent;
                    animation: shimmer 3s linear infinite;
                    text-shadow: 0 0 20px rgba(255, 255, 255, 0.2);
                }
                
                @keyframes shimmer {
                    0% {
                        background-position: 0% center;
                    }
                    100% {
                        background-position: 200% center;
                    }
                }
                
                .services-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
                    gap: 30px;
                    margin-top: 40px;
                }
                
                .service-card {
                    background: rgba(255, 255, 255, 0.05);
                    border-radius: 20px;
                    padding: 40px 30px;
                    text-align: center;
                    transition: all 0.4s ease;
                    position: relative;
                    overflow: hidden;
                    border: 1px solid rgba(82, 113, 255, 0.1);
                    z-index: 1;
                    cursor: pointer;
                }
                
                .service-card::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
                    transition: left 0.7s;
                    z-index: -1;
                }
                
                .service-card:hover::before {
                    left: 100%;
                }
                
                .service-card:hover {
                    transform: translateY(-15px) scale(1.03);
                    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
                    border-color: rgba(82, 113, 255, 0.5);
                }
                
                .service-icon {
                    font-size: 70px;
                    margin-bottom: 25px;
                    display: inline-block;
                    animation: float 4s ease-in-out infinite;
                    filter: drop-shadow(0 0 10px rgba(255, 255, 255, 0.3));
                }
                
                .service-card:nth-child(1) .service-icon {
                    color: #ff6b6b;
                }
                
                .service-card:nth-child(2) .service-icon {
                    color: #4ecdc4;
                }
                
                .service-card:nth-child(3) .service-icon {
                    color: #ffe66d;
                }
                
                @keyframes float {
                    0%, 100% {
                        transform: translateY(0);
                    }
                    50% {
                        transform: translateY(-10px);
                    }
                }
                
                .service-title {
                    font-size: 32px;
                    font-weight: 700;
                    margin-bottom: 20px;
                    color: #fff;
                    text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
                }
                
                .service-description {
                    color: rgba(255, 255, 255, 0.8);
                    line-height: 1.6;
                    font-size: 18px;
                    margin-bottom: 25px;
                    min-height: 80px;
                }
                
                .service-btn {
                    display: inline-block;
                    padding: 12px 30px;
                    background: linear-gradient(45deg, #00dbde, #fc00ff);
                    color: white;
                    text-decoration: none;
                    border-radius: 50px;
                    font-weight: 600;
                    font-size: 16px;
                    transition: all 0.3s ease;
                    position: relative;
                    overflow: hidden;
                    z-index: 1;
                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                }
                
                .service-btn::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(45deg, #fc00ff, #00dbde);
                    transition: left 0.5s;
                    z-index: -1;
                }
                
                .service-btn:hover::before {
                    left: 0;
                }
                
                .service-btn:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
                }
                
                /* Partículas flotantes */
                .particles {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    z-index: 0;
                    pointer-events: none;
                }
                
                .particle {
                    position: absolute;
                    width: 4px;
                    height: 4px;
                    background: rgba(82, 113, 255, 0.7);
                    border-radius: 50%;
                    animation: floatParticle 15s infinite linear;
                }
                
                @keyframes floatParticle {
                    0% {
                        transform: translateY(0) translateX(0);
                        opacity: 0;
                    }
                    10% {
                        opacity: 1;
                    }
                    90% {
                        opacity: 1;
                    }
                    100% {
                        transform: translateY(-100vh) translateX(100px);
                        opacity: 0;
                    }
                }
                
                /* Efectos de luz */
                .light-effect {
                    position: absolute;
                    width: 300px;
                    height: 300px;
                    border-radius: 50%;
                    background: radial-gradient(circle, rgba(82, 113, 255, 0.2) 0%, rgba(82, 113, 255, 0) 70%);
                    filter: blur(20px);
                    z-index: 0;
                    animation: pulse 8s infinite alternate;
                }
                
                .light-1 {
                    top: -150px;
                    right: -150px;
                }
                
                .light-2 {
                    bottom: -150px;
                    left: -150px;
                    animation-delay: 2s;
                }
                
                @keyframes pulse {
                    0% {
                        transform: scale(1);
                        opacity: 0.5;
                    }
                    100% {
                        transform: scale(1.3);
                        opacity: 0.8;
                    }
                }
                
                /* Responsive */
                @media (max-width: 768px) {
                    .services-title {
                        font-size: 32px;
                    }
                    
                    .services-container {
                        padding: 40px 25px;
                    }
                    
                    .service-card {
                        padding: 30px 20px;
                    }
                    
                    .service-icon {
                        font-size: 60px;
                    }
                    
                    .service-title {
                        font-size: 28px;
                    }
                    
                    .service-description {
                        font-size: 16px;
                    }
                }
                
                @media (max-width: 480px) {
                    .services-title {
                        font-size: 28px;
                    }
                    
                    .services-grid {
                        grid-template-columns: 1fr;
                    }
                    
                    .futuristic-services {
                        padding: 60px 15px;
                    }
                    
                    .service-icon {
                        font-size: 50px;
                    }
                    
                    .service-title {
                        font-size: 24px;
                    }
                }
            </style>

            <script>
                // Crear partículas dinámicas
                document.addEventListener('DOMContentLoaded', function() {
                    const particlesContainer = document.getElementById('particles');
                    const particleCount = 50;
                    
                    for (let i = 0; i < particleCount; i++) {
                        const particle = document.createElement('div');
                        particle.classList.add('particle');
                        
                        // Posición aleatoria
                        particle.style.left = Math.random() * 100 + '%';
                        particle.style.top = Math.random() * 100 + '%';
                        
                        // Tamaño aleatorio
                        const size = Math.random() * 4 + 2;
                        particle.style.width = size + 'px';
                        particle.style.height = size + 'px';
                        
                        // Opacidad aleatoria
                        particle.style.opacity = Math.random() * 0.7 + 0.3;
                        
                        // Duración de animación aleatoria
                        particle.style.animationDuration = (Math.random() * 10 + 10) + 's';
                        particle.style.animationDelay = (Math.random() * 5) + 's';
                        
                        particlesContainer.appendChild(particle);
                    }
                    
                    // Efecto hover para las tarjetas
                    const serviceCards = document.querySelectorAll('.service-card');
                    
                    serviceCards.forEach(card => {
                        card.addEventListener('mouseenter', function() {
                            this.style.zIndex = '10';
                        });
                        
                        card.addEventListener('mouseleave', function() {
                            this.style.zIndex = '1';
                        });
                    });
                });
            </script>

            <br><br>


@endsection


    

