@extends('cms.cms_master')

@section('cms_header')
@include('utils.cms_header',['url' => 'menu/update','title' => ' Edit Menu Link'])
@endsection
{{------------------------------}}
@section('cms_content')


<div class="container-fluid ">
    <div class="row">
    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
<form action="{{url('cms/menu/' . $item['id'])}}" method="POST" autocomplete="off" novalidate="novalidate">
@csrf()
{{ method_field('PUT')}}
<input type="hidden" name="item_id" value="{{$item['id']}}">


<div class="form-group">

<div class="input-group-addon"><i class="fas fa-link "style=" margin-top:12px;"></i></div>
<label hidden for="link">* Link </label>
@php  $link_value = !empty(old('link')) ? old('link') : $item['link']; @endphp
<input value="{{$link_value}}" type="text" name="link" id="link"
class="form-control origin-text " placeholder="* Link" >


<span class="text-danger ">{{ $errors->first('link')}}</span>
</div>



<div class="form-group">

<div class="input-group-addon"><i class="fas fa-globe-americas" style=" margin-top:12px;"></i></div>
<label hidden for="url">* Url </label>
@php  $url_value = !empty(old('url')) ? old('url') : $item['url']; @endphp
<input value="{{$url_value}}" type="text" name="url" id="url" class="form-control target-text "
placeholder="* Url">


<span class="text-danger ">{{ $errors->first('url')}}</span>
</div>

<div class="form-group">

<div class="input-group-addon"><i class="fas fa-heading" style="margin-top:12px;"></i></div>
<label hidden for="title">* Title </label>
@php  $title_value = !empty(old('title')) ? old('title') : $item['title']; @endphp
<input value="{{$title_value}}" type="text" name="title" id="title"
class="form-control " placeholder="* Title" >


<span class="text-danger ">{{  $errors->first('title')}}</span>
</div>

<div>




<div class="form-group add-input-buttons mt-4">

<a href="{{url('cms/menu')}}" class="btn btn-secondary mr-2">Cancel</a>

<input type="submit" value="Update Menu Link"
class="btn btn-primary " name="submit"> <span
class="icon text-white-50">
<i class="fas fa-plus-circle"></i>
</span>
</div>
</div>
</form>



</div>
</div>
</div>


<div class="row">

    <div class="col-xl-12 ">
  <svg class="add-menu-img mr-5"  id="ab03870f-e999-49c0-989a-dd3dcf1198ff" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="500" height="300" viewBox="0 0 906.38778 540.52883"><title>completed_steps</title><rect x="2.10258" y="70.0398" width="689.99951" height="2" fill="#3f3d56"/><rect x="44.26101" y="111.88979" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="44.26101" y="125.97841" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="44.26101" y="140.06703" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="47.90401" y="61.33568" width="40.29028" height="32.73585" fill="#d0cde1"/><path d="M229.12473,268.77083h-41.969V234.35622h41.969Zm-40.29028-1.67876H227.446V236.035H188.83445Z" transform="translate(-146.80611 -179.73559)" fill="#3f3d56"/><circle cx="8" cy="72.17862" r="8" fill="#6c63ff"/><rect x="727.26101" y="111.88979" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="727.26101" y="125.97841" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="727.26101" y="140.06703" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="730.90401" y="61.33568" width="40.29028" height="32.73585" fill="#d0cde1"/><path d="M912.12473,268.77083h-41.969V234.35622h41.969Zm-40.29028-1.67876H910.446V236.035H871.83445Z" transform="translate(-146.80611 -179.73559)" fill="#3f3d56"/><circle cx="691" cy="72.17862" r="8" fill="#6c63ff"/><rect x="386.26101" y="28.17724" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="386.26101" y="14.08862" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="386.26101" width="179.12676" height="2.01266" fill="#3f3d56"/><rect x="389.90401" y="48.00816" width="40.29028" height="32.73585" fill="#d0cde1"/><path d="M571.12473,267.19465h-41.969V232.78h41.969Zm-40.29028-1.67876H569.446V234.4588H530.83445Z" transform="translate(-146.80611 -179.73559)" fill="#3f3d56"/><circle cx="350" cy="69.90107" r="8" fill="#6c63ff"/><circle cx="134.10236" cy="70.03985" r="18" fill="#fff"/><path d="M280.89273,229.50082a19.91339,19.91339,0,1,0,19.91338,19.91339A19.91338,19.91338,0,0,0,280.89273,229.50082Zm-3.43514,28.82458-8.56562-8.56567,2.40259-2.40256,6.1711,6.17113L290.49094,240.503l2.40254,2.40258Z" transform="translate(-146.80611 -179.73559)" fill="#6c63ff"/><ellipse cx="413.69389" cy="469.03985" rx="31" ry="7" fill="#d0cde1"/><circle cx="416.69389" cy="450.03985" r="18" fill="#fff"/><path d="M563.48425,609.50082a19.91339,19.91339,0,1,0,19.91339,19.91339A19.91337,19.91337,0,0,0,563.48425,609.50082Zm-3.43513,28.82458-8.56562-8.56567,2.40258-2.40256,6.17111,6.17113L573.08247,620.503l2.40254,2.40258Z" transform="translate(-146.80611 -179.73559)" fill="#6c63ff"/><ellipse cx="242.69389" cy="469.03985" rx="31" ry="7" fill="#d0cde1"/><ellipse cx="323.69389" cy="469.03985" rx="31" ry="7" fill="#d0cde1"/><circle cx="326.69389" cy="450.03985" r="18" fill="#fff"/><path d="M473.48425,609.50082a19.91339,19.91339,0,1,0,19.91339,19.91339A19.91337,19.91337,0,0,0,473.48425,609.50082Zm-3.43513,28.82458-8.56562-8.56567,2.40258-2.40256,6.17111,6.17113L483.08247,620.503l2.40254,2.40258Z" transform="translate(-146.80611 -179.73559)" fill="#6c63ff"/><rect x="187.69389" y="493.53985" width="531" height="2" fill="#3f3d56"/><path d="M782.07,704.1154c0,.06-.19.16-.54.3-5.65,2.3-53.81,14.76-59.46,15.7-6,1-30-3-35-13s26-13,26-13l11-11,1.56-8.33,1.44-7.67,48,21S782.07,703.1154,782.07,704.1154Z" transform="translate(-146.80611 -179.73559)" fill="#2f2e41"/><path d="M593.07087,587.116l-7,4s-24,18-16,26,20-15,20-15l7-5Z" transform="translate(-146.80611 -179.73559)" fill="#ffb8b8"/><circle cx="518.26475" cy="283.3804" r="27" fill="#ffb8b8"/><path d="M683.07087,454.116s33,9,36,8l-10,36s-28-19-33-19Z" transform="translate(-146.80611 -179.73559)" fill="#ffb8b8"/><path d="M692.07087,490.116s15-32,19-32,53,3,77,38,24,48,24,48l-65,16-2-2s-18,5-29-20Z" transform="translate(-146.80611 -179.73559)" fill="#d0cde1"/><path d="M719.07087,476.116s-20-2-34,21-42,43-42,43l-53,47,6,14,63-38,73-51S744.07087,482.116,719.07087,476.116Z" transform="translate(-146.80611 -179.73559)" fill="#d0cde1"/><path d="M727.07,585.1154l-5,76s-5.84-3.44-14.66-8.93c-21.25-13.23-59.79-38.4-75.34-56.07-17.97-20.42,4.1-31.51,12.78-34.87,1.94995-.76,3.22-1.13,3.22-1.13Z" transform="translate(-146.80611 -179.73559)" fill="#ffb8b8"/><path d="M782.07,704.1154c0,.06-.19.16-.54.3-22.64-2.33-41.24-14.57-55.9-29.63l1.44-7.67,48,21S782.07,703.1154,782.07,704.1154Z" transform="translate(-146.80611 -179.73559)" opacity="0.15"/><path d="M747.07087,556.116v7s-4-2-2,2l-1,3-21,3s-71-23-78-12l11,53,29-8s43,123,133,93l1-4,18-4s-13-142-24-147Z" transform="translate(-146.80611 -179.73559)" fill="#2f2e41"/><line x1="668.69389" y1="431.03985" x2="668.69389" y2="506.03985" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.15"/><line x1="545.69389" y1="421.03985" x2="599.69389" y2="404.03985" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.15"/><line x1="594.26475" y1="493.50519" x2="631.69389" y2="412.03985" fill="none" stroke="#000" stroke-miterlimit="10" stroke-width="2" opacity="0.15"/><path d="M677.90665,444.66585c4.57052-2.94871,9.09363-6.59325,14.43409-7.116,7.00684-.68589,13.12019,4.20355,17.83481,9.30958s9.22366,10.96245,15.8189,13.19451c3.83339,1.29735,8.006,1.22172,12.038,1.73917s8.24921,1.82729,10.65352,5.08105c2.51187,3.39934,2.46227,8.05287,3.57142,12.17228a21.22218,21.22218,0,0,0,20.32222,15.34633c-8.83269-.55638-16.97863,4.85671-24.55152,9.74657s-16.35149,9.66692-24.94052,7.69243c-8.759-2.01357-14.44563-10.42571-22.59085-14.147-6.96334-3.18135-15.03459-2.66325-22.73231-3.17805s-16.07609-2.64167-20.18584-9.1243c-3.0325-4.7834-3.638-11.70472-8.68872-14.22964-3.12409-1.56177-6.88947-.79955-10.41505-.863s-7.65129-1.70475-8.05683-5.229c9.0784-4.95373,18.06808-10.18393,27.27278-14.88184C663.36824,447.2812,673.49687,450.59649,677.90665,444.66585Z" transform="translate(-146.80611 -179.73559)" fill="#2f2e41"/><path d="M643.63542,467.77543S689.5,444.84314,689.5,436.653s-18.01823-32.76041-50.77864-32.76041c0,0-8.1901-14.74219-18.01823-3.276s4.91406,19.65624,4.91406,19.65624-18.01822,29.48438,8.19011,47.5026Z" transform="translate(-146.80611 -179.73559)" fill="#d0cde1"/></svg>

    </div>
  </div>
  </div>



  @endsection
