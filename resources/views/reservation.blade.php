@extends('layout.default')


@section('content')
    @include('partials.navbar')

    <div class="container">
        <div class="row">

        <div class="w-50 p-3" id="img"></div>


        <div class="w-50 p-3" id="reservation">
            <h1>Réservation 🗼</h1>
            <br>
            <form method="POST" action="/reservation">
                <label for="example-date-input" class="col-2 col-form-label">Date</label>
                <div class="col-10">
                    <input class="form-control" type="date" value="2021-01-01" id="example-date-input">
                </div>

            <br>

            <div class="choices">
                <h2>Choisi ton horaire 📅 :</h2>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">9h-10h</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault2">10h-11h</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault3">12h-13</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault4">18h-19h</label>
                </div>
                <br>
            <br>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email"  placeholder="Ton adresse mail" required>
            </div>
            <br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked required>
                    <label class="form-check-label" for="flexCheckChecked">
                       J'accepte les CGU
                    </label>
                </div>
                <br>
            <button class="btn btn-secondary" type="submit">Je réserve</button>
                <a href="/"><button type="button" class="btn btn-secondary">retour</button></a>
        </div>
            </form>


        </div>
    </div>

@endsection


<style>
    .container {
        height: 80vh;
        /*border: 1px solid black;*/
        margin-top: 40px;
        border-radius: 20px;
        -webkit-box-shadow: 20px 18px 26px 0px rgba(0,0,0,0.53);
        -moz-box-shadow: 20px 18px 26px 0px rgba(0,0,0,0.53);
        box-shadow: 20px 18px 26px 0px rgba(0,0,0,0.53);
    }

    .row {
        height: 100%;
    }

    #reservation {
        height: 100%;
        /*background-color: #a0aec0;*/
    }

    #email {
        width: 83%;
    }

    #img {
        height: 100%;
        background-image: url('../img/reservation1.jpg');
        background-size: contain;
        background-repeat: no-repeat;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 20px;
    }



</style>
