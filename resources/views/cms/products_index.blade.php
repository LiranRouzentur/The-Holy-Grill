@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'products' , 'title' => 'Products'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="row">
    <div class="col-md-8">

        <a href="{{url('cms/products/create')}}" class="btn btn-primary btn-icon-split btn-lg my-2">
        <span class="icon text-white-50">
            <i class="fas fa-plus-circle"></i>
        </span>
        <span class="text">Add Product</span>
        </a>
    </div>
</div>


{{--
<ul class="navbar-nav">
    <li class=" dropdown no-arrow">
        <a aria-expanded="false" href="#" class="btn btn-primary btn-icon-split btn-lg dropdown-toggle mt-3"
            data-toggle="dropdown">
            <span class="icon text-white-50">
                <i class="fas fa-plus-circle"></i>
            </span>
            <span class="text">Add Menu Link</span>
        </a>
        @if ($errors->any())
        <div class="alert alert-danger mt-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Dropdown Panel -->
        <div class="dropdown-menu position-static mb-5" data-keep-open="true">
            <fieldset>
                <form action="{{url('cms/menu')}}" method="POST" autocomplete="off" novalidate="novalidate">
                    @csrf()


                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-link "
                                    style="margin-left: 21px; margin-top:12px;"></i></div>
                            <label hidden for="link">* Link </label>
                            <input value="{{old('link')}}" type="text" name="link" id="link"
                                class="form-control origin-text mx-3" placeholder="* Link" style="width: 10px;">

                        </div>
                        <span class="text-danger ml-5">{{ $errors->first('link')}}</span>
                    </div>



                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fas fa-globe-americas"
                                    style="margin-left: 22px; margin-top:12px;"></i></div>
                            <label hidden for="url">* Url </label>
                            <input value="{{old('url')}}" type="text" name="url" id="url"
                                class="form-control target-text mx-3" placeholder="* Url">

                        </div>
                        <span class="text-danger ml-5">{{ $errors->first('url')}}</span>
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-addon"><i class="fab fa-tumblr "
                                    style="margin-left: 26px; margin-top:12px;"></i></div>
                            <label hidden for="title">* Title </label>
                            <input value="{{old('title')}}" type="text" name="title" id="title"
                                class="form-control target-title mx-3" placeholder="* Title">

                        </div>
                        <span class="text-danger ml-5">{{  $errors->first('title')}}</span>
                    </div>

                    <div>


                        <a class="ml-5" href="{{url('cms/menu/create')}}"> Go to add new link form page
                        </a>


                        <input type="submit" value="Save Menu Link" class="btn btn-primary float-right mr-4"
                            name="submit"><span class="icon text-white-50">
                            <i class="fas fa-plus-circle"></i>
                        </span>


                </form>
            </fieldset>
        </div>
        <!-- /Dropdown Panel -->


        </div>
        </div>

        --}}










        <div class="row">
            <div class="col">

                <!-- DataTales Example -->
                <div class="card shadow my-5">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Products</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-bordered dataTable mx-auto" id="dataTable" width="100%"
                                            cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 70%; ">
                                            <thead>
                                                <tr style="color: blue;" role="row">
                                                    <th width="20%" class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1" aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending">Product Title
                                                    </th>
                                                    <th class="text-center" width="20%" >Product Image</th>
                                                    <th class="text-center" width="20%">Last Update</th>
                                                    <th class="text-center" width="20%">Price</th>
                                                    <th class="sorting text-center" tabindex="0" aria-controls="dataTable"
                                                        rowspan="1" colspan="1"
                                                        aria-label="Position: activate to sort column ascending" width="20%">
                                                        Operations</thclass>

                                                </tr>


                                            </thead>
                                            <tbody >



                                                @foreach($products as $product)
                                                <tr>
                                                    <td class="font-weight-bold">{{$product['ptitle']}}
                                                    </td>
                                                    <td class="text-center"><img
                                                            src="{{asset('../public/lib/Template/images/product-images/' .$product['pimage'])}}"
                                                            width="40%" alt="" class="zoom">
                                                    </td>
                                                    <td class="text-center">{{date('d/m/Y', strtotime($product['updated_at']))}}</td>
                                                    <td class="text-center">${{$product['price']}}</td>
                                                    <td class="text-center">
                                                        <a href="{{url('cms/products/' . $product['id'] . '/edit')}}"><i
                                                                class="fas fa-edit"></i> Edit</a>
                                                        |
                                                        <a href="{{$product['ptitle']}}" data-toggle="modal"
                                                            data-target="#deleteModal-{{$product['id']}}">
                                                            <i class="fas fa-eraser"></i> Delete</a>

                                                    </td>


                                                </tr>


                                                </thead>
                                                </tr>
                                                    <!-- Delete menu link Modal-->
                                                    <div class="modal fade" id="deleteModal-{{$product['id']}}"
                                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Are
                                                                        you
                                                                        sure ?</h5>
                                                                    <button class="close" type="button"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">×</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">Select "Delete" below if you
                                                                    want to
                                                                    delete this product.</div>
                                                                <div class="modal-footer">
                                                                    <form
                                                                        action="{{url('cms/products/' . $product['id'])}}"
                                                                        method="POST">
                                                                        @csrf()
                                                                        {{ method_field('DELETE')}}
                                                                        <button class="btn btn-secondary" type="button"
                                                                            data-dismiss="modal">Cancel</button>
                                                                        <input type="submit" value="DELETE"
                                                                            class="btn btn-danger"
                                                                            href="{{ url('cms/products/' . $product['id'])}}"></a>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Delete menu link Modal-->

                                                    @endforeach
                                                </tbody>




                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>















            @endsection
