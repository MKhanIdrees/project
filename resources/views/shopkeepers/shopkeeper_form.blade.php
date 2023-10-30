<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 
    <link rel="stylesheet" href="/shopkeeper/shopkeeper_form.css"/>
    <!-- Montserrat Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

    <!-- Custom CSS -->
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/css/create.css"/>
  </head>
  <body class="body">
  @if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
@endif
</div>

<div class="container">
<div class="row justify-content-center">
<div class="col-sm-5">
<div class="card mt-3 p-3">
<form method="POST" action="/shopkeepers/store" enctype="multipart/form-data" class="form">
@csrf 

<h3><b>Registration Shopkeeper</b></h3>
<div class="form-group">
<label>Shopkeeper Name</label>
<input type="text" name="shopkeeper_name" class="form-control">
@if($errors->has('shopkeeper_name'))
            <span class="text-danger">{{ $errors->first('shopkeeper_name')}} 
        @endif
</div>

<div class="form-group">
<label>Shop Name</label>
<input type="text" name="shop_name" class="form-control">
@if($errors->has('shop_name'))
            <span class="text-danger">{{ $errors->first('shop_name')}} 
        @endif
</div>

<div class="form-group">
<label>Shopkeeper Contact</label>
<input type="number" name="shopkeeper_contact" class="form-control">
</div>

<div class="form-group">
<label>Shopkeeper Email</label>
<input type="email" name="shopkeeper_email" class="form-control">
@if($errors->has('shopkeeper_email'))
            <span class="text-danger">{{ $errors->first('shopkeeper_email')}} 
        @endif
</div>

<div class="form-group">
<label>Shopkeeper District</label>
<input type="text" name="shopkeeper_district" class="form-control">
@if($errors->has('shopkeeper_district'))
            <span class="text-danger">{{ $errors->first('shopkeeper_district')}} 
        @endif
</div>

<div class="form-group">
<label>Shopkeeper Tehsil</label>
<input type="text" name="shopkeeper_tehsil" class="form-control">
@if($errors->has('shopkeeper_tehsil'))
            <span class="text-danger">{{ $errors->first('shopkeeper_tehsil')}} 
        @endif
</div>

<div class="form-group">
<label>Shopkeeper Village</label>
<input type="text" name="shopkeeper_village" class="form-control">
@if($errors->has('shopkeeper_village'))
            <span class="text-danger">{{ $errors->first('shopkeeper_village')}} 
        @endif
</div>

<button type="submit" class="btn btn-dark" id="btn">Submit</button>
</form>
</div>
</div>

</div>

</div>


      
       
  </body>
</html>