<!DOCTYPE html>
<!---Coding By CodingLab | www.codinglabweb.com--->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--<title>Registration Form in HTML CSS</title>-->
    <!---Custom CSS File--->
    <link rel="stylesheet" href="/adminwidowcss/edit.css"/>
  </head>
  <body>
    @if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
@endif
</div>
    <section class="container">
      <header>Registration Form</header>
      <form method="POST" action="/widows/{{$widows->id}}/update" enctype="multipart/form-data" class="form">
        @csrf
        @method('PUT')
        <h2>Personal information</h2>
        <div class="input-box">
          
        <div class="column">
          <div class="input-box">
            <label>widow full Name :</label>
            <input type="text" name="widow_name" value="{{ old('widow_name', $widows->widow_name)}}" required />
             @if($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name')}} 
        @endif
          </div>
          <div class="input-box">
            <label>husband Name</label>
            <input type="text" placeholder="Enter husband name" name="husband_name" value="{{ old('husband_name', $widows->husband_name)}}"  required />
          </div>
      <div class="input-box">
            <label>Contact No :</label>
            <input type="number" placeholder="Enter phone number" name="widow_contact" value="{{old('widow_contact', $widows->widow_contact)}}" required />
          </div>
        </div>
        <br>

         <div class="input-box">
          
        <div class="column">
          <div class="input-box">
            <label>Widow NIC No :</label>
            <input type="number" placeholder="Enter widow name" name="widow_nic" value="{{old('widow_nic' , $widows->widow_nic)}}" />
          </div>
          <div class="input-box">
            <label>Husband NIC No :</label>
            <input type="number" placeholder="Enter husband name" name="husband_nic" value="{{old('husband_nic', $widows->husband_nic)}}" />
          </div>
      <div class="input-box">
            <label>email :</label>
            <input type="email" placeholder="Enter phone number" name="email" value="{{old('email', $widows->email)}}" />
          </div>
        </div>
        <br>

          <div class="column">
          <div class="input-box">
             <label for="myfile">Death Certificate:</label>
             <input type="file" name="Certificate" accept="image/*" value="{{old('Certificate', $widows->Certificate)}}" >
 <label for="myfile">Affidavit :</label>
 <input type="file" name="affidavit" accept="image/*" value="{{old('affidavit', $widows->affidavit)}}>
          </div>
        </div>


        
<br><br>
  <h2>Guardian information</h2>
        <div class="input-box">
          
        <div class="column">
          <div class="input-box">
            <label>Guardian full Name :</label>
            <input type="text" placeholder="Enter widow name" name="guardian_name" value="{{old('guardian_name', $widows->guardian_name)}}" />
          </div>
          <div class="input-box">
            <label>Relationship</label>
            <input type="text" placeholder="Enter husband name" name="relationship" value="{{old('relationship', $widows->relationship)}}"/>
          </div>
      <div class="input-box">
            <label>Contact NO :</label>
            <input type="number" placeholder="Enter phone number" name="guardian_contact"  value="{{old('guardian_contact', $widows->guardian_contact)}}" />
          </div>
        </div>
<br><br>
        <h2>Guardian information</h2>
         <div class="input-box">
          
          <label for="kids">how many kids</label>
          <br>
  <div class="select-box" >
              <select  name="kids" value="{{old('kids', $widows->kids)}}">
                <option hidden>kids</option>
                <option>1</option>
                <option>2</option>
                <option>2</option>
                <option>3</option>
              </select>
            </div>
  <br><br>

  <label for="myfile">Form B all kids:</label>
  <input type="file" name="form_b" accept="image/*" value="{{old('form_b', $widows->form_b)}}">
          
        </div>
        
        <br><br>
        <h2>Address</h2>
        <div class="input-box address">
          <label>Address</label>
          <input type="text" placeholder="Enter street address" name="adress" value="{{old('adress', $widows->adress)}}"/>
          <input type="text" placeholder="Enter street address line 2" value="{{old('name')}}" />
         
        </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>