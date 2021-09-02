<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Главная</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/all">Все новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Наука и техника</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Коронавирус</a>
                </li>
            </ul>
            <form class="d-flex" method="get" action="{{route('search')}}">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="searchNews" id="searchNews">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
