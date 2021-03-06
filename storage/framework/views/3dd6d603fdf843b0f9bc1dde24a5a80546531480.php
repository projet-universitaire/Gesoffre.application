<?php $__env->startSection('title'); ?>
    List sponsors
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
   

  <!-- Font CSS (Via CDN) -->
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">

  <!-- Datatables CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/plugins/datatables/media/css/dataTables.bootstrap.css')); ?>">

  <!-- Datatables Editor Addon CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/plugins/datatables/extensions/Editor/css/dataTables.editor.css')); ?>">

  <!-- Datatables ColReorder Addon CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('vendor/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.min.css')); ?>">

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/skin/default_skin/css/theme.css')); ?>">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_atributes'); ?>
class="datatables-page sb-l-o sb-r-c onload-check" data-spy="scroll" data-target="#nav-spy" data-offset="300" style="min-height: 386px;"
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content_wrapper'); ?>
<section id="content_wrapper">

      
      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="<?php echo e(url('/')); ?>">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="<?php echo e(url('/')); ?>">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="<?php echo e(url('/')); ?>">Home</a>
            </li>
            <li class="crumb-trail">List sponsors</li>
          </ol>
        </div>
       
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout">

        <!-- begin: .tray-left -->
        
        <!-- end: .tray-left -->

        <!-- begin: .tray-center -->
        <div class="tray tray-center" style="height: 630px;padding-top: 10px;">

          <div class="row">
            <div class="col-md-12">
              <!--errors with laravel alert -->
              <?php if(Session::has('save-message')): ?>
              <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <i class="fa fa-check pr10"></i><?php echo e(Session::get('save-message')); ?>

               </div>
              <?php endif; ?>
              <?php if(Session::has('delete-message')): ?>
                <div class="alert alert-danger alert-dismissable">
               <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
               <i class="fa fa-remove pr10"></i><?php echo e(Session::get('delete-message')); ?>

              </div>
              <?php endif; ?> 
              
              <?php if(Session::has('update-message')): ?>
                <div class="alert alert-alert alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                 <i class="fa fa-check pr10"></i><?php echo e(Session::get('update-message')); ?>

                </div>
              <?php endif; ?> 
              <!--end alert with laravel  -->
          
              
            <div class="topbar-left hidden-xs hidden-sm">
               <a href="<?php echo e(url('create-sponsors')); ?>" class="btn btn-default btn-sm fw600 ml10" style="margin-bottom: 10px;">
            <span class="fa fa-plus pr5"></span> Add Sponsor</a>
            </div>
              
                    <!-- end errors with laravel -->
              <div class="panel panel-visible" id="spy1">
                <div class="panel-heading">
                  <div class="panel-title hidden-xs">
                      <span class="glyphicon glyphicon-tasks"></span>List sponsors</div>
                </div>
                <div class="panel-body pn">
                  <div id="datatable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                                <table class="table table-striped table-hover dataTable no-footer" id="datatable" cellspacing="0" width="100%" role="grid" aria-describedby="datatable_info" style="width: 100%;">
                    <thead>
                      <tr role="row">
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 20px;">Id</th>
                          <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column descending" style="width: 160px;" aria-sort="ascending">Label</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 57px;">Website</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 33px;">Login</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 81px;">Password</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 50px;">Status</th>
                          <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 60px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                           foreach ($data as $row){
                    ?>       
                    <tr role="row" class="odd">
                        <td class=""><?php echo $row->id ?> </td>
                        <td class="sorting_1"><?php echo $row->label ?></td>
                        <td><?php echo $row->Website ?></td>
                        <td><?php echo $row->login ?></td>
                        <td><?php echo $row->password ?></td>
                         <td>
                        <?php if($row->status === 'Enable'): ?>
                            <span class="mj_btn btn btn-success">Enable</span>
                            <?php elseif($row->status === 'Disable'): ?>
                             <span class="mj_btn btn btn-danger">Disable</span>
                            <?php else: ?>
                            <span class="mj_btn btn btn-warning">Comming soon</span>
                          <?php endif; ?>
                          </td>
                        
                        </td>
                        
                        <td class="text-right">
                          <div class="btn-group">
                            <button type="button" class="btn btn-info btn-sm fs12 fw500 dropdown-toggle ph10" data-toggle="dropdown" aria-expanded="false">
                              Action
                              <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li>
                                <a href="<?php echo 'editsponsor/'.$row ->id ?>">Edit</a>
                              </li>
                              <li>
                                <a href="<?php echo 'deletesponsor/'.$row ->id ?>" onclick="return confirm('Are you sure you want to delete?')" >Delete</a>
                              </li>      
                            </ul>
                          </div>
                        </td>
                    </tr>
                    <?php } ?>   
                      
                     </tbody>
                         </table></div>
                </div>
              </div>
            </div>

        </div>
        <!-- end: .tray-center -->

      </section>
      <!-- End: Content -->
  <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="<?php echo e(asset('vendor/jquery/jquery-1.11.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery/jquery_ui/jquery-ui.min.js')); ?>"></script>

  <!-- Datatables -->
  <script src="<?php echo e(asset('vendor/plugins/datatables/media/js/jquery.dataTables.js')); ?>"></script>

  <!-- Datatables Tabletools addon -->
  <script src="<?php echo e(asset('vendor/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js')); ?>"></script>

  <!-- Datatables ColReorder addon -->
  <script src="<?php echo e(asset('vendor/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js')); ?>"></script>

  <!-- Datatables Bootstrap Modifications  -->
  <script src="<?php echo e(asset('vendor/plugins/datatables/media/js/dataTables.bootstrap.js')); ?>"></script>

  <!-- Theme Javascript -->
  <script src="<?php echo e(asset('assets/js/utility/utility.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/demo/demo.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  <!-- java script confirmation 
  
  <script src="<?php echo e(asset('assets/jsconfirmation/bootstrap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/jsconfirmation/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/jsconfirmation/bootbox.min.js')); ?>"></script>
   java script confirmation -->
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS  
    Demo.init();

    // Init DataTables
    $('#datatable').dataTable({
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    $('#datatable2').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"lfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    $('#datatable3').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    $('#datatable4').dataTable({
      "aoColumnDefs": [{
        'bSortable': false,
        'aTargets': [-1]
      }],
      "oLanguage": {
        "oPaginate": {
          "sPrevious": "",
          "sNext": ""
        }
      },
      "iDisplayLength": 5,
      "aLengthMenu": [
        [5, 10, 25, 50, -1],
        [5, 10, 25, 50, "All"]
      ],
      "sDom": 'T<"panel-menu dt-panelmenu"lfr><"clearfix">tip',

      "oTableTools": {
        "sSwfPath": "vendor/plugins/datatables/extensions/TableTools/swf/copy_csv_xls_pdf.swf"
      }
    });

    // Multi-Column Filtering
    $('#datatable5 thead th').each(function() {
      var title = $('#datatable5 tfoot th').eq($(this).index()).text();
      $(this).html('<input type="text" class="form-control" placeholder="Search ' + title + '" />');
    });

    // DataTable
    var table5 = $('#datatable5').DataTable({
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "ordering": false
    });

    // Apply the search
    table5.columns().eq(0).each(function(colIdx) {
      $('input', table5.column(colIdx).header()).on('keyup change', function() {
        table5
          .column(colIdx)
          .search(this.value)
          .draw();
      });
    });

    // ABC FILTERING
    var table6 = $('#datatable6').DataTable({
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "ordering": false
    });

    var alphabet = $('<div class="dt-abc-filter"/>').append('<span class="abc-label">Search: </span> ');
    var columnData = table6.column(0).data();
    var bins = bin(columnData);

    $('<span class="active"/>')
      .data('letter', '')
      .data('match-count', columnData.length)
      .html('None')
      .appendTo(alphabet);

    for (var i = 0; i < 26; i++) {
      var letter = String.fromCharCode(65 + i);

      $('<span/>')
        .data('letter', letter)
        .data('match-count', bins[letter] || 0)
        .addClass(!bins[letter] ? 'empty' : '')
        .html(letter)
        .appendTo(alphabet);
    }

    $('#datatable6').parents('.panel').find('.panel-menu').addClass('dark').html(alphabet);

    alphabet.on('click', 'span', function() {
      alphabet.find('.active').removeClass('active');
      $(this).addClass('active');

      _alphabetSearch = $(this).data('letter');
      table6.draw();
    });

    var info = $('<div class="alphabetInfo"></div>')
      .appendTo(alphabet);

    var _alphabetSearch = '';

    $.fn.dataTable.ext.search.push(function(settings, searchData) {
      if (!_alphabetSearch) {
        return true;
      }
      if (searchData[0].charAt(0) === _alphabetSearch) {
        return true;
      }
      return false;
    });

    function bin(data) {
      var letter, bins = {};
      for (var i = 0, ien = data.length; i < ien; i++) {
        letter = data[i].charAt(0).toUpperCase();

        if (bins[letter]) {
          bins[letter]++;
        } else {
          bins[letter] = 1;
        }
      }
      return bins;
    }

    // ROW GROUPING
    var table7 = $('#datatable7').DataTable({
      "columnDefs": [{
        "visible": false,
        "targets": 2
      }],
      "order": [
        [2, 'asc']
      ],
      "sDom": 't<"dt-panelfooter clearfix"ip>',
      "displayLength": 25,
      "drawCallback": function(settings) {
        var api = this.api();
        var rows = api.rows({
          page: 'current'
        }).nodes();
        var last = null;

        api.column(2, {
          page: 'current'
        }).data().each(function(group, i) {
          if (last !== group) {
            $(rows).eq(i).before(
              '<tr class="row-label ' + group.replace(/ /g, '').toLowerCase() + '"><td colspan="5">' + group + '</td></tr>'
            );
            last = group;
          }
        });
      }
    });

    // Order by the grouping
    $('#datatable7 tbody').on('click', 'tr.row-label', function() {
      var currentOrder = table7.order()[0];
      if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
        table7.order([2, 'desc']).draw();
      } else {
        table7.order([2, 'asc']).draw();
      }
    });

    $('#datatable8').DataTable({
      "sDom": 'Rt<"dt-panelfooter clearfix"ip>',
    });


    // COLLAPSIBLE ROWS
    function format ( d ) {
      // `d` is the original data object for the row
      return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
        '<tr>'+
          '<td class="fw600 pr10">Full name:</td>'+
          '<td>'+d.name+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td class="fw600 pr10">Extension:</td>'+
          '<td>'+d.extn+'</td>'+
        '</tr>'+
        '<tr>'+
          '<td class="fw600 pr10">Extra info:</td>'+
          '<td>And any further details here (images etc)...</td>'+
        '</tr>'+
      '</table>';
    }
     
    var table = $('#datatable9').DataTable({
      "sDom": 'Rt<"dt-panelfooter clearfix"ip>',
      "ajax": "vendor/plugins/datatables/examples/data_sources/objects.txt",
      "columns": [
        {
          "className":      'details-control',
          "orderable":      false,
          "data":           null,
          "defaultContent": ''
        },
        { "data": "name" },
        { "data": "position" },
        { "data": "office" },
        { "data": "salary" }
      ],
      "order": [[1, 'asc']]
    });
     
    // Add event listener for opening and closing details
    $('#datatable9 tbody').on('click', 'td.details-control', function () {
      var tr = $(this).closest('tr');
      var row = table.row( tr );

      if ( row.child.isShown() ) {
        // This row is already open - close it
        row.child.hide();
        tr.removeClass('shown');
      }
      else {
        // Open this row
        row.child( format(row.data()) ).show();
        tr.addClass('shown');
      }
    });


    // MISC DATATABLE HELPER FUNCTIONS

    // Add Placeholder text to datatables filter bar
    $('.dataTables_filter input').attr("placeholder", "Enter Terms...");

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>