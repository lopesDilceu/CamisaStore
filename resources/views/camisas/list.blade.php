@extends('layouts.app')
@section('title', 'Listagem')

@section('content')
    <div class="container">
        <h1>Listagem de Pedidos de Camisa</h1>
        <br>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Uniforme</th>
                        <th>Estampas</th>
                        <th>Número</th>
                        <th>Nome</th>
                        <th>Tamanho</th>
                        <th>Quantidade</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($camisas as $camisa)
                        <tr>
                            <td>{{ $camisa->uniforme }}</td>
                            <td>
                                @if ($camisa->patrocinadores)
                                    Patrocinadores
                                @endif
                            </td>
                            <td>{{ $camisa->numero }}</td>
                            <td>{{ $camisa->nome }}</td>
                            <td>{{ $camisa->tamanho }}</td>
                            <td>{{ $camisa->quantidade }}</td>
                            <td>
                                <a href="{{ route('camisas.show', $camisa->id) }}" class="btn btn-primary">Ver mais</a>

                                <form action="{{ route('camisas.delete', $camisa->id) }}" method="post"
                                    style="display: inline;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Nenhum pedido de camisa cadastrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


@endsection
