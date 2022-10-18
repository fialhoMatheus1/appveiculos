@extends('padrao')
@section('content')
<section>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{'/img/carro1.jpg'}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{'/img/caminhao1.jpg'}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{'/img/carro2.jpg'}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="controlarCards">
        <div class="card shadow-lg p-3 mb-5 bg-dark rounded">
            <div>
                <img class="imgCard img-thumbnail" src="{{'/img/card1.jpg'}}" alt="">
            </div>
            <p class="txtCard">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <div class="botaoCard">
                <button type="button" class="btn btn-warning">Ver Mais</button>
            </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 bg-dark rounded">
            <div>
                <img class="imgCard img-thumbnail" src="{{'/img/card2.jpg'}}" alt="">
            </div>
            <p class="txtCard">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <div class="botaoCard">
                <button type="button" class="btn btn-warning">Ver Mais</button>
            </div>
        </div>

        <div class="card shadow-lg p-3 mb-5 bg-dark rounded">
            <div>
                <img class="imgCard img-thumbnail" src="{{'/img/card3.jpeg'}}" alt="">
            </div>
            <p class="txtCard">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>

            <div class="botaoCard">
                <button type="button" class="btn btn-warning">Ver Mais</button>
            </div>
        </div>
    </div>
</section>
@endsection