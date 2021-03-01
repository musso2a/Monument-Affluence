@extends('layout.default')



@section('content')

    @include('partials.navbar')

    <body id="page-top">

    <!-- Header -->
    <header class="masthead d-flex" id="index-header">
        <div class="container text-center my-auto">
            <h1 class="mb-1">MONUMENT</h1>
            <h3 class="mb-5">
                <em>Les monument pour vous !</em>
            </h3>
            <a href="#info"><button type="button" class="btn btn-secondary">En savoir plus</button></a>
            <a href="/reservation"><button type="button" class="btn btn-secondary">Reservation</button></a>

        </div>
        <div class="overlay"></div>
    </header>

    <!-- About -->
    <section class="content-section bg-dark" id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>Réservez la tour Eiffel ! </h2>
                    <p class="lead mb-5">Vous avez toujours rêvé d'avoir la tour Eiffel pour vous ?</p>
                    <a href="/reservation"><button type="button" class="btn btn-secondary" id="button-reservation">N'attendez plus !</button></a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-section bg-light" id="info">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h2>Choses a savoir: </h2>
                    <p class="lead mb-5">La tour Eiffel est une tour de fer puddlé de 324 mètres de hauteur située à Paris, à l’extrémité nord-ouest du parc du Champ-de-Mars en bordure de la Seine dans le 7ᵉ arrondissement</p>
                    <div class="container text-center">
                        <h3>Horaires d'ouvertures :</h3>
                        <p>Du lundi au vendredi</p>
                        <ul class="hour-list">
                            <li>9h - 10h</li>
                            <li>10h - 11h</li>
                            <li>12h - 13h</li>
                            <li>18h - 19h</li>
                        </ul>
                    </div>
                    <br>

                    <p>Monument vous permet de réserver la tour Eiffel pour vous seul !</p>
                    <br>

                    <a href="/reservation"><button type="button" class="btn btn-secondary" id="button-reservation">Je réserve !</button></a>

                </div>
            </div>
        </div>
    </section>


    <div class="map-div">
    <div style="overflow:hidden; position: relative;" class="map">
        <iframe width="100%" height="440" src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=tour%20effeil+(Titre)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">

        </iframe>

    </div>

    <!-- Footer -->
    <footer class="footer text-center">
        <div class="container">
            <p class="text-muted small mb-0">Copyright &copy; MONUMENT 2021</p>
        </div>
    </footer>

@endsection

<style>
    #index-header {
        background-image: url('../img/home.jpg');
        background-size: cover;
        height: 100vh;
        background-color: #4a5568;
        color: #e2e8f0;
    }

    .btn-secondary {
        margin-bottom: 10px;
        margin-right: 10px;
    }
    #button-reservation {
        margin-bottom: 20px;
    }
    html {
        scroll-behavior: smooth;
    }

    .hour-list {
        list-style: none;
        margin: 0;
        padding: 0;
    }
    a {
        text-decoration: none;
    }
    .map-div {


    }
    #about {
        background-color: rgba(255, 227, 215, 0.51);
        color: #e2e8f0;
    }
    #about h2 {
        margin-top: 20px;

    }

    #info h2 {
        margin-top: 20px;

    }

    .footer div p {
        margin: 20px auto;
        padding-bottom: 20px;
    }
</style>
