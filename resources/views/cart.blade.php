@extends('master')

@section('main_content')

<!-- Intro Block
============================================-->
<section class="intro-block intro-page boxed-section page-bg overlay-dark-m">

<!-- Container -->
<div class="container">
<!-- Section Title -->
<div class="section-title invert-colors no-margin-b">
<h2>cart</h2>

</div>
<!-- /Section Title -->
</div>
<!-- /Container -->

</section>
<!-- /Intro Block
============================================-->

<!-- Page Info Block
============================================-->
<section class="page-info-block boxed-section">

<!-- Container -->
<div class="container cont-pad-x-15">

<!-- Breadcrumb -->
<ol class="breadcrumb pull-left">
<li><a href="{{url('/')}}"><i class="ti ti-home"></i></a></li>
<li><a href="{{url('shop/cart')}}">Cart</a></li>

</ol>

<!-- <i class="h4">You Have  In Your Cart</i>   -->

<!-- /Breadcrumb -->

<!-- hlinks -->

<!-- /hlinks -->

</div>
<!-- /Container -->

</section>
<!-- /Page Info  Block
============================================-->

<!-- Content Block
============================================-->
<section class="content-block default-bg">

<!-- Container -->
<div class="container cont-pad-t-sm">
@if($cart)
<!-- Cart -->
<div class="cart">

<!-- Cart Contents -->
<table class="cart-contents">
<thead>
<tr>
<th class="hidden-xs"><img src="{{asset('lib/Template/images/holy-grill-logo.jpeg')}}"></th>
<th>Products</th>
<th class="text-center">Qty</th>
<th class="text-center">Price</th>
<th class="text-center">Total</th>
</tr>
</thead>
<tbody>
@foreach($cart as $item)
<tr>
<td class="image hidden-xs" style="object-fit:contain;"><img class="img-thumbnail" src="{{asset('lib/Template/images/product-images/' . $item['attributes']['image']) }}" alt="product" /></td>
<td class="details">
<div class="clearfix">
<div class="pull-left no-float-xs">
<a href="#" class="title">{{$item['name']}}</a>

</div>



<!-- <a type="button" href="{{url('shop/remove-item/' . $item['id'] )}}" class="delete"><i class="fa fa-trash-o"></i></a> -->


<!-- Button trigger modal -->
<a href="{{url('shop/remove-item/' . $item['id'])}}" type="button" style="float: right;"  class="btn btn-primary delete ">
<i class="fa fa-trash-o"></i>
</a>

<!-- Modal -->





</div>
</td>
<td class="qty text-center">
<div class="form-group">

<a data-op="minus" data-pid="{{$item['id']}}" class="update-cart-btn" href=""><i class="fas fa-minus-circle"></i></a>


<input size="1" class="text-center" type="text" value="{{$item['quantity']}}">


<a data-op="plus" data-pid="{{$item['id']}}" class="update-cart-btn" href=""><i class="fas fa-plus-circle"></i></a>

</div>
</td>
<td class="unit-price text-center "><span class="currency">&#36;</span>{{$item['price']}}</td>
<td class="total-price text-center"><span class="currency">&#36;</span>{{$item['quantity'] * $item['price']}}</td>
</tr>
@endforeach
</tbody>

</table>
<!-- /Cart Contents -->

<!-- Cart Summary -->
<table class="cart-summary">
<tr>
<td class="terms">
<h5><i class="fa fa-info-circle"></i> our return policy</h5>
<p>If you are not 100% satisfied with your purchase, you can return the product and get a full
refund or exchange the product for another one, be it similar or not.

You can return a product for up to 30 days from the date you purchased it.

Any product you return must be in the same condition you received it and in the original
packaging. Please keep the receipt.</p>
</td>
<td class="totals">
<table class="cart-totals">
<tr>
<td class="text-center">Sub Total</td>
<td class="price text-center">&#36; {{Cart::getTotal()}}</td>
</tr>
<tr>
<td class="text-center">Shipping</td>
<td class="price text-center">&#36;
@php
$sum = 0
@endphp
@foreach($cart as $item)
@php $sum += $item['quantity'] * 10
@endphp
@endforeach
{{ $sum ?? ''}}
</td>
</tr>

<tr>
<td class="cart-total text-center">total</td>
<td class="cart-total price text-center">&#36;{{Cart::getTotal() + $sum}}</td>
</tr>
</table>
</td>
</tr>
</table>
<!-- /Cart Summary -->

</div>
<!-- /Cart -->

<!-- Cart Buttons -->
<div class="cart-buttons clearfix">
<a class="btn btn-primary-pay checkout" href="{{url('shop/order-now')}}"><i class="icon-left fa fa-shopping-cart"></i>ORDER NOW</a>

<a class="btn btn-success checkout" href="{{url('shop/')}}">
<i class="icon-left fa fa-arrow-left"></i>
Continue shopping</a>

<!-- <a class="btn btn-primary checkout" style="float: left;" href="{{url('shop/clear-cart')}}" ><i
class="icon-left fas fa-trash-alt"></i>Clear
Cart</a> -->

<button type="button" class="btn btn-primary checkout " style="float: left;" data-toggle="modal" data-target="#exampleModal1">
<i class="icon-left fas fa-trash-alt"></i>Clear
Cart
</button>

<!-- Modal -->
<div class="modal fade pb-4" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" style="padding-top: 117px;" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Clear
Cart</h5>

</div>
<div class="modal-body">
Are you sure you want to remove all the items from your cart ?
</div>
<div class="modal-footer">
<a type="button" class="btn btn-secondary confirm-btn1" data-dismiss="modal" style="float: none;">Close</a>
<a type="button" href="{{url('shop/clear-cart')}}" class="btn btn-primary confirm-btn2" style="float: none; background-color: black;">Yes i'm sure</a>
</div>
</div>
</div>
</div>
</div>

<!-- /Cart Buttons -->

@if(count($cart) >= 1)
{{Session::flash('sm', ' You Have ' . count($cart) . ' Item In Your Cart')}}

@endif
@else
<div>
<h3 class="text-center">Your Shopping Cart is Empty ....</h3>
</div>
{{Session::flash('sm','Your Shopping Cart Is Empty....')}}


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
<img class="empty-cart-img img-thumbnail" src="{{asset('lib/Template/images/shopping-cart.jpg')}}" alt="">
</div>


@endif
</div>
<!-- /Container -->

</section>
<!-- /Content Block
============================================-->


@endsection
