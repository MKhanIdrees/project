<!DOCTYPE html>
<html>
<head>
    <title>Rashan Items</title>
</head>
<body>
<form method="POST" action="/rashans/store" enctype="multipart/form-data" class="form">
@csrf 

<h3><b>Registration Shopkeeper</b></h3>
<div class="form-group">
<label>Shopkeeper Name</label>
<input type="text" name="name" class="form-control">
@if($errors->has('shopkeeper_name'))
            <span class="text-danger">{{ $errors->first('shopkeeper_name')}} 
        @endif
</div>
<button type="submit" class="btn btn-dark" id="btn">Submit</button>
</form>
</body>
</html>
