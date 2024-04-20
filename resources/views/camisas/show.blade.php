@extends('layouts.app')
@section('title', 'Detalhes')

@section('content')

<div class="container">
    <h1>Detalhes do pedido de camisa</h1>
    <br>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; flex-direction:row;">
                <div style="margin-right: 20px;">
                    <img src="{{asset('img/camisas/'.$camisas->img)}}" alt="">
                </div>
                <div>
                    <h5 class="card-title">{{ $camisas->uniforme }}</h5>
                    <p class="card-text">
                        <strong>Estampa:</strong>
                        @if($camisas->patrocinadores)
                            Patrocinadores
                        @endif
                    </p>
                    <p class="card-text"><strong>Número:</strong> {{ $camisas->numero }}</p>
                    <p class="card-text"><strong>Nome:</strong> {{ $camisas->nome }}</p>
                    <p class="card-text"><strong>Tamanho:</strong> {{ $camisas->tamanho }}</p>
                    <p class="card-text"><strong>Quantidade:</strong> {{ $camisas->quantidade }}</p>   
                    <p class="card-text"><strong>Observação:</strong> {{ $camisas->observacao }}</p> 
                </div>
            </div>
            <div style="display: flex; flex-direction:row; justify-content:end;">
                <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#editarCamisa">
                    Editar
                </button>
                @include('components.camisa.editarModal')
                
                <form action="{{ route('camisas.delete', $camisas->id) }}" method="post"
                    style="display: inline;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-danger m-1"
                        onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                </form>
            </div>



@endsection