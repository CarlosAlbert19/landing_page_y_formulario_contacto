<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>CyberNeon</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <h1>CyberNeon</h1>
                              <a href="index.html"><img src="images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-10 offset-md-1">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="#inicio">Inicio</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#acerca">Acerca de mí</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#servicios">Servicios</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#galeria">Galería de lenguajes</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#opiniones"> Opiniones </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contacto">Contáctame</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-md-7 offset-md-5">
                              <div class="text-bg">
                                 <h1 id=inicio> Diseño <br>de software backend</h1>
                                 <span>Se realizan varios programas enfocados en algoritmos y mecánicas interactivas con el usuario. Desde programas que encuentren la menor distancia entre dos puntos hasta sistemas de administración de empresas.</span>
                                 <a class="read_more" href="Javascript:void(0)">Leer mas</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-md-7 offset-md-5">
                              <div class="text-bg">
                                 <h1> Diseño <br>de software frontend</h1>
                                 <span>Se realizan varios diseños de interfaces para diversidad de programas, se hace uso de QtDesigner y Tkinter para trabajos hechos en Python, para otros trabajos especializados se usa HTML/CSS.</span>
                                 <a class="read_more" href="Javascript:void(0)">Leer mas</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="carousel-item">
                  <div class="container">
                     <div class="carousel-caption relative">
                        <div class="row">
                           <div class="col-md-7 offset-md-5">
                              <div class="text-bg">
                                 <h1> Diseño <br>de videojuegos</h1>
                                 <span>Se desarrollaran videojuegos utilizando el motor de videojuego de Unity, estos juegos pueden ir desde un plataformas en 2D hasta un shooter 3D en primera o tercera persona.</span>
                                 <a class="read_more" href="Javascript:void(0)">Leer más</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- end banner -->
      <!-- about -->
      <div id="about" class="about">
         <div class="container">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2 id=acerca>Sobre <span class="green">Mí</span></h2>
                     <p>Esta pagina fue creada con el proposito de presentar como desarrollador full stack a su servidor. He trabajo en proyectos de sistemas de administración de restaurantes, creación de servidores mediante el uso de Linux y el desarrollo de un chatbot con machine learning; ahora mismo me encuentro cursando el área de ciberseguridad para ampliar mis conocimientos de redes y reducción de vulnerabilidades.</p>
                     <a class="read_more" href="Javascript:void(0)"> Leer más</a>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="images/about.png" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!--  service -->
      <div id="service" class="service">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 id=servicios>Mis <span class="green">Servicios</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <div class="col-md-4 col-sm-6">
                        <div class="service_box">
                           <i><img src="images/service1.png" alt="#"/></i>
                           <h3>Web</h3>
                           <p>Creación de páginas web <br>interactivas y servidores web <br>con gran alcance.</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-1 col-sm-6">
                        <div class="service_box">
                           <i><img src="images/service2.png" alt="#"/></i>
                           <h3>Almacenamiento de datos</h3>
                           <p>Creación de base de datos <br>para administrar información <br>de una empresa.</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-3 col-sm-6 mar_top">
                        <div class="service_box">
                           <i><img src="images/service3.png" alt="#"/></i>
                           <h3>Aplicaciones</h3>
                           <p>Desarrollo de programas que <br>requieran de algoritmos complejos <br> con interfaz gráfica incluida.</p>
                        </div>
                     </div>
                     <div class="col-md-4 offset-md-1 col-sm-6 mar_top">
                        <div class="service_box">
                           <i><img src="images/service4.png" alt="#"/></i>
                           <h3>Videojuegos</h3>
                           <p>Desarrollo de videojuegos <br>de plataformas o shooters <br>con el motor de Unity.</p>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <a class="read_more" href="Javascript:void(0)"> Leer más</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end service -->
      <!-- gallery -->
      <div id="gallery"  class="gallery">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 id=galeria>Galería de <span class="green">Lenguajes</span></h2>
                     <p>A continuación se mostrarán los lenguajes de programación con las que se trabaja con cada diseño de software.</p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Backend</h3>
                        <p>Para backend me <br>
                           especializo usando <br>
                           Python y también <br>
                           C++.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery1.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery2.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery3.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery4.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Frontend</h3>
                        <p>Para frontend suelo <br>
                           utilizar HTML junto con <br>
                           CSS, también si necesito <br>
                           alguna interfaz en Python <br>
                           utilizo ya sea QtDesigner <br>
                           o Tkinter.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_text">
                     <div class="galleryh3">
                        <h3>Videojuegos</h3>
                        <p>Para el desarrollo de videojuegos <br>
                           utilizo el motor de Unity <br>
                           además del lenguaje de C# <br>
                           que van muy de la mano.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery5.jpg" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="gallery_img">
                     <figure><img src="images/gallery6.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end gallery -->
      <!-- design -->
      <div class="design">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div id="design" class="carousel slide banner_design" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#design" data-slide-to="0" class="active"></li>
                        <li data-target="#design" data-slide-to="1"></li>
                        <li data-target="#design" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>Además trabajo con <span class="green">PostgreSQL</span></h2>
                                          </div>
                                          <p>Utilizo este Sistema Gestor de Base de Datos para administrar gran cantidad de registros que necesite una empresa de su sistema interno.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>Además trabajo con <span class="green">MySQL</span></h2>
                                          </div>
                                          <p>Utilizo este Sistema Gestor de Base de Datos como alternativa de PostgreSQL para administrar también gran cantidad de registros que necesite una empresa de su sistema interno.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="text_de">
                                          <div class="titlepage">
                                             <h2>Además trabajo con <span class="green">Linux</span></h2>
                                          </div>
                                          <p>Utilizo este Sistema Operativo ya que proporciona un entorno de trabajo más cómodo para mí como desarrollador, además de que facilita mucho más el levantamiento de servidores en un gran sistema interconectado de computadoras.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#design" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#design" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-7 pad_roght0">
                  <div class="design_img">
                     <figure><img src="images/desi.jpg" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end design -->
      <!-- latest news -->
      <div  class="latest_news">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Descubre cómo ha evolucionado mi <span class="green">Trabajo</span></h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 offset-md-2">
                  <div id="new" class="news_box">
                     <div class="news_img">
                        <figure><img src="images/blog1.jpg" alt="#"/></figure>
                     </div>
                     <div class="news_room">
                        <span>Publicado por:James Jackson</span>
                        <ul>
                           <li><a href="Javascript:void(0)">Me gusta <i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Comentar <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Compartir <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                        <h3>Gran apertura virtual</h3>
                        <p>Hola chicos, les anunció que en Discovery Land Company ya contamos con nuestro sitio web gracias a nuestro amigo @CyberNeon, ¡muchas gracias!  </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 ">
                  <div id="new" class="news_box">
                     <div class="news_img mr_le">
                        <figure><img src="images/blog2.jpg" alt="#"/></figure>
                     </div>
                     <div class="news_room">
                        <span>Publicado por:Nancy García</span>
                        <ul>
                           <li><a href="Javascript:void(0)">Me gusta <i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Comentar <i class="fa fa-comments-o" aria-hidden="true"></i></a></li>
                           <li><a href="Javascript:void(0)">Compartir <i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
                        </ul>
                        <h3>Ahora pueden realizar sus transacciones por internet</h3>
                        <p>Gracias a la ayuda del señor @CyberNeon, ya podemos ofrecer nuestros servicios a mucha más gente con este nuevo sitio web de nuestra empresa.  </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="Javascript:void(0)"> Leer más</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end latest news -->
      <!-- testimonial -->
      <div id="testimonial" class="Testimonial">
         <div class="container-fluid">
            <div class="row d_flex">
               <div class="col-md-8 pad_left0">
                  <div id="testimon" class="carousel slide banner_testimonial" data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#testimon" data-slide-to="0" class="active"></li>
                        <li data-target="#testimon" data-slide-to="1"></li>
                        <li data-target="#testimon" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett1.png" alt="#"/></i>
                                          <span>Elon Musk</span>
                                          <p>I've seen the work he did with the Discovery Land Company page and I'm very impressed to be just him, maybe I'll give him a Tesla.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett2.png" alt="#"/></i>
                                          <span>Mark Zuckerberg</span>
                                          <p>The works he has done are well done, they're very clean. One day I'll ask him if he wants to come to my office to optimize my data security system.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett3.png" alt="#"/></i>
                                          <span>Bill Gates</span>
                                          <p>I like that today's generation of young people work so hard to follow their dreams and contribute to the world.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett4.png" alt="#"/></i>
                                          <span>Gabe Newell</span>
                                          <p>Hey, you should also develop games for Steam, good job.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption relative">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett5.png" alt="#"/></i>
                                          <span>Tim Sweeney</span>
                                          <p>I saw the first game you made in Unity, it's not bad but I see you've been working hard lately, keep it up.</p>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="text_humai">
                                          <i><img src="images/tett6.png" alt="#"/></i>
                                          <span>Linus Torvalds</span>
                                          <p>I'm grateful for the things this guy is doing with my operating system, I hope he continues to get a lot of use out of it.</p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#testimon" role="button" data-slide="prev">
                     <i class="fa fa-angle-left" aria-hidden="true"></i>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#testimon" role="button" data-slide="next">
                     <i class="fa fa-angle-right" aria-hidden="true"></i>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 ">
                  <div class="titlepage">
                     <h2 id=opiniones>Opiniones</h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end design -->
      <!--  contact -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2 id=contacto>Contáctame</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Nombre" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Número de teléfono" type="type" name="Phone Number">                          
                        </div>
                        <div class="col-md-12">
                           <textarea class="textarea" placeholder="Mensaje" type="type" Message="Name"></textarea>
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6">
                  <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/d/embed?mid=1T1hSf5EbrZ2SM8EJ2Ii9t4PXEjs&hl=en&ehbc=2E312F" width="600" height="345" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-3 col-sm-6">
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
                     <p class="variat pad_roght2">Puedes seguirme en cualquiera de mis redes sociales para que te enteres de todos los proyectos en los que estoy trabajando, te podría resultar interesante.</p>
                  </div>
                  <div class=" col-md-3 col-sm-6">
                     <h3>Estoy para ayudarte </h3>
                     <p  class="variat pad_roght2">Estos son tiempos en los cuales la tecnología ha avanzando mucho y todos se están modernizando, así que si quieres empezar o mejorar tu presencia en el nuevo mundo del software, no dudes en pedirme ayuda.</p>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h3>INFORMATION</h3>
                     <ul class="link_menu">
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#acerca"> Acerca de mí</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#galeria">Galería de lenguajes</a></li>
                        <li><a href="#opiniones">Opiniones</a></li>
                        <li><a href="#contacto">Contáctame</a></li>
                     </ul>
                  </div>
                  <div class="col-md-3 col-sm-6">
                     <h3>Mi diseño</h3>
                     <p  class="variat">El diseño que usted pida como cliente aquí lo hago realidad, la única limitante de su diseño es su imaginación.
                     </p>
                  </div>
                  <div class="col-md-6 offset-md-6">
                     <form id="hkh" class="bottom_form">
                        <input class="enter" placeholder="Ingresa tu email" type="text" name="Enter your email">
                        <button class="sub_btn">Suscríbete</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">
                        <p>© 2022 Todos los derechos reservados. </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>