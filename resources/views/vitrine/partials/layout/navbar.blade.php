<!-- Navbar Start -->
<div class="container-fluid mb-5">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0">Nos catalogues</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 150px">
                    <div class="nav-item dropdown">
                        <a href="{{ route('vitrine.level1', ['level1'=>'cat1']) }}" class="nav-link" data-toggle="dropdown">Category Level1 <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="{{ route('vitrine.level2', ['level1'=>'cat1', 'level2'=>'cat20']) }}" class="dropdown-item gx-40">Category Level 2</a>
                            <a href="{{ route('vitrine.level2', ['level1'=>'cat1', 'level2'=>'cat21']) }}" class="dropdown-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">category Level2 Child <i class="fa fa-angle-down float-right"></i></a>
                                <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                    <a href="{{ route('vitrine.level3', ['level1'=>'cat1', 'level2'=>'cat21', 'level3'=>'cat30']) }}" class="dropdown-item">Categorie 3</a>
                                    <a href="{{ route('vitrine.level3', ['level1'=>'cat1', 'level2'=>'cat21', 'level3'=>'cat31']) }}" class="dropdown-item">Categorie 3</a>
                                    <a href="{{ route('vitrine.level3', ['level1'=>'cat1', 'level2'=>'cat21', 'level3'=>'cat32']) }}" class="dropdown-item">Categorie 3</a>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="{{ route('vitrine.index')}}" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shop LocalHost</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="{{ route('vitrine.index')}}" class="nav-item nav-link">Acceuil</a>
                        <a href="{{ route('vitrine.shop')}}" class="nav-item nav-link">Produit</a>
                        <a href="{{ route('vitrine.contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
                        <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                    </div>
                </div>
            </nav>
            @yield('header')
        </div>
    </div>
</div>
<!-- Navbar End -->