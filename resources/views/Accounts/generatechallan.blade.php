<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> --}}

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
@include('layouts.header')
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    @include('layouts.topNav&Sidebar')
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Advanced Table Example</h3>
        <div class="row">

            <form method="POST" action="/generatechallan">
                @csrf
                <div class="col-lg-6">
                    <select name="classes" class="form-control">
                        <option></option>
                        @foreach ($class as $c)
                        <option value="{{$c->class_id}}">{{$c->class_name}}</option>
                        
                        @endforeach
                    </select>
                    
                </div>
                <div class="col-lg-6">
                    
                    <button type="submit" class="btn btn-success">Search</button>
                </div>
            </form>
        </div>
            <div style="margin-top:5%;margin-bottom:3%;" class="row">
                <div class="col-lg-3 col-sm-6">
                    <input type="date" class="form-control" name="due_date" id="due_date" >
                </div>
                <div class="col-lg-3 col-sm-6">
                    <input type="month" class="form-control" name="fee_month" id="fee_month" >
                </div>
                <div class="col-lg-3 col-sm-6">
                    <input type="hidden" class="form-control" name="fee_id" id="fee_id" value="{{$fees[0]->fee_id}}">
                    <input class="form-control"  id="fee_id" value="{{$fees[0]->amount}}">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <input class="form-control" name="current_ammount" id="current_ammount" value="{{$fees[0]->amount}}">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    
                    <button class="select-check btn btn-success">Genrate Challan</button>
                </div>
            </div>
        
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
                <table id="example" class="display select" cellspacing="0" width="100%">
                    <thead>
                       <tr>
                          <th><input type="checkbox" name="select_all" value="1" id="example-select-all"></th>
                          <th>Student Name</th>
                          <th>Class </th>
                          <th>Admission Date</th>
                          <th>Phone Number</th>
                          <th>Action</th>
                       </tr>
                    </thead>
                    <tbody>
                        @foreach ($student as $students)
                            
                        <tr>
                            <td><input type="checkbox" name="selected-check" value="{{$students->student_id}}" /></td>
                            <td>{{$students->student_name}}</td>
                            <td>{{$students->class_name}}</td>
                            <td>{{$students->student_date_of_admission}}</td>
                            <td>{{$students->student_phone_number}}</td>
                            <td><button type="button" class="btn btn-primary">Generate Challan</button></td>
                        </tr>
                        @endforeach
                    </tbody>
                 </table>
            </div>
          </div>
          <!-- page end-->
        </div>
    
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
        </div>
        <a href="advanced_table.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>


  <!-- js placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="lib/advanced-datatable/js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="lib/advanced-datatable/js/DT_bootstrap.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <!--script for this page-->
  <script>
    $('.select-check').on('click' , function () {
      var due_date = $('#due_date').val();
      var fee_month = $('#fee_month').val();
      var fee_id = $('#fee_id').val();
      var current_ammount = $('#current_ammount').val();
      var id = new Array;
      $("input:checkbox[name=selected-check]:checked").each(function(){
        id.push($(this).val());  
      });
      console.log(id,due_date,fee_month,fee_id,current_ammount);
      $.ajax({
        url: 'generatechallan/bulk',
        method:'POST',
        dataType:'json',
        data : {
          "_token" : "{{ csrf_token() }}",
          "id"    : id,
          "due_date":due_date,
          "fee_month":fee_month,
          "fee_id":fee_id,
          "current_ammount":current_ammount,
        },
        success:function(data){
          location.reload(true);
        },
        error: function(e) {
          console.log(e);
        },
      });

    });
</script>
  <script type="text/javascript">
    /* Formating function for row details */
    $(document).ready(function (){
   var table = $('#example').DataTable({
      'columnDefs': [{
         'targets': 0,
         'searchable': false,
         'orderable': false,
         'className': 'dt-body-center',
      }],
      'order': [[1, 'asc']]
   });

   // Handle click on "Select all" control
   $('#example-select-all').on('click', function(){
      // Get all rows with search applied
      var rows = table.rows({ 'search': 'applied' }).nodes();
      // Check/uncheck checkboxes for all rows in the table
      $('input[type="checkbox"]', rows).prop('checked', this.checked);
   });

   // Handle click on checkbox to set state of "Select all" control
   $('#example tbody').on('change', 'input[type="checkbox"]', function(){
      // If checkbox is not checked
      if(!this.checked){
         var el = $('#example-select-all').get(0);
         // If "Select all" control is checked and has 'indeterminate' property
         if(el && el.checked && ('indeterminate' in el)){
            // Set visual state of "Select all" control
            // as 'indeterminate'
            el.indeterminate = true;
         }
      }
   });


});
  </script>
</body>

</html>
