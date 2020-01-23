<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">


<!-- Bootstrap core CSS
================================================== -->

<link href="{{asset ('lib/Template/uikit/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


<link href="{{asset('lib/Template/uikit/css/uikit.css?v='. time())}}" rel="stylesheet">
<script>
var BASE_URL = "{{url('')}}/"
</script>

<link rel="shortcut icon" type="image/jpeg" href="{{asset('../lib/Template/images/favicon.ico')}}"/>
  <link rel="manifest" href="{{asset('js/manifest.json')}}">
<title> {{$page_title ?? ''}}</title>
</head>

<body class="tile-1-bg " id="page-top">

<!-- Page Wrapper
++++++++++++++++++++++++++++++++++++++++++++ -->
<div class="page-wrapper boxed-wrapper shadow">

<!-- Header Block
============================================== -->
<header class="header-block line-top">

<!-- Main Header
............................................ -->
<div class="main-header container">


<!-- Header Cols -->
<div class="header-cols">

<!-- Brand Col -->
<div class="brand-col hidden-xs">

<!-- vcenter -->
<div class="vcenter">
<!-- v-centered -->
<div class="vcenter-this ">
<a href="{{asset('/')}}">
<img src="{{asset('lib/Template/images/holy-grill-logo-sub.jpeg')}}" style="width: 300px;" alt="holy-grill">
</a>
</div>
<!-- v-centered -->
</div>
<!-- vcenter -->

</div>
<!-- /Brand Col -->





<div class="right-col">

<!-- vcenter -->
<div class="vcenter">

<!-- v-centered -->
<div class="vcenter-this">

<!-- Nav Side -->
<nav class="nav-side navbar hnav hnav-sm hnav-borderless" role="navigation">
@if(! Session::has('user_id'))
<!-- Dont Collapse -->
<div class="navbar-dont-collapse no-toggle">

<!-- Nav Right -->
<ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
<li class="dropdown has-panel">
<a aria-expanded="false" href="{{ url('user/signin')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-user"></i><span class="hidden-sm">Sign In</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>

<!-- Dropdown Panel -->
<div class="dropdown-menu dropdown-panel arrow-top dropdown-left-xs" data-keep-open="true">
<fieldset>
<form action="{{ url('user/signin')}}" method="POST" autocomplete="off" novalidate="novalidate">
@csrf()

<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<label hidden for="email">* Email </label>
<input value="{{old('email')}}" type="email" name="email" id="email" class="form-control" placeholder="* Enter email">

</div>
<span class="text-danger">{{ $errors->first('email')}}</span>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-lock"></i></div>
<label hidden for="password">* Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="* Enter password">

</div>
<span class="text-danger">{{ $errors->first('password')}}</span>
</div>


<input type="submit" name="submit" value="Sign In" class="btn btn-default btn-lg btn-block">
</form>
</fieldset>
</div>
<!-- /Dropdown Panel -->

</li>

<li class="dropdown has-panel">
<a aria-expanded="false" href="{{ url('user/signup')}}" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-left ti ti-pencil-alt"></i><span class="hidden-sm">Sign Up</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>

<!-- Dropdown Panel -->
<div class="dropdown-menu dropdown-panel arrow-top" data-keep-open="true">
<fieldset>

<form  action="{{ url('user/signup')}}" runat="server" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
@csrf()

<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-user"></i></div>
<label hidden for="name">* Name </label>
<input value="{{old('name')}}" type="text" name="name" id="name" class="form-control" placeholder="* Enter name">
</div>
<span class="text-danger">{{ $errors->first('name')}}</span>
</div>

<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fas fa-envelope"></i></div>
<label hidden for="email">* Email </label>
<input value="{{old('email')}}" type="email" name="email" id="email" class="form-control" placeholder="* Enter email">
</div>
<span class="text-danger">{{ $errors->first('email')}}</span>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-lock"></i></div>
<label hidden for="password">* Password</label>
<input type="password" name="password" id="password" class="form-control" placeholder="* Enter password">
</div>
<span class="text-danger">{{ $errors->first('password')}}</span>
</div>
<div class="form-group">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-lock"></i></div>
<label hidden for="password-confirmation">* Confirm Password </label>
<input type="password" name="password_confirmation" id="password-confirmation" class="form-control" placeholder="* Confirm Password">
</div>
</div>



@if($countries && $countries != null)
<div class="form-group ">
<div class="input-group">
<div class="input-group-addon"><i class="fa fa-globe"></i></div>

<label hidden for="country">* Select your country </label>

<select required name="country" id="country" class="form-control">
<option value="">&nbsp; * Choose Country...</option>
@foreach($countries as $country)
<option value="{{$country->name}}">{{$country->name}}</option>
@endforeach

</select>
</div>
</div>
@else
<input type="hidden" name="country" id="country" value="APIError" />
@endif



<div class="form-group">
<div class="input-group ">
<div class="input-group-addon "><i class="fas fa-portrait"></i></div>
<label class="custom-file" id="inputGroupFile01" style="color: #8e8e8e;" for="image">&nbsp; &nbsp; Select image </label>



    <input onchange="jQuery(this).next('label').text(this.value.replace(/C:\\fakepath\\/, ''));"

    name="image" type="file" class="form-control" id="image" style="color: #8e8e8e;" aria-describedby="inputGroupFileAddon01" >
</div>


</div>




<input type="submit" name="submit" value="Sign Up" class="btn btn-default btn-lg btn-block">
</form>
</fieldset>
</div>
<!-- /Dropdown Panel -->

</li>
</ul>
<!-- /Nav Right-->

</div>

@else



<div class="navbar-dont-collapse no-toggle">

<!-- Nav Right -->
<ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
<li class="dropdown has-panel">
<a aria-expanded="false" href="{{ url('user/signin')}}" class="dropdown-toggle" data-toggle="dropdown">

    <img class="img-circle"  src="{{asset('lib/Template/images/user-images/' .  Session::get('user_image') )}}" alt="">







    <span style="font-size:16px;" class="hidden-sm">{{Session::get('user_name')}}</span><i class="fa fa-angle-down toggler hidden-xs"></i></a>

<!-- Dropdown Panel -->
<div class="dropdown-menu dropdown-panel arrow-top dropdown-left-xs dropdown-user" style="padding: 10%;" data-keep-open="true">


<div>

<a href="{{ url('user/profile') }}">Profile</a>

</div>

@if(Session::has('is_admin'))
<hr>

<div>
<a href="{{ url('cms/dashboard') }}">Admin Panel</a>
</div>
@endif
<hr>
<div>
<a href="{{url('user/logout')}}">Logout</a>
</div>
<!-- /Dont Collapse -->
</div>
</div>

@endif






</nav>
</div>
<!-- /Nav Side -->

</div>
<!-- /v-centered -->
</div>
<!-- /vcenter -->






<!-- Left Col -->

<div class="left-col">

<!-- vcenter -->
<div class="vcenter">

<!-- v-centered -->
<div class="vcenter-this">


<form class="header-search">
@csrf

<div class="input-group">
<input type="search" class="form-control" id="search" aria-label="search" placeholder="Search Item">
<span class="input-group-btn">
<a href="" id="search-btn" name="submit" class="btn btn-primary">
<i class="fa fa-search"></i></a>
@if(session()->has('message'))
<div class="alert alert-success">
<p>
{{ session()->get('message') }}
</p>
</div>
@endif
</span>

</div>


</form>

</div>
<!-- v-centered -->

</div>
<!-- vcenter -->

</div>


<!-- Header Cols -->



<!-- Nav Bottom
.............................................. -->
<nav class="nav-bottom hnav hnav-ruled white-bg boxed-section">

<!-- Container -->
<div class="container">

<!-- Header-->
<div class="navbar-header ">
<button type="button" class="navbar-toggle no-border" data-toggle="collapse" data-target="#nav-collapse">
<span class="sr-only">Toggle navigation</span>
<i class="fa fa-navicon"></i>
</button>
<a href="{{asset('/')}}" class="navbar-brand visible-xs" >
<img src="{{asset('lib/Template/images/logo-xs.jpeg')}}" >
</a>

</div>






<!-------start of menu links------->



<div id="nav-collapse" class="collapse navbar-collapse navbar-absolute">

<!-- Navbar Center -->
<ul class="nav navbar-nav navbar-center line-top line-pcolor case-c">


<!-- home menu button-->
@if(Request::url() === url('/'))
<li class="active">
@else
<li>
@endif
<a href="{{url('/')}}">home</a>
</li>


<!-- shop menu button-->
@if(Str::startsWith(Request::url(), url('shop')))
<li class="dropdown dropdown-mega active">
@else
<li class="dropdown dropdown-mega">
@endif
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<i class="fa fa-angle-down toggler"></i></a>

<div class="mega-menu dropdown-menu">


<div class="row">
<div class="col-md-8">
<img class="featured-img hidden-xs hidden-sm img-thumbnail" src="{{asset('lib/Template/images/bbq.gif')}}" >



</div>

<div class="col-md-6 text-center" style="width: 25%; display: contents;">

<a href="{{url('shop')}}">
<h5> Categories</h5>
</a>
<ul class="links">
@if($categories)
@foreach($categories as $category)
<li><a href="{{url('shop/'. $category['curl'])}}">{{ $category['ctitle'] }}</a></li>
@endforeach
@else
<li>
<h4>No</h4>
</li>
<li>
<h4>Categories</h4>
</li>
<li>
<h4>Available....</h4>
</li>
@endif
</ul>
</div>
</div>

</div>

</li>



<!-- rest of menu buttons-->

@if(!empty($menu))
@foreach($menu as $menu_item)
@if(Request::url() === url($menu_item['url']))
<li class="active">
@else
<li>
@endif
<a class="" href="{{ url ($menu_item['url'])}}">{{$menu_item['link']}}</a></li>
@endforeach
@endif


</ul>


</div>

<!----------end of menu links---------->











<!-- Dont Collapse -->
<div class="navbar-dont-collapse">

<!-- Navbar btn-group -->
<div class="navbar-btn-group btn-group navbar-right no-margin-r-xs">


<!-- Btn Wrapper -->
@if( Cart::isEmpty())
<div class="btn-wrapper dropdown">

<a aria-expanded="false" class="btn btn-outline" data-toggle="dropdown">


<b class="count count-round">{{ Cart::getTotalQuantity()}}</b>

<i class="ti ti-bag"></i>
</a>

<!-- Dropdown Panel -->
<div class="dropdown-menu dropdown-panel1 dropdown-right" data-keep-open="true">
<section>
<!-- Mini Cart -->
<ul class="mini-cart1">
<!-- Item -->
<p><i>No Item's In Cart...</i></p>

<!-- /Item -->
</ul>
<!-- /Mini Cart -->
</section>


</div>

<!-- /Dropdown Panel -->

</div>
@else
<div class="btn-wrapper dropdown">

<a aria-expanded="false" class="btn btn-outline" data-toggle="dropdown">


<b class="count count-round">{{ Cart::getTotalQuantity()}}</b>

<i class="ti ti-bag"></i>
</a>

<!-- Dropdown Panel -->
<div class="dropdown-menu dropdown-panel dropdown-right" data-keep-open="true">
<section>
<!-- Mini Cart -->
<ul class="mini-cart">

<!-- Item -->
@foreach($cart as $item)
<li class="clearfix">
<img class="img-thumbnail" src="{{asset('lib/Template/images/product-images/' . $item['attributes']['image']) }}" style="width: 50px;">
<div class="text">
<a class="title" href="#">{{$item['name']}}</a>
<div class="details">${{$item['price']}} x {{$item['quantity']}}
<a href="{{url('shop/remove-item-master/' . $item['id'])}}" type="button" style="float: right;" class="btn btn-primary delete ">
<i class="fa fa-trash-o"></i>
</a>
</div>


</div>
</li>
@endforeach

<!-- /Item -->
</ul>
<!-- /Mini Cart -->
</section>

<section>
<div class="row grid-10">
<div class="col-md-6">
<a class="btn btn-base btn-block margin-y-5" href="{{url('shop/cart')}}">view cart</a>
</div>
<div class="col-md-6">
<a class="btn btn-primary btn-block margin-y-5" href="{{url('shop/order-now')}}">Order Now !</a>
</div>
</div>
</section>

</div>

<!-- /Dropdown Panel -->

</div>
@endif

<!-- /Btn Wrapper -->

</div>

<!-- /Navbar btn-group -->

<!-- Navbar Left -->

<!-- /Navbar Left -->
</div>
<!-- /Dont Collapse -->

</div>
<!-- /Container -->

</nav>
<!-- /Nav Bottom
.............................................. -->

</header>
<!-- /Header Block
============================================== -->
<!-- /Main Header
.............................................. -->

@yield('main_content')



<!-- Footer
=================================================== -->
<footer class="footer-block">

<!-- Container -->
<div class="container cont-top clearfix hidden-sm hidden-xs">

<!-- Row -->
<div class="row" style="margin-left: 120px;">

<!-- Brand -->
<div class="col-md-3 brand-col brand-center">
<div class="vcenter">
<a class="vcenter-this" href="#">
<img src="{{asset('lib/Template/images/holy-grill-logo.jpeg')}}" alt="logo" />
</a>
</div>
</div>
<!-- /Brand -->

<!-- Links -->
<div class="col-md-9 links-col">

<!-- Row -->


<!-- Col -->
<div class="col-xs-6 col-sm-6 col-md-6 brand-col brand-center">
<h5>About us</h5>
<p>The Holy Grill is the best place to find the best grilling products online ! Our products have been sold
all over the world.</p>
<!-- hlinks -->
<ul class="hlinks hlinks-icons color-icons-borders color-icons-bg color-icons-hovered">
<li><a href="https://www.facebook.com"><i class="icon fa fa-facebook"></i></a></li>
<li><a href="https://www.twitter.com"><i class="icon fa fa-twitter"></i></a></li>
<li><a href="https://www.rss.com"><i class="icon fa fa-rss"></i></a></li>
<li><a href="https://www.google.com"><i class="icon fa fa-google-plus"></i></a></li>
<li><a href="https://www.instagram.com"><i class="icon fa fa-instagram"></i></a></li>
<li><a href="https://www.youtube.com"><i class="icon fa fa-youtube"></i></a></li>
</ul>
<!-- /hlinks -->
</div>
<!-- /Col -->

<!-- Col -->

<!-- /Col -->

<!-- Col -->
<div class="col-xs-6 col-sm-6 col-md-6 brand-col brand-center" style="border-right: none;">
<h5>payment methods</h5>
<ul class="grid-list cols-3 cell-pad-5 " style="max-width: 50%; margin: auto;">
<li><img src="{{asset('lib/Template/images/cards/amazon.png')}}" alt="amazon"></li>
<li><img src="{{asset('lib/Template/images/cards/paypal.png')}}" alt="paypal"></li>
<li><img src="{{asset('lib/Template/images/cards/visa.png')}}" alt="visa"></li>
<li><img src="{{asset('lib/Template/images/cards/mastercard.png')}}" alt="mastercard"></li>
<li><img src="{{asset('lib/Template/images/cards/maestro.png')}}" alt="maestro"></li>
<li><img src="{{asset('lib/Template/images/cards/obopay.png')}}" alt="obopay"></li>
<li><img src="{{asset('lib/Template/images/cards/discover.png')}}" alt="discover"></li>
<li><img src="{{asset('lib/Template/images/cards/cirrus.png')}}" alt="cirrus"></li>
<li><img src="{{asset('lib/Template/images/cards/google.png')}}" alt="google"></li>
</ul>
</div>
<!-- /Col -->


<!-- /Row -->

</div>
<!-- /Links -->

</div>
<!-- /Row -->

</div>
<!-- /Container -->

<!-- Bottom -->
<div class="footer-bottom invert-colors bcolor-bg">

<!-- Container -->
<div class="container">

<span class="copy-text">&copy; {{ date('Y') }} The Holy Grill.</span>
<ul class="hlinks pull-right">

@if( Session::has('user_id'))
<!-- hlinks -->

<nav class="nav-side navbar hnav hnav-sm hnav-borderless hidden-xs" role="navigation">
<ul class="nav navbar-nav navbar-right case-u active-bcolor navbar-center-xs">
<li class="dropup has-panel">
<a aria-expanded="false" href="{{ url('user/signin')}}" class="dropdown-toggle" data-toggle="dropdown" style="color: rgba(255, 255, 255, 0.6); line-height: 60px;">
    <img class="img-circle" width="45px"
    height="40px"  src="{{asset('lib/Template/images/user-images/' .  Session::get('user_image') )}}" alt="">
    <span style="font: 'Roboto', Arial, sans-serif; ">{{Session::get('user_name')}}</span><i class="fa fa-angle-up toggler hidden-xs"></i></a>

<!-- Dropdown Panel -->

<ul class="dropdown-menu dropdown-panel arrow-bottom dropdown-left-xs footer-bg " style="background-color:black; " data-keep-open="true">
<li><a href="{{ url('user/profile') }}" class="kit-demo-link1">Profile</a></li>

@if(Session::has('is_admin'))
<li><a href="{{ url('cms/dashboard') }}" class="kit-demo-link1">Admin Panel</a></li>
@endif
<li><a href="{{url('user/logout')}}" class="kit-demo-link1">Logout</a></li>


</ul>


</li>


</ul>


</nav>


@else

<li><a href="{{ url('user/signup')}}">Sign Up</a></li>
<li><a href="{{ url('user/signin')}}">Login</a></li>


@endif

</ul>


<!-- /hlinks -->

</div>
<!-- /Container -->

</div>
<!-- /Bottom -->

</footer>
<!-- /Footer
=================================================== -->

</div>
<!-- /Page Wrapper
++++++++++++++++++++++++++++++++++++++++++++++ -->





<a class="scroll-to-top rounded-circle" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>









<!-- Javascript
================================================== -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>


<script src="{{asset('js/jquery-scrollto.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/jquery.bxslider-rahisified.js')}}"></script>

<script src="{{asset('js/highlight.pack.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/style-switcher.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.3.3/bootbox.min.js
"></script>







<script src="{{asset('js/uikit-utils.js')}}"></script>

<script src="{{asset('js/script.js?v='. time())}}"></script>

@if(Session::has('sm'))
<script>
toastr.options.positionClass = 'toast-bottom-full-width';
toastr.options.progressBar = true;
toastr.options.escapeHtml = true;


toastr.success('', "{{ Session::get('sm')}}");
</script>
@endif

</body>

</html>
