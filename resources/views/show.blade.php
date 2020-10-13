@extends('layouts.app')
@section('titolo','Studenti')

@section('content')
<div class="card-group">
    <div class="card card-az">
        <img src="{{$student['img']}}" class="card-img-top rounded mx-auto" alt="{{$student['nome']}}">
        <div class="card-body">
            <h4 class="card-title">{{$student['nome']}}</h4>
            <small class="text-muted">{{$student['anni']}} anni</small>
            <p class="card-text">{{$student['descrizione']}}</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Assunt{{$student['genere'] == 'f' ? 'a' : 'o'}} da {{$student['azienda']}}</small>
        </div>
    </div>
</div>
@endsection