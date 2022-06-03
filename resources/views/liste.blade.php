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
                        <a href="{{Route('regist')}}">ENREGISTRER</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
<main>

<h1 style="margin-left: 550px;font-size: 25px;">LISTE DES ABONNES</h1>
<div class="container">
    <div class="row">
 
   <table class="table">

   <tr class="table-primary">
     <th scope="col"><b>NOM</b></th>
      <th scope="col"> <b>PRENOM</b></th>
       <th scope="col"> <b>DATE_NAISSANCE</b></th>
        <th scope="col"> <b>Email</b></th>
         <th scope="col"> <b>NUMERO</b></th>
          <th scope="col"> <b>DATE_DEBUT_D</b></th> 
          </tr>
   
          @foreach($listings as $listing)
       <tr>
        
        <td>{{$listing->nom}}</td>
        <td>{{$listing->prenom}}</td>
        <td>{{$listing->date_naissance}}</td>
        <td>{{$listing->email}}</td>
        <td>{{$listing->numero}}</td>
        <td>{{$listing->date_de_debut}}</td>
        
        </tr>
        @endforeach
   </table>
  

</div>
</div>

</main>

@endsection