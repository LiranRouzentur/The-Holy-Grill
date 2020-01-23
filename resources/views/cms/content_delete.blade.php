@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'content/delete','title' => 'Delete Content'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-8">
            <form action="{{url('cms/content/' . $menu_id)}}" method="POST">
                @csrf()
                {{ method_field('DELETE')}}
                <h4>Are you sure you want to delete this Content ?</h4>
                <input type="submit" value="Delete content " class="btn btn-primary float-right mr-4" name="submit">
                <span class="icon text-white-50">
                    <i class="fas fa-minus-circle"></i>

                </span>
                <a class="btn btn-primary"
                href="{{ url('cms/content/' . $content['id'])}}">Delete</a>

            </form>




        </div>
    </div>
</div>

</div>
@endsection
