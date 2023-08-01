<header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/posts">Portal Berita</a>

    <div class="nav-item text-nowrap">
    <form action="/logout" method="post">
        @csrf
      <button type="submit" class="nav-link px-3 bg-light border-0"><i class="bi bi-box-arrow-right mr-5"></i>Logout</button>
  </form>

    
    </div>
  </header>
