<nav class="navbar navbar-expand-lg navbar-dark bg-black">
    <div class="container">
        <a class="navbar-brand" href="#">FiLMiSSiMi</a>
        
        <div class="collapse navbar-collapse " id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('film') }}">Tutti i Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Generi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prossime Uscite</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control d-flex ms-auto" type="search" placeholder="Cerca film..." aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Cerca</button>
            </form>
        </div>
    </div>
</nav>
