@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'content' , 'title' => 'Content'])
@endsection
{{------------------------------}}
@section('cms_content')

<div class="row">
<div class="col-md-8">

<a href="{{url('cms/content/create')}}" class="btn btn-primary btn-icon-split btn-lg my-2">
<span class="icon text-white-50">
<i class="fas fa-plus-circle"></i>
</span>
<span class="text">Add New Content</span>
</a>
</div>
</div>


<div class="row">
<div class="col">

<!-- DataTales Example -->
<div class="card shadow1 my-5">
<div class="card-header py-3">
<h6 class="m-0 font-weight-bold text-primary">Contents</h6>
</div>
<div class="card-body">
<div class="table-responsive">
<div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

</div>
<div class="row">
<div class="col-xl-9 col-lg-12 ">
<table class="table table-bordered dataTable mx-auto " id="dataTable"  cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;margin-top: 4%; ">
<thead>
<tr role="row">
<th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Content Title
</th>
<th class="sorting_asc text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Menu Link
</th>

<th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:20%;">Created At</th>
<th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:20%;">Updated At</th>

<th class="sorting text-center" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width:30%;">Operations</th>

</tr>


</thead>
<tbody id="sortable">



@foreach($contents as $content)
<tr>
<td class="font-weight-bold">{{$content->ctitle}}
</td>
<td class="font-weight-bold">{{$content->mtitle}}
</td>

<td class="text-center" value="{{$content->created_at}}">{{date('d/m/Y', strtotime($content->created_at))}}</td>

<td class="text-center" value="{{$content->updated_at}}">{{date('d/m/Y', strtotime($content->updated_at))}}</td>

<td class="text-center">
<a href="{{url('cms/content/' . $content->id . '/edit')}}"><i class="fas fa-edit"></i> Edit</a>
|
<a href="{{$content->ctitle}}" data-toggle="modal" data-target="#deleteModal-{{$content->id}}">
<i class="fas fa-eraser"></i> Delete</a>

</td>


</tr>
<!-- Delete menu link Modal-->
<div class="modal fade" id="deleteModal-{{$content->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Are
you
sure ?</h5>
<button class="close" type="button" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">×</span>
</button>
</div>
<div class="modal-body">Select "Delete" below if you
want to
delete this content.</div>
<div class="modal-footer">
<form action="{{url('cms/content/' . $content->id)}}" method="POST">
@csrf()
{{ method_field('DELETE')}}
<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
<input type="submit" value="DELETE" class="btn btn-danger" href="{{ url('cms/$content/' . $content->id)}}"></a>
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


<div class="col-xl-3 col-lg-3">
  <div class="menu-index-img">
  <svg id="fb0462f1-4822-46c6-85a1-002b71cfcb82" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="250" height="200" viewBox="0 0 980.49384 751.89531"><title>nakamoto</title><rect x="313.49413" y="116.99986" width="2" height="107" fill="#3f3d56"/><rect x="313.49413" y="255.85045" width="2" height="94.14941" fill="#3f3d56"/><rect x="310.49413" y="364.99986" width="155" height="2" fill="#3f3d56"/><rect x="244.49413" y="391.99986" width="2" height="85" fill="#3f3d56"/><rect x="262.49413" y="491.99986" width="235" height="2" fill="#3f3d56"/><path d="M623.24692,551.05234" transform="translate(-109.75308 -74.05234)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/><path d="M623.24692,469.05234" transform="translate(-109.75308 -74.05234)" fill="none" stroke="#3f3d56" stroke-miterlimit="10" stroke-width="2"/><rect x="691.49413" y="48.99986" width="2" height="101" fill="#3f3d56"/><rect x="529.45995" y="165.99986" width="147.03418" height="2" fill="#3f3d56"/><rect x="512.49399" y="181.9999" width="2" height="135" fill="#3f3d56"/><path d="M424.24721,331.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,424.24721,331.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,424.24721,299.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M356.24721,584.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,356.24721,584.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,356.24721,552.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><circle cx="315.49384" cy="366" r="16" fill="#6c63ff"/><rect x="728.49413" y="238.99986" width="166" height="2" fill="#3f3d56"/><rect x="711.49413" y="255.85045" width="2" height="94.14941" fill="#3f3d56"/><rect x="562.49413" y="364.99986" width="133" height="2" fill="#3f3d56"/><rect x="796.49413" y="373.99986" width="138" height="2" fill="#3f3d56"/><rect x="780.49413" y="391.99986" width="2" height="85" fill="#3f3d56"/><rect x="529.49413" y="491.99986" width="235" height="2" fill="#3f3d56"/><rect x="512.49413" y="414.99986" width="2" height="62" fill="#3f3d56"/><circle cx="712.49384" cy="240" r="16" fill="#6c63ff"/><path d="M802.24721,257.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,802.24721,257.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,802.24721,225.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M623.24721,257.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,623.24721,257.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,623.24721,225.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M890.24721,467.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,890.24721,467.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,890.24721,435.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><circle cx="780.49384" cy="493" r="16" fill="#6c63ff"/><path d="M623.24721,584.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,623.24721,584.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,623.24721,552.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M821.24721,457.0522a17,17,0,1,1,17-17A17.019,17.019,0,0,1,821.24721,457.0522Zm0-32a15,15,0,1,0,15,15A15.01672,15.01672,0,0,0,821.24721,425.0522Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M356.24692,416.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,356.24692,416.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M425.24692,143.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,425.24692,143.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M802.24692,74.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,802.24692,74.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M1032.24692,293.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,1032.24692,293.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M1070.24692,428.05234a20,20,0,1,0,20,20A20.0588,20.0588,0,0,0,1070.24692,428.05234Zm0,6a6,6,0,1,1-6,6,6.02013,6.02013,0,0,1,6-6Zm0,28.88462a14.56987,14.56987,0,0,1-12-6.40385c.09616-4,8-6.20192,12-6.20192s11.90385,2.20192,12,6.20192a14.59411,14.59411,0,0,1-12,6.40385Z" transform="translate(-109.75308 -74.05234)" fill="#3f3d56"/><path d="M624.52486,427.71889l-2.049,8.215c2.323.579,9.483,2.941,10.643-1.708C634.32786,429.37889,626.84786,428.29789,624.52486,427.71889Z" transform="translate(-109.75308 -74.05234)" fill="#6c63ff"/><path d="M621.44286,440.07989l-2.26,9.058c2.789.693,11.392,3.455,12.664-1.655C633.17586,442.1549,624.23186,440.77589,621.44286,440.07989Z" transform="translate(-109.75308 -74.05234)" fill="#6c63ff"/><path d="M633.78686,403.26389a37.49274,37.49274,0,1,0,27.308,45.451A37.487,37.487,0,0,0,633.78686,403.26389Zm7.462,31.037c-.541,3.653-2.565,5.422-5.254,6.041,3.691,1.921,5.57,4.869,3.78,9.979-2.22,6.345-7.497,6.881-14.512,5.553l-1.703,6.824-4.115-1.025,1.68-6.733q-1.644-.40726-3.279-.85l-1.686,6.764-4.11-1.026,1.703-6.836c-.961-.246-1.937-.508-2.933-.757l-5.354-1.336,2.042-4.709s3.032.807,2.991.747a1.49616,1.49616,0,0,0,1.885-.978l2.691-10.787c.151.037.298.073.434.108a3.49556,3.49556,0,0,0-.427-.137l1.919-7.701a2.18915,2.18915,0,0,0-1.917-2.392c.065-.044-2.988-.743-2.988-.743l1.095-4.395,5.675,1.417-.005.021c.853.212,1.732.413,2.628.617l1.686-6.757,4.112,1.025-1.652,6.625c1.104.252,2.215.506,3.297.775l1.641-6.581,4.114,1.025-1.685,6.76C638.19585,426.6279,641.99486,429.3099,641.24886,434.3009Z" transform="translate(-109.75308 -74.05234)" fill="#6c63ff"/><path d="M261.75282,807.34635c-2.84542,25.87621-152.22585,23.704-151.99949-.00154C112.59871,781.47014,261.97914,783.64237,261.75282,807.34635Z" transform="translate(-109.75308 -74.05234)" fill="#e6e6e6"/><polygon points="103.754 668.156 109.81 681.276 120.911 680.267 127.976 657.054 116.874 650.999 103.754 668.156" fill="#ffb8b8"/><polygon points="65.642 698.373 65.403 707.516 82.56 708.525 82.56 697.424 65.642 698.373" fill="#ffb8b8"/><polygon points="71.458 531.908 75.495 612.647 65.403 700.451 95.68 704.488 114.856 593.472 120.911 517.778 71.458 531.908" fill="#2f2e41"/><path d="M133.777,576.69193s-12.11093,79.7303,13.12018,105.97066,59.54542,72.66559,59.54542,72.66559l24.22186-30.27733L169.10055,659.45l12.11093-44.40676,49.453-23.21262-8.07395-55.50844-72.6656-1.00924Z" transform="translate(-109.75308 -74.05234)" fill="#2f2e41"/><circle cx="83.56933" cy="295.74449" r="22.20338" fill="#ffb8b8"/><path d="M174.14677,374.84306s-1.00925,31.28657-6.05547,35.32355,18.1664,21.19413,18.1664,21.19413l15.13867-24.22186V384.9355Z" transform="translate(-109.75308 -74.05234)" fill="#ffb8b8"/><polygon points="74.486 343.179 62.233 324.677 55.31 334.096 45.218 362.355 53.292 472.362 100.726 473.371 106.782 347.216 91.643 329.05 74.486 343.179" fill="#d0cde1"/><path d="M235.71067,424.296l8.074-1.00924s2.01849,1.00924,3.02773,8.074,13.12018,69.63786,13.12018,69.63786l-16.14791,76.70257-18.1664-24.22186,11.10169-42.38826-11.10169-42.38827Z" transform="translate(-109.75308 -74.05234)" fill="#2f2e41"/><polygon points="23.015 349.234 16.959 349.234 1.821 430.983 15.95 494.566 30.079 471.353 26.042 446.122 28.061 423.919 35.126 410.798 23.015 349.234" fill="#2f2e41"/><path d="M222.5905,751.2912s-6.05547-2.01849-6.05547,2.01849,4.037,16.14791,4.037,16.14791-6.05547,37.342,3.02773,35.32355,16.14791-19.17564,17.15716-24.22186,6.05546-31.28658,6.05546-31.28658,8.074-19.17564,3.02773-20.18488-19.17564-5.04622-19.17564-5.04622S238.73841,749.27271,222.5905,751.2912Z" transform="translate(-109.75308 -74.05234)" fill="#2f2e41"/><path d="M193.32241,782.57778s-16.14791-10.09245-19.17564-2.01849a84.80084,84.80084,0,0,0-4.037,18.1664s-4.037,13.12017,12.11093,11.10169,14.12942-2.01849,15.13867-8.074S193.32241,782.57778,193.32241,782.57778Z" transform="translate(-109.75308 -74.05234)" fill="#2f2e41"/><path d="M180.20223,369.79684l4.037-1.00925s3.02773-17.15715,10.09244-15.13866,25.23111,4.037,25.23111-4.037-17.15715-15.13867-27.24959-14.12942-27.2496,4.037-26.24036,19.17564,7.52165,29.86536,7.52165,29.86536l.526-8.97562Z" transform="translate(-109.75308 -74.05234)" fill="#2f2e41"/><polygon points="91.643 355.29 74.486 343.179 91.643 329.05 97.6 336.197 91.643 355.29" fill="#d0cde1"/><polygon points="59.347 354.281 74.486 343.179 62.375 325.013 55.31 334.096 59.347 354.281" fill="#d0cde1"/><path d="M242.77538,423.28679l-32.29582-13.12018-7.56933-5.55084-22.708,100.41981-15.13866-45.416,4.5416-58.03155-41.88364,21.69876L141.851,491.9154l2.01849,26.24036L137.814,539.34989s-21.19413,15.13866-14.12942,31.28657,15.13866,17.15716,15.13866,17.15716,34.31431-32.29582,36.3328-40.36978,5.04622-22.20337,5.04622-22.20337,17.15716,64.59164,37.342,63.58239,20.18489-22.20337,20.18489-22.20337l-5.04622-22.20338L224.609,521.18349l4.037-38.35129Z" transform="translate(-109.75308 -74.05234)" fill="#2f2e41"/></svg>
  </div>
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
