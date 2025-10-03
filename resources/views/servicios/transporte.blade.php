@extends('layouts.myappCF')

@section('content')
        <br><br>
           <!-- Contenedor principal con un nombre único -->
            <div id="unique-container" style="background-color: #f9f9f9; padding: 30px; border-radius: 15px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); max-width: 800px; margin: auto; opacity: 0; animation: unique-fade-in 0.5s ease-in-out forwards;">

                    <!-- Card para el título con un nombre único -->
                    <div id="unique-title-card" style="background-color: #1a1a2e; border-radius: 15px; padding: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); text-align: center; margin-bottom: 20px; opacity: 0; animation: unique-fade-in 0.5s ease-in-out 0.2s forwards;">
                        <h2 style="color: #ffffff; font-size: 30px; font-weight: bold; margin: 0;">Conoce las empresas de transporte de Providencia-Nariño</h2>
                    </div>

                    <!-- Card para la información general con un nombre único -->
                    <style>
                .transport-promo-card {
                    background: linear-gradient(145deg, #1a1a3a 0%, #1a1a2e 100%);
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
                
                .transport-promo-card::before {
                    content: '';
                    position: absolute;
                    top: -50%;
                    left: -50%;
                    width: 200%;
                    height: 200%;
                    background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
                    z-index: 0;
                }
                
                .transport-card-content {
                    position: relative;
                    z-index: 2;
                }
                
                .transport-card-title {
                    color: #ffffff;
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 15px;
                    text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
                    position: relative;
                    display: inline-block;
                }
                
                .transport-card-title::after {
                    content: '';
                    position: absolute;
                    bottom: -8px;
                    left: 25%;
                    width: 50%;
                    height: 3px;
                    background: linear-gradient(90deg, transparent, #2962ff, transparent);
                    border-radius: 3px;
                }
                
                .transport-card-subtitle {
                    color: #b8b8b8;
                    font-size: 16px;
                    margin-bottom: 25px;
                    line-height: 1.5;
                }
                
                .transport-btn {
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    gap: 12px;
                    background: linear-gradient(135deg, #2962ff 0%, #0039cb 100%);
                    color: white;
                    padding: 16px 35px;
                    border-radius: 50px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 18px;
                    box-shadow: 0 10px 20px rgba(41, 98, 255, 0.4);
                    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                    position: relative;
                    overflow: hidden;
                    border: none;
                    cursor: pointer;
                    margin-top: 10px;
                }
                
                .transport-btn:hover {
                    transform: translateY(-5px) scale(1.03);
                    box-shadow: 0 15px 25px rgba(41, 98, 255, 0.6);
                }
                
                .transport-btn:active {
                    transform: translateY(0) scale(0.98);
                }
                
                .transport-btn::before {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: -100%;
                    width: 100%;
                    height: 100%;
                    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
                    transition: left 0.7s ease;
                }
                
                .transport-btn:hover::before {
                    left: 100%;
                }
                
                .transport-icon-container {
                    display: flex;
                    justify-content: center;
                    gap: 15px;
                    margin-bottom: 25px;
                }
                
                .transport-icon {
                    font-size: 40px;
                    animation: transport-float 3s ease-in-out infinite;
                }
                
                .transport-icon:nth-child(1) { animation-delay: 0s; }
                .transport-icon:nth-child(2) { animation-delay: 0.5s; }
                .transport-icon:nth-child(3) { animation-delay: 1s; }
                
                @keyframes transport-float {
                    0%, 100% { transform: translateY(0); }
                    50% { transform: translateY(-10px); }
                }
                
                .transport-features {
                    display: flex;
                    justify-content: space-around;
                    margin: 25px 0;
                    flex-wrap: wrap;
                }
                
                .transport-feature {
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    margin: 10px;
                }
                
                .transport-feature i {
                    font-size: 24px;
                    color: #2962ff;
                    margin-bottom: 8px;
                }
                
                .transport-feature span {
                    font-size: 14px;
                    color: #b8b8b8;
                }
                
                .transport-pulse {
                    animation: transport-pulse 2s infinite;
                }
                
                @keyframes transport-pulse {
                    0% { transform: scale(1); }
                    50% { transform: scale(1.05); }
                    100% { transform: scale(1); }
                }
                
                .transport-sparkle {
                    position: absolute;
                    width: 20px;
                    height: 20px;
                    background: rgba(255, 255, 255, 0.8);
                    border-radius: 50%;
                    box-shadow: 0 0 10px 2px rgba(255, 255, 255, 0.8);
                    opacity: 0;
                }
                
                @media (max-width: 600px) {
                    .transport-promo-card {
                        padding: 20px;
                    }
                    
                    .transport-card-title {
                        font-size: 24px;
                    }
                    
                    .transport-btn {
                        padding: 14px 30px;
                        font-size: 16px;
                    }
                    
                    .transport-icon {
                        font-size: 35px;
                    }
                    
                    .transport-features {
                        gap: 5px;
                    }
                    
                    .transport-feature {
                        margin: 5px;
                    }
                    
                    .transport-feature span {
                        font-size: 12px;
                    }
                }
            </style>

            <div class="transport-promo-card">
                <div class="transport-card-content">
                    <h1 class="transport-card-title">Transportes en Providencia</h1>
                    <p class="transport-card-subtitle">Descubre las mejores empresas de transporte para tus viajes y envíos</p>
                    
                    <div class="transport-icon-container">
                        <div class="transport-icon">🚗</div>
                        <div class="transport-icon">🚐</div>
                        <div class="transport-icon">🚚</div>
                    </div>
                    
                    <div class="transport-features">
                        <div class="transport-feature">
                            <i class="fas fa-shuttle-van"></i>
                            <span>Transporte Ejecutivo</span>
                        </div>
                        <div class="transport-feature">
                            <i class="fas fa-truck"></i>
                            <span>Envíos de Carga</span>
                        </div>
                        <div class="transport-feature">
                            <i class="fas fa-bus"></i>
                            <span>Transporte Grupal</span>
                        </div>
                        <div class="transport-feature">
                            <i class="fas fa-road"></i>
                            <span>Rutas Disponibles</span>
                        </div>
                    </div>
                    
                    <a href="/transportes" class="transport-btn transport-pulse">
                        <i class="fas fa-route"></i>
                        Ver publicaciones de empresas de transporte
                    </a>
                </div>
            </div>

            <script>
                // Crear efecto de chispas al hacer hover en el botón
                document.querySelector('.transport-btn').addEventListener('mouseover', function(e) {
                    const button = e.currentTarget;
                    const rect = button.getBoundingClientRect();
                    
                    for (let i = 0; i < 5; i++) {
                        const sparkle = document.createElement('div');
                        sparkle.classList.add('transport-sparkle');
                        
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
                    const card = document.querySelector('.transport-promo-card');
                    
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
        <img src="{{ asset('img_servicios/TransIpiales.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3>TransIpiales S.A</h3>
                <p>TransIpiales S.A. es una empresa de transporte terrestre dedicada a ofrecer servicios de movilidad 
                    de pasajeros y carga dentro de Colombia. Es una de las empresas líder de transporte terrestre automotor
                     en el Suroccidente de Colombia, con más de cincuenta años de experiencia en la prestación del
                      servicio de transporte de pasajeros, carga y encomiendas. Las Oficinas Principales se
                       encuentran en la ciudad de Pasto, desde donde se dirigen las operaciones al resto del país.</p>
                   <a href="{{ route('vistasTransporte.vista1') }}" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('img/ruta.jpg') }}" class="d-block w-100" alt="...">
                <div class="card-content">
                    <h3>Rutas del Sur S.A</h3>
                    <p>Rutas del Sur S.A es una empresa de transporte terrestre que opera en el municipio de Providencia,
                        ubicado en el departamento de Nariño, Colombia. Esta compañía es reconocida por ofrecer servicios de movilidad
                        esenciales para los habitantes de Providencia y las regiones aledañas, facilitando el transporte 
                        de pasajeros y encomiendas. Al encontrarse en una zona predominantemente rural, su labor es clave 
                        para la conectividad y el desarrollo económico de la región.</p>
                        <a href="{{ route('vistasTransporte.vista4') }}" class="reserve-button">Ver más</a>
                </div>
        </div>

        <div class="card">
        <img src="{{ asset('img_servicios/Pasto.jpeg') }}" class="d-block w-100" alt="...">
            <div class="card-content">
                <h3> Expreso San Juan de Pasto S.A</h3>
                <p>Expreso San Juan de Pasto es una de las principales empresas de transporte porque ofrece 
                    un buen servicio de bus al cumplir con todas las normas de seguridad. Su puntualidad y otras 
                    comodidades durante el viaje han vuelto a Expreso San Juan de Pasto popular entre los pasajeros.
                     Expreso San Juan de Pasto también cubre distintas rutas conectando diferentes ciudades en el país.</p>
                     <a href="{{ route('vistasTransporte.vista2') }}" class="reserve-button">Ver más</a>
            </div>
        </div>

        <div class="card">
            <img src="{{ asset('img_servicios/TransProvi.jpeg') }}" class="d-block w-100" alt="...">
                <div class="card-content">
                    <h3>TransProvidencia S.A</h3>
                    <p>TransProvidencia S.A. es una empresa de transporte terrestre que opera en el municipio de Providencia,
                        ubicado en el departamento de Nariño, Colombia. Esta compañía es reconocida por ofrecer servicios de movilidad
                        esenciales para los habitantes de Providencia y las regiones aledañas, facilitando el transporte 
                        de pasajeros y encomiendas. Al encontrarse en una zona predominantemente rural, su labor es clave 
                        para la conectividad y el desarrollo económico de la región.</p>
                        <a href="{{ route('vistasTransporte.vista3') }}" class="reserve-button">Ver más</a>
                </div>
        </div>

        

</div>   

        @can('crear-servicio-transporte')
        <div class="btn-transport-container">
            <a href="{{ route('transportes.create') }}" class="btn-transport-adaptive">
                <span class="btn-transport-content">
                    <span class="btn-icon">➕</span>
                    <span class="btn-transport-text">Crear publicación de transporte</span>
                    <span class="btn-transport-icon">🚗</span>
                </span>
                <div class="btn-transport-glow"></div>
            </a>
        </div>
        @endcan

        <style>
        .btn-transport-container {
            display: inline-block;
            margin: 10px 0;
        }

        .btn-transport-adaptive {
            position: relative;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            height: 45px;
            padding: 0 25px;
            background: linear-gradient(135deg, #2962ff 0%, #0039cb 100%);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            font-size: 14px;
            font-weight: 600;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
            box-shadow: 0 4px 15px rgba(41, 98, 255, 0.3);
            border: none;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            width: auto;
            min-width: min-content;
            white-space: nowrap;
        }

        .btn-transport-content {
            display: flex;
            align-items: center;
            gap: 8px;
            z-index: 2;
            position: relative;
            transition: transform 0.3s ease;
        }

        .btn-transport-icon {
            font-size: 16px;
            transition: transform 0.3s ease;
            flex-shrink: 0;
        }

        .btn-transport-text {
            white-space: nowrap;
            flex-shrink: 0;
        }

        .btn-transport-glow {
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
        .btn-transport-adaptive:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(41, 98, 255, 0.5);
            background: linear-gradient(135deg, #0039cb 0%, #2962ff 100%);
        }

        .btn-transport-adaptive:hover .btn-transport-glow {
            left: 100%;
        }

        .btn-transport-adaptive:hover .btn-transport-icon {
            transform: scale(1.2) rotate(15deg);
        }

        .btn-transport-adaptive:hover .btn-transport-content {
            transform: scale(0.98);
        }

        /* Efecto activo/presionado */
        .btn-transport-adaptive:active {
            transform: translateY(0) scale(0.98);
            box-shadow: 0 2px 10px rgba(41, 98, 255, 0.4);
            transition: all 0.1s ease;
        }

        /* Animación de pulso sutil */
        @keyframes transport-pulse {
            0%, 100% { 
                box-shadow: 0 4px 15px rgba(41, 98, 255, 0.3);
            }
            50% { 
                box-shadow: 0 4px 20px rgba(41, 98, 255, 0.5);
            }
        }

        .btn-transport-adaptive {
            animation: transport-pulse 3s infinite ease-in-out;
        }

        /* Efecto de onda al hacer hover */
        .btn-transport-adaptive::before {
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

        .btn-transport-adaptive:hover::before {
            width: 300px;
            height: 300px;
        }

        /* Asegurar que el texto sea legible */
        .btn-transport-adaptive:focus {
            outline: 2px solid rgba(255,255,255,0.5);
            outline-offset: 2px;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .btn-transport-adaptive {
                height: 40px;
                padding: 0 20px;
                font-size: 13px;
            }
            
            .btn-transport-icon {
                font-size: 14px;
            }
            
            @media (max-width: 360px) {
                .btn-transport-adaptive {
                    white-space: normal;
                    height: auto;
                    min-height: 40px;
                    padding: 10px 15px;
                }
                
                .btn-transport-content {
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 5px;
                }
            }
        }
        </style>

@endsection