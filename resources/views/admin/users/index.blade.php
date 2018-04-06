@extends('layouts.admin')

@section('content')

  <h1>Lista Korisnika</h1>

  <!--Table-->
<table class="table">

    <!--Table head-->
    <thead>
        <tr>
            <th>#</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Uloga</th>
            <th>Create</th>
            <th>Update</th>
        </tr>
    </thead>
  <!--Table head-->

    <!--Table body-->
    <tbody>
      @if($users)
        @foreach ($users as $user)

        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->surname}}</td>
            <td>{{$user->role ? $user->role->name : 'User has no role'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>

        @endforeach
      @endif

    </tbody>
    <!--Table body-->
</table>
<!--Table-->
@stop
