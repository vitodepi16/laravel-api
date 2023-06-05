@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <div class="logo_laravel">
                <img src="image/logo-portfolio.jpeg" style="width: 200px" alt="">
            </div>
            <h1 class="display-5 fw-bold">
                Benvenuto nel tuo portfolio personale
            </h1>

            <p class="col-md-8 fs-4"></p>
            <a href="{{ route('login') }}" class="btn btn-outline-primary" type="button">Vai al login</a>
            <a href="{{ route('register') }}" class="btn btn-outline-primary" type="button">Registrati</a>
        </div>
    </div>

    <div class="content">
        <div class="container">
            <p>Sono lieto di presentarvi la mia innovativa pagina per il caricamento dei portfolio, un'esperienza
                interattiva e intuitiva che mette in mostra il talento e la creatività di numerosi professionisti
                provenienti da diverse discipline. La pagina è stata progettata con cura per offrire una piattaforma
                accattivante e facile da navigare, in cui ogni portfolio viene presentato in modo impeccabile e
                personalizzato.</p>
        </div>
    </div>
@endsection
