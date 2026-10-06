
<h4  style="color:{{$backColor}};"><b>General Information</b></h4>

@foreach ($gov_article_cats as $catz)
        
        <div class="cat">
          <a href="/Info/{{$catz->name}}">
          <table><tr><td> <img src="{{URL::asset('ret.png')}}" style="height:46px;"/> <span class="glyphicon glyphicon-{{$catz->name}}"></span> </td><td style="">{{$catz->name}}</td> </tr></table>     
          </a>
        </div>
        
@endforeach


<br/><br/>
<h4  style="color:{{$backColor}};"><b>Featured Information</b></h4>
<br/>

@foreach ($gov_articles as $art)

<div style="border:solid 2px silver;margin:5px;padding:5px;">
 <b>{{$art->title}}</b> <br/>
 <hr/>
 <p>{{ substr(strip_tags($art->excerpt), 0, 150) }}</p>
</div>

@endforeach



