<x-base>
    <x-includes.header :categories="$categories" />

    <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg">
        <div class="container">
            <h2 class="title-page">Our Store</h2>

        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->


    <!-- ========================= SECTION CONTENT ========================= -->
    <section class="section-content padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-md-3">

                    <div class="card">
                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" data-toggle="collapse" data-target="#collapse_1" aria-expanded="true" class="">
                                    <i class="icon-control fa fa-chevron-down"></i>
                                    <h6 class="title">Categories</h6>
                                </a>
                            </header>
                            <div class="filter-content collapse show" id="collapse_1" style="">
                                <div class="card-body">

                                    <ul class="list-menu">
                                        @foreach ($categories as $category)
                                        <li><a href="?category={{ $category->slug }}">{{ $category->name }} </a></li>
                                        @endforeach
                                    </ul>

                                </div> <!-- card-body.// -->
                            </div>
                        </article> <!-- filter-group  .// -->
                    </div> <!-- card.// -->

                </aside> <!-- col.// -->
                <main class="col-md-9">

                    <header class="border-bottom mb-4 pb-3">
                        <div class="form-inline">
                            <span class="mr-md-auto">{{ $products->count() }} Items found </span>

                        </div>
                    </header><!-- sect-heading -->

                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-4">
                            <figure class="card card-product-grid">
                                <div class="img-wrap">

                                    <img src="{{ asset('storage/' . $product->image) }}">

                                </div> <!-- img-wrap.// -->
                                <figcaption class="info-wrap">
                                    <div class="fix-height">
                                        <a href="/{{ $product->slug }}" class="title">{{ $product->name }}</a>
                                        <div class="price-wrap mt-2">
                                            <span class="price">${{ $product->price }}</span>
                                        </div> <!-- price-wrap.// -->
                                    </div>
                                    <a href="/{{ $product->slug }}" class="btn btn-block btn-primary">Product Details</a>
                                </figcaption>
                            </figure>
                        </div> <!-- col.// -->
                        @endforeach
                    </div> <!-- row end.// -->

                </main> <!-- col.// -->

            </div>

        </div> <!-- container .//  -->
    </section>

    <!-- ========================= SECTION CONTENT END// ========================= -->
    <x-includes.footer />
</x-base>

