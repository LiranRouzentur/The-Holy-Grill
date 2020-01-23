@extends('master')

@section('main_content')



<!-- Page Info
============================================-->
<section class="page-info-block page-info-alt  boxed-section">

  <!-- Container -->
  <div class="container cont-pad-x-15">

    @if($categories)
    <!-- Breadcrumb -->
    <ol class="breadcrumb pull-left">
      <li><a href="{{url('/')}}"><i class="ti ti-home"></i></a></li>
      <li><a href="{{url('shop/')}}">Shop Categories</a></li>
      <li><a href="{{url('shop/'. $products[0]->curl)}}">{{ $products[0]->ctitle}}</a></li>
      <li><a href="{{url('shop/'. $products[0]->purl)}}">{{ $products[0]->ptitle}}</a></li>

    </ol>
    <!-- /Breadcrumb -->
    @endif


    <!-- hlinks -->

    <!-- /hlinks -->

  </div>
  <!-- /Container -->

</section>
<!-- /Page Info Block
============================================-->

<!-- Content Block
============================================-->
<section class="content-block has-sidebar default-bg">
  <!-- Container -->
  <div class="container no-pad-t">

    <!-- Product Row -->
    <div class="row product-details">

      <!-- Col -->
      <div class="col-lg-4 col-md-5 col-sm-12">

        <!-- Slider Wrapper -->
        <div class="main-slider">
          <!-- BxSlider -->
          <ul class="bxslider" data-call="bxslider" data-options="{pagerCustom:'#thumb-pager', controls:false}">

            <li>
              <a href="#"><img class="fillw img-thumbnail" style="object-fit: cover;  height:500px " src="{{ asset ('lib/Template/images/product-images/' .$item['pimage']) }}" alt="" /></a>
            </li>
          </ul>
          <!-- /BxSlider -->
        </div>
        <!-- /Slider Wrapper -->

        <!-- Slider Wrapper -->

        <!-- /Slider Wrapper -->

      </div>






      <!-- /Col -->

      <!-- Col -->
      <div class="col-lg-8 col-md-5 col-sm-12" style="margin-top: 5%;">



        <h1 class="product-title">{{$item['ptitle']}}</h1>

        <div class="price-box" style="margin-bottom: 10%;">
          <h4 class="product-price">${{$item['price']}}</h4>
        </div>

        <!-- Accordion -->
        <div class="panel-group" id="accordion">

          <!-- Panel -->
          <div class="panel panel-default">
            <!-- Heading -->
            <div class="panel-heading">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                  Product Details
                </a>
              </h4>
            </div>
            <!-- /Heading -->

            <!-- Collapse -->
            <div id="collapseOne" class="panel-collapse collapse in">
              <div class="panel-body">
                {!! $item['particle'] !!}
              </div>
            </div>
            <!-- /Collapse -->

          </div>




        </div>
        <div style="float: right; margin-top: 3%;">
          <a href="{{ url ('shop/cart')}}" class="btn btn-default btn-bigger btn-default-hover-item"><i class="icon-left ti ti-shopping-cart"></i>Cart</a>
          <!-- /Row -->
          @if(! Cart::get($item['id']))
          <button data-pid="{{$item['id']}}" type="button" class="btn btn-default btn-bigger btn-base-hover-item add-to-cart"><i class="icon-left far fa-plus-square"></i> Add To Cart</button>
          @else
          <button disabled="disabled" type="button" class="btn btn-default btn-bigger btn-base-hover-item add-to-cart"><i class="icon-left fas fa-check-circle"></i>Item In Cart</button>
          @endif
        </div>
      </div>
      <!-- /Col -->

    </div>
    <!-- /Product Row -->

    <hr class="y-200pc" />
    <div class="row hidden-md hidden-sm hidden-xs">
      <h5 class="boxed-title  ">Shop Categories</h5>
      <div class="col-md-4  ">


        <!-- Side Widget -->
        <div class="side-widget no-margin-l">



          <!-- ul-toggle -->
          @foreach($categories as $category)
          @if(Str::contains(Request::url(),"shop/" .Str::limit($category['curl'],10)))
          <ul class="ul-toggle font-size-sm " style="margin: 0; ">
            <li class="active1"><a href="{{url('shop/'.$category['curl'])}}"><i class="icon fa fa-angle-right"></i>{{$category['ctitle']}}</a></liclass>

              @else
              <ul class="ul-toggle font-size-sm " style="margin: 0;">
                <li><a href="{{url('shop/'.$category['curl'])}}"><i class="icon fa fa-angle-right"></i>{{$category['ctitle']}}</a></li>
                @endif

              </ul>
              @endforeach
              <!-- /ul-toggle -->

        </div>
        <!-- /Side Widget -->


      </div>
      <div class="col-md-8 img-thumbnail ">
        <h3 class="text-center " style="margin: 5px 0 23px 0;"><u> More products From {{$products[0]->ctitle}}</u></h3>



        <div class="bxslider1 ">







          @if (count($products) > 1)

          @for ($i = 1; $i < count($products); $i++) <a href="{{url('shop/' . $products[$i]->curl . '/' . $products[$i]->purl)}}">
            <div><img src="{{ asset ('lib/Template/images/product-images/' .$products[$i]->pimage) }}" title="{{ $products[$i]->ptitle}}"></div>
            </a>
            @endfor
            @endif







        </div>
      </div>




    </div>






    <!-- Row -->
  </div>
  </div>


  <!-- /Side Col -->

  <!-- /Row -->

  </div>
  <!-- /Container -->
</section>
<!-- /Content Block
============================================-->


@endsection
