@extends('layouts.app')
@section('title', 'Camisas')

@section('content')
    <header>
        <h2>Monte seu pedido de camisa</h2>
    </header>
    <div class="container">
        
        <form action="{{ route('camisas.store') }}" method="post">
            {{ csrf_field() }}

            <h3>Uniformes</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <img src="{{ asset('img/camisas/camisa1.png') }}" alt="camisa1.png">
                    <h4>Uniforme 1</h4>
                    <div>
                        <input type="radio" id="camisa1" name="uniforme" value="Uniforme 1" {{ old('uniforme') == 'Uniforme 1' ? 'checked' : '' }}required>
                        <label for="camisa1">Selecione</label>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('img/camisas/camisa2.png') }}" alt="camisa2.png">
                    <h4>Uniforme 2</h4>
                    </p>
                    <div>
                        <input type="radio" id="camisa2" name="uniforme" value="Uniforme 2" required {{ old('uniforme') == 'Uniforme 2' ? 'checked' : '' }}>
                        <label for="camisa2">Selecione</label>
                    </div>
                </div>
                <div class="col">
                    <img src="{{ asset('img/camisas/camisa3.png') }}" alt="camisa3.jpg">
                    <h4>Uniforme 3</h4>
                    <div>
                        <input type="radio" id="camisa3" name="uniforme" value="Uniforme 3" required {{ old('uniforme') == 'Uniforme 1' ? 'checked' : '' }}>
                        <label for="camisa3">Selecione</label>
                    </div>
                </div>
                @error('uniforme')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <h3>Estampas</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <input type="checkbox" name="patrocinadores" id="patrocinadores" value="1" {{old('patrocinadores') ? 'checked' : ''}}>
                    <label for="patrocinadores"><h6>Patrocinadores</h6></label>
                    @error('patrocinadores')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-control">
                <label for="obs">Número na camisa</label>
                <div style="max-width: 97%;">
                    <input class="my-input" type="number" name="numero" id="numero" placeholder="Opcional" value="{{old('numero')}}">
                </div>
                @error('numero')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-control">
                <label for="obs">Nome na camisa</label>
                <div style="max-width: 97%;">
                    <input class="my-input" type="text" name="nome" id="nome" placeholder="Opcional" value="{{old('nome')}}">
                </div>
                @error('nome')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <h3>Outros</h3>
            <hr>
            <div class="form-control">
                <label for="tamanho">Tamanho</label>
                <select class="my-input" name="tamanho" id="tamanho" required>
                    <option value="" selected disabled>Selecione...</option>
                    <option value="PP">PP</option>
                    <option value="P">P</option>
                    <option value="M">M</option>
                    <option value="G">G</option>
                    <option value="GG">GG</option>
                    <option value="2GG">2GG</option>
                    <option value="3GG">3GG</option>
                </select>
                @error('tamanho')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-control">
                <label for="quantidade">Quantidade</label>
                <div style="max-width: 97%;">
                    <input class="my-input" type="number" name="quantidade" id="quantidade" min="1" required value="{{old('quantidade')}}">
                </div>
                @error('quantidade')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-control">
                <label for="obs">Observação na entrega</label>
                <div style="max-width: 97%;">
                    <input class="my-input" type="text" name="obs" id="obs" placeholder="Opcional" value="{{old('obs')}}">
                </div>
                @error('obs')
                    <div style="color: red;">{{ $message }}</div>
                @enderror
            </div>
            <div style="text-align: end; margin-top: 50px;">
                <button class="my-button" type="submit" style="background-color: black; color: white;">Submeter</button>
            </div>
        </form>
    </div>
@endsection
