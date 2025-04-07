@extends("layouts.app")
@section("content")
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('helados2.jpg')}}" class="bd-placeholder-img " width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>bienvenido a helados alaska</h1>
            <p>Sumérgete en un mundo de frescura y sabor, donde cada helado es una aventura deliciosa.</p>
            <p>Desde los clásicos favoritos hasta creaciones únicas, estamos aquí para endulzar tu día con el toque perfecto de felicidad congelada.</p>
          </div>
        </div>
      </div>
     
    </div>
  </div>

  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
      <img src="{{asset('mi_foto.jpg')}}" class=" rounded-circle mx-auto d-block w-50" alt="...">
        <h2>ALAN FLORES</h2>
        <p>numero de contacto: 7291524124</p>
        <p>correo: alan0705@gmail.com</p>
        <p>gerente de la heladeria y encargado del marketing </p>
      </div>
      <div class="col-lg-4">
      <img src="{{asset('joss.jpeg')}}" class=" rounded-circle mx-auto d-block w-25" alt="...">
        <h2>Josue colin</h2>
        <p>numero de contacto: 7291524124</p>
        <p>correo: alan0705@gmail.com</p>
        <p>ingeniero y colaborador de la heladeria halaska </p>
      </div>
      <div class="col-lg-4">
      <img src="{{asset('didier.jpeg')}}" class=" rounded-circle mx-auto d-block w-50" alt="...">
        <h2>Didier Pineda</h2>
        <p>numero de contacto: 7291524124</p>
        <p>correo: alan0705@gmail.com</p>
        <p>dueño de la heladeria  halaska y provedor de productos </p>
      </div>
    </div>


    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 bg bg-light">
        <h2 class="featurette-heading">historia de la heladeria <span class="text-muted">.</span></h2>
        <p class="lead">Helados Alaska nació con la visión de ofrecer a la comunidad de Valle de Bravo
una experiencia única en sabores y calidad. Fundada por un grupo de
emprendedores apasionados por la creación de productos naturales y deliciosos,
la empresa se ha consolidado como un referente en la región.
Lo que comenzó como una pequeña heladería en el corazón de Valle de Bravo ha
evolucionado para adaptarse a las necesidades del mercado moderno. Con la
incorporación de una aplicación web, Helados Alaska busca mejorar su
accesibilidad y modernizar su modelo de negocio.
</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('heladeriantigua.png') }}" class="img-fluid" alt="Helado delicioso">


      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2 bg bg-light">
        <h2 class="featurette-heading">objetivos <span class="text-muted"></span></h2>
        <p class="lead">Desarrollar una aplicación web intuitiva y funcional para Helados Alaska que
permita a los clientes realizar pedidos en línea, conocer promociones y
personalizar su experiencia de compra, con el fin de mejorar la accesibilidad,
ampliar el mercado y fortalecer la relación con los consumidores.
Objetivos Específicos
Facilitar pedidos en línea: Implementar una plataforma digital que permita a los
clientes realizar pedidos de manera rápida y sencilla.
Fomentar el consumo local: Colaborar con productores locales para asegurar
ingredientes frescos y de alta calidad, promoviendo la economía regional.
Adoptar tecnologías sostenibles: Implementar prácticas digitales que minimicen el
uso de papel y otros materiales contaminantes.</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="{{ asset('dentro.png') }}" class="img-fluid" alt="Helado delicioso">
      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 bg bg-light">
        <h2 class="featurette-heading">locación <span class="text-muted"></span></h2>
        <p class="lead">Ubicada en un rincón acogedor de la ciudad, Helados Alaska es un espacio diseñado para transportarte a un mundo de frescura y dulzura. Al entrar, serás recibido por un ambiente cálido y moderno, con tonos pastel y detalles inspirados en paisajes árticos, creando una sensación refrescante y relajante.
Las vitrinas de cristal exhiben una tentadora variedad de helados artesanales, con colores vibrantes y texturas irresistibles. Contamos con cómodas mesas y sillones para que disfrutes tu helado en compañía de amigos o familia. Además, nuestra iluminación suave y música ambiental crean el lugar perfecto para relajarte y disfrutar de cada cucharada.</p>
      </div>
      <div class="col-md-5">
      <img src="{{ asset('afuera.png') }}" class="img-fluid" alt="Helado delicioso">
      </div>
    </div>

    <hr class="featurette-divider">

  </div>

  <footer class="container">
    <p class="float-end"><a href="#">regresar arriba</a></p>
    <p>&copy; 2023–2025 helados alaska, Inc. &middot;</p>
  </footer>
</main>
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection