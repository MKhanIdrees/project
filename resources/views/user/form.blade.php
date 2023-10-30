<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
     <!-- Montserrat Font -->
     <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="adminorphan.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="/user/form.css"/>
  </head>
  <body>

  <!----------------------------------------------navbar start--------------------------------------------------->	


<nav class="navbar navbar-expand-lg navbar-light bg-light navbar_color">
  <div class="container-fluid">
    <img src="/user_image/logo.png" height="40px" width="40px">
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about">About Us</a>
        </li>
       
          <li class="nav-item">
          <a class="nav-link" href="form">Form</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
         </ul>
    </div>
  </div>
</nav>
<br>

    @if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
@endif
</div>
    <section class="container">
      <header>Registration Form</header>
      <form method="POST" action="/widows/store" enctype="multipart/form-data" class="form">
        @csrf
        <h2>Personal information</h2>
        <div class="input-box">
          
        <div class="column">
          <div class="input-box">
          <label>widow full Name :</label>
            <input type="text" placeholder="Enter widow name" name="widow_name"  value="{{old('widow_name')}}" required />
             @if($errors->has('widow_name'))
            <span class="text-danger">{{ $errors->first('widow_name')}} 
        @endif
          </div>
          <div class="input-box">
            <label>husband Name</label>
            <input type="text" placeholder="Enter husband name" name="husband_name" value="{{old('husband_name')}}" required />
            @if($errors->has('husband_name'))
            <span class="text-danger">{{ $errors->first('husband_name')}} 
        @endif
          </div>
      <div class="input-box">
            <label>Contact No :</label>
            <input type="number" placeholder="Enter phone number" name="widow_contact" value="{{old('widow_contact')}}" required />
            @if($errors->has('widow_contact'))
            <span class="text-danger">{{ $errors->first('widow_contact')}} 
        @endif
          </div>
        </div>
        <br>

         <div class="input-box">
          
        <div class="column">
          <div class="input-box">
            <label>Widow NIC No :</label>
            <input type="number" placeholder="Enter widow name" name="widow_nic" value="{{old('widow_nic')}}" />
            @if($errors->has('widow_contact'))
            <span class="text-danger">{{ $errors->first('widow_contact')}} 
        @endif
          </div>
          <div class="input-box">
            <label>Husband NIC No :</label>
            <input type="number" placeholder="Enter husband name" name="husband_nic" value="{{old('husband_nic')}}" />
            @if($errors->has('widow_contact'))
            <span class="text-danger">{{ $errors->first('widow_contact')}} 
        @endif
          </div>
      <div class="input-box">
            <label>email :</label>
            <input type="email" placeholder="Enter phone number" name="email" value="{{old('email')}}" />
            @if($errors->has('widow_contact'))
            <span class="text-danger">{{ $errors->first('widow_contact')}} 
        @endif
          </div>
        </div>
        <br>

          <div class="column">
          <div class="input-box">
             <label for="myfile">Death Certificate:</label>
             <input type="file" name="Certificate" accept="image/*">
 <label for="myfile">Affidavit :</label>
 <input type="file" name="affidavit" accept="image/*">
          </div>
        </div>


        
<br><br>
  <h2>Guardian information</h2>
        <div class="input-box">
          
        <div class="column">
          <div class="input-box">
            <label>Guardian full Name :</label>
            <input type="text" placeholder="Enter widow name" name="guardian_name" value="{{old('guardian_name')}}" />
          </div>
          <div class="input-box">
            <label>Relationship</label>
            <input type="text" placeholder="Enter husband name" name="relationship" value="{{old('relationship')}}"/>
          </div>
      <div class="input-box">
            <label>Contact NO :</label>
            <input type="number" placeholder="Enter phone number" name="guardian_contact" value="{{old('guardian_contact')}}" />
          </div>
        </div>
<br><br>
        <h2>Guardian information</h2>
         <div class="input-box">
          
          <label for="kids">how many kids</label>
          <br>
  <div class="select-box">
              <select  name="kids">
                <option hidden>kids</option>
                <option>1</option>
                <option>2</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
  <br><br>

  <label for="myfile">Form B all kids:</label>
  <input type="file" name="form_b"  accept="image/*">
          
        </div>
        
        <br><br>
        <h2>Address</h2>
        <div class="input-box address">
          <label>district</label>
          <input type="text" placeholder="Enter street address" name="widow_district" value="{{old('adress')}}"/>
          <label>tehsil</label>
          <input type="text" placeholder="Enter street address" name="widow_tehsil" value="{{old('adress')}}"/>
          <label>village</label>
          <input type="text" placeholder="Enter street address" name="widow_village" value="{{old('adress')}}"/>
        </div>
        <button>Submit</button>
      </form>
    </section>

  </body>
</html>