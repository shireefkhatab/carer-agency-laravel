<!DOCTYPE html>
<html lang="en">
    <head>
        @include('ca-admin.partials.head')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('ca-admin.partials.nav')
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href='{{ url("/ca-admin") }}'>
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href='{{ url("/") }}' data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Pages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href='{{ url("/") }}' data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href='{{ url("/admin-login") }}'>Login</a>
                                            <a class="nav-link" href='{{ url("/admin-register") }}'>Register</a>
                                            <a class="nav-link" href='{{ url("/admin-password") }}'>Forgot Password</a>
                                        </nav>
                                    </div>
                                    
                                </nav>
                            </div>
                            
                            <a class="nav-link" href='{{ url("admin-jobs") }}'>
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Jobs
                            </a>
                            <a class="nav-link" href='{{ url("admin-candidates") }}'>
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Candidates
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        USERNAME
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        @yield('content')

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                @include('ca-admin.partials.footer')
                </footer>
            </div>
        </div>
        @include('ca-admin.partials.scripts')
    </body>
</html>
