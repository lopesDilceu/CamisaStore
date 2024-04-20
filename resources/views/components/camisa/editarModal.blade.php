<div class="modal fade" id="editarCamisa" tabindex="-1" aria-labelledby="editarCamisaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editarCamisaLabel">Editar camisa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('camisas.update', $camisas->id) }}" method="post">
                    {{ csrf_field() }}
                    {{ csrf_field() }}
                    <h3>Uniformes</h3>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('img/camisas/camisa1.png') }}" alt="camisa1.png">
                            <h4>Uniforme 1</h4>
                            <div>
                                <input type="radio" id="camisa1" name="uniforme" value="Uniforme 1"
                                    {{ $camisas->uniforme == 'Uniforme 1' ? 'checked' : '' }} required>
                                <label for="camisa1">Selecione</label>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/camisas/camisa2.png') }}" alt="camisa2.jpg">
                            <h4>Uniforme 2</h4>
                            <div>
                            <input type="radio" id="camisa2" name="uniforme" value="Uniforme 2"
                                    {{ $camisas->uniforme == 'Uniforme 2' ? 'checked' : '' }} required>
                                <label for="camisa2">Selecione</label>
                            </div>
                        </div>
                        <div class="col">
                            <img src="{{ asset('img/camisas/camisa3.png') }}" alt="camisa3.jpg">
                            <h4>Uniforme 3</h4>
                            <div>
                            <input type="radio" id="camisa3" name="uniforme" value="Uniforme 3"
                                    {{ $camisas->uniforme == 'Uniforme 3' ? 'checked' : '' }} required>
                                <label for="camisa3">Selecione</label>
                            </div>
                        </div>
                        @error('camisa')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <h3>Estampas</h3>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <input type="checkbox" name="patrocinadores" id="patrocinadores" value="1"
                                {{ $camisas->patrocinadores ? 'checked' : '' }}>
                            <label for="patrocinadores">Patrocinadores</label>
                            @error('patrocinadores')
                                <div style="color: red;">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>

                    <div class="form-control">
                        <label for="obs">Número na camisa</label>
                        <div style="max-width: 97%;">
                            <input class="my-input" type="text" name="numero" id="numero"
                                placeholder="Opcional" value="{{ $camisas->numero }}">
                        </div>
                        @error('numero')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-control">
                        <label for="obs">Nome na camisa</label>
                        <div style="max-width: 97%;">
                            <input class="my-input" type="text" name="nome" id="nome"
                                placeholder="Opcional" value="{{ $camisas->nome }}">
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
                            <option value="" disabled>Selecione...</option>
                            <option value="PP" 
                            {{$camisas->tamanho =="PP" ? "selected" : ""}}
                            >PP</option>
                            <option value="P"
                            {{$camisas->tamanho =="P" ? "selected" : ""}}
                            >P</option>
                            <option value="M"
                            {{$camisas->tamanho =="M" ? "selected" : ""}}
                            >M</option>
                            <option value="G"
                            {{$camisas->tamanho =="G" ? "selected" : ""}}
                            >G</option>
                            <option value="GG"
                            {{$camisas->tamanho =="GG" ? "selected" : ""}}
                            >GG</option>
                            <option value="2GG"
                            {{$camisas->tamanho =="2GG" ? "selected" : ""}}
                            >2GG</option>
                            <option value="3GG"
                            {{$camisas->tamanho =="3GG" ? "selected" : ""}}
                            >3GG</option>
                        </select>
                        @error('tamanho')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="quantidade">Quantidade</label>
                        <div style="max-width: 97%;">
                            <input class="my-input" type="number" name="quantidade" id="quantidade" min="1"
                                required value="{{ $camisas->quantidade }}">
                        </div>
                        @error('quantidade')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-control">
                        <label for="obs">Observação na entrega</label>
                        <div style="max-width: 97%;">
                            <input class="my-input" type="text" name="obs" id="obs"
                                placeholder="Opcional" value="{{ $camisas->observacao }}">
                        </div>
                        @error('obs')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
            </form>
        </div>
    </div>
</div>
