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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
             
              <table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered" >
                <tr>
                {{-- @php
                    $classname = DB::table('classes')->where('class_id' , $records[0]->class_id )->first();
                @endphp --}}
                  <th>Section</th>
                  <th>{{$students[0]->section}}</th>
                </tr>
          
                <tr>
                  <td>Class</td>
                <td>{{$students[0]->class_name}}</td>
                </tr>
              </table>
          
          
                <table cellpadding="0" cellspacing="0" border="0" class=" table table-bordered" >
 
                  <tr>
                     <th>Student Name</th>
                     <th>Action</th>
                  </tr>
                  @php
                    $a = 1;
                  @endphp
                  
                  <form method='post' action="/attendance/update" accept-charset="UTF-8" class="myForm">
                  {{csrf_field()}}  
                  {{-- @foreach ($records as $re) --}}
                  <input type="hidden" name="date" value="{{$date}}">
                  @foreach($students as $student)
                        
                    <fieldset id="group_Murtuza Mehdi">
                        <tr>
                            <td>
                                <label class="name" name="name[{{$a}}]">{{$student->student_name}}</label>
                                <input type="hidden" value="{{$student->student_id}}" name="student_id[{{$a}}]">
                                <input type="hidden" value="{{$student->class_id}}" name="class_id[{{$a}}]">
                                <input type="hidden" value="{{$student->student_roll_no}}" name="student_roll_no[{{$a}}]">
                            </td>
                            
                            <td>
                                <div class="container">
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio1">
                                            <input type="radio" class="radio_btn form-check-input" name="status[{{$a}}]" value="present" {{ $student->status == 'present' ? 'checked' : '' }}>Present
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label" for="radio2">
                                            <input type="radio" class="radio_btn form-check-input" name="status[{{$a}}]" value="absent" {{ $student->status == 'absent' ? 'checked' : '' }}>Absent
                                        </label>
                                    </div>
                                </div>
                            </td> 
                        </tr>
                    </fieldset>          
                    @php
                          $a++;
                          @endphp
                  @endforeach
                  {{-- @endforeach --}}
                <button type="submit" class="btn btn-theme">Update</button>

                  </form>
                  </table>
             
            </div>
          </div>
          <!-- page end-->
        </div>
        <div class="container">
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <div class="form-panel">
                        <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                        <div class="form-horizontal style-form">
                          @csrf
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Subject</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="subject_id" id="subject_id" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Year</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="year" id="year" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Exam</label>
                            <div class="col-sm-10"> 
                              <select class="form-control" name="exam" id="exam" required>
                                  <option>Mid-Term</option>
                                  <option>Final-Term</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Student</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="student_id" id="student_id" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Marks</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="marks" id="marks" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Obtain_marks</label>
                            <div class="col-sm-10">
                              <input type="text" class="form-control" name="obtain_marks" id="obtain_marks" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-sm-2 col-sm-2 control-label">Promoted</label>
                            <div class="col-sm-10">
                              <select class="form-control" name="exam" id="exam" required>
                                  <option>Yes</option>
                                  <option>No</option>
                                </select>
                            </div>
                          </div>
                          
                          {{-- <button type="submit" class="btn btn-theme">Submit</button> --}}
                        </div>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                
              </div>
            </div>
            
            {{-- Delete modal --}}
            <div class="modal fade" id="delete" role="dialog">
              <div class="modal-dialog">
              
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                  </div>
                  <div class="modal-body">
                    <form action="/deleteemployee" method="post" accept-charset="UTF-8" enctype="multipart/form-data">
                      {{-- {{method_field('delete')}} --}}
                      {{csrf_field()}}
                    <div class="modal-body">
                    <p class="text-center">
                      Are you sure you want to delete this?
                    </p>
                        <input type="hidden" name="emp_idd" id="emp_idd" value="">
            
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">No, Cancel</button>
                      <button type="submit" class="btn btn-warning">Yes, Delete</button>
                    </div>
                  </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
                
              </div>
            </div>
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
<script type="text/javascript">
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
      }
    }); 
    $(document).on('click','.viewBtn',function(){
      var id = $(this).attr('id');
        $.ajax({
        url: 'result/fetchdata/'+ id ,
        method:'GET',
        dataType:'json',
        success:function(data)
        {
            // console.log(data);
          
       
          $('#subject_id ').val(data[0].subject_id ); 
          $('#year').val(data[0].year ); 
          $('#exam').val(data[0].exam); 
          $('#student_id ').val(data[0].student_id ); 
          $('#marks').val(data[0].marks); 
          $('#obtain_marks').val(data[0].obtain_marks);  
          $('#promoted').val(data[0].promoted);  
          // var a = $("#dept_id").val();
          // var dept_id = data[0].dept_id;
          // console.log(a,dept_id);
          // if(a == dept_id){
          //     $("#dept_id").selectedInde();
          // }
          // $('#dept_id').append("<option selected>"+data[0].name+"</option>"); 
          // $('#password').val(data[0].password); 
          
          
        },
        error: function(e) {
          console.log(e);
        }
      });
    });

    $(document).on('click','.deletebtn',function(){
      // var id = ;
      // console.log(id);
      $('#emp_idd').val()=$(this).attr('id');
    });

</script>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
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
  <script type="text/javascript">
    /* Formating function for row details */
    function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
    //   sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
    //   sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="lib/advanced-datatable/images/details_open.png">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[0];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "lib/advanced-datatable/media/images/details_open.png";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "lib/advanced-datatable/images/details_close.png";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
