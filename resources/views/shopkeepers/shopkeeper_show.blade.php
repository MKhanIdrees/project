<!DOCTYPE html>  
<html lang="en"> 
<head>

  
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="/adminwidowcss/show.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
 
<title></title>
</head>
<body>

<!----------------------------------------------navbar start--------------------------------------------------->    

@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
@endif
</div>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4">
                    <div class="table-container">
                        <table class="table">
                            <tr>
                                <th>Field</th>
                                <th>Value</th>
                            </tr>
                            <tr>
                                <td>Shopkeeper Name :</td>
                                <td><b>{{$shopkeepers->shopkeeper_name}}</b></td>
                            </tr>
                            <tr>
                                <td>Shop Name :</td>
                                <td><b>{{$shopkeepers->shop_name}}</b></td>
                            </tr>
                            
                            <tr>
                                <td>Shopkeeper Contact :</td>
                                <td><b>{{$shopkeepers->shop_contact}}</b></td>
                            </tr>

                            <tr>
                                <td>Email :</td>
                                <td><b>{{$shopkeepers->shopkeeper_email}}</b></td>
                            </tr>
                            <tr>
                                <td>Shopkeeper District :</td>
                                <td><b>{{$shopkeepers->shopkeeper_district}}</b></td>
                            </tr>
                            <tr>
                                <td>Shopkeeper Tehsil :</td>
                                <td><b>{{$shopkeepers->shopkeeper_tehsil}}</b></td>
                            </tr>
                           
                            <tr>
                                <td>Shopkeeper village :</td>
                                <td><b>{{$shopkeepers->shopkeeper_village}}</b></td>
                            </tr>
                            
        
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
  
</body>
    

</html>
