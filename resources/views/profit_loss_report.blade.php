
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
       
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="{{url('report')}}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Report Management</span>
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
              <label class="form-label" >Type here...</label>
              <input type="text" id="myinput" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a class="btn btn-outline-primary btn-sm mb-0 me-3" href="{{ url('detection') }}" target="_blank" >Detect disease</a>
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
            
               
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
   
</div>
<div class="text-center">
  
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#yearlyprofit">
Calculate Yearly Profit
</button>

</div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">

                
                <h6 class="text-white text-capitalize ps-3">P&L Report</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0" style="
              overflow-y: hidden;
          ">
                <table id="mytable" class="table align-items-center mb-0">
                  <thead>
                    <tr>
                   
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-4">Date</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">Total Product Sale</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">Total Milk Sale</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">Total Liters</th>
                 
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">Total Expense</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-0">Profit</th>
                       {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total_income</th>
                       <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">net_profit/Loss</th>
                         <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Delete</th> --}}
                    </tr>
                  </thead>
                  <tbody>
                  
                    @foreach ($profitByMonthAndYear as $data)
                   <tr>
                    
                    <td>
                      <div class="d-flex px-2 py-1">
                       
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{$data['month']}}{{$data['year']}}</h6>
                          
                        </div>
                      </div>
                    </td>
                    <td>
                      <p class="text-xs font-weight-bold mb-0">Rs. {{$data['totalsale']}}/-</p>
                     
                    </td>
                    
                    <td class="align-middle">
                      <span class="text-secondary text-xs font-weight-bold">Rs. {{$data['totalmilk']}}/-</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-secondary text-xs font-weight-bold">{{$data['totalliter']}}</span>
                    </td>
                    <td class="align-middle">
                      <span class="text-secondary text-xs font-weight-bold">Rs. {{$data['totalexpense']}}/-</span>
                    </td>
                    <td class="align-middle ">
                      <span class="text-secondary text-xs font-weight-bold">Rs. {{$data['profit']}}/-</span>
                    </td>
                   
                   
                  </tr> 
                   
                   
                  </tr> 
                   
                  @endforeach        
      <tbody>
       
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

  </div>
</div>
</div>
{{-- yearly profit --}}


<div class="modal fade" id="yearlyprofit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Calculate Year profit</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
         
          <div class="form-group">
            <label style="color: black;">Date-From</label>
            <input type="date" name="from" id="start-date" class="form-control brdr">
          </div>
          <div class="form-group">
            <label style="color: black;">Date-To</label>
            <input type="date" name="to" id="end-date" class="form-control brdr">
          </div><br>
          <div class="form-group">
            {{-- <label style="color: black;" for="totalmilk">Total Milk</label>
            <input type="text" name="totalmilk" class="form-control brdr" id="totalmilk"> --}}
            <h2 style="
            text-align: center;
            color: red;
           
        " id="result"></h2>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" id="calculate-profit" class="btn btn-primary">Calculate</button>
          </div>
       
      </div>
    </div>
  </div>
</div>



{{-- /yearly profit --}}
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
  <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

<script>
 $(document).ready(function() {
  // Handle the button click event
  $('#calculate-profit').click(function() {
    var startDate = $('#start-date').val();
    var endDate = $('#end-date').val();

    if (startDate && endDate) {
      // Set the day of the selected start date to 1
      startDate = startDate.slice(0, 8) + '01';
      // Set the day of the selected end date to 1
      endDate = endDate.slice(0, 8) + '01';

      // Perform an AJAX request to calculate the total profit
      $.ajax({
        url: '/calculate-profit',
        type: 'GET',
        data: {
          startDate: startDate,
          endDate: endDate
        },
        success: function(response) {
          $('#result').text('Total Profit: ' + response);
        },
        error: function() {
          alert('An error occurred while calculating the total profit.');
        }
      });
    } else {
      alert('Please select both start and end dates.');
    }
  });
});


</script>

  
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>
  </div>
</body>

</html>
