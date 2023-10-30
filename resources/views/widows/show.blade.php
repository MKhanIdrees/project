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
                                <td>Widow Name :</td>
                                <td><b>{{$widows->widow_name}}</b></td>
                            </tr>
                            <tr>
                                <td>Husband Name :</td>
                                <td><b>{{$widows->husband_name}}</b></td>
                            </tr>
                            
                            <tr>
                                <td>Widow Contact :</td>
                                <td><b>{{$widows->widow_contact}}</b></td>
                            </tr>

                            <tr>
                                <td>Widow Nic :</td>
                                <td><b>{{$widows->widow_nic}}</b></td>
                            </tr>
                            <tr>
                                <td>Husband Nic :</td>
                                <td><b>{{$widows->husband_nic}}</b></td>
                            </tr>
                            <tr>
                                <td>Email :</td>
                                <td><b>{{$widows->email}}</b></td>
                            </tr>
                            <tr>
                                <td>Certificate :</td>
                                <td>
                                <img class="imageToOpen" src="/widows/{{$widows->Certificate}}" alt="Image 1" style="display: none;" width="700px" height="700px;">
                                    <button class="openImageButton">Open Image </button>
                                </td>
                                  </td>

                            </tr>
                            <tr>
                                <td>affidavit :</td>
                                <td>
                                <img class="imageToOpen" src="/widows/{{$widows->affidavit}}" alt="Image 1" style="display: none;" width="700px" height="700px;">
                                    <button class="openImageButton">Open Image </button></td> </td>
                    
                            </tr>
                            <tr>
                                <td>Guardian Name :</td>
                                <td><b>{{$widows->guardian_name}}</b></td>
                            </tr>
                            <tr>
                                <td>Relationship :</td>
                                <td><b>{{$widows->relationship}}</b></td>
                            </tr>
                            <tr>
                                <td>Guardian Contact :</td>
                                <td><b>{{$widows->guardian_contact}}</b></td>
                            </tr>
                            <tr>
                                <td>Kids :</td>
                                <td><b>{{$widows->kids}}</b></td>
                            </tr>
                            <tr>
                                <td>Form B :</td>
              <td>
              <img class="imageToOpen" src="/widows/{{$widows->form_b}}" alt="Image 1" style="display: none;" width="700px" height="700px;">
                                    <button class="openImageButton">Open Image </button></td>
                            </tr>
                            <tr>
                                <td>Adress :</td>
                                <td><b>{{$widows->adress}}</b></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
    var buttonElements = document.querySelectorAll("[class^='openImageButton']");
        var imageElements = document.querySelectorAll("[class^='imageToOpen']");

        buttonElements.forEach(function(button, index) {
            button.addEventListener("click", function() {
                // Toggle the visibility of the corresponding image when a button is clicked
                var imageToToggle = imageElements[index];
                if (imageToToggle.style.display === "none") {
                    imageToToggle.style.display = "block";
                } else {
                    imageToToggle.style.display = "none";
                }
            });
        });
    </script>
  
</body>
    

</html>
