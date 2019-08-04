@extends('front.template')

@section('pageTitle', 'Productos')

@section('link_style')
  <link rel="stylesheet" href="/css/admin.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection

@section('header')
  <h1>Hola @</h1>
@endsection

@section('mainContent')
  <div class="container">
    <div class="admProd">
         {{-- {!! Form::open(['route' => 'movie/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!} --}}

        {{-- <a href="{{ route('movie.index') }}" class="btn btn-primary">All</a>
         <a href="{{ route('movie.create') }}" class="btn btn-primary">Create</a>
        {!! Form::close() !!} --}}
        <br>
        <table class="">
            <thead>
                <tr>
                  <th>Name</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach($movies as $movie)
                <tr>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->description }}</td>
                    <td>
                        <a class="btn btn-primary btn-xs" href="{{ route('movie.edit',['id' => $movie->id] )}}" >Edit</a>
                        <a class="btn btn-danger btn-xs" href="{{ route('movie/destroy',['id' => $movie->id] )}}" >Delete</a>
                    </td>

                </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
  </div>
@endsection
