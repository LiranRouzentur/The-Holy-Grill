@extends('master')

@section('main_content')



<!-- Intro Block
      ============================================ -->
<div class="intro-block mgb-20 ">

  <!-- Container -->

  <div class="container">

    <!-- Slider Wrapper -->
    <div class="intro-slider">

      <!-- BxSlider -->
      <div class="bxslider bx-home" data-call="bxslider" data-options="{pager:false, mode:'fade'}">

        <!-- Slide -->
        <div class="slide">
          <img class="img-main" src="{{ asset ('lib/Template/images/smoke-home.jpg') }}" height="300px" alt="" /><!-- slider image + background -->
          <!-- Text -->
          <div class="text">
            <div class="vcenter">
              <div class="vcenter-this text-block">
                <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">Best
                  grill site onLine !</h5>
                <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">The Holy
                  Grill</h1><br />
                <p class="bx-layer bx-p" data-anim="bounceInRight" data-dur="1000" data-delay="500">Top
                  products from around the world</p>

              </div>
            </div>
          </div>
          <!-- /Text -->
        </div>
        <!-- /Slide -->

        <!-- Slide -->
        <div class="slide">
          <img class="img-main" src="{{ asset ('lib/Template/images/charcoal-home.jpg') }}" alt="" />
          <!-- slider image + background -->
          <!-- Text -->
          <div class="text">
            <div class="vcenter">
              <div class="vcenter-this text-block">
                <h5 class="bx-layer" data-anim="bounceInLeft" data-dur="1000" data-delay="700">from 5th
                  March - 26 March</h5>
                <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100">All Types
                  Of Grills</h1><br />
                <a href="{{url('shop')}}" class="btn btn-white bx-layer blinking" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
              </div>
            </div>
          </div>
          <!-- /Text -->
        </div>
        <!-- /Slide -->

        <!-- Slide -->
        <div class="slide">
          <img class="img-main" src="{{ asset ('lib/Template/images/rest-home.jpg') }}" alt="" />
          <!-- slider image + background -->
          <!-- Text -->
          <div class="text">
            <div class="vcenter">
              <div class="vcenter-this text-block">

                <h1 class="bx-layer" data-anim="bounceInDown" data-dur="1000" data-delay="100" style="color: black;">hot winter collection</h1><br />

                <a href="{{url('shop')}}" class="btn btn-primary bx-layer blinking" data-anim="bounceInUp" data-dur="1000" data-delay="1000">shop now</a>
              </div>
            </div>
          </div>
          <!-- /Text -->
        </div>
        <!-- /Slide -->

      </div>
      <!-- /BxSlider -->

    </div>
    <!-- Slider Wrapper -->

  </div>
  <!-- /Container -->

</div>
<!-- /Intro Block
      ============================================ -->

<!-- Content Block
      ============================================ -->
<div class="content-block ">

  <!-- Container -->
  <div class="container no-pad-t home-slider-2">

    <!-- Product Tabs -->
    <div class="product-tabs">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs nav-tabs-line-bottom line-pcolor nav-tabs-center case-u" role="tablist">
      </ul>
      <!-- /Nav Tabs -->

      <!-- Tab panes -->
      <div class="tab-content tab-no-borders">

        <!-- Tab Latest -->
        <div class="tab-pane active" id="tab-latest">

          <h1 class="text-center hidden-xs" style="margin-bottom: 50px;"> <u> Random Products </u></h1>



          <!-- Row -->
         <div class="row hidden-xs" id="home-content">
            @if($products)
            @foreach($products as $product)

            <!-- Col -->
            <div  class="col-sm-6 col-md-3">

              <!-- product -->
              <div class="product clearfix">

                <!-- Image -->
                <div class="image" >
                  <a  href="{{url('shop/'. $product['curl'] .'/'. $product['purl'])}}" class="main">
                    <img  src="{{ asset ('lib/Template/images/product-images/' . $product['pimage']) }}" alt=""></a>
                    <div>
                    <a class="title-img"  href="{{url('shop/'. $product['curl'] .'/'. $product['purl'])}}">
                  <h4 class="img-title-h4" > {!! Str::limit($product['ptitle'],
                    13 )!!}</h4>
                </a>
            </div>
                </div>





              </div>


            </div>


            @endforeach

            @endif


          </div>
          <!-- /Row -->

        </div>
        <div class="text-center hidden-xs">
          <button type="button" id="reloader" class="btn btn-primary"><i class="fas fa-random "></i>&#160
            Shuffle</button>
        </div>
        <!-- /Tab Trending -->
      </div>
      <!-- /Tab Panes -->

    </div>
    <!-- /Product Tabs -->

  </div>
  <!-- /Container -->

</div>
<!-- /Content Block
      ============================================ -->

<!-- Content Block
      ============================================ -->
      <div class="container">
<div class="content-block boxed-section1  overlay-dark-m ">

  <!-- Container -->
  <div class="container cont-lg">

    <!-- Promo Text -->
    <div class="promo-text">
      <h5>from 5th March - 26 March</h5>
      <h1 class="boxed">dont miss the great summer sale</h1>
      <p>Neque porro quisquam est qui dolorem ipsum quia dolor sit amet consectetur veli.</p>
      <a href="{{url('shop')}}" class="btn btn-primary btn-borderless blinking">shop now</a>
    </div>
    <!-- Promo Text -->

  </div>
  <!-- /Container -->

</div>
</div>
<!-- /Content Block
      ============================================ -->





<!-- Content Block
      ============================================ -->
<div class="content-block">

  <!-- Container -->
  <div class="container cont-md">

    <!-- Section Title -->
    <div class="section-title line-pcolor" style="margin-top: 50px;">
      <h2>all premium brands</h2>
      <p>The Holy Grill is the best place to find the best grilling products online ! Our products have been sold
        all over the world.</p>
    </div>
    <!-- /Section Title -->

    <!-- Slider Wrapper -->
    <div class="brand-slider hidden-sm">

      <!-- BxSlider -->
      <div class="bxslider" data-call="bxslider" data-options="{pager:false, slideMargin:20}" data-breaks="[{screen:0, slides:2}, {screen:460, slides:3}, {screen:768, slides:5}]">

        <!-- Slide -->
        @foreach($allProducts as $product)
        <div class="slide">
          <img class="img-main" style="height: 200px;" src="{{ asset ('lib/Template/images/product-images/' .$product['pimage']) }}" alt="" />
        </div>
        @endforeach
        <!-- /Slide -->

        <!-- /Slide -->
      </div>
      <!-- /BxSlider -->

    </div>
    <!-- Slider Wrapper -->
  </div>
  <!-- /Container -->

</div>
<!-- Content Block
      ============================================ -->




@endsection
