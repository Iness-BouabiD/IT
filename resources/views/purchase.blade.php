<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet"  href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Long+Cang&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet">
  <style type="text/css">
.bg-image {
 background-image: url('https://images.pexels.com/photos/4014853/pexels-photo-4014853.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
background-size: 100%;
}

</style>
  </head>
  <body class="bg-image">

@include ("navbarPurchase")


<div class="row header-container justify-content-center">
<div class="header">

<h1 style="font-family: 'Homemade Apple', cursive; font-size:45px; margin-top:10px; margin-bottom:-20px; margin-left:-30px;">Cinema</h1>



</div>
  </div>


   @if($layout =='index')
   <div class="container-fluid mt-4 ">
      <div class="container-fluid mt-4"> 
        <div class="row justify-content-center">
      <section class="col-md-7">
        @include ("purchaselist")
      </section>
    </div>
    
    </div> 
    </div>

    @elseif($layout=='create')
     <div class="container-fluid mt-4">
      <div class="row"> 
      
      <section class="col-md-5" style="margin-left:390px;" >


 <div class="card mb-3">
 
  <div class="card-body">
  
    <form action="{{url('/store')}}" method="post">
  @csrf
  <div class="form-group">
    <label>Categorie</label>
    <input name="categorie" type="text" class="form-control" placeholder="Entrez la categorie">
  </div>
  <div class="form-group">
   <label>Nom</label>
    <input name="nom" type="text" class="form-control" placeholder="Entrez le nom">
  </div>
   <div class="form-group">
   <label>Description</label>
    <input name="description" type="text" class="form-control" placeholder="Entrez la description">
  </div>

 <div class="form-group">
   <label>Prix</label>
    <input name="prix" type="text" class="form-control" placeholder="Entrez le prix">
  </div>

<label>Lien image</label>
   <div class="custom-file">
    <input name="lienimg" type="file" class="custom-file-input" placeholder="Enter le lien de l'image">
    <label class="custom-file-label">Choisir l'image</label>
</div>
<div class="form-group">
   <label>Lien video Trailer</label>
    <input name="lienvideo" type="text" class="form-control" placeholder="Enter le lien de la video Trailer">
</div>
<input type="submit" class="btn btn-outline-danger"  style="margin-bottom:30px; margin-top:10px; margin-left:110px;  padding-right:40px; padding-left:40px;" value="Save">
<input type="reset" class="btn btn-outline-danger"   style="margin-bottom:30px; margin-top:10px; text-align:center;  padding-right:40px; padding-left:40px;" value="Reset">

 
</form>
  </div>
</div>



       
       </section>
     </div>
    </div>
      @elseif($layout=='edit')
      <div class="container-fluid mt-4">
      <div class="row"> 
      <section class="col-md-5" style="margin-left:400px;" >


 <div class="card mb-3">
 
  <div class="card-body">
  
    <form action="{{url('/update/'.$Purchase->id)}}" method="post">
  @csrf
  <div class="form-group">
    <label>Categorie</label>
    <input name="categorie" value=" {{$Purchase->categorie}}" type="text" class="form-control" placeholder="Entrez la categorie">
  </div>
  <div class="form-group">
   <label>Nom</label>
    <input name="nom" type="text" value=" {{$Purchase->nom}}"class="form-control" placeholder="Entrez le nom">
  </div>
   <div class="form-group">
   <label>Description</label>
    <input name="description" type="text" class="form-control" placeholder="Entrez la description">
  </div>
 <div class="form-group">
   <label>Prix</label>
    <input name="prix" type="text" value=" {{$Purchase->prix}}"class="form-control" placeholder="Entrez le prix">
  </div>


   <label>Lien image</label>
   <div class="custom-file">
    <input name="lienimg" type="file" value=" {{$Purchase->lienimg}}"class="custom-file-input" placeholder="Enter le lien de l'image">
    <label class="custom-file-label">Choisir l'image</label>
</div>
<BR>

<div class="form-group">
   <label>Lien video Trailer</label>
    <input name="lienvideo" type="text" value="{{$Purchase->lienvideo}}"class="form-control" placeholder="Enter le lien de la video Trailer">
</div>
<center>
<input type="submit" class="btn" style="background-color:#00cc66;" value="Save">
<input type="reset" class="btn "  style="background-color:#ff3333; " value="Reset">
</center>
 
</form>
  </div>
</div>



       
       </section>
     </div>
    </div>


@elseif($layout =='show')
@include('show')



  <?php endif ?>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>