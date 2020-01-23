@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'content/create','title' => '+ Add New Content'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="container-fluid ">

<div class="row">


    <div class="col">
<form action="{{url('cms/content')}}" method="POST" autocomplete="off" novalidate="novalidate">
@csrf()

<div class="row">

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
<div class="input-group-addon"><i class="fas fa-link "
style=" margin-top:12px;"></i></div>
<label hidden for="menu_id">* Menu Link </label>
<select name="menu_id" id="menu-id" class="form-control " >
<option value="">* Choose Menu Link...</option>
@foreach($menu as $menu_item)
<option @if(old('menu_id')==$menu_item['link']) selected="selected" @endif value="{{$menu_item['id']}}">{{$menu_item['title']}}</option>
@endforeach
</select>


<span class="text-danger ">{{ $errors->first('menu_id')}}</span>
</div>





<div class="form-group">

<div class="input-group-addon"><i class="fas fa-heading " style="margin-top:12px;"></i></div>
<label hidden for="title">* Title </label>
<input value="{{old('title')}}" type="text" name="title" id="title" class="form-control "
placeholder="* Title" >


<span class="text-danger ">{{ $errors->first('title')}}</span>
</div>



<div class="form-group">

<div class="input-group-addon"><i class="fas fa-globe-americas"
style="margin-top:12px;"></i></div>
<label hidden for="article">* Article </label>
<textarea class="form-control" name="article" id="article" cols="30" rows="10"
placeholder="* Article">{{old('article')}}</textarea>



<span class="text-danger ">{{ $errors->first('article')}}</span>
</div>



<div>

    <div class="mt-5 mb-5">


<input type="submit" value="Save Content" class="btn btn-primary float-right mr-4" name="submit">
<span class="icon text-white-50">
<i class="fas fa-plus-circle"></i>
</span>
<a href="{{url('cms/content')}}" class="btn btn-secondary float-right mr-2">Cancel</a>

</div>


</div>
</form>





</div>
</div>

</div>

@endsection
