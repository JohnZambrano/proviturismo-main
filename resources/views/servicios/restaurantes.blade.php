@extends('layouts.myappCF')
<br><br>
@section('content')
        <br><br>
           <!-- Contenedor principal con un nombre único -->
            <div id="unique-container" style="background-color: #f9f9f9; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto; opacity: 0; animation: unique-fade-in 0.5s ease-in-out forwards;">


                    <!-- Card para el título con un nombre único -->
                    <div id="unique-title-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 20px; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.2s forwards;">
                        <h2 style="color: #ffffff; font-size: 30px; font-weight: bold; margin: 0;">Conoce los restaurantes de Providencia-Nariño</h2>
                    </div>


                    <!-- Card para la información general con un nombre único -->
                   
                <style>
                    .restaurant-promo-card {
                        background: linear-gradient(145deg, #1a3a1a 0%, #1a2e1a 100%);
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
                    
                    .restaurant-promo-card::before {
                        content: '';
                        position: absolute;
                        top: -50%;
                        left: -50%;
                        width: 200%;
                        height: 200%;
                        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
                        z-index: 0;
                    }
                    
                    .restaurant-card-content {
                        position: relative;
                        z-index: 2;
                    }
                    
                    .restaurant-card-title {
                        color: #ffffff;
                        font-size: 28px;
                        font-weight: 700;
                        margin-bottom: 15px;
                        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                        position: relative;
                        display: inline-block;
                    }
                    
                    .restaurant-card-title::after {
                        content: '';
                        position: absolute;
                        bottom: -8px;
                        left: 25%;
                        width: 50%;
                        height: 3px;
                        background: linear-gradient(90deg, transparent, #28b463, transparent);
                        border-radius: 3px;
                    }
                    
                    .restaurant-card-subtitle {
                        color: #b8b8b8;
                        font-size: 16px;
                        margin-bottom: 25px;
                        line-height: 1.5;
                    }
                    
                    .restaurant-btn {
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        gap: 12px;
                        background: linear-gradient(135deg, #28b463 0%, #1e8449 100%);
                        color: white;
                        padding: 16px 35px;
                        border-radius: 50px;
                        text-decoration: none;
                        font-weight: 600;
                        font-size: 18px;
                        box-shadow: 0 10px 20px rgba(40, 180, 99, 0.4);
                        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                        position: relative;
                        overflow: hidden;
                        border: none;
                        cursor: pointer;
                        margin-top: 10px;
                    }
                    
                    .restaurant-btn:hover {
                        transform: translateY(-5px) scale(1.03);
                        box-shadow: 0 15px 25px rgba(40, 180, 99, 0.6);
                    }
                    
                    .restaurant-btn:active {
                        transform: translateY(0) scale(0.98);
                    }
                    
                    .restaurant-btn::before {
                        content: '';
                        position: absolute;
                        top: 0;
                        left: -100%;
                        width: 100%;
                        height: 100%;
                        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                        transition: left 0.7s ease;
                    }
                    
                    .restaurant-btn:hover::before {
                        left: 100%;
                    }
                    
                    .restaurant-icon-container {
                        display: flex;
                        justify-content: center;
                        gap: 15px;
                        margin-bottom: 25px;
                    }
                    
                    .restaurant-icon {
                        font-size: 40px;
                        animation: restaurant-float 3s ease-in-out infinite;
                    }
                    
                    .restaurant-icon:nth-child(1) { animation-delay: 0s; }
                    .restaurant-icon:nth-child(2) { animation-delay: 0.5s; }
                    .restaurant-icon:nth-child(3) { animation-delay: 1s; }
                    
                    @keyframes restaurant-float {
                        0%, 100% { transform: translateY(0); }
                        50% { transform: translateY(-10px); }
                    }
                    
                    .restaurant-features {
                        display: flex;
                        justify-content: space-around;
                        margin: 25px 0;
                        flex-wrap: wrap;
                    }
                    
                    .restaurant-feature {
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        margin: 10px;
                    }
                    
                    .restaurant-feature i {
                        font-size: 24px;
                        color: #28b463;
                        margin-bottom: 8px;
                    }
                    
                    .restaurant-feature span {
                        font-size: 14px;
                        color: #b8b8b8;
                    }
                    
                    .restaurant-pulse {
                        animation: restaurant-pulse 2s infinite;
                    }
                    
                    @keyframes restaurant-pulse {
                        0% { transform: scale(1); }
                        50% { transform: scale(1.05); }
                        100% { transform: scale(1); }
                    }
                    
                    .restaurant-sparkle {
                        position: absolute;
                        width: 20px;
                        height: 20px;
                        background: rgba(255, 255, 255, 0.8);
                        border-radius: 50%;
                        box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.8);
                        opacity: 0;
                    }
                    
                    @media (max-width: 600px) {
                        .restaurant-promo-card {
                            padding: 20px;
                        }
                        
                        .restaurant-card-title {
                            font-size: 24px;
                        }
                        
                        .restaurant-btn {
                            padding: 14px 30px;
                            font-size: 16px;
                        }
                        
                        .restaurant-icon {
                            font-size: 35px;
                        }
                        
                        .restaurant-features {
                            gap: 5px;
                        }
                        
                        .restaurant-feature {
                            margin: 5px;
                        }
                        
                        .restaurant-feature span {
                            font-size: 12px;
                        }
                    }
                </style>

                <div class="restaurant-promo-card">
                    <div class="restaurant-card-content">
                        <h1 class="restaurant-card-title">Descubre Restaurantes en Providencia</h1>
                        <p class="restaurant-card-subtitle">Saborea la mejor gastronomía local con experiencias culinarias únicas y deliciosas</p>
                        
                        <div class="restaurant-icon-container">
                            <div class="restaurant-icon">🍽️</div>
                            <div class="restaurant-icon">🍷</div>
                            <div class="restaurant-icon">👨‍🍳</div>
                        </div>
                        
                        <div class="restaurant-features">
                            <div class="restaurant-feature">
                                <i class="fas fa-utensils"></i>
                                <span>Gastronomía Local</span>
                            </div>
                            <div class="restaurant-feature">
                                <i class="fas fa-wine-glass-alt"></i>
                                <span>Bebidas Deliciosas</span>
                            </div>
                            <div class="restaurant-feature">
                                <i class="fas fa-music"></i>
                                <span>Ambiente Agradable</span>
                            </div>
                            <div class="restaurant-feature">
                                <i class="fas fa-parking"></i>
                                <span>Estacionamiento</span>
                            </div>
                        </div>
                        
                        <a href="/restaurantes" class="restaurant-btn restaurant-pulse">
                            <i class="fas fa-utensils"></i>
                            Ver Publicaciones de Restaurantes
                        </a>
                    </div>
                </div>

                <script>
                    // Crear efecto de chispas al hacer hover en el botón
                    document.querySelector('.restaurant-btn').addEventListener('mouseover', function(e) {
                        const button = e.currentTarget;
                        const rect = button.getBoundingClientRect();
                        
                        for (let i = 0; i < 5; i++) {
                            const sparkle = document.createElement('div');
                            sparkle.classList.add('restaurant-sparkle');
                            
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
                        const card = document.querySelector('.restaurant-promo-card');
                        
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
        <img src="{{ asset('img_servicios/ProviPollo.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante ProviPollo</h3>
                <p>En ProviPollo encontrarás los sabores más auténticos y jugosos del pollo asado a la brasa, preparado con una receta
                     secreta que ha pasado de generación en generación. Este acogedor restaurante es perfecto para disfrutar en familia
                      o con amigos, ofreciendo una experiencia gastronómica que resalta lo tradicional de la región.</p>
                   <a href="/vistasRestaurantes/vista1" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/BrosterHouse2.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante Broster House</h3>
                <p>El Restaurante Broster House es el corazón gastronómico de Providencia, donde los sabores tradicionales de Nariño
                     se encuentran con técnicas familiares de cocina. Este restaurante es ideal para quienes buscan una experiencia
                      culinaria única, con platos cuidadosamente elaborados que resaltan los ingredientes locales y frescos.</p>
                     <a href="/vistasRestaurantes/vista2" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/Marleny.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante Ana Samira</h3>
                <p>El Restaurante Ana Samira es un rincón lleno de tradición y calidez donde se sirve comida casera hecha con amor.
                    Este restaurante es conocido por su hospitalidad y por ofrecer platos auténticos que resaltan los sabores de la región,
                     elaborados con ingredientes frescos y locales.</p>
                       <a href="/vistasRestaurantes/vista3" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/RestauranteTrocha.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Melvis Restaurante</h3>
                <p>Melvis Restaurante, la pasión por la cocina se refleja en cada plato que se sirve. Este encantador restaurante
                     es conocido por su dedicación a ofrecer una experiencia culinaria auténtica,
                      donde los sabores de Nariño son los protagonistas. </p>
                       <a href="/vistasRestaurantes/vista4" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/pollo.jpg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante el Buen Pollo</h3>
                <p>Broster King se ha convertido en el rey de las comidas rápidas en Providencia, ofreciendo  deliciosos platillos,
                    con un enfoque especial en su famoso pollo broaster.
                     Este restaurante es el lugar perfecto para disfrutar de una comida rápida sin sacrificar el sabor.</p>
                    <a href="/vistasRestaurantes/vista5" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/trad.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante la tradición del sabor</h3>
                <p>El Restaurante la tradición del sabor es un lugar acogedor que se destaca por su ambiente familiar y su deliciosa oferta
                     gastronómica. Con un enfoque en la cocina tradicional, este restaurante es ideal para disfrutar
                     de una comida en grupo o disfrutar en familia.</p>
                      <a href="/vistasRestaurantes/vista6" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/Mile.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Restaurante Meli</h3>
                <p>El Restaurante Meli es conocido por ofrecer una experiencia culinaria que combina la tradición Providenciana con toques gurmets.
                     Su menú está diseñado para sorprender y deleitar a los comensales,
                     utilizando ingredientes frescos y de alta calidad.</p>
                        <a href="/vistasRestaurantes/vista7" class="reserve-button">Ver más</a>
            </div>
        </div>


        <div class="card">
        <img src="{{ asset('img_servicios/hornado.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>Hornado Doña Socorro</h3>
                <p>Hornado Doña Socorro es un restaurante tradicionalmente conocido por la comunidad Providenciana
                    por su delicioso hornado, un plato tradicional Colombiano que consiste en cerdo asado,
                     crujiente por fuera y tierno por dentro. Este lugar es ideal para quienes buscan
                      disfrutar de la auténtica comida local en un ambiente acogedor.</p>
                          <a href="/vistasRestaurantes/vista8" class="reserve-button">Ver más</a>
            </div>
        </div>

       


     </div>  

    @can('crear-servicio-restaurante')
        <div class="btn-restaurante-container">
            <a href="{{ route('restaurantes.create') }}" class="btn-restaurante-adaptive">
                <span class="btn-restaurante-content">
                    <span class="btn-icon">➕</span>
                    <span class="btn-restaurante-text">Crear publicación de restaurante</span>
                    <span class="btn-restaurante-icon">🍽️</span>
                </span>
                <div class="btn-restaurante-glow"></div>
            </a>
        </div>
        @endcan

        <style>
        .btn-restaurante-container {
            display: inline-block;
            margin: 10px 0;
        }

        .btn-restaurante-adaptive {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            padding: 0 25px;
            background: linear-gradient(135deg, #28b463 0%, #1e8449 100%);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 4px 15px rgba(40, 180, 99, 0.3);
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            /* Se adapta automáticamente al contenido */
            width: auto;
            min-width: min-content;
            white-space: nowrap;
        }

        .btn-restaurante-content {
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 2;
            position: relative;
            transition: transform 0.3s ease;
        }

        .btn-restaurante-icon {
            font-size: 16px;
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }

        .btn-restaurante-text {
            white-space: nowrap;
            flex-shrink: 0;
        }

        .btn-restaurante-glow {
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, 
                transparent, 
                rgba(255,255,255,0.3), 
                transparent);
            transition: left 0.7s ease;
            border-radius: 25px;
        }

        /* Efectos hover */
        .btn-restaurante-adaptive:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(40, 180, 99, 0.5);
            background: linear-gradient(135deg, #1e8449 0%, #28b463 100%);
        }

        .btn-restaurante-adaptive:hover .btn-restaurante-glow {
            left: 100%;
        }

        .btn-restaurante-adaptive:hover .btn-restaurante-icon {
            transform: scale(1.2) rotate(15deg);
        }

        .btn-restaurante-adaptive:hover .btn-restaurante-content {
            transform: scale(0.98);
        }

        /* Efecto activo/presionado */
        .btn-restaurante-adaptive:active {
            transform: translateY(0) scale(0.98);
            box-shadow: 0 2px 10px rgba(40, 180, 99, 0.4);
            transition: all 0.1s ease;
        }

        /* Animación de pulso sutil */
        @keyframes restaurante-pulse {
            0%, 100% { 
                box-shadow: 0 4px 15px rgba(40, 180, 99, 0.3);
            }
            50% { 
                box-shadow: 0 4px 20px rgba(40, 180, 99, 0.5);
            }
        }

        .btn-restaurante-adaptive {
            animation: restaurante-pulse 3s infinite ease-in-out;
        }

        /* Efecto de onda al hacer hover */
        .btn-restaurante-adaptive::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transform: translate(-50%, -50%);
            transition: width 0.6s ease, height 0.6s ease;
        }

        .btn-restaurante-adaptive:hover::before {
            width: 300px;
            height: 300px;
        }

        /* Asegurar que el texto sea legible */
        .btn-restaurante-adaptive:focus {
            outline: 2px solid rgba(255,255,255,0.5);
            outline-offset: 2px;
        }

        /* Responsive - se adapta naturalmente al contenido */
        @media (max-width: 480px) {
            .btn-restaurante-adaptive {
                height: 40px;
                padding: 0 20px;
                font-size: 13px;
            }
            
            .btn-restaurante-icon {
                font-size: 14px;
            }
            
            /* En móviles muy pequeños, permite que el texto se ajuste */
            @media (max-width: 360px) {
                .btn-restaurante-adaptive {
                    white-space: normal;
                    height: auto;
                    min-height: 40px;
                    padding: 10px 15px;
                }
                
                .btn-restaurante-content {
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 5px;
                }
            }
        }
        </style>

@endsection
