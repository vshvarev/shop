<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    @include('layouts.styles')
</head>
<body>

<div class="site-wrap">
    @include('layouts.header')

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span> <strong
                        class="text-black">Cart</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <form class="col-md-12" method="post">
                    <div class="site-blocks-table">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="product-name">Product</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(empty(session('cart')))
                                Корзина пустая
                            @else
                                @foreach(session('cart') as $item)
                                    <tr>
                                        <td class="product-name">
                                            <h2 class="h5 text-black">{{ $item['title'] }}</h2>
                                        </td>
                                        <td>{{ $item['price'] }} $</td>
                                        <td>
                                            <div class="input-group mb-3" style="max-width: 120px;">
                                                <div class="input-group-prepend">
                                                    <form></form>
                                                    <form action="{{ route('cart.decrement') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                        <button class="btn btn-outline-primary" type="submit">
                                                            &minus;
                                                        </button>
                                                    </form>
                                                </div>
                                                {{ $item['quantity'] }}
                                                <div class="input-group-append">
                                                    <form action="{{ route('cart.increment') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                        <button class="btn btn-outline-primary" type="submit">
                                                            &plus;
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $item['price'] * $item['quantity'] }} $</td>
                                        <td>
                                            <form action="{{ route('cart.delete') }}" method="POST" class="deletefromcart">
                                                @csrf
                                                <input type="hidden" name="product_id" value="{{ $item['id'] }}">
                                                <button class="btn btn-primary btn-sm" type="submit">X</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <form action="{{ route('cart.destroy') }}" method="POST">
                                @csrf
                                <button class="btn btn-primary btn-sm btn-block" type="submit">Delete Cart</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('index') }}" method="GET">
                                <button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-black h4" for="coupon">Coupon</label>
                            <p>Enter your coupon code if you have one.</p>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-sm">Apply Coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <span class="text-black">Subtotal</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">{{ session('cart_total') }}</strong>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Total</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">{{ session('cart_total') }}</strong>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary btn-lg py-3 btn-block"
                                            onclick="window.location='checkout.html'">Proceed To Checkout
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')
</div>

@include('layouts.scripts')

</body>
</html>
