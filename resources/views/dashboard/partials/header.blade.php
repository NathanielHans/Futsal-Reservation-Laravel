<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand d-flex  align-items-center" href="/">
        <img src="/Img/Logo_Fix.png" alt="Logo Goeboex Futsal" width="50" class="me-2" >
        <h1 class="fw-bold fs-5 logoText">Goeboex<br>Futsal</h1>
      </a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
        <button type="submit" class="nav-link px-3 bg-dark">Log Out</button>
      </form>
      </div>
    </div>
  </header>