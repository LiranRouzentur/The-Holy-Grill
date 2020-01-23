@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'orders','title' => 'Site Orders'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="container-fluid">





    <div class="row">
        <div class="col">

            <!-- DataTales Example -->
            <div class="card shadow my-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Categories</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">

                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable mx-auto" id="dataTable" width="100%"
                                    cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 70%; ">
                                    <thead>
                                        <tr style="color: blue;" role="row">
                                            <th width="1%" class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending">#ID
                                            </th>
                                            <th class="text-center" width="10%">User</th>
                                            <th class="text-center" width="0%">Order</th>
                                            <th class="sorting text-center" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Position: activate to sort column ascending" width="5%">
                                                Total</th>
                                            <th class="text-center" width="10%">Date</th>


                                        </tr>


                                    </thead>
                                    <tbody>



                                        @foreach($orders as $order)
                                        <tr>
                                            <td class="font-weight-bold text-center">{{$order->id}}
                                            </td>
                                            <td class="text-center">{{$order->name}}
                                            </td>
                                            <td class="text-center"><ul>
                                                @foreach(unserialize($order->data) as $item )
                                                <li>{{$item['name']}} , Quantity:{{$item['quantity']}} ,Price: ${{$item['price']}}</li>
                                                <br>
                                                @endforeach
                                            </ul></td>
                                            <td class="text-center">${{$order->total}}</td>
                                            <td class="text-center">{{date('d/m/Y H:i:s', strtotime($order->created_at))}}</td>

                                        </tr>

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
