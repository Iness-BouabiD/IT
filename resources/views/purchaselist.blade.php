<head>
    <style type="text/css">
     .row:after {
  content: "";
  display: table;
  clear: both;
} 
hr.solid {
  border-top: 1px solid #bbb;
  margin-top: -180px;
  margin-bottom: 30px;
}
*{
  box-sizing:border-box;
}
h2{
  margin-bottom: 30px;
}
.card{
  margin-top: 240px;
  top:10%;
  left:50%;
  transform:translate(-50%,-50%);
  width:330px;
  height:450px;
  background-color: #000;
  overflow:hidden;
  box-shadow:0 5px 10px rgba(0,0,0,.5);
}
.card .poster{
  position:relative;
  overflow:hidden;
}
.card .poster img{
  width:100%;
}
.stars ul li img{
  width:55px;
  height:55px;
  border-radius:50%;
  border:2px solid #fff;
}
.details h2{
  font: 2.1rem 'Cookie', cursive;
}
span,p,.romance{
  font: 1.2rem 'Saira Extra Condensed', sans-serif;
}
.details{
  position:absolute;
  width:100%;
  height:80%;
  padding:10px;
  left:0;
  bottom:-180px;
  transition:1s;
  color:#fff;
  z-index:2;
}
.card:hover .details{
  bottom:40px;
}
.card .poster:before{
  content:'';
  position:absolute;
  bottom:-180px;
  left:0;
  width:100%;
  height:100%;
  background: linear-gradient(0deg, #000 50%, transparent);
  z-index:1;
}
.card:hover .poster:before{
  bottom:0;
}

.rating{
  position:relative;
  margin-top:-28px;
  margin-bottom: 10px;
}
.rating .fas{
  color:#f7f406;
  margin-right:1.5px;
}
.rating span{
  padding: 0 5px;
  font-weight:bold;
} 
.tags span{
  background-color:tomato;
  padding:1px 4px;
  border-radius:4px;
}
.tags{
  position:relative;
}
.info p{
  font-size:17px;
  text-align:justify;
}
.info{
  position:relative;
}
.stars h4{
  margin:0;
  padding:0;
  color:#f7f406;
  font:1.2rem 'Saira Extra Condensed', sans-serif;
}
.stars ul{
  margin:10px 0 0;
  padding:0;
  display:flex;
  list-style:none;
}
.stars{
  position:relative;
  margin-top:30px;
}
.stars ul{
  margin:0;
}
.stars ul li{
  margin-right:15px;
  overflow:hidden;
}

  .column {
  float: left;
  width: 50%;
  padding: 0 10px;
}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >

@if (Auth::check())

   <div class="alert alert-success alert-dismissible" style="width:300px; margin-left:210px; text-align:center;">
    <a  class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Welcome Back !</strong> 
  </div>

  <a href="{{url('/create')}}" class="btn btn-dark" style="margin-left:250px; margin-top:10px;">Nouveau film ? Cliquez-ici !</a>
  
  @endif
 



<BR> 
  <BR>

@foreach($purchases as $purchase)
<div class="column">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Cookie|Saira+Extra+Condensed" rel="stylesheet">
<div class="card">
  <div class="poster">
    <img src="{{asset('public/img/'.$purchase->lienimg)}}" alt="">
  </div>
  <div class="details">
    <h2>{{$purchase->nom}} <br></h2>
      <div class="rating">
        <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
         <i class="fas fa-star"></i>
        <span>5/5</span>
      </div>
      <div class="tags">
        <span class="romance">{{$purchase->categorie}}</span>
      </div>
      <div class="info">
        <p>{{$purchase->description}}</p>
      </div>
      <a href="{{$purchase->lienvideo}}" target="_blank">Voir la bande annonce </a>
      <div class="stars">
          @if (Auth::check())
      <a href="{{url ('/edit/'.$purchase->id)}}" class="btn btn-outline-danger" style="margin-bottom:30px;    padding-right:40px; padding-left:40px;">Edit</a>
      <a href="{{url ('/destroy/'.$purchase->id)}}" class="btn btn-outline-danger" style="margin-bottom:30px; padding-right:40px; padding-left:40px;">Delete</a>
      @endif 
      </div>
  </div>
</div>
<hr class="solid">
</div>
@endforeach
<footer style="position:fixed;bottom:0; margin-bottom:-10px;width:100%; margin-left:300px;">
 <div class="row">
    <div class="col-1 text-center">
      {{ $purchases->links() }}
    </div>
  </div>
</footer>
</body>