@extends('layouts.app')
@section('title', 'Bem-vindo')

@section('content')
    <div class="container" style="text-align: center; margin-top: 50px;">
        <img src="{{ asset('img/favicon/galo.png') }}" alt="Galo" style="width: 150px; height: 180px;">
        <h1 style="margin-top: 20px; font-size: 2.5rem;">Camisas Store</h1>
        
        <header>
            <h2>Bem-vindo ao nosso site!</h2>
        </header>
        <div class="container">
            <h3>Conheça nossos uniformes</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/camisas/camisa1.png') }}" alt="camisa1.png">
                    <h4>Uniforme 1</h4>
                    
                </div>
                <div class="col">
                    <img src="{{ asset('img/camisas/camisa2.png') }}" alt="camisa2.png">
                    <h4>Uniforme 2</h4>
                    
                </div>
                <div class="col">
                    <img src="{{ asset('img/camisas/camisa3.png') }}" alt="camisa3.jpg">
                    <h4>Uniforme 3</h4>
                    
                </div>
            </div>
            <br>
            <h3 style="text-align: center;">Informações Adicionais</h3>
            <hr>
            <p>No botão abaixo você pode realizar um pedido com nossos produtos.</p>
            <div style="display: flex; justify-content: center; align-items: center;">
                <a href="{{ route('camisas.index') }}" class="my-button" style="background-color: black; color: white;">Veja Nossos Uniformes</a>
            </div>

        </div>
    </div>
@endsection
