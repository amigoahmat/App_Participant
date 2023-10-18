@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

            <div class="container my-5 row">
        <div class="col-md-4"></div>
        <div class="col-md-6 card">
            <h4 >Ajout d'un participant</h4>


            <form method="POST" action="{{route('participant.store')}}" enctype="multipart/form-data">

                @csrf

                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" name="nom" class="form-control" id="nom" placeholder="entrer le nom de participant" required>
                </div>

                <div class="mb-3">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="entrer le prenom de participant" required>
                </div>

                <div class="mb-3">
                    <label for="numero" class="form-label">Telephone</label>
                    <input type="text" name="numero" class="form-control" id="numero" placeholder="entrer le numero de participant" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="entrer l'adresse de participant" required>
                </div>

                <div class="flex-end" >
                    <button type="submit" class="btn btn-primary mb-3 mx-3">Soumettre</button>
                    <a href="participant.index" class="btn btn-outline-warning mb-3">Annuler</a>
                </div>

            </form>
        </div>
    </div>


            </div>
        </div>
    </section><!-- #about -->
@endsection
