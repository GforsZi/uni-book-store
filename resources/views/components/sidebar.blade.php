<header
    class="navbar sticky-top bg-primary-subtle flex-md-nowrap p-0 shadow"
    data-bs-theme="dark">
    <a
        class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-10 text-white"
        href="/home">UNIBOOKSTORE</a>

    <ul class="navbar-nav flex-row d-md-none">
        <li class="nav-item text-nowrap">
            <button
                class="btn btn-outline-primary py-0 px-3"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                Menu
            </button>
        </li>
    </ul>

    <div id="navbarSearch" class="navbar-search w-100 collapse">
        <input
            class="form-control w-100 rounded-0 border-0"
            type="text"
            placeholder="Search"
            aria-label="Search" />
    </div>
</header>

<div class="container-fluid bg-body" style="transition: 0.4">
    <div class="row">
        <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
            <div
                class="offcanvas-md offcanvas-end bg-body-tertiary"
                tabindex="-1"
                id="sidebarMenu"
                aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">
                        UNIBOOKSTORE
                    </h5>
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="offcanvas"
                        data-bs-target="#sidebarMenu"
                        aria-label="Close"></button>
                </div>
                <div
                    class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
                    <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-body-secondary text-uppercase">
                        <span class="text-info-emphasis fs-5">View page</span>
                        <a class="link-secondary" href="/" aria-label="Add a new report">
                            <i class="bi bi-house-up text-info-emphasis"></i>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active text-secondary-emphasis" aria-current="page" href="/home">
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 text-secondary-emphasis" href="/admin">
                                Admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 text-secondary-emphasis" href="/procurement">
                                Pengadaan
                            </a>
                        </li>
                    </ul>
                    <hr class="my-3">
                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 active text-secondary-emphasis" aria-current="page" href="/book">
                                Data Buku
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 text-secondary-emphasis" href="/author">
                                Data Penerbit
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2 text-secondary-emphasis" href="/category">
                                Data Kategori
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="min-height: 100vh;">
            {{$slot}}
        </main>
    </div>
</div>