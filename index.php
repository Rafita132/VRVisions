<?php include 'header.php' ?>

<div id="carouselExample" class="carousel slide">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/portada_quest2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/portada_quest3.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="img/portada_questpro.jpg" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<main>
    <div class="banner">
        <h1>Bienvenido a la tienda online</h1>
        <h3>Encuentra lo que buscas al mejor precio</h3>
    </div>
    <div class="products">
        <h2>Productos destacados</h2>
        <div class="grid">
            <div class="product">
                <img src="img/quest 2.jpg" alt="gafas virtuales">
                <h3>Meta Quest 2</h3>
                <p>La Meta Quest 2 es un dispositivo de realidad virtual (VR) desarrollado por Meta. Es la sucesora de
                    la Quest original y se lanzó en octubre de 2020. La Quest 2 ofrece una experiencia de realidad
                    virtual sin necesidad de estar conectada a una computadora, lo que la hace más accesible y fácil de
                    usar.
                    Sus componentes principales incluyen un visor, controladores de movimiento, un sistema de
                    seguimiento de movimiento, un procesador integrado y memoria RAM. La Quest 2 tiene pantallas de alta
                    resolución que proporcionan una experiencia visual nítida y envolvente. Además, está disponible en
                    diferentes variantes de almacenamiento interno, que van desde 64 GB hasta 256 GB, para almacenar
                    juegos, aplicaciones y otros contenidos descargados desde la tienda de Oculus. Los usuarios también
                    pueden utilizar tarjetas de memoria microSD para expandir el espacio de almacenamiento si es
                    necesario. En resumen, la Quest 2 es un dispositivo todo en uno que ofrece una experiencia de
                    realidad virtual de alta calidad, sin necesidad de cables ni conexiones externas, lo que la
                    convierte en una opción popular entre los entusiastas de la VR.</p>

            </div>
            <div class="product">
                <img src="img/quest 3.jpg" alt="gafas virtuales">
                <h3>Meta Quest 3</h3>
                <p>La Meta Quest 3, si ha sido lanzada, sería la última iteración de la serie de dispositivos de
                    realidad virtual de Meta Construida sobre las bases de sus predecesoras, ofrecería mejoras en la
                    resolución de pantalla, el rendimiento del procesador y la calidad del seguimiento de movimiento.
                    Sus componentes principales incluirían un visor con pantallas de alta resolución, controladores de
                    movimiento para interactuar con el entorno virtual, un sistema de seguimiento de movimiento para una
                    experiencia inmersiva, un procesador integrado y memoria RAM para ejecutar aplicaciones y juegos de
                    realidad virtual. Además, ofrecería opciones de almacenamiento interno que podrían variar desde una
                    cantidad inicial mínima, como 64 GB o 128 GB, hasta opciones premium con capacidades mayores, como
                    256 GB o más. Los usuarios también podrían tener la opción de expandir el almacenamiento mediante el
                    uso de tarjetas de memoria microSD para mayor flexibilidad.</p>

            </div>
            <div class="product">
                <img src="img/quest pro.webp" alt="gafas virtuales">
                <h3>Meta Quest pro</h3>
                <p>La Meta Quest Pro, si existe, sería una versión avanzada y mejorada de la línea Meta Quest, diseñada
                    para satisfacer las necesidades de usuarios más exigentes y profesionales de la realidad virtual.
                    Construida sobre las bases de sus predecesoras, la Quest Pro probablemente ofrecería mejoras
                    significativas en términos de rendimiento, calidad visual y capacidades de seguimiento.

                    Sus componentes principales podrían incluir un visor con pantallas de alta resolución y frecuencia
                    de actualización, lo que proporcionaría una experiencia visual excepcionalmente inmersiva y nítida.
                    Además, es probable que cuente con un sistema de seguimiento de movimiento más preciso y
                    controladores mejorados, lo que permitiría una interacción más fluida y precisa en el entorno
                    virtual.
                </p>
            </div>
        </div>
    </div>
</main>

<!-- Carousel wrapper -->
<div id="carouselMultiItemExample" data-mdb-carousel-init class="carousel slide carousel-dark text-center"
    data-mdb-ride="carousel">
    <!-- Controls -->
    <div class="d-flex justify-content-center mb-4">
        <button data-mdb-button-init class="carousel-control-prev position-relative" type="button"
            data-mdb-target="#carouselMultiItemExample" data-mdb-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button data-mdb-button-init class="carousel-control-next position-relative" type="button"
            data-mdb-target="#carouselMultiItemExample" data-mdb-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Inner -->
    <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="img/Arizona Sunshine® 2.jpg" class="card-img-top" alt="Waterfall" />
                            <div class="card-body">
                                <h5 class="card-title">Arizona Sunshine® 2</h5>
                                <p class="card-text">
                                    La secuela del exitoso juego de realidad virtual (VR) "Arizona Sunshine",
                                    desarrollado por Vertigo Games. Ambientado en un apocalipsis zombi en el desierto de
                                    Arizona, este juego ofrece una experiencia inmersiva en la que los jugadores luchan
                                    por sobrevivir mientras exploran entornos postapocalípticos y enfrentan hordas de no
                                    muertos sedientos de sangre.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img src="img/Beat Saber.jpg" class="card-img-top" alt="Sunset Over the Sea" />
                            <div class="card-body">
                                <h5 class="card-title">Beat Saber</h5>
                                <p class="card-text">
                                    Es un emocionante juego de ritmo y acción en realidad virtual (VR) desarrollado por
                                    Beat Games. En este juego, los jugadores se sumergen en un entorno tridimensional
                                    donde deben cortar bloques al ritmo de la música utilizando sables de luz, en una
                                    experiencia que combina habilidad, coordinación y diversión.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img src="img/Resident-Evil-4-VR.jpg" class="card-img-top" alt="Sunset over the Sea" />
                            <div class="card-body">
                                <h5 class="card-title">Resident Evil 4 VR</h5>
                                <p class="card-text">
                                    En "Resident Evil 4 VR", los jugadores asumen el papel de Leon S. Kennedy, un agente
                                    del gobierno enviado a rescatar a la hija del presidente de los Estados Unidos,
                                    quien ha sido secuestrada por un culto siniestro en un pueblo remoto de Europa. A
                                    medida que exploran los entornos oscuros y siniestros del juego, los jugadores
                                    enfrentan hordas de enemigos infectados con una misteriosa plaga, resolviendo
                                    acertijos y enfrentándose a desafíos mortales mientras luchan por sobrevivir.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single item -->
        <div class="carousel-item">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <div class="card">
                            <img src="himg/Marvel's Iron Man VR.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                            <div class="card-body">
                                <h5 class="card-title">Marvel's Iron Man VR</h5>
                                <p class="card-text">
                                    es un juego de realidad virtual (VR) que permite a los jugadores experimentar la
                                    emoción de convertirse en Tony Stark, el legendario superhéroe conocido como Iron
                                    Man. Desarrollado por Camouflaj y publicado por Sony Interactive Entertainment, este
                                    título ofrece una experiencia única en la que los jugadores pueden volar, luchar
                                    contra enemigos y explorar el mundo desde la perspectiva del icónico héroe de
                                    Marvel.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img src="img/Blade & Sorcery" class="card-img-top" alt="Storm Clouds" />
                            <div class="card-body">
                                <h5 class="card-title">Blade & Sorcery</h5>
                                <p class="card-text">
                                    Es un juego de acción y combate cuerpo a cuerpo en realidad virtual (VR)
                                    desarrollado por WarpFrog. Este juego ofrece a los jugadores la oportunidad de
                                    sumergirse en un mundo de fantasía medieval donde pueden convertirse en poderosos
                                    guerreros y magos, enfrentándose a enemigos en brutales combates cuerpo a cuerpo.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 d-none d-lg-block">
                        <div class="card">
                            <img src="img/Batman: Arkham Shadow" class="card-img-top" alt="Hot Air Balloons" />
                            <div class="card-body">
                                <h5 class="card-title">Batman: Arkham Shadow</h5>
                                <p class="card-text">
                                    La trama gira en torno a Gotham City, que está en peligro, y los jugadores asumen el
                                    papel de Bruce Wayne/Batman, el playboy multimillonario y vigilante enmascarado que
                                    utiliza una variedad de gadgets, habilidades y recursos para proteger la ciudad de
                                    sus peores villanos. Otros personajes incluyen a Otis Flannegan/El Cazador de Ratas,
                                    un ex exterminador profesional que controla y comanda ratas para cometer crímenes;
                                    Edward Nigma/Enigma, un supervillano obsesionado con poner a prueba la inteligencia
                                    de Batman a través de acertijos elaborados y trampas mortales; Dra. Harleen Frances
                                    Quinzel/Harley Quinn, una psiquiatra clínica convertida en cómplice criminal; y
                                    Harvey Dent/Dos Caras, un supervillano esquizofrénico que alguna vez fue aliado de
                                    Batman.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- Inner -->
</div>
<!-- Carousel wrapper -->


<div id="modalPrivacidad" class="modal-Priv"></div>
<div id="modalTerminos" class="modal-Priv"></div>
<div id="modalCookies" class="modal-Priv"></div>
<div id="modalOverlay" class="modal-overlay"></div>

<script src="js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

<script src="js/jquery.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/fullcalendar.min.js"></script>
<?php include 'footer.php' ?>