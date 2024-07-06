<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>"Animal Home"</title>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- Seccion Inicio -->
    <section id="inicio">
        <!-- ENCABEZADO -->
        <header>
        <div class="contenido-header">
            <div class="logo">
                <h1>Animal Home</h1>
                <h2>Janeth Caicedo</h2>
                
            </div>

            <nav id="nav" class="responsive">
                <ul>
                    <li>
                        <a href="#inicio" onclick="seleccionar()">
                            <i class="fa-solid fa-house"></i>
                            <span>Inicio</span>
                        </a>
                    </li>
                    <li>
                        <a href="#gyms" onclick="seleccionar()">
                            <i class="fa-solid fa-cat"></i>
                            <span>Gyms</span>
                        </a>
                    </li>
                    <li>
                        <a href="#depared" onclick="seleccionar()">
                            <i class="fa-solid fa-paw"></i>
                            <span>De Pared</span>
                        </a>
                    </li>
                    <li>
                        <a href="#comederos" onclick="seleccionar()">
                            <i class="fa-solid fa-bowl-food"></i>
                            <span>Comederos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#contacto" onclick="seleccionar()">
                            <i class="fa-solid fa-comment"></i>
                            <span>Contacto</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="cerrar.sesion.php"  onclick="seleccionar()">
                            <i class="fa-solid fa-lock"></i>
                            <span>Cerrar Sesion</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="social">
                <a href="tel:+3225582105">
                <i class="fa-solid fa-phone"></i>
                3225582105
            </a>
            <a href="https://www.instagram.com/bajotuabrigogyms/">
                <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/muebles.animals">
                <i class="fa-brands fa-facebook"></i>
            </a>
            <a href="https://wa.me/573225582105/">
                <i class="fa-brands fa-whatsapp"></i>
            </a>
            
            </div>
            <div class="nav-responsive" id="bar" onclick="mostrarOcultar()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        </header> 
        <!-- CARRUSEL -->
        <div class="carrusel">
        <div class="gallery js-flickity" data-flickity-option='{"wrapAround":true,
            "pageDots":false, "autoPlay": true}'>
            <div class="gallery-cell">
                <img src="./inicio/images1.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./inicio/images2.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./inicio/images3.jpg" alt="">
            </div>
            <div class="gallery-cell">
                <img src="./inicio/images4.jpg" alt="">
            </div>

        </div>
        <div class="info">
            <h2>GYMS</h2>
            <p>Espacios unicos y diferentes para los consentidos de tu casa</p>
        
        </div>
        </div>
    </section>
    <!-- seccion Gyms -->
    <section id="gyms">
        <h2>Gyms</h2>
        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="./gym/gym1.jpg" alt="">
                </div>
                <div class="info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="./gym/gym2.jpg" alt="">
                </div>
                <div class="info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="./gym/gym3.jpg" alt="">
                </div>
                <div class="info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <div class="fila">
            <div class="item">
                <div class="icono">
                    <img src="./gym/gym4.jpg" alt="">
                </div>
                <div class="info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="./gym/gym5.jpg" alt="">
                </div>
                <div class="info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="item">
                <div class="icono">
                    <img src="./gym/gym6.jpg" alt="">
                </div>
                <div class="info">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
        <li>
                        <a href="http://127.0.0.1:5501/gyms.html"  onclick="seleccionar()">
                            <button>Ver Mas</button>
                        </a>
                    </li>
    </section>
    <!-- seccion De pared -->
    <section id="depared">
        <h2>De Pared</h2>
        <div class="fila">
            <div class="item">
                <img src="./depared/depared1.jpg" alt="">
                <p></p>
            </div>
            <div class="item">
                <img src="./depared/depared2.jpg" alt="">
                <p></p>
            </div>
            <div class="item">
                <img src="./depared/depared3.jpg" alt="">
                <p></p>
            </div>
        </div>
        <div class="fila">
            <div class="item">
                <img src="./depared/depared4.jpg" alt="">
                <p></p>
            </div>
            <div class="item">
                <img src="./depared/depared5.jpg" alt="">
                <p></p>
            </div>
            <div class="item">
                <img src="./depared/depared6.jpg" alt="">
                <p></p>
            </div>
        </div>
            <li>
                        <a href="http://127.0.0.1:5501/depared.html"  onclick="seleccionar()">
                            <button>Ver Mas</button>
                        </a>
                    </li>

    </section>
    <!-- seccion comederos  -->
    <section id="comederos">
        <h2>Comederos</h2>
        <!-- carrusel de items de comederos  -->
        <div class="galeria-comederos js-flickity" data-flickity-options='{"wrapAround":true,
            "pageDots":true}'>
            <div class="gallery-cell">
            <div class="item">
                <div class="foto">
                    <img src="./comedero/comedero1.jpg" alt="">
                </div>
                <div class="info">
                    
                </div>
            </div>
    </div>

        <div class="gallery-cell">
            <div class="item">
                <div class="foto">
                    <img src="./comedero/comedero2.jpg" alt="">
                </div>
                <div class="info">
                    
                </div>
            </div>
        </div>
        <div class="gallery-cell">
            <div class="item">
                <div class="foto">
                    <img src="./comedero/comedero3.jpg" alt="">
                </div>
                <div class="info">
                    
                </div>
            </div>
        </div>
        <div class="gallery-cell">
            <div class="item">
                <div class="foto">
                    <img src="./comedero/comedero4.jpg" alt="">
                </div>
                <div class="info">
                    
                </div>
            </div>
        </div>
        <div class="gallery-cell">
            <div class="item">
                <div class="foto">
                    <img src="./comedero/comedero5.JPG" alt="">
                </div>
                <div class="info">
                
                </div>
            </div>
        </div>
        <div class="gallery-cell">
            <div class="item">
                <div class="foto">
                    <img src="./comedero/comedero6.jpg" alt="">
                </div>
                <div class="info">
                    
                </div>
            </div>
        </div>
        </div>
        <li>
                        <a href="http://127.0.0.1:5501/comedero.html"  onclick="seleccionar()">
                            <button>Ver Mas</button>
                        </a>
                    </li>

    </section>
    <!-- seccion contacto -->
    <section id="contacto">
        <div class="fila">
            <div class="col">
                <h1>Animal Home</h1>
            </div>
            <div class="col">
                <h3>Menu</h3>
                <a href="#">Inicio</a>
                <a href="#">Gyms</a>
                <a href="#">De Pared</a>
                <a href="#">Comederos</a>
                <a href="#">Contacto</a>
            </div>
            
            <div class="col">
                <h3>Encuentranos en</h3>
                <div class="media">
                    <i class="fa-brands fa-facebook"></i>
                    <a href="#">Facebook</a>
                </div>
                <div class="media">
                    <i class="fa-brands fa-instagram"></i>
                    <a href="#">Instagram</a>
                </div>
                <div class="media">
                    <i class="fa-brands fa-whatsapp"></i>
                    <a href="#">Whatsapp</a>
                    
                </div>
            </div>
            <div class="col">
                <h3>contacto</h3>
                <input type="text" placeholder="Tu correo">
                <input type="submit" class="enviar">
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="script.js"></script>

    

</body>
</html>