<nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0">
    <div class="container-fluid px-0">
        <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">

            <!-- Left: Search Form -->
            <div class="d-flex align-items-center">
                <form class="navbar-search form-inline" id="navbar-search-main">
                    <div class="input-group input-group-merge search-bar">
                        <span class="input-group-text" id="topbar-addon">
                            <svg class="icon icon-xs" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </span>
                        <input type="text" class="form-control" id="topbarInputIconLeft" placeholder="Search" aria-label="Search" aria-describedby="topbar-addon">
                    </div>
                </form>
            </div>
            <!-- /Search Form -->

            <!-- Right: Navbar Links -->
            <ul class="navbar-nav align-items-center">
                <!-- Empty for now -->
            </ul>

            <ul class="navbar-nav ms-lg-3">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <!-- Avatar -->
                            <div class="avatar rounded-circle size-36">
                                <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Avatar" class="image-36 center d-none d-lg-block">
                            </div>

                            <!-- User Name -->
                            <div class="media-body ms-2 text-dark align-items-center center d-none d-lg-block">
                                <span class="mb-0 font-small fw-bold text-gray-900">
                                    {{ optional(Auth::user())->name ?? 'Guest' }}
                                </span>
                            </div>
                        </div>
                    </a>

                    <!-- Dropdown Menu -->
                    <ul class="dropdown-menu dropdown-menu-end dashboard-dropdown py-1 px-2" aria-labelledby="profile-dropdown">
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                            </svg>
                            My Profile
                        </a>
                        <a class="dropdown-item d-flex align-items-center" href="#">
                            <svg class="dropdown-icon text-gray-400 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-.21-.78-.2-.96.02L.8 13.98a.987.987 0 00.33 1.48.987.987 0 001.03.02L9.5 10.98a.987.987 0 011.02 0l7.34 4.5a.987.987 0 001.02-.02.987.987 0 00.33-1.48L12.47 3.19c-.18-.22-.58-.23-.97-.02z" clip-rule="evenodd"></path>
                            </svg>
                            Settings
                        </a>
                        <div role="separator" class="dropdown-divider my-1"></div>
                        <a class="dropdown-item d-flex align-items-center text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <svg class="dropdown-icon text-danger me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4V7a3 3 0 00-3-3H4a3 3 0 00-3 3v10a3 3 0 003 3h6a3 3 0 003-3z"></path>
                            </svg>
                            Logout
                        </a>
                    </ul>

                    <!-- Logout Form -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>

        </div>
    </div>
</nav>
