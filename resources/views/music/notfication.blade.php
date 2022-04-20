@extends('layouts.front')
@section('content')
    <!-- Begin:: Cart Section -->
    <section class="cartPage">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="woocommerce">
                        <form action="#" method="post" class="woocommerce-cart-form">
                            <table class="shop_table" style="margin-top: 20px">
                                <thead>
                                <tr >
                                    <th style="background-color: #ffd403!important;"class="product-name">From </th>
                                    <th style="background-color: #ffd403!important;"class="product-price">Message</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name" data-title="Product">
                                       Admin
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Good Day! Remindingg you  for your remaining balance of Php.5304</span></bdi></span>
                                    </td>

                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name" data-title="Product">
                                        Admin
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Good Day! Remindingg you  for your remaining balance of Php.5304</span></bdi></span>
                                    </td>

                                </tr>
                                <tr class="cart_item">
                                    <td class="product-name" data-title="Product">
                                        Admin
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <span class="woocommerce-Price-amount amount"><bdi><span class="woocommerce-Price-currencySymbol">Good Day! Remindingg you  for your remaining balance of Php.5304</span></bdi></span>
                                    </td>

                                </tr>


                                </tbody>
                            </table>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Cart Section -->

@endsection
