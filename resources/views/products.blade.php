@extends('layouts.app') 

@section('titoloPagina', 'I Prodotti')

@section('content')
<div class="sfondo-azzurro main-products">
    @foreach ($formati as $tipo => $formato)
        <h2>{{ $tipo }} </h2>
        <div class="container">
            @foreach ($formato as $pasta)
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <div class="overlay"> 
                        <p> <a href=""> {{ $pasta['titolo'] }}</a></p>
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
