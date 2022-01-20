<head>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/carousel/">
    </head>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="...">
            <div class="container">
                <div class="carousel-caption text-left">
                  <h1>Example headline.</h1>
                  <p>Some representative placeholder content for the first slide of the carousel.</p>
                  <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('images/3.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="container">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">Mis Mascotas</h1>
              <p class="lead my-3">"La gente que realmente aprecia a los animales siempre pregunta sus nombres"</p>
              <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">(Lilian Jackson Braun)</a></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($pets as $pet)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <div class="card mb-4 shadow-sm">
                    <a href="{{ route('pet.details', ['name_pet' => $pet->name_pet]) }}" title="{{ $pet->name_pet }}">
                        <figure><img src="{{ asset('images/pets') }}/{{ $pet->image }}" alt="{{ $pet->name_pet }}" alt="{{ $pet->name_pet }}"></figure>
                    </a>
                    <div class="card-body text-center">
                        <a href="{{ route('pet.details', ['name_pet' => $pet->name_pet]) }}" class="product-name"><span>{{ $pet->name_pet }}</span></a>
                        <div class="wrap-price">
                            <span class="product-price">{{ $pet->name_pet }}</span>
                        </div>
                        <a href="#" class="btn btn-primary text-center" href="#" wire:click='edit({{ $pet->id }})'>Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


