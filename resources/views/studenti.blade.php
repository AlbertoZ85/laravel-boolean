@extends('layouts.app')
@section('titolo','Studenti')

@section('content')
<div class="card-group">
    @foreach ($data as $student)        
        <div class="card">
            <img src="{{$student['img']}}" class="card-img-top" alt="{{$student['nome']}}">
            <div class="card-body">
                <h4 class="card-title">{{$student['nome']}}</h4>
                <p class="card-text">{{$student['descrizione']}}</p>
                <p class="card-text"><small class="text-muted">{{$student['anni']}}</small></p>
            </div>
        </div>
    @endforeach
</div>
@endsection