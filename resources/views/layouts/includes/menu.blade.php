<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Cartorio Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a href="{{route('listar')}}" class="nav-link" >Tabeliao</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('listar.certidao')}}" class="nav-link" >Certidao</a>
                    </li>
            </ul>
        </div>            
    </nav>
</header>