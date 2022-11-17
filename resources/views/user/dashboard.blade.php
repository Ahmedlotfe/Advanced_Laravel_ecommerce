<x-base>

    <x-includes.header :categories="$categories" />

    <section class="section-conten padding-y bg">

        <div class="container">
            <div class="row">
                <x-includes.dashboard_sidebar />
                <main class="col-md-9">
                    <article class="card">
                        <header class="card-header">
                            <strong class="d-inline-block mr-3">Logged in as:</strong>
                            <span>{{ Auth()->user()->name }}</span>
                        </header>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body" style="text-align: center;">
                                            <h5 class="card-title">Total Orders: {{ $orders_count }}</h5>
                                            <h4></h4>
                                            <a href="/my_orders">View Orders</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- row.// -->
                        </div> <!-- card-body .// -->
                    </article> <!-- order-group.// -->
                </main>
            </div> <!-- row.// -->
        </div>


    </section>

    <x-includes.footer />

</x-base>

