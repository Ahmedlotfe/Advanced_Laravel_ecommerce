<x-base>

    <x-includes.header :categories="$categories" />

    <!-- ========================= SECTION MAIN ========================= -->
    <section class="section-intro padding-y-sm">
        <div class="container">

            <div class="intro-banner-wrap">
                <img src="images/banners/1.jpg" class="img-fluid rounded">
            </div>

        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION MAIN END// ========================= -->

    <!-- ========================= SECTION  ========================= -->
    <section class="section-name padding-y-sm">
        <div class="container">

            <header class="section-heading">
                <a href="/store" class="btn btn-outline-primary float-right">See all</a>
                <h3 class="section-title">Popular products</h3>
            </header><!-- sect-heading -->


            <div class="row">
                @foreach($products as $product)
                <div class="col-md-3">
                    <div class="card card-product-grid">
                        <a href="" class="img-wrap"> <img src="{{ asset('storage/' . $product->image) }}"> </a>
                        <figcaption class="info-wrap">
                            <a href="./product-detail.html" class="title">{{ $product->name }}</a>
                            <div class="price mt-1">${{ $product->price }}</div> <!-- price-wrap.// -->
                        </figcaption>
                    </div>
                </div> <!-- col.// -->
                @endforeach
            </div> <!-- row.// -->

        </div><!-- container // -->
    </section>
    <!-- ========================= SECTION  END// ========================= -->

    <x-includes.footer />

</x-base>

