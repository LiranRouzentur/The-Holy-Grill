@extends('master')

@section('main_content')

<!-- Intro Block
============================================-->
<section class="intro-block intro-page boxed-section page-bg overlay-dark-m">

  {{--
{{ asset ('lib/Template/images/' . $products[0]->cimage ) }}
  --}}

  <!-- Container -->
  <div class="container">

    <!-- Section Title -->
    <div class="section-title invert-colors no-margin-b" style="font-size: large;">
      <h2 class="product-header">{{ $products[0]->ctitle}}</h2>


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
    @if($categories)
    <!-- Breadcrumb -->
    <ol class="breadcrumb pull-left">
      <li><a href="{{url('/')}}"><i class="ti ti-home"></i></a></li>
      <li><a href="{{url('shop/')}}">Shop Categories</a></li>
      <li><a href="{{url('shop/'. $products[0]->curl)}}">{{ $products[0]->ctitle}}</a></li>

    </ol>
    <!-- /Breadcrumb -->
    @endif
    <!-- hlinks -->
    <p class="what-page" ><i class="h5">You Are Now On Page {{$products->currentPage()}} In The {{ $products[0]->ctitle}} Category</i><br>
      We Have Total Of {{$products->total()}} Products In This Category</p>
    <!-- /hlinks -->

  </div>
  <!-- /Container -->

</section>
<!-- /Page Info  Block
============================================-->

<!-- Content Block
============================================ -->
<section class="content-block default-bg">

  <!-- Container -->
  <div class="container cont-main no-pad-t">


    <!-- Row -->
    <div class="row">
      <div class="col-sm-3 col-md-3 hidden-md hidden-sm hidden-xs ">
        <div class="side-widget no-margin-l">

          <h5 class="boxed-title">Shop Categories</h5>

          <!-- ul-toggle -->
          @foreach($categories as $category)
          @if(Str::endsWith(Request::url(),"shop/" .$category['curl']))
          <ul class="ul-toggle font-size-sm " style="margin: 0; ">
            <li class="active1"><a href="{{url('shop/'.$category['curl'])}}"><i class="icon fa fa-angle-right"></i>{{$category['ctitle']}}</a></li>

              @else
              <ul class="ul-toggle font-size-sm " style="margin: 0;">
                <li><a href="{{url('shop/'.$category['curl'])}}"><i class="icon fa fa-angle-right"></i>{{$category['ctitle']}}</a></li>
                @endif







              </ul>
              @endforeach
              <!-- /ul-toggle -->

        </div>

      </div>
      <!-- Main Col -->
      <div class="col-lg-9 col-md-12 col-sm-12">






        <div class="container">

          <p>{{ $products[0]->carticle}}</p>
          {{--<br>
<p style="float: right;">Order By :
    <select >
        <option value="">Name Up</option>
        <option value="">Name Down</option>
        <option value="">Price Up</option>
        <option value="">Price Down</option>

    </select>
</p>
--}}
          <hr>
          <div class="product-grid row grid-20 mgb-20 ">


            @if($products)
            @foreach($products as $product)

            <div class="col-lg-4 col-md-6 col-sm-12">
              <div class="card img-thumbnail clearfix ">
                <img class="card-img" style="width: 100%;
height: 250px;
object-fit: cover;" src="{{ asset ('lib/Template/images/product-images/' .$product->pimage) }}" alt="">


                <div class="card-body">

                  <h4 class="card-title"> {{ Str::limit( $product->ptitle,
15
)}}</h4>

                  <p class="card-text">
                    <div>




                      <div class="buy d-flex justify-content-between align-items-center">
                        <div class="price text-success">
                          <h5 class="float-right">${{ $product->price }}</h5>
                        </div>
                        <div>
                          @if (! Cart::get($product->id) )
                          <button data-pid="{{$product->id}}" class="btn btn-success mt-3 pl-3 btn-base-hover more-details-btn1 add-to-cart"><i class="icon-left1 fas fa-shopping-cart"></i> Add to
                            Cart</button>
                          @else
                          <button disabled="disabled" type="button" class="btn btn-success mt-3  btn-base-hover more-details-btn1 add-to-cart"><i class="icon-left1 fas fa-check-circle"></i>Item In Cart
                          </button>
                          @endif
                        </div>
                        <div>
                          <a href="{{url('shop/' . $product->curl . '/' . $product->purl)}}" class="btn btn-info more-details-btn1 mt-3"><i class="icon-left1 fas fa-info-circle"></i>More Details</a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <div class="col">
              <p><i>No Products Available....</i></p>
            </div>
            @endif
          </div>
        </div>
      </div>


    </div>
    <div class="row">
      <div class="col">

        {{$products->links()}}
      </div>
    </div>

  </div>

  </div>





  <!-- /Main Col -->


</section>


@endsection
