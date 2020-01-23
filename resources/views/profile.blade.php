@extends('master')

@section('main_content')


<div class="container">




    <h1 class="text-center">still to come....</h1>
</div>
    {{--
<div class="intro-block mgb-20" style="background: url('../../public/lib/Template/images/signin-bg.jpg'); background-position: center center;">





                </header>
                <fieldset>
                  <form action="" method="POST" autocomplete="off" novalidate="novalidate">
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
                        <label class="form-control" style="color: #8e8e8e;" for="uimage"> Select image </label>



                        <input onchange="jQuery(this).next('label').text(this.value);" name="uimage" class="form-control" id="uimage" style="color: #8e8e8e;" aria-describedby="inputGroupFileAddon01" type="file">


                      </div>


                    </div>




                    <input type="submit" name="submit" value="Sign Up" class="btn btn-default btn-lg btn-block">
                  </form>
                </fieldset>
              </div>
              /Form Panel
              --}}



@endsection
