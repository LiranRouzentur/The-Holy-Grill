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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<link href="{{asset('lib/Template/uikit/css/uikit.css')}}" rel="stylesheet">
<script>
var BASE_URL = "{{url('')}}/"
</script>
<title> {{$page_title ?? ''}}</title>
</head>

<body style="background: url('../../public/lib/Template/images/signin-bg.jpg'); background-position: center center;">

<!-- Empty Block (use .abs-filler to fill page)
================================================== -->
<div class="empty-block abs-filler">
<!-- Vcenter -->
<div class="vcenter">
<div class="vcenter-this">
<!-- Container -->
<div class="container">
<!-- Form Panel -->
<div class="form-panel width-40pc width-100pc-xs hcenter">
<header>Sign up for new account

<a href="{{url('/')}}">
<img src="{{asset('lib/Template/images/logo-xs.jpeg')}}" style="width:50px; float: right; margin: -20px;" alt="holy-grill">
</a>

</header>
<fieldset>
<form action="" runat="server" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
@csrf()
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
    </ul>
</div>
@endif
<div class="form-group">
    <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-user"></i></div>
    <label hidden for="name">* Name </label>
    <input value="{{old('name')}}" type="text" name="name" id="name" class="form-control" placeholder="* Enter name">
    </div>
</div>

<div class="form-group">
    <div class="input-group">
    <div class="input-group-addon"><i class="fas fa-envelope"></i></div>
    <label hidden for="email">* Email </label>
    <input value="{{old('email')}}" type="email" name="email" id="email" class="form-control" placeholder="* Enter email">
    </div>
</div>
<div class="form-group">
    <div class="input-group">
    <div class="input-group-addon"><i class="fa fa-lock"></i></div>
    <label hidden for="password">* Password</label>
    <input type="password" name="password" id="password" class="form-control" placeholder="* Enter password">
    </div>
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


    <label class="form-control" id="inputGroupFile01" style="color: #8e8e8e;" for="image"> Select image </label>



    <input onchange="jQuery(this).next('label').text(this.value.replace(/C:\\fakepath\\/, ''));"

    name="image" type="file" class="form-control" id="image" style="color: #8e8e8e;" aria-describedby="inputGroupFileAddon01" >


    </div>


</div>




<input type="submit" name="submit" value="Sign Up" class="btn btn-default btn-lg btn-block">
</form>
</fieldset>
</div>
<!-- /Form Panel -->
<div class="align-center">have an Account? <a href="{{ url('user/signin' .$rn)}}">Sign In</a></div>
<br>
<div class="align-center"><a href="{{url('/')}}">Back to home page</a></div>
</div>
<!-- /Container -->
</div>
<!-- /Vcenter this -->
</div>
<!-- /Vcenter -->
</div>
<!-- /Empty Block
================================================== -->
<script src="{{asset('js/jquery-latest.min.js')}}"></script>

<script src="{{asset('js/jquery-scrollto.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper.js"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/uikit-utils.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/jquery.bxslider-rahisified.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('js/highlight.pack.js')}}"></script>
<script src="{{asset('js/theme.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/style-switcher.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.3.3/bootbox.min.js
"></script>
<script src="{{asset('js/script.js')}}"></script>

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