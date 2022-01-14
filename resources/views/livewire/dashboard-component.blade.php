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
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
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
        <div class="row">
            @foreach ($pets as $pet)
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ asset('images/pets') }}/{{ $pet->image }}" alt="{{ $pet->name_pet }}">
                    <div class="card-body text-center">
                        <a href="{{ route('pet.details', ['name_pet' => $pet->name_pet]) }}" class="product-name"><span>{{ $pet->name_pet }}</span></a>
                        <div class="wrap-price">
                            <span class="product-price">{{ $pet->name_pet }}</span>
                        </div>
                        <a href="#" class="btn btn-primary text-center" href="#" wire:click.prevent="store({{ $pet->id }}, '{{ $pet->name_pet }}', {{ $pet->name_pet }})">Ver</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
