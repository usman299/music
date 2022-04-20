@extends('layouts.front')
<style>
    a{
        color: blue!important;
    }
</style>
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
                                    <th style="background-color: #ffd403!important;"class="product-name">Piano </th>
                                    <th style="background-color: #ffd403!important;"class="product-price">Voice</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;Guitar</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;Ukelele</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;Violen</th>
                                    <th style="background-color: #ffd403!important;"class="product-remove">&nbsp;Music Theory </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="cart_item">
                                    <td class="product-name" data-title="Product">
                                    <a href="{{route('students.detials',['c'=>'Piano'])}}">View</a>

                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <a href="{{route('students.detials',['c'=>'Voice'])}}">View</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <a href="{{route('students.detials',['c'=>'Guitar'])}}">View</a>

                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <a href="{{route('students.detials',['c'=>'Ukelele'])}}">View</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <a href="{{route('students.detials',['c'=>'Violen'])}}">View</a>
                                    </td>
                                    <td class="product-price" data-title="Price">
                                        <a href="{{route('students.detials',['c'=>'Music Theory'])}}">View</a>
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
