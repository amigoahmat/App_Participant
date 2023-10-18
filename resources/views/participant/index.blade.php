@extends('layouts')
@section('content')
    <section id="about">
        <div class="container">

        <div class="container my-5">
    <h4>Liste des participants</h4>

            <div class="flex-end" >
            <a href="{{route('participant.create')}}" class="btn btn-sm btn-primary float-right">Nouveau</a>
            </div>
            <table class="table table-hover table-responsive">
                    <thead>
                    <tr>
                   
                    
                    <th scope="col">Date</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($participants as $participant)
                            <tr valign="middle">
                                <td>{{$participant ->created_at}}</td>
                                    <td>{{$participant ->nom}}</td>
                                    <td>{{$participant -> prenom}}</td>
                                    <td>{{$participant -> numero}}</td>
                                    <td>{{$participant -> email}}</td>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section><!-- #about -->




@endsection
