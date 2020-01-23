@php
$menu = App\Menu::all()->toArray();
$categories = App\Category::all()->toArray();
@endphp
@extends('master')

@section('main_content')


      <!-- Container -->
      <div class="container ">
        <!-- Error Block -->
        <div class="error-block" style="padding-bottom: 100px;">
          <!-- Left -->
          <div class="left">
            <div class="vcenter">
              <div class="vcenter-this">
              <h1>404</h1>
              </div>
            </div>
          </div>
          <!-- /Left -->

          <!-- Right -->
          <div class="right">
            <h4 style="margin-top:117px;">Requested page not found.</h4>

            <!-- /Search -->
          </div>
          <!-- /Right -->
        </div>
        <!-- /Error Block -->
      </div>
      <!-- /Container -->


@endsection
