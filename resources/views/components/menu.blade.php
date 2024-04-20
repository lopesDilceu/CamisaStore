<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: black;">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">Camisas Store</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarID"
            aria-controls="navbarID" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarID">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('camisas.index') }}">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('camisas.list') }}">Listagem</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
