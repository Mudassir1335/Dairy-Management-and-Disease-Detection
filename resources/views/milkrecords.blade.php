
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
  img {
  border-radius: 60%;
}
  .brdr{
    
    border: solid 1px;
    margin-left: 5px;

  }
  .brdr:active {
    border: solid black 1px;
}
  .brdr:link {
    border: solid black 1px;
}
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
          <a class="nav-link text-white " href="{{url('animals')}}">
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
          <a class="nav-link text-white active bg-gradient-primary" href="{{url('milkrecords')}}">
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
              <input type="text" id="myinput" class="form-control">
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
              
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

@php
$totalSum = 0;
@endphp
<!-- sum of total -->
@foreach($records as $record)
@php
$totalSum += $record['total'];
@endphp

@endforeach

 
    <div class="text-center">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Add Milk Record
</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cowmilk">
  Calculate Cow Milk
</button>
<button id="clearButton" class="btn btn-primary" style="display: none;">Clear Filters</button>
<h3 id="totalSum"> </h3>
</div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
             
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <div style="
                float: right;
                margin-right: 20px;
            "> <label style="
    color: black;
    font-size: 15px;
    font-weight: bold;
" for="">To: </label>
                <input type="date" id="fromDate">
                <label style="
                color: black;
                font-size: 15px;
                font-weight: bold;
            " for="">From:</label>
                <input type="date" id="toDate">
              </div>
                <h6 class="text-white text-capitalize ps-3">Milk Record</h6>   
              </div>
             
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0" style="
              overflow-y: hidden;
          ">
                <table id="mytable" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cow Code</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Morning</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Evening</th>
                       
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total Milk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Reason</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Edit</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Delete</th>
                    
                    
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>


                  @foreach($records as $record)
                  

                   <tr>
                    
                    <td>
                      <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$record['date']}}</h6>
                          
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">{{$record['cow_code']}}</p>
                     
                    </td>
                    
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$record['morning']}}</span>
                    </td>
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$record['evening']}}</span>
                    </td>
                   
                    <td class="align-middle text-center">
                      <span class="text-secondary text-xs font-weight-bold">{{$record['total']}}</span>
                    </td>
                    <td>
                    <span class="text-secondary text-xs font-weight-bold">{{$record['reason']}}</span>
                   
                     </td>
                    <td> <button type="button" href=""   data-toggle="modal" data-target="#exampleModalLongg{{$record['id']}}" class="btn btn-dark editbtn">Edit</button>
                    
                  </td>


                    <td>
                      <a type="button"  class="btn btn-dark" href={{"deletemilkrecord/" .$record['id']}} OnClick="return confirm('Are You Sure You want to Delete Records')" >Delete</a></td>
                  </tr> 
                   
                  
      <tbody>
      
      <!--  Edit MODEL-->
 <div class="modal fade" id="exampleModalLongg{{$record['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Milk Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="px-4 py-3" action="/editmilkrecord" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" value="{{$record['id']}}" name="id"/> 
      <div class="form-group">
      <label >Date</label>
      <input type="date" name="date" value="{{$record['date']}}" class="form-control"  placeholder="date">
    </div>
    <div class="form-group">
      
      <label for="exampleDropdownFormPassword1">Cow Code</label>
      <input type=""  name="ccode" value="{{$record['cow_code']}}" class="form-control" id="exampleDropdownFormPassword1" placeholder="cow_code">
    </div>
    <div class="form-group">
      
      <label for="exampleDropdownFormq">Morning</label>
      <input type="" name="morning" value="{{$record['morning']}}" class="form-control" id="exampleDropdownFormq" placeholder="Morning">
    </div>
    <div class="form-group">
      
      <label for="exampleDropdownFormC">Evening</label>
      <input type="text" name="evening" value="{{$record['evening']}}" class="form-control" id="exampleDropdownFormC" placeholder="Evening">
    </div>
    
    <div class="form-group">
      
      <label for="exampleDropdownFormdate">Reason</label>
      <input type="text" name="reason" value="{{$record['reason']}}" class="form-control" id="exampleDropdownFormdate" placeholder="reason">
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
 

      @endforeach  
 
</table>
</div>
<div style="text-align: center;">
<button type="button" class="btn btn-primary">Total Milk</button>
<button type="button" class="btn btn-dark">{{$totalSum}}</td>
 
   
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
        <!-- End Toggle Button-->
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
        <h5 class="modal-title" id="exampleModalLongTitle">Add Milk Record</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="px-4 py-3" action="milkrecords" method="POST" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
      <label style="
      color: black;
  ">Date</label>
      <input type="date" name="date" class="form-control brdr"  >
    </div>
    <div class="form-group">
      
      <label style="
      color: black;
  " for="exampleDropdownFormPassword1">Cow Code</label>
      <input type=""  name="ccode" id="ccode"class="form-control brdr" id="exampleDropdownFormPassword1" >
      
    </div>
    <ul id="cowlist" style="
    color: black;
" class="dropdown-menu"></ul>
    <div class="form-group">
      
      <label style="
      color: black;
  " for="exampleDropdownFormq">Morning</label>
      <input type="" name="morning"  class="form-control brdr" id="exampleDropdownFormq" >
    </div>
    <div class="form-group">
      
      <label style="
      color: black;
  " for="exampleDropdownFormC">Evening</label>
      <input type="text" name="evening"  class="form-control brdr" id="exampleDropdownFormC" >
    </div>
    
    <div class="form-group">
      
      <label style="
      color: black;
  " for="exampleDropdownFormdate">Reason</label>
      <input type="text" name="reason"  class="form-control brdr" id="exampleDropdownFormdate" >
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

{{-- Cow milk Calculator --}}


<div class="modal fade" id="cowmilk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Calculate Cow Milk Production</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="px-4 py-3" action="" method="POST" enctype="multipart/form-data" id="cowmilk-form">
          @csrf
          <div class="form-group">
            <label style="color: black;" for="ccode" >Cow Code</label>
            <input type="text" name="ccode" id="milk" class="form-control brdr" id="exampleDropdownFormPassword1">
          </div>
          <ul id="cowlist1" style="
    color: black;
" class="dropdown-menu"></ul>
          <div class="form-group">
            <label style="color: black;">Date-From</label>
            <input type="date" name="from" class="form-control brdr">
          </div>
          <div class="form-group">
            <label style="color: black;">Date-To</label>
            <input type="date" name="to" class="form-control brdr">
          </div><br>
          <div class="form-group">
            {{-- <label style="color: black;" for="totalmilk">Total Milk</label>
            <input type="text" name="totalmilk" class="form-control brdr" id="totalmilk"> --}}
            <h2 style="
            text-align: center;
            color: red;
           
        " id="total-display"></h2>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Calculate</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>



{{-- /Cow milk calculatotr --}}
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
        // AJAX request to check milk record
        $.ajax({
            url: '{{ route("check.milk.record") }}',
            method: 'GET',
            success: function(response) {
                // Check if alerts are needed
                if (response.alerts.length > 0) {
                    var message = response.alerts.join('\n');
                    alert(message);
                }
            },
            error: function() {
                console.log('Error occurred while checking milk record.');
            }
        });
    });
</script>
<script>
  $(document).ready(function(){
   
      $('#ccode').keyup(function(){ 
          var query = $(this).val(); 
          if(query != '')
          {
              var _token = $('input[name="_token"]').val();
              $.ajax({
                  url:"{{ route('autocomplete.fetch') }}",
                  method:"POST",
                  data:{query:query, _token:_token},
                  success:function(data){
                  $('#cowlist').fadeIn();  
                      $('#cowlist').html(data);
                  }
              });
          }
      });
   
      $(document).on('click', 'li', function(){  
          $('#ccode').val($(this).text());  
          $('#cowlist').fadeOut();  
      });  
   
  });
  </script>
  <script>
    $(document).ready(function(){
     
        $('#milk').keyup(function(){ 
            var query = $(this).val(); 
            if(query != '')
            {
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('autocomplete.fetch') }}",
                    method:"POST",
                    data:{query:query, _token:_token},
                    success:function(data){
                    $('#cowlist1').fadeIn();  
                        $('#cowlist1').html(data);
                    }
                });
            }
        });
     
        $(document).on('click', 'li', function(){  
            $('#milk').val($(this).text());  
            $('#cowlist1').fadeOut();  
        });  
     
    });
    </script>
<script>
 $(document).ready(function() {
        $('#cowmilk-form').on('submit', function(e) {
            e.preventDefault();

            // Get form data
            var formData = $(this).serialize();

            // Send an AJAX request to the server
            $.ajax({
                url: "{{ route('get-total-milk') }}",
                type: "POST",
                data: formData,
                dataType: "json",
                success: function(response) {
                    if (response.total_milk !== undefined) {
                        // Update the totalmilk input field
                        $('#totalmilk').val(response.total_milk);

                        // Display the total inside the <h3> element
                          $('#total-display').text(response.total_milk + " KG");
                    } else {
                        // Display error message or perform any other actions
                    }
                },
                error: function(xhr, status, error) {
                    // Display error message or perform any other actions
                }
            });
        });
    });
    </script>
     <script>
      $(document).ready(function() {
        var originalData = $('#mytable tbody').html();
    
        // Handler function for filtering the table and calculating total
        function filterTableByDate() {
          var fromDate = $('#fromDate').val();
          var toDate = $('#toDate').val();
    
          var totalSum = 0;
    
          if (!fromDate && !toDate) {
            $('#mytable tbody').html(originalData);
            $('#clearButton').hide();
            $('#totalSum').hide();
          } else {
            var from = new Date(fromDate);
            var to = new Date(toDate);
    
            $('#mytable tbody tr').hide();
            $('#mytable tbody tr').each(function() {
              var rowDate = new Date($(this).find('td:first').text());
              var rowTotalMilk = parseInt($(this).find('td:nth-child(5)').text(), 10);
    
              if (rowDate >= from && rowDate <= to) {
                $(this).show();
                totalSum += rowTotalMilk;
              }
            });
    
            $('#clearButton').show();
          }
    
          $('#totalSum').text('Total Milk: ' + totalSum+' KG');
        }
    
        // Attach an event listener to the date inputs
        $('#fromDate, #toDate').change(filterTableByDate);
    
        // Attach an event listener to the clear button
        $('#clearButton').click(function() {
          $('#fromDate').val('');
          $('#toDate').val('');
          filterTableByDate();
          location.reload(); // Refresh the page
        });
      });
    </script>
    
    
</body>

</html>
