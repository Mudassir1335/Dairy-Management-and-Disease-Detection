
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
   Dashboard Dairy Managment System
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />
<style>
  .brdr{
    
    border: solid 1px;
    margin-left: 5px;

  }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>

<script>
 $(document).ready(function(){
  $("#myinput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#mytable tbody tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });

    // show the table header row only if there are visible rows in the tbody
    if ($("#mytable tbody tr:visible").length > 0) {
      $("#mytable thead").show();
      $("#message").hide();
    } else {
      $("#mytable thead").hide();
      $("#message").text("No results found.").show();
    }

    // move the first visible row to the top of the table
    $("#mytable tbody tr:first-child").before($("#mytable tbody tr:visible:first"));
  });
});






  </script>





  
</head>

<body class="g-sidenav-show  bg-gray-200">
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0"  target="_blank">
        <img src="../assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Dairy Managment</span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('dashboard')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="{{url('products')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Products</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{url('animals')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Animal Records</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('category')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
            </div>
            <span class="nav-link-text ms-1">Category</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('milkrecords')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
            </div>
            <span class="nav-link-text ms-1">Manage Milk</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('showsale')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">notifications</i>
            </div>
            <span class="nav-link-text ms-1">Manage Sales</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white  " href="{{url('expenses')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Manage Expense</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('employees')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage Employess</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="{{url('admins')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">Manage Admins</span>
          </a>
        </li>
       
      </ul>
    </div>
    
  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Tables</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input id="myinput" type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" target="_blank" >Detect disease</a>
            </li>
            <li class="nav-item d-flex align-items-center">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-body font-weight-bold px-0">
                  <i class="fa fa-user me-sm-1"></i>
                  <span class="d-sm-inline d-none">Logout</span>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </a>
            </li>
            
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                <li class="mb-2">
                  <h4 style="
                  text-align: center;
                  color:red;
              ">Cows Expected Delivery Date</h4>
                  <a class="dropdown-item border-radius-md" href="javascript:;">
                    <div class="d-flex py-1">
                      {{-- <div class="my-auto">
                        <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                      </div> --}}
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="text-sm font-weight-normal mb-0">
                          <span class="font-weight-bold">  <div id="alert"></div>
                          </span> 
                        </h6>
                        {{-- <p class="text-xs text-secondary mb-0">
                          <i class="fa fa-clock me-1"></i>
                          13 minutes ago
                        </p> --}}
                      </div>
                    </div>
                  </a>
                </li>
                
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
  
    <div class="text-center">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
        Add Animal
      </button>
</div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Animals Table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0" style="
              overflow-y: hidden;
          ">
                <table id="mytable" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Animal Code</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Breed</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sex</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Weight(KG)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Avg Milk(kilo)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Calf</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Age(years)</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Milking Status</th>
                        
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Calf</th>
                        
                        {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Calf Sex</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total Calf</th> --}}
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Purchase Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Expected Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Death Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Sale Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Calving</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Disease History</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Delete</th>
                    
                    
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody >


                 @foreach($animal as $animal) 
                  

                   <tr>
                    
                     <td>
                      <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$animal['cow_code']}}</h6>
                          
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$animal['breed']}}</p>
                     
                    </td>
                    
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$animal['sex']}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$animal['weight']}} Kilo</span>
                    </td>
                   
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$animal['avg_milk']}} Kilo</span>
                    </td>
                    <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['with_calf']}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['age']}} Years</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">Rs.{{$animal['purchase_price']}}/-</span>
                      </td>
                     
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['milking_status']}}</span>
                      </td>
                      {{-- <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['disease_history']}}</span>
                      </td> --}}
                     
                     
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['total_calf']}}</span>
                      </td>
                      {{-- <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['calving_history']}}</span>
                      </td> --}}
                     
                      
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['purchase_date']}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['expected_delivery_date']}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['death_date']}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$animal['sale_date']}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModa{{$animal['id']}}">
                          Calving
                        </button>
                      </td>
                      <td class="align-middle text-center">
                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal{{$animal['id']}}">
                          Disease History
                        </button>
                      </td>
                    <td> <button type="button" href=""   data-toggle="modal" data-target="#exampleModalLongg{{$animal['id']}}" class="btn btn-dark editbtn">Edit</button>
                    
                  </td>
                    <td>
                      <a type="button"  class="btn btn-dark" href={{"deleteanimal/" .$animal['id']}} OnClick="return confirm('Are You Sure You want to Delete Animal')" >Delete</a></td>
                  </tr> 
                    
                </tbody>
                <div id="message"></div>
         {{-- Disease modal --}}
                      <!-- Modal -->
<div class="modal fade" id="exampleModal{{$animal['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Disease History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        {!! $animal['disease_history'] !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
                      {{-- /modal --}}
                      {{-- Calving modal --}}
                      <!-- Modal -->
<div class="modal fade" id="exampleModa{{$animal['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Calving History</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        {!! $animal['calving_history'] !!}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
      </div>
    </div>
  </div>
</div>
                      {{-- /modal --}}
        <!-- Edit MODEL -->
        <div class="modal fade" id="exampleModalLongg{{$animal['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Animal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <form class="px-4 py-3" action="{{ url('update-animal/'.$animal->id) }}" method="POST">
                @csrf
              <div class="form-group">
              <label style="color: black;">Animal Code</label>
              <input type="text" name="animal_code" class="form-control brdr" value="{{$animal['cow_code']}}"  >
            </div>
            <div class="form-group">
              
              <label style="color: black;" for="exampleDropdownFormPassword1">Breed</label>
              <input type=""  name="breed" class="form-control brdr" value="{{$animal['breed']}}" id="exampleDropdownFormPassword1" >
            </div>
           
            <div class="form-group">
               <label style=" color: black;" for="exampleDropdownFormC">Weight (KG)</label>
              <input type="text" name="weight"  class="form-control brdr" value="{{$animal['weight']}}" id="exampleDropdownFormC" >
            </div>
            <div class="form-group">
              <label style=" color: black;" for="exampleDropdownFormC">Avg Milk (KG)</label>
             <input type="text" name="avg_milk" value="{{$animal['avg_milk']}}" class="form-control brdr" id="exampleDropdownFormC" >
           </div>
           
         <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Age (years)</label>
         <input type="text" name="age"  class="form-control brdr" value="{{$animal['age']}}" id="exampleDropdownFormC" >
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Price RS.</label>
         <input type="text" name="price"  class="form-control brdr" value="{{$animal['purchase_price']}}" id="exampleDropdownFormC" >
        </div><br>
        
        
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Total Calf</label>
         <input type="text" name="total_calf"  class="form-control brdr" value="{{$animal['total_calf']}}" id="exampleDropdownFormC" >
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Purchase Date</label>
         <input type="date" name="purchase_date"  class="form-control brdr" value="{{$animal['purchase_date']}}" id="exampleDropdownFormC" >
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Expected Date</label>
         <input type="date" name="expected_date"  class="form-control brdr" value="{{$animal['expected_delivery_date']}}" id="exampleDropdownFormC" >
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Sale Date</label>
         <input type="date" name="sale_date"  class="form-control brdr" value="{{$animal['sale_date']}}" id="exampleDropdownFormC" >
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Death Date</label>
         <input type="date" name="death_date"  class="form-control brdr" value="{{$animal['death_date']}}" id="exampleDropdownFormC" >
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Calving</label>
         {{-- <input type="text" name="calving"  class="form-control brdr" id="exampleDropdownFormC" > --}}
         <textarea name="calving" id="calvingg{{$animal['id']}}" cols="50" rows="6">{{$animal['calving_history']}}</textarea>
        
        </div>
        <script>
          ClassicEditor
                  .create( document.querySelector( '#calvingg{{$animal['id']}}' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
        </script>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Disease History</label>
         {{-- <input type="text" name="disease_history"  class="form-control brdr" id="exampleDropdownFormC" > --}}
         <textarea name="disease_history" id="disease_historyy{{$animal['id']}}" cols="50" rows="6">{{$animal['disease_history']}}</textarea>
        
        </div><br>
        <script>
          ClassicEditor
                  .create( document.querySelector( '#disease_historyy{{$animal['id']}}' ) )
                  .then( editor => {
                          console.log( editor );
                  } )
                  .catch( error => {
                          console.error( error );
                  } );
        </script>
        <div class="form-group">
              
          <label style=" color: black; " for="exampleDropdownFormq">Sex</label>
         
          <select  name="sex">
            <option class="dropdown-item" value="{{$animal['sex']}}">{{$animal['sex']}}</option>
            <option class="dropdown-item" value="Male">Male</option>
            <option class="dropdown-item" value="Female">Female</option>
          </select>
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Calf</label>
          <select  name="calf">
            <option class="dropdown-item" value="{{$animal['with_calf']}}">{{$animal['with_calf']}}</option>
            <option class="dropdown-item" value="YES">YES</option>
            <option class="dropdown-item" value="NO">NO</option>
          </select>
        </div>
        <div class="form-group">
          <label style=" color: black;" for="exampleDropdownFormC">Milking Status</label>
          <select  name="milking_status">
            <option class="dropdown-item" value="{{$animal['milking_Status']}}">{{$animal['milking_status']}}</option>
            <option class="dropdown-item" value="YES">YES</option>
            <option class="dropdown-item" value="NO">NO</option>
          </select>
        </div>
        
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </form>
            </div>
          </div>
        </div>
        </div>
        
 <!-- end edit model -->

 
   @endforeach   
   
</table>
</div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0"> UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        
        </div>
      </div>
    </div>
  </div>



  
		
		
		
<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Add Animal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="px-4 py-3" action="addanimals" method="POST">
        @csrf
      <div class="form-group">
      <label style="color: black;">Animal Code</label>
      <input type="text" name="animal_code" class="form-control brdr"  >
    </div>
    <div class="form-group">
      
      <label style="color: black;" for="exampleDropdownFormPassword1">Breed</label>
      <input type=""  name="breed" class="form-control brdr" id="exampleDropdownFormPassword1" >
    </div>
   
    <div class="form-group">
       <label style=" color: black;" for="exampleDropdownFormC">Weight (KG)</label>
      <input type="text" name="weight"  class="form-control brdr" id="exampleDropdownFormC" >
    </div>
    <div class="form-group">
      <label style=" color: black;" for="exampleDropdownFormC">Avg Milk (KG)</label>
     <input type="text" name="avg_milk"  class="form-control brdr" id="exampleDropdownFormC" >
   </div>
   
 <div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Age (years)</label>
 <input type="text" name="age"  class="form-control brdr" id="exampleDropdownFormC" >
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Price RS.</label>
 <input type="text" name="price"  class="form-control brdr" id="exampleDropdownFormC" >
</div><br>


<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Total Calf</label>
 <input type="text" name="total_calf"  class="form-control brdr" id="exampleDropdownFormC" >
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Purchase Date</label>
 <input type="date" name="purchase_date"  class="form-control brdr" id="exampleDropdownFormC" >
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Expected Delivery Date</label>
 <input type="date" name="expected_date"  class="form-control brdr" id="exampleDropdownFormC" >
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Sale Date</label>
 <input type="date" name="sale_date"  class="form-control brdr" id="exampleDropdownFormC" >
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Death Date</label>
 <input type="date" name="death_date"  class="form-control brdr" id="exampleDropdownFormC" >
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Calving</label>
 {{-- <input type="text" name="calving"  class="form-control brdr" id="exampleDropdownFormC" > --}}
 <textarea name="calving" id="calving" cols="50" rows="6"></textarea>
 
<script>
  ClassicEditor
          .create( document.querySelector( '#calving' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Disease History</label>
 {{-- <input type="text" name="disease_history"  class="form-control brdr" id="exampleDropdownFormC" > --}}
 <textarea name="disease_history" id="disease_history" cols="50" rows="6"></textarea>
 <script>
  ClassicEditor
          .create( document.querySelector( '#disease_history' ) )
          .then( editor => {
                  console.log( editor );
          } )
          .catch( error => {
                  console.error( error );
          } );
</script>
</div><br>
<div class="form-group">
      
  <label style=" color: black; " for="exampleDropdownFormq">Sex</label>
 
  <select  name="sex">
    <option class="dropdown-item" value="Male">Male</option>
    <option class="dropdown-item" value="Female">Female</option>
  </select>
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Calf</label>
  <select  name="calf">
    <option class="dropdown-item" value="YES">YES</option>
    <option class="dropdown-item" value="NO">NO</option>
  </select>
</div>
<div class="form-group">
  <label style=" color: black;" for="exampleDropdownFormC">Milking Status</label>
  <select  name="milking_status">
    <option class="dropdown-item" value="YES">YES</option>
    <option class="dropdown-item" value="NO">NO</option>
  </select>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    


    
 
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

  </script>
  
  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

<script>
  $(document).ready(function() {
      $.ajax({
          url: '/get-all-animal-delivery-dates',
          type: 'GET',
          dataType: 'json',
          success: function(data) {
              // Process the JSON data and check if any delivery dates are within 7 days
              var deliveryDates = data.delivery_dates;
              var now = new Date();
              var count = 0;
              var message = "";
              deliveryDates.forEach(function(deliveryDate) {
                  if (!deliveryDate.date) {
                      return; // Skip this animal if delivery date is null or undefined
                  }
                  var date = new Date(deliveryDate.date);
                  var cowName = deliveryDate.cow_code;
                  var diff = date.getTime() - now.getTime();
                  var days = Math.ceil(diff / (1000 * 3600 * 24));
                  if (days <= 7) {
                      count++;
                      message += count + ". ( " + cowName + " ) delivery date is coming up in " + days + " days!\n";
                      $('#alert').append(count+".  ( " + cowName + " ) delivery date is coming up in " + days + " days!<br>");
                  }
              });
              if (count > 0) {
                  alert(message);
              }
          } 
      });
  });
</script>

</body>

</html>
