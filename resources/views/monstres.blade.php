@extends('template')

@section('content')
hello
@foreach($monstres as $monstre)
    <div>
        <h1>{{$monstre->name}}</h1>
        <p>{{$monstre->description}}</p>
    </div>
@endforeach

@if(Session::has('error'))
<div class="alert alert-danger">
    {{ Session::get('error') }}
</div>
@endif

<h1>{{ $id }}</h1>
@endsection
