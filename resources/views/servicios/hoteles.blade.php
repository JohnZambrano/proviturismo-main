@extends('layouts.myappCF')


@section('content')
        <br><br>
           <!-- Contenedor principal con un nombre único -->
            <div id="unique-container" style="background-color: #f9f9f9; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto; opacity: 0; animation: unique-fade-in 0.5s ease-in-out forwards;">


                    <!-- Card para el título con un nombre único -->
                    <div id="unique-title-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 20px; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.2s forwards;">
                        <h2 style="color: #ffffff; font-size: 30px; font-weight: bold; margin: 0;">Conoce los hoteles de Providencia-Nariño</h2>
                    </div>


                    <!-- Card para la información general con un nombre único -->
                    <style>
                        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');
                        
                        .hotel-promo-card {
                            background: linear-gradient(145deg, #1a1a2e 0%, #16213e 100%);
                            border-radius: 20px;
                            padding: 30px;
                            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
                            text-align: center;
                            position: relative;
                            overflow: hidden;
                            opacity: 0;
                            transform: translateY(30px);
                            animation: card-entrance 0.8s ease-out 0.3s forwards;
                            border: 1px solid rgba(255, 255, 255, 0.1);
                            font-family: 'Poppins', sans-serif;
                            margin: 20px 0;
                        }
                        
                        @keyframes card-entrance {
                            0% {
                                opacity: 0;
                                transform: translateY(30px);
                            }
                            100% {
                                opacity: 1;
                                transform: translateY(0);
                            }
                        }
                        
                        .hotel-promo-card::before {
                            content: '';
                            position: absolute;
                            top: -50%;
                            left: -50%;
                            width: 200%;
                            height: 200%;
                            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
                            z-index: 0;
                        }
                        
                        .card-content {
                            position: relative;
                            z-index: 2;
                        }
                        
                        .card-title {
                            color: #ffffff;
                            font-size: 28px;
                            font-weight: 700;
                            margin-bottom: 15px;
                            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                            position: relative;
                            display: inline-block;
                        }
                        
                        .card-title::after {
                            content: '';
                            position: absolute;
                            bottom: -8px;
                            left: 25%;
                            width: 50%;
                            height: 3px;
                            background: linear-gradient(90deg, transparent, #e94560, transparent);
                            border-radius: 3px;
                        }
                        
                        .card-subtitle {
                            color: #b8b8b8;
                            font-size: 16px;
                            margin-bottom: 25px;
                            line-height: 1.5;
                        }
                        
                        .hotel-btn {
                            display: inline-flex;
                            align-items: center;
                            justify-content: center;
                            gap: 12px;
                            background: linear-gradient(135deg, #e94560 0%, #c6364c 100%);
                            color: white;
                            padding: 16px 35px;
                            border-radius: 50px;
                            text-decoration: none;
                            font-weight: 600;
                            font-size: 18px;
                            box-shadow: 0 10px 20px rgba(233, 69, 96, 0.4);
                            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                            position: relative;
                            overflow: hidden;
                            border: none;
                            cursor: pointer;
                            margin-top: 10px;
                        }
                        
                        .hotel-btn:hover {
                            transform: translateY(-5px) scale(1.03);
                            box-shadow: 0 15px 25px rgba(233, 69, 96, 0.6);
                        }
                        
                        .hotel-btn:active {
                            transform: translateY(0) scale(0.98);
                        }
                        
                        .hotel-btn::before {
                            content: '';
                            position: absolute;
                            top: 0;
                            left: -100%;
                            width: 100%;
                            height: 100%;
                            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                            transition: left 0.7s ease;
                        }
                        
                        .hotel-btn:hover::before {
                            left: 100%;
                        }
                        
                        .icon-container {
                            display: flex;
                            justify-content: center;
                            gap: 15px;
                            margin-bottom: 25px;
                        }
                        
                        .hotel-icon {
                            font-size: 40px;
                            animation: float 3s ease-in-out infinite;
                        }
                        
                        .hotel-icon:nth-child(1) { animation-delay: 0s; }
                        .hotel-icon:nth-child(2) { animation-delay: 0.5s; }
                        .hotel-icon:nth-child(3) { animation-delay: 1s; }
                        
                        @keyframes float {
                            0%, 100% { transform: translateY(0); }
                            50% { transform: translateY(-10px); }
                        }
                        
                        .features {
                            display: flex;
                            justify-content: space-around;
                            margin: 25px 0;
                            flex-wrap: wrap;
                        }
                        
                        .feature {
                            display: flex;
                            flex-direction: column;
                            align-items: center;
                            margin: 10px;
                        }
                        
                        .feature i {
                            font-size: 24px;
                            color: #e94560;
                            margin-bottom: 8px;
                        }
                        
                        .feature span {
                            font-size: 14px;
                            color: #b8b8b8;
                        }
                        
                        .pulse {
                            animation: pulse 2s infinite;
                        }
                        
                        @keyframes pulse {
                            0% { transform: scale(1); }
                            50% { transform: scale(1.05); }
                            100% { transform: scale(1); }
                        }
                        
                        .sparkle {
                            position: absolute;
                            width: 20px;
                            height: 20px;
                            background: rgba(255, 255, 255, 0.8);
                            border-radius: 50%;
                            box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.8);
                            opacity: 0;
                        }
                        
                        @media (max-width: 600px) {
                            .hotel-promo-card {
                                padding: 20px;
                            }
                            
                            .card-title {
                                font-size: 24px;
                            }
                            
                            .hotel-btn {
                                padding: 14px 30px;
                                font-size: 16px;
                            }
                            
                            .hotel-icon {
                                font-size: 35px;
                            }
                        }
                    </style>

                    <div class="hotel-promo-card">
                        <div class="card-content">
                            <h1 class="card-title">Descubre Hoteles en Providencia</h1>
                            <p class="card-subtitle">Explora las mejores opciones de alojamiento con comodidades exclusivas y experiencias únicas</p>
                            
                          <div class="icon-container">
                                <div class="hotel-icon">🏨</div>
                                <div class="hotel-icon">🚿</div>
                                <div class="hotel-icon">📡</div>
                            </div>
        
                            <div class="features">
                                <div class="feature">
                                    <i class="fas fa-shower"></i>
                                    <span>Ducha con Agua Caliente</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-tv"></i>
                                    <span>TV Satelital</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-wifi"></i>
                                    <span>WiFi Gratis</span>
                                </div>
                                <div class="feature">
                                    <i class="fas fa-utensils"></i>
                                    <span>Restaurante</span>
                                </div>
                            </div>
                            
                            <a href="/hoteles" class="hotel-btn pulse">
                                <i class="fas fa-hotel"></i>
                                Ver Publicaciones de Hoteles
                            </a>
                        </div>
                    </div>

                    <script>
                        // Crear efecto de chispas al hacer hover en el botón
                        document.querySelector('.hotel-btn').addEventListener('mouseover', function(e) {
                            const button = e.currentTarget;
                            const rect = button.getBoundingClientRect();
                            
                            for (let i = 0; i < 5; i++) {
                                const sparkle = document.createElement('div');
                                sparkle.classList.add('sparkle');
                                
                                const x = Math.random() * rect.width;
                                const y = Math.random() * rect.height;
                                
                                sparkle.style.left = `${x}px`;
                                sparkle.style.top = `${y}px`;
                                
                                button.appendChild(sparkle);
                                
                                // Animación de chispa
                                sparkle.animate([
                                    { opacity: 0, transform: 'scale(0)' },
                                    { opacity: 1, transform: 'scale(1)' },
                                    { opacity: 0, transform: 'scale(0)' }
                                ], {
                                    duration: 800,
                                    easing: 'ease-out'
                                }).onfinish = () => {
                                    sparkle.remove();
                                };
                            }
                        });
                        
                        // Efecto de partículas de fondo
                        document.addEventListener('DOMContentLoaded', function() {
                            const card = document.querySelector('.hotel-promo-card');
                            
                            for (let i = 0; i < 15; i++) {
                                const particle = document.createElement('div');
                                particle.style.position = 'absolute';
                                particle.style.width = Math.random() * 5 + 2 + 'px';
                                particle.style.height = particle.style.width;
                                particle.style.background = 'rgba(255, 255, 255, ' + (Math.random() * 0.3 + 0.1) + ')';
                                particle.style.borderRadius = '50%';
                                particle.style.top = Math.random() * 100 + '%';
                                particle.style.left = Math.random() * 100 + '%';
                                particle.style.zIndex = '1';
                                
                                card.appendChild(particle);
                                
                                // Animación de partículas flotantes
                                particle.animate([
                                    { transform: 'translateY(0px)' },
                                    { transform: 'translateY(-20px)' },
                                    { transform: 'translateY(0px)' }
                                ], {
                                    duration: Math.random() * 3000 + 2000,
                                    iterations: Infinity,
                                    delay: Math.random() * 2000
                                });
                            }
                        });
                    </script>

            </div>
           
        <br><br>


        <div class="container">
           
                <div class="card">
                <img src="{{ asset('img_servicios/HotelRey.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Hotel el Rey</h3>
                        <p>El Hotel El Rey es un alojamiento acogedor y cómodo ubicado en el municipio de Providencia,
                             en el departamento de Nariño, Colombia. Este pequeño municipio, rodeado de paisajes andinos
                             y una atmósfera tranquila, ofrece a los visitantes una experiencia
                              auténtica y relajante con habitaciones cómodas y cerca del parque principal.</p>
                        <a href="/vistasHoteles/vista1" class="reserve-button">Ver más</a>  
                    </div>
                </div>


                <div class="card">
                <img src="{{ asset('img_servicios/20Julio.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Hotel 20 de Julio</h3>
                        <p>El Hotel 20 de Julio es un encantador establecimiento situado en una de las salidas de Providencia,
                            Nariño, Colombia. Con un ambiente acogedor y un enfoque en la atención al cliente, este hotel
                            es perfecto para aquellos que buscan una experiencia auténtica y con mucha privacidad
                             en esta hermosa región y a la vez buen precio.</p>
                            <a href="/vistasHoteles/vista2" class="reserve-button">Ver más</a>
                    </div>
                </div>


                <div class="card">
                <img src="{{ asset('img_servicios/HotelCami2.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Hotel Cami</h3>
                        <p>El Hotel Cami es un acogedor y encantador establecimiento ubicado en el municipio de Providencia,
                             Nariño, Colombia.Este hotel es ideal para aquellos que buscan una experiencia tranquila y
                             auténtica, ofrece comodidad, buena atención y precios accecibles.</p>
                            <a href="/vistasHoteles/vista3" class="reserve-button">Ver más</a>
                    </div>
                </div>


                <div class="card">
                <img src="{{ asset('img_servicios/RedBetania.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Residencia Barrio Betania</h3>
                        <p>La Residencia Barrio Betania es un alojamiento sencillo y acogedor ubicado en el municipio de
                             Providencia, Nariño, Colombia. Este lugar es ideal para los viajeros que buscan una estadía
                              tranquila y económica, con un ambiente familiar y cercano a la comunidad local. </p>
                            <a href="/vistasHoteles/vista4" class="reserve-button">Ver más</a>
                    </div>
                </div>

             <!-- 
             <div class="card">
                <img src="{{ asset('img_servicios/CasaFlores.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="card-content">
                        <h3>Residencia casa de las flores</h3>
                        <p>La Residencia Casa de las Flores es un encantador y acogedor alojamiento situado en el municipio
                            de Providencia, Nariño, Colombia. Este lugar es ideal para aquellos que buscan disfrutar
                             de una estancia tranquila rodeados de un ambiente natural y florido. </p>
                            <a href="/vistasHoteles/vista5" class="reserve-button">Ver más</a>
                           
                    </div>
                </div>
             -->

        </div>    

        @can('crear-servicio-hotel')
            <div class="btn-container">
                <a href="{{ route('hoteles.create') }}" class="btn-magic-blue">
                    <span class="btn-content">
                        <span class="btn-icon">🏨</span>
                        <span class="btn-text">Crear publicación de hotel</span>
                    </span>
                    <div class="btn-glow"></div>
                    <div class="btn-sparkle"></div>
                </a>
            </div>
            @endcan

            <style>
            .btn-container {
                display: flex;
                justify-content: center;
                margin: 1rem 0;
            }

            .btn-magic-blue {
                position: relative;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                min-width: 120px;
                max-width: 280px;
                width: auto;
                height: 50px;
                padding: 0 30px;
                background: linear-gradient(135deg, #1e88e5 0%, #0d47a1 100%);
                color: white;
                text-decoration: none;
                border-radius: 25px;
                font-size: 15px;
                font-weight: 600;
                overflow: hidden;
                transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
                box-shadow: 
                    0 4px 20px rgba(30, 136, 229, 0.4),
                    inset 0 1px 0 rgba(255,255,255,0.2);
                border: none;
                cursor: pointer;
                font-family: 'Segoe UI', system-ui, sans-serif;
            }

            .btn-content {
                display: flex;
                align-items: center;
                gap: 10px;
                z-index: 2;
                position: relative;
                transition: all 0.3s ease;
            }

            .btn-icon {
                font-size: 18px;
                transition: all 0.3s ease;
                filter: drop-shadow(0 2px 3px rgba(0,0,0,0.2));
            }

            .btn-text {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                max-width: 100%;
                text-shadow: 0 1px 2px rgba(0,0,0,0.2);
            }

            .btn-glow {
                position: absolute;
                top: 0;
                left: -100%;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg, 
                    transparent, 
                    rgba(255,255,255,0.4), 
                    transparent);
                transition: left 0.8s ease;
                border-radius: 25px;
            }

            .btn-sparkle {
                position: absolute;
                width: 100%;
                height: 100%;
                background: radial-gradient(circle at center, 
                    rgba(255,255,255,0.3) 0%, 
                    transparent 70%);
                opacity: 0;
                transition: opacity 0.3s ease;
            }

            /* Efectos hover */
            .btn-magic-blue:hover {
                transform: translateY(-3px) scale(1.02);
                box-shadow: 
                    0 8px 30px rgba(30, 136, 229, 0.6),
                    inset 0 1px 0 rgba(255,255,255,0.3);
                background: linear-gradient(135deg, #2196f3 0%, #1565c0 100%);
            }

            .btn-magic-blue:hover .btn-glow {
                left: 100%;
            }

            .btn-magic-blue:hover .btn-sparkle {
                opacity: 1;
            }

            .btn-magic-blue:hover .btn-icon {
                transform: scale(1.3) rotate(15deg);
            }

            .btn-magic-blue:hover .btn-content {
                transform: translateX(2px);
            }

            /* Efecto activo/presionado */
            .btn-magic-blue:active {
                transform: translateY(-1px) scale(0.99);
                box-shadow: 
                    0 3px 15px rgba(30, 136, 229, 0.5),
                    inset 0 1px 0 rgba(255,255,255,0.2);
                transition: all 0.1s ease;
            }

            /* Animación de pulso azul */
            @keyframes bluePulse {
                0%, 100% { 
                    box-shadow: 
                        0 4px 20px rgba(30, 136, 229, 0.4),
                        inset 0 1px 0 rgba(255,255,255,0.2);
                }
                50% { 
                    box-shadow: 
                        0 4px 25px rgba(30, 136, 229, 0.7),
                        inset 0 1px 0 rgba(255,255,255,0.3);
                }
            }

            .btn-magic-blue {
                animation: bluePulse 3s infinite ease-in-out;
            }

            /* Efecto de partículas al hacer hover */
            .btn-magic-blue::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: radial-gradient(circle at var(--x) var(--y), 
                    rgba(255,255,255,0.4) 0%, 
                    transparent 30%);
                opacity: 0;
                transition: opacity 0.3s;
                border-radius: 25px;
            }

            .btn-magic-blue:hover::before {
                opacity: 1;
            }

            /* Responsive */
            @media (max-width: 768px) {
                .btn-magic-blue {
                    height: 45px;
                    padding: 0 25px;
                    font-size: 14px;
                    min-width: 110px;
                    max-width: 240px;
                }
                
                .btn-icon {
                    font-size: 16px;
                }
            }

            @media (max-width: 480px) {
                .btn-magic-blue {
                    height: 42px;
                    padding: 0 20px;
                    font-size: 13px;
                    min-width: 100px;
                    max-width: 200px;
                }
                
                .btn-text {
                    font-size: 13px;
                }
            }

            /* Efecto de foco para accesibilidad */
            .btn-magic-blue:focus {
                outline: none;
                box-shadow: 
                    0 0 0 3px rgba(33, 150, 243, 0.5),
                    0 4px 20px rgba(30, 136, 229, 0.4);
            }

            /* Efecto de carga sutil */
            @keyframes shimmer {
                0% { background-position: -200% 0; }
                100% { background-position: 200% 0; }
            }

            .btn-magic-blue::after {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(90deg,
                    transparent,
                    rgba(255,255,255,0.1),
                    transparent);
                background-size: 200% 100%;
                animation: shimmer 3s infinite;
                border-radius: 25px;
                opacity: 0.5;
            }
            </style>

            <script>
            // Efecto de partículas que siguen el mouse
            document.addEventListener('DOMContentLoaded', function() {
                const button = document.querySelector('.btn-magic-blue');
                
                if (button) {
                    button.addEventListener('mousemove', function(e) {
                        const rect = button.getBoundingClientRect();
                        const x = e.clientX - rect.left;
                        const y = e.clientY - rect.top;
                        
                        button.style.setProperty('--x', x + 'px');
                        button.style.setProperty('--y', y + 'px');
                    });
                }
            });
            </script>


           
           
@endsection




   
