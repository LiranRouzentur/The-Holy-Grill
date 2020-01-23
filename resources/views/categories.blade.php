@extends('master')

@section('main_content')

<!-- Intro Block
      ============================================-->
<section class="intro-block intro-page boxed-section page-bg overlay-dark-m">

  <!-- Container -->
  <div class="container">

    <!-- Section Title -->
    <div class="section-title invert-colors no-margin-b">
      <h2>Shop Categories</h2>
      <p class="hidden-xs">What are you looking for ?</p>
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
      <li class="active">All Categories</li>
    </ol>
    <!-- /Breadcrumb -->

    <!-- hlinks -->
    <ul class="page-links pull-right hlinks hlinks-icons color-icons-borders color-icons-bg-hovered">
      <li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
      <li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
      <li><a href="#"><i class="icon fa fa-rss"></i></a></li>
    </ul>
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

      <!-- Main Col -->
      <div class="main-col col-sm-9 col-md-9" style="width: 100%;">



        <div class="container">
          <div class="product-grid row grid-20 mgb-20">
            @if($categories)
            @foreach($categories as $category)
            <div class="col-12 col-sm-8 col-md-6 col-lg-4">
              <div class="card clearfix img-thumbnail">
                <img class="card-img" style="width: 100%;
                                height: 250px;
                                object-fit: cover;" src="{{ asset ('lib/Template/images/' . $category['cimage']) }}" alt="">

                <div class="card-body">
                  <h4 class="card-title text-center">{{ $category['ctitle'] }}</h4>

                  <p class="card-text">
                    <a type="button" data-toggle="modal" style="cursor: pointer;" data-target="#{{ $category['id'] }}">
                      <p class="carticle-list  ml-2">{!! Str::limit($category['carticle'],
                        120 )!!}</p>
                    </a>

                    <!-- Modal -->
                    <div class="modal fade" id="{{ $category['id'] }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                      <div class="modal-dialog" role="document" style="padding: 41px;">

                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">
                              {{ $category['ctitle'] }}</h5>
                          </div>
                          <div class="modal-body">
                            {!! $category['carticle']!!}
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>




                    <div class="buy d-flex justify-content-between align-items-center">

                      <a href="{{url('shop/'. $category['curl'])}}" class="btn btn-info more-details-btn"><i class="fas fa-i-icon"></i> More Details</a>
                    </div>


                </div>
              </div>

            </div>
            @endforeach
            @else
            <div class="col">
              <p><i>No Categories Available....</i></p>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>


</section>
<!-- /Content Block
        ============================================-->


@endsection
