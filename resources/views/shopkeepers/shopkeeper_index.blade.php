<!DOCTYPE html>  
<html lang="en"> 
<head>

<link rel="stylesheet" href="/shopkeeper/shopkeeper_index.css"/>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>

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
    

    
</head>
<body>

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


 
  <!-------------------------------- start Dropdown ------------------------------------------>
 
  <!-- Centered Search Bar -->
 
  

  
  <!-- Right Dropdown -->

 
<div class="container">
<a href="/shopkeepers/shopkeeper_form" class="btn btn-dark mt-2 " id="add_shops">Add Shopkeeper</a>
<center class="data_search">
<form action="/search" method="GET">
    @csrf
    <input type="text" name="query" placeholder="Search...">
    <button type="submit">Search</button>
</form>
</center> 



 <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Shopkeeper Name</th>
      <th scope="col">Shop Name</th>
      <th scope="col">Shopkeeper contact</th>
      
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    @foreach($shopkeepers as $shopkeeper)
    <tr>
      <td>{{$loop->index}}</td>
      <td>{{$shopkeeper->shopkeeper_name}}</td>
      <td>{{$shopkeeper->shop_name}}</td>
      <td>{{$shopkeeper->shopkeeper_contact}}</td>

      

      <td>
      <a href="/shopkeepers/{{$shopkeeper->id}}/shopkeeper_show" class="btn btn-dark btn-sm">View</a>
        
      <a href="/shopkeepers/{{$shopkeeper->id}}/shopkeeper_edit" class="btn btn-dark btn-sm">Edit</a>

      <form method="post" class="d-inline" action="/shopkeepers/{{$shopkeeper->id}}/delete" id="deleteForm">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger btn-sm" onclick="confirmDelete(event)">Delete</button>
</form>
     

      </td>
    </tr>
    @endforeach
</tbody>
  <tbody>
</tbody>
</table>
<br>


<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
    Download
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <li><button class="dropdown-item" type="button">PDF</button></li>
    <li><button class="dropdown-item" type="button">Word</button></li>
    <li><button class="dropdown-item" type="button">Execl</button></li>
  </ul>
 
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
