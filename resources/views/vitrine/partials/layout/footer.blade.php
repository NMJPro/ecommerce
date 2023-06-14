<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="{{ route('vitrine.index')}}" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">LH</span>Shop</h1>
            </a>
            <p>Dolore erat dolor sit lorem vero amet. Sed sit lorem magna, ipsum no sit erat lorem et magna ipsum dolore amet erat.</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 BP Cité, Douala, Cameroun</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>LocalHost@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+237 6 00 00 00 00</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-dark mb-2" href="{{ route('vitrine.index')}}"><i class="fa fa-angle-right mr-2"></i>Acceuil</a>
                        <a class="text-dark mb-2" href="{{ route('vitrine.shop')}}"><i class="fa fa-angle-right mr-2"></i>Nos Produit</a>
                        <a class="text-dark" href="{{ route('vitrine.contact')}}"><i class="fa fa-angle-right mr-2"></i>Nous Contactez</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="font-weight-bold text-dark mb-4">Newsletter</h5>
                    <form action="" >
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control border-0 py-4" placeholder="Your Name" required="required" />
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control border-0 py-4" placeholder="Your Email"
                                required="required" />
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block border-0 py-3" type="submit">Subscribe Now</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-dark">
                &copy; <a class="text-dark font-weight-semi-bold" href="#">LocalHost E-SHOP</a>. All Rights Reserved. Designed
                by
                <a class="text-dark font-weight-semi-bold" href="#">GROUPE5</a><br>
                Distributed By <a href="#" target="_blank">LocalHost Academy</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="vitrine/dist/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->