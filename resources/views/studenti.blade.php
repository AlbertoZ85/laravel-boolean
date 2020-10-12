@extends('layouts.app')
@section('titolo','Studenti')

@section('content')
<div class="card-group">
    @foreach ($data as $student)        
        <div class="card">
            <img src="{{$student['img']}}" class="card-img-top rounded mx-auto" alt="{{$student['nome']}}">
            <div class="card-body">
                <h4 class="card-title">{{$student['nome']}}</h4>
                <small class="text-muted">{{$student['anni']}} anni</small>
                <p class="card-text">{{$student['descrizione']}}</p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Assunto da {{$student['azienda']}}</small>
            </div>
        </div>
    @endforeach
</div>
@endsection