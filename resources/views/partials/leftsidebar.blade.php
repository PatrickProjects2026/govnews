
<h4  style="color:{{$backColor}};"><b>Select Industry</b></h4>

@foreach ($categories_government as $catz)
  
<div class="cat">
  <a href="/company_by_cat/{{$catz->id}}">
  <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:46px;"/> <span class="glyphicon glyphicon-{{$catz->icon}}"></span> </td><td style="">{{$catz->name}}</td> <!-- <td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td> --></tr></table>     
  </a>
</div>

@endforeach




<br/>
<h4><a href="/Pages/Videos"  style="color:{{$backColor}}"> <b>  Find a Business </b> </a> </h4>
<br/>
@foreach ($biz_cats as $catz)

<div class="cat" style="width:100%;">
  <a href="/company_bybiz_category/{{$catz->id}}">
  <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:46px;"/> <span class="glyphicon glyphicon-{{$catz->icon}}"></span> </td><td style="">{{$catz->name}}</td> <!-- <td style="text-align:right;padding-right:10px;">17{{rand(20,90)}}</td> --></tr></table>     
  </a>
</div>



@endforeach
