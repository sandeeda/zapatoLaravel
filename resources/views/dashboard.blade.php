<!DOCTYPE html>
<html lang="en">
<head>
    <title>Landing Page</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <!-- CSS only -->
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<div class="container py-3">
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a class="d-flex align-items-center text-dark text-decoration-none" href="/">
                <img alt="logo"
                     src="https://t4.ftcdn.net/jpg/04/98/21/95/360_F_498219595_yh4o1qdkJqCLJC0X0b5XKHU8jyRux86L.jpg"
                     style="width: 100px;"> <span class="fs-4">Zapato</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Features</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Enterprise</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Support</a>
                <a class="me-3 py-2 text-dark text-decoration-none" href="#">Pricing</a>
                <a class="py-2 " style="color:#7fb902" href="#">
                    @auth
                        Hi {{Auth::user()->name}}
                    @endauth
                </a>
            </nav>
        </div>

        <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
            <h1 class="display-4 fw-normal">Products</h1>
            <p class="fs-5 text-muted">At Zapato we are happy to bring you one of the largest collections of unisex shoes online. Our online store hosts the best of shoe brands which feature impeccable quality, eye-catching designs and cool colours. It is time to stock up your shoe closet with shoes for every occasion.</p>
        </div>
    </header>

    <main>

                <?php
                $products = \Illuminate\Support\Facades\Session::get('products');
                \Illuminate\Support\Facades\Session::put('products',$products);
                ?>


        @foreach($products as $product)
            @if(($loop->iteration) %3 == 1)
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    @endif
                    <div class="col">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">{{$product->productname}}</h4>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li> <img alt="" class="mb-2" height="200" src="{{$product->productimg}}" width="130"></li>
                                    <li>{{$product->productdesc1}}</li>
                                    <li>{{$product->productdesc2}}</li>
                                    <li>{{$product->productWarranty}} months warranty</li>
                                    <li><strong>CAD {{$product->productPrice}}</strong></li>
                                </ul>
                                <button class="w-100 btn btn-lg btn-outline-primary" type="button">Add to <i class='fas fa-shopping-cart'></i></button>
                            </div>
                        </div>
                    </div>
                    @if(($loop->iteration) %3 ==0)
                </div>
            @endif
        @endforeach


        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">U.S. Polo Assn. White Clarkin Sneakers</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <img alt="" class="mb-2" height="200" src="https://floimages.mncdn.com/mnpadding/600/900/FFFFFF/media/catalog/product/22-03/07/101083146_f2-1646633567.JPG?w=600" width="130"></li>
                            <li>Textured and patterned outside</li>
                            <li>Cushioned footbed</li>
                            <li>3 months warranty</li>
                            <li><strong>CAD 30</strong></li>
                        </ul>
                        <button class="w-100 btn btn-lg btn-outline-primary" type="button">Add to <i class='fas fa-shopping-cart'></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Mactree White Colourblocked PU Sneakers</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <img alt="" class="mb-2" height="200" src="https://assets.myntassets.com/dpr_1.5,q_60,w_400,c_limit,fl_progressive/assets/images/18509904/2022/5/31/766bda50-82e7-480b-a52c-9cd648a2d7941653975616884MactreeMenWhiteColourblockedPUSneakers1.jpg" width="130"></li>
                            <li>A pair of round toe white sneakers ,has regular styling</li>
                            <li>Cushioned footbed</li>
                            <li>1 months warranty</li>
                            <li><strong>CAD 15</strong></li>
                        </ul>
                        <button class="w-100 btn btn-lg btn-outline-primary" type="button">Add to <i class='fas fa-shopping-cart'></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Nike White AIR WINFLO 9 Running Shoes</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled mt-3 mb-4">
                            <li> <img alt="" class="mb-2" height="200" src="https://cdn.shopify.com/s/files/1/1182/3402/products/ssph.zone-1664263502-DD8686-800_b_grande.jpg?v=1664263787" width="130"></li>
                            <li>Textile upper</li>
                            <li>Cushioned footbed</li>
                            <li>6 months warranty</li>
                            <li><strong>CAD 100</strong></li>
                        </ul>
                        <button class="w-100 btn btn-lg btn-outline-primary" type="button">Add to <i class='fas fa-shopping-cart'></i></button>
                    </div>
                </div>
            </div>
        </div>



    </main>

    <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
            <div class="col-12 col-md">
                <img alt="" class="mb-2" height="76" src="https://t4.ftcdn.net/jpg/04/98/21/95/360_F_498219595_yh4o1qdkJqCLJC0X0b5XKHU8jyRux86L.jpg" width="96">
                <small class="d-block mb-3 text-muted">&copy; 2017–2022</small>
            </div>
            <div class="col-6 col-md">
                <h5>Features</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>Resources</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                </ul>
            </div>
            <div class="col-6 col-md">
                <h5>About</h5>
                <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>

<!-- JavaScript Bundle with Popper -->
<script crossorigin="anonymous"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
