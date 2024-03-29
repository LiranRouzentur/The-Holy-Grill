@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'categories/edit','title' => 'Edit Category'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="container-fluid">
    <div class="row">
    <div class="col">

<form action="{{url('cms/categories/' . $item['id'])}}" runat="server" method="POST" autocomplete="off"
novalidate="novalidate" enctype="multipart/form-data">
@csrf()
{{ method_field('PUT')}}
<input type="hidden" name="item_id" value="{{$item['id']}}">
<div class="row">


    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group">
<div class="input-group-addon"><i class="fas fa-heading "
style=" margin-top:12px;"></i></div>
<label hidden for="title">* Title </label>
<input value="{{$item['ctitle']}}" type="text" name="title" id="title"
class="form-control origin-text " placeholder="* Title" >


<span class="text-danger ">{{ $errors->first('title')}}</span>
</div>



<div class="form-group">

<div class="input-group-addon"><i class="fas fa-globe-americas"
style=" margin-top:12px;"></i></div>
<label hidden for="url">* Url </label>
<input value="{{$item['curl']}}" type="text" name="url" id="url"
class="form-control target-text" placeholder="* Url">




<span class="text-danger ">{{ $errors->first('url')}}</span>

<div>
<i class="fas fa-images ml-1 mt-4"></i>

<div class="card"  >&nbsp; * Change Image
    <img class="card-img-edit zoom1" id="img-pre" height="290px"
src="{{asset('../public/lib/Template/images/' . $item['cimage'])}}" alt="">



<div class="input-group-prepend">
<span class="input-group-text">Change</span>

<label class="custom-file" id="inputGroupFile01"> Change image
<input
onchange="jQuery(this).next('label').text(this.value.replace(/C:\\fakepath\\/, ''));"
name="image" type="file" class="custom-file-input" id="image">
<label class="custom-file-label" for="image">{{$item['cimage']}}</label>

<span class="text-danger ">{{ $errors->first('image')}}</span>

</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-2">
    <div class="form-group">

<div class="input-group-addon"><i class="fas fa-globe-americas"
></i></div>
<label hidden for="article">* Article </label>
<textarea class="form-control" name="article" id="article" cols="30" rows="10"
placeholder="* Article">{{$item['carticle']}}</textarea>
<span class="text-danger ml-5">{{ $errors->first('article')}}</span>

<div class="float-right my-5">

<a href="{{url('cms/categories')}}" class="btn btn-secondary ">Cancel</a>

<input type="submit" value="Update Category" class="btn btn-primary " name="submit">
<span class="icon text-white-50">
<i class="fas fa-plus-circle"></i>
</span>

</div>
</div>
</div>
</div>

</div>

</form>
</div>
</div>

</div>
@endsection
