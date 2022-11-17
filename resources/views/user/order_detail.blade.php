<x-base>

    <x-includes.header :categories="$categories" />

    <div class="container" style="margin: 0 auto;width: 50%;padding: 50px;background: #f1f1f1;margin-top: 50px;margin-bottom: 50px;">
        <div class="row invoice row-printable">
            <div class="col-md-12">
                <!-- col-lg-12 start here -->
                <div class="panel panel-default plain" id="dash_0">
                    <!-- Start .panel -->
                    <div class="panel-body p30">
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-logo"><img src="/images/logo.png" alt="Invoice logo" style="max-height: 40px;"></div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-6">
                                <!-- col-lg-6 start here -->
                                <div class="invoice-from">
                                    <ul class="list-unstyled text-right">
                                        <li><strong>Invoiced To</strong></li>
                                        <li>{{ $order->first_name }} {{ $order->last_name }}</li>
                                        <li>{{ $order->address_line_1 }} {{ $order->address_line_2 }}</li>
                                        <li>{{ $order->city }}, {{ $order->state }}</li>
                                        <li>{{ $order->country }}</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-12">
                                <!-- col-lg-12 start here -->
                                <div class="invoice-details mt25">
                                    <div class="well">
                                        <ul class="list-unstyled mb0">
                                            <li><strong>Order</strong> {{ $order->order_number }}</li>
                                            <li><strong>Transaction</strong> {{ $order->payment_id }}</li>
                                            <li><strong>Order Date:</strong> {{ $order->created_at }}</li>
                                            <li><strong>Status:</strong> {{ $order->status }}</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="invoice-items">
                                    <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th class="per70 text-center">Products</th>
                                                    <th class="per5 text-center">Qty</th>
                                                    <th class="per25 text-center">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($order_products as $order_product)
                                                <tr>
                                                    <td>{{ $order_product->product->name }}</td>
                                                    <td class="text-center">{{ $order_product->quantity }}</td>
                                                    <td class="text-center">${{ $order_product->product_price * $order_product->quantity }} USD</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="2" class="text-right">Sub Total:</th>
                                                    <th class="text-center">${{ $sub_total }} USD</th>
                                                </tr>
                                                <tr>
                                                    <th colspan="2" class="text-right">Tax:</th>
                                                    <th class="text-center">${{ $order->tax }} USD</th>
                                                </tr>

                                                <tr>
                                                    <th colspan="2" class="text-right">Grand Total:</th>
                                                    <th class="text-center">${{ $order->order_total }} USD</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="invoice-footer mt25">
                                    <p class="text-center">Thank you for shopping with us!</p>
                                </div>
                            </div>
                            <!-- col-lg-12 end here -->
                        </div>
                        <!-- End .row -->
                    </div>
                </div>
                <!-- End .panel -->
            </div>
            <!-- col-lg-12 end here -->
        </div>
    </div>
    <x-includes.footer />
</x-base>

