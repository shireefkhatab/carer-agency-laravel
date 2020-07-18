<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.partials.head')
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        @include('admin.partials.nav')
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href='{{ url("secure/user/admin/dashboard") }}'>
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href='{{ url("/") }}' data-toggle="collapse" data-target="#item1" aria-expanded="false" aria-controls="item1">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Item 1
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="item1" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                Item 1
                            </div>
                            <a class="nav-link collapsed" href='{{ url("/") }}' data-toggle="collapse" data-target="#item2" aria-expanded="false" aria-controls="item2">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Item 2
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="item2" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                Item 2
                            </div>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        ADMIN
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

                        

                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                @include('admin.partials.footer')
                </footer>
            </div>
        </div>
        @include('admin.partials.scripts')
    </body>
</html>
