<!DOCTYPE html>
<html>
<head>
    <title>Cart Items</title>
    <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 
    <link rel="stylesheet" href="/foods/show.css"/>
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
</head>

    
<body style="background-color: #dfe8e3;">
<!----------------------------------------------navbar start--------------------------------------------------->    

@if($message = Session::get('success'))
<div class="alert alert-success alert-block">
<strong>{{$message}}</strong>
@endif
</div>


<div class="grid-container">

<!-- Header -->
<header class="header">
  <div class="menu-icon" onclick="openSidebar()">
    <span class="material-icons-outlined">menu</span>
  </div>
  <div class="header-left">
    <span class="material-icons-outlined">search</span>
  </div>
  <div class="header-right">
    <span class="material-icons-outlined">notifications</span>
    <span class="material-icons-outlined">email</span>
    <span class="material-icons-outlined">account_circle</span>
  </div>
</header>
<!-- End Header -->

<!-- Sidebar -->
<aside id="sidebar">
  <div class="sidebar-title">
    <div class="sidebar-brand">
      <h2>Widows<h2>
    </div>
    <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
  </div>

  <ul class="sidebar-list">
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Dashboard
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Orphans
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Widows
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Shopkepper
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Foods
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Reports
      </a>
    </li>
    <li class="sidebar-list-item">
      <a href="#" target="_blank">
        <span class="material-icons-outlined"></span> Settings
      </a>
    </li>
  </ul>
</aside>

<div class="card_body">

<a href="/foods/create" class="btn btn-dark btn-lm "  id="btn_create"><b>Add Items</b></a>
    @foreach($items as $item)
        <div class="card" style="background-color: #a1c9b3;">
            <table>
                <thead>
                    <tr>
                        <th><h1><b>FOOD LIST</b></b></h1></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                        <h5 class="card-title">ID: {{ $item->id }}</h5>
                            <ul style="font-weight: bold;">
                                @php
                                    $itemList = explode(',', $item->foods_name);
                                @endphp
                                @foreach($itemList as $itemListItem)
                                    <li><b>{{ trim($itemListItem) }}</b></li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/foods/{{$item->id}}/edit" class="btn btn-dark btn-lm">Edit</a>
            <form method="post" class="d-inline" action="/foods/{{$item->id}}/delete" id="deleteForm">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-lm" onclick="confirmDelete(event)">Delete</button>
</form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endforeach


</div>
    
<script>
    function confirmDelete(event) {
        event.preventDefault(); // Prevent the form from submitting immediately

        if (confirm("Are you sure you want to delete this record?")) {
            // If the user confirms, submit the form
            document.getElementById('deleteForm').submit();
        }
    }
</script>

</body>


</html>
