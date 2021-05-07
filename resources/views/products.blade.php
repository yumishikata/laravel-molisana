@extends('layouts.app') 

@section('titoloPagina', 'I Prodotti')

@section('content')
<div class="sfondo-azzurro main-products">
<h2>LE LUNGHE</h2>
    <div class="container">
        @foreach ($paste as $pasta)
            @if ($pasta['tipo'] == 'lunga')
                
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <div class="overlay">
                        <p> {{ $pasta['titolo'] }}</p>
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
            
            @endif
        @endforeach
    </div>
<h2>LE CORTE</h2>
    <div class="container">
        @foreach ($paste as $pasta)
            @if ($pasta['tipo'] == 'corta')
                
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <div class="overlay">
                        <p> {{ $pasta['titolo'] }}</p>
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
            
            @endif
        @endforeach
    </div>
<h2>LE CORTISSIME</h2>
    <div class="container">
        @foreach ($paste as $pasta)
            @if ($pasta['tipo'] == 'cortissima')
                
                <div class="card">
                    <img src="{{ $pasta['src'] }}" alt="">
                    <div class="overlay">
                        <p> {{ $pasta['titolo'] }}</p>
                        <i class="fas fa-utensils"></i>
                    </div>
                </div>
            
            @endif
        @endforeach
    </div>
</div>
@endsection

