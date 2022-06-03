@extends('layouts.doctype')


@section('content')
    

<body>
    <header>
        <nav>

            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <img src="images/logo.jpg" alt="logo-auf">
                    </div>
                    <div class="col-3">
                        <a href="{{Route('liste')}}">LISTE</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <h1>FORMULAIRE <br> D'ENREGISTREMENT</h1>

        <div class="container">

            <form action="" method="POST">
                @csrf
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">NOM</label>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" name="nom">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">PRENOM</label>
                    </div>
                    <div class="col-5">
                        <input type="text" class="form-control" name="prenom">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">DATE DE NAISSANCE</label>
                    </div>
                    <div class="col-5">
                        <input type="date" class="form-control" name="naissance">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">Email</label>
                    </div>
                    <div class="col-5">
                        <input type="email" class="form-control" name="mail">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">NUMERO</label>
                    </div>
                    <div class="col-5">
                        <input type="number" class="form-control" name="numb">
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-2">
                        <label class="form-label">DATE DE DEBUT</label>
                    </div>
                    <div class="col-5">
                        <input type="date" class="form-control" name="debut">
                    </div>
                </div>
                <button class="btn btn-danger mt-4" name="submit">ENREGISTRER</button>
            </form>
        </div>
        </div>
        <p>Les donnes récupérées via ce formulaire sont utilisées <br>pour permettre aux abonnés 
                                    d’accéder à nos lettres d'information</p>

    </main>

   @endsection