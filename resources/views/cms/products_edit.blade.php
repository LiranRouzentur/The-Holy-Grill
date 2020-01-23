@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'products/edit','title' => 'Edit Product'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="container-fluid">
<div class="row">
<div class="col">
<form action="{{url('cms/products/' . $item['id'])}}" runat="server" method="POST" autocomplete="off" novalidate="novalidate" enctype="multipart/form-data">
@csrf()
{{ method_field('PUT')}}
<input type="hidden" id="item_id" name="item_id" value="{{$item['id']}}" />
<div class="row">

    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
    <div class="form-group">
<div class="input-group-addon"><i class="fas fa-link " style=" margin-top:12px;"></i></div>
<label hidden for="categorie-id">* Category </label>
<select name="categorie_id" id="categorie-id" class="form-control">
<option value="">* Choose Category</option>
@foreach($categories as $category_item)
<option @if($item['categorie_id']==$category_item['id']) selected="selected" @endif value="{{$category_item['id']}}">{{$category_item['ctitle']}}</option>
@endforeach
</select>


<span class="text-danger ">{{ $errors->first('categorie_id')}}</span>
</div>


<div class="form-group">

<div class="input-group-addon"><i class="fas fa-heading " style="margin-top:12px;"></i></div>
<label hidden for="title">* Title </label>
<input value="{{$item['ptitle']}}" type="text" name="title" id="title" class="form-control origin-text " placeholder="* Title">


<span class="text-danger ">{{ $errors->first('title')}}</span>
</div>



<div class="form-group">

<div class="input-group-addon"><i class="fas fa-globe-americas" style="margin-top:12px;"></i></div>
<label hidden for="url">* Url </label>
<input value="{{$item['purl']}}" type="text" name="url" id="url" class="form-control target-text " placeholder="* Url">




<span class="text-danger ">{{ $errors->first('url')}}</span>

</div>
<div class="form-group">

<div class="input-group-addon"><i class="fas fa-money-bill-wave" style="margin-top:12px;"></i></div>
<label hidden for="price">* Price </label>
<input value="{{$item['price']}}" type="text" name="price" id="price" class="form-control " placeholder="* Price">




<span class="text-danger ">{{ $errors->first('price')}}</span>
<div>
<i class="fas fa-images ml-1 mt-4"></i>
<div class="card"  >
    <img class="card-img-edit zoom1" id="img-pre" height="290px"  src="{{asset('../public/lib/Template/images/product-images/' . $item['pimage'])}}" alt="">



    <div class="input-group-prepend">
    <span class="input-group-text">Change</span>

    <label class="custom-file" id="inputGroupFile01"> Choose image
    <input onchange="jQuery(this).next('label').text(this.value.replace(/C:\\fakepath\\/, ''));" name="image" type="file" class="custom-file-input" id="image">
    <label class="custom-file-label" for="image">Choose image</label>
    <span class="text-danger ">{{ $errors->first('image')}}</span>
    </div>
    </div>
    </div>
</div>
</div>

<div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 mt-2">
    <div class="form-group">

<div class="input-group-addon"><i class="fas fa-globe-americas" ></i></div>
<label hidden for="article">* Article </label>
<textarea class="form-control" name="article" id="article" cols="30" rows="10" placeholder="* Article">{{$item['particle']}}</textarea>
<span class="text-danger">{{ $errors->first('article')}}</span>

<div class="form-group add-input-buttons mt-4">


<a href="{{url('cms/products')}}" class="btn btn-secondary ">Cancel</a>

<input type="submit" value="Update Product" class="btn btn-primary " name="submit">
<span class="icon text-white-50">
<i class="fas fa-plus-circle"></i>
</span>

</div>
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