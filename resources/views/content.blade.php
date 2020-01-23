@extends('master')

@section('main_content')

 @if($contents)
 @foreach($contents as $content)
 <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
    <div class="container">
     <!-- Section Title -->
     <div class="section-title invert-colors no-margin-b" style="font: 50px;">
        <h1 style="color: white; margin: 0px;"><u>{{ $content->ctitle}}</u></h1>
       <p class="hidden-xs"></p>
     </div>
     <!-- /Section Title -->
   </div>
</section>
<section class="page-info-block boxed-section">

    <!-- Container -->
    <div class="container cont-pad-x-15">

      <!-- Breadcrumb -->
      <ol class="breadcrumb pull-left">
        <li><a href="{{url('/')}}"><i class="ti ti-home"></i></a></li>
        <li>{{ $content->ctitle}}</li>

      </ol>

    </div>
    <!-- /Container -->

  </section>
   <!-- /Container -->
   <div class="container">
       <div class="row">
           <div class="col-12">
            {!! $content->article !!}
           </div>
       </div>

</div>




 @endforeach
 @else
 <section class="intro-block intro-page boxed-section page-bg overlay-dark-m">
 <div class="container">
  <!-- Section Title -->
  <div class="section-title invert-colors no-margin-b" >
    <h2 ><i>No Content Available...</i></h2>
    <p class=""> </p>
  </div>
  <!-- /Section Title -->
</div>
<!-- /Container -->


 @endif
</section>
<br>
<br>
<br>
<br>
<br>
@include('404_content')
@endsection

