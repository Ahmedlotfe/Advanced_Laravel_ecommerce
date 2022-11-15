<x-base>

    <x-includes.header :categories="$categories" />

    <section class="section-content padding-y bg">
        <div class="container">

            <!-- ============================ COMPONENT 1 ================================= -->
            <div class="card">
                <div class="row no-gutters">
                    <aside class="col-md-6">
                        <article class="gallery-wrap">
                            <div class="img-big-wrap">
                                <a href="#"><img src="{{ asset('storage/' . $product->image) }}"></a>
                            </div> <!-- img-big-wrap.// -->

                        </article> <!-- gallery-wrap .end// -->
                    </aside>
                    <main class="col-md-6 border-left">
                        <article class="content-body">

                            <h2 class="title">{{ $product->name }}</h2>

                            <div class="mb-3">
                                <var class="price h4">${{ $product->price }}</var>
                            </div>

                            <p>{{ $product->description }}</p>

                            <hr>
                            <div class="row">
                                <div class="item-option-select">
                                    <h6>Choose Color</h6>
                                    <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-light">
                                            <input type="radio" name="radio_color"> Silver
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" name="radio_color"> Gray
                                        </label>
                                        <label class="btn btn-light active">
                                            <input type="radio" name="radio_color checked"> Gold
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" name="radio_color"> Black
                                        </label>
                                    </div>
                                </div>
                            </div> <!-- row.// -->
                            <div class="row">
                                <div class="item-option-select">
                                    <h6>Select Size</h6>
                                    <div class="btn-group btn-group-sm btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-light">
                                            <input type="radio" name="radio_color"> S
                                        </label>
                                        <label class="btn btn-light active">
                                            <input type="radio" name="radio_color" checked> M
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" name="radio_color"> L
                                        </label>
                                        <label class="btn btn-light">
                                            <input type="radio" name="radio_color"> XL
                                        </label>
                                    </div>
                                </div>
                            </div> <!-- row.// -->
                            <hr>
                            @if($product->stock > 0)
                            <a href="./product-detail.html" class="btn  btn-primary"> <span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i> </a>
                            @else
                            <h5 class="text-danger">Out of Stock</h5>
                            @endif
                        </article> <!-- product-info-aside .// -->
                    </main> <!-- col.// -->
                </div> <!-- row.// -->
            </div> <!-- card.// -->
            <!-- ============================ COMPONENT 1 END .// ================================= -->

            <br>

            <div class="row">
                <div class="col-md-9">

                    <header class="section-heading">
                        <h3>Customer Reviews </h3>

                    </header>

                    <article class="box mb-3">
                        <div class="icontext w-100">
                            <img src="./images/avatars/avatar1.jpg" class="img-xs icon rounded-circle">
                            <div class="text">
                                <span class="date text-muted float-md-right">24.04.2020 </span>
                                <h6 class="mb-1">Mike John </h6>

                            </div>
                        </div> <!-- icontext.// -->
                        <div class="mt-3">
                            <p>
                                Dummy comment Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip
                            </p>
                        </div>
                    </article>



                </div> <!-- col.// -->
            </div> <!-- row.// -->


        </div> <!-- container .//  -->
    </section>
    <!-- ========================= SECTION CONTENT END// ========================= -->

    <x-includes.footer />
</x-base>

