@extends('layouts.default')
@section('title')
    Edit Categorie
@stop
@section('header')
<!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/skin/default_skin/css/theme.css')}}">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/admin-tools/admin-forms/css/admin-forms.css')}}">

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('assets/img/favicon.ico')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->



@stop

@section('body_atributes')
class="admin-validation-page sb-l-o sb-r-c onload-check" data-spy="scroll" data-target="#nav-spy" data-offset="200" style="min-height: 502px;"
@stop


@section('content_wrapper')
<section id="content_wrapper">

     
      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="dashboard.html">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="index.html">Home</a>
            </li>
            <li class="crumb-trail">Edit Categorie</li>
          </ol>
        </div>
       
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout">

        <!-- begin: .tray-center -->
        <div class="tray tray-center" style="height: 399px;">
 

            <!-- Validation Example -->
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

              <div class="panel heading-border panel-primary">

                <form method="post" action="{{action('CategorieController@update')}}" id="admin-form" novalidate="novalidate">
                    <input type="hidden"  name="_token" value="<?= csrf_token(); ?>">

                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Edit Categorie </span>
                    </div>
                    <!-- .section-divider -->
                    <!--errors with laravel -->
                    <p style="color: red ">{{$errors->first('label')}}</p>
                    
                    <!-- end errors with laravel --> 
                    
                    <div class="section">
                        <label for="label" class="field prepend-icon">
                            <input name="id" id="id" type="hidden" value="<?=$row->id ?>">
                        </label>
                     </div> 
                    <p>label : </p>
                     <div class="section">
                        <label for="label" class="field prepend-icon">
                            <input type="text" name="label" id="label" class="gui-input" value="<?=$row->label ?>" >
                          <label for="label " class="field-icon">
                            <i class="fa fa-laptop"></i>
                          </label>
                        </label>
                     </div>
                     
                    <!-- end section --> 
                  </div>
              <!-- end .form-body section -->
              <div class="panel-footer text-right">
                <button type="submit" class="button btn-primary"> Validate change </button>
                <button type="reset" class="button btn-primary"> Reset </button>
                <a href="{{url('Categorie-list')}}" class="button btn-primary"> Cancel </a>
              </div>
              <!-- end .form-footer section -->
            </form>

          </div>

        </div>
        <!-- end: .admin-form -->

      </section>
      <!-- End: Content -->

    </section>
@stop
@section('script')
<!-- BEGIN: PAGE SCRIPTS -->

  <style>
  /* demo page styles */
  body { min-height: 2300px; }
  
  .content-header b,
  .admin-form .panel.heading-border:before,
  .admin-form .panel .heading-border:before {
    transition: all 0.7s ease;
  }
  /* responsive demo styles */
  @media (max-width: 800px) {
    .admin-form .panel-body { padding: 18px 12px; }
  }
  </style>

  <!-- jQuery -->
  <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

  <!-- jQuery Validate Plugin-->
  <script src="{{asset('assets/admin-tools/admin-forms/js/jquery.validate.min.js')}}"></script>

  <!-- jQuery Validate Addon -->
  <script src="{{asset('assets/admin-tools/admin-forms/js/additional-methods.min.js')}}"></script>

  <!-- Theme Javascript -->
  <script src="{{asset('assets/js/utility/utility.js')}}"></script>
  <script src="{{asset('assets/js/demo/demo.js')}}"></script>
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script type="text/javascript" >
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS     
    Demo.init();

    /* @custom validation method (smartCaptcha) 
    ------------------------------------------------------------------ */

    $.validator.methods.smartCaptcha = function(value, element, param) {
      return value == param
    };

    $("#admin-form").validate({

      /* @validation states + elements 
      ------------------------------------------- */

      errorClass: "state-error",
      validClass: "state-success",
      errorElement: "em",

      /* @validation rules 
      ------------------------------------------ */

      rules: {
        label: {
          required: true
        }       
      },

      /* @validation error messages 
      ---------------------------------------------- */

      messages: {
        label: {
          required: 'Enter Label'
        }

      },

      /* @validation highlighting + error placement  
      ---------------------------------------------------- */

      highlight: function(element, errorClass, validClass) {
        $(element).closest('.field').addClass(errorClass).removeClass(validClass);
      },
      unhighlight: function(element, errorClass, validClass) {
        $(element).closest('.field').removeClass(errorClass).addClass(validClass);
      },
      errorPlacement: function(error, element) {
        if (element.is(":radio") || element.is(":checkbox")) {
          element.closest('.option-group').after(error);
        } else {
          error.insertAfter(element.parent());
        }
      }

    });


    // Cache several DOM elements
    var pageHeader = $('.content-header').find('b');
    var adminForm = $('.admin-form');
    var options = adminForm.find('.option');
    var switches = adminForm.find('.switch');
    var buttons = adminForm.find('.button');
    var Panel = adminForm.find('.panel');

    // Form Skin Switcher
    $('#skin-switcher a').on('click', function() {
      var btnData = $(this).data('form-skin');

      $('#skin-switcher a').removeClass('item-active');
      $(this).addClass('item-active')

      adminForm.each(function(i, e) {
        var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
        var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
        $(e).removeClass(skins).addClass('theme-' + btnData);
        Panel.removeClass(panelSkins).addClass('panel-' + btnData);
        pageHeader.removeClass().addClass('text-' + btnData);
      });

      $(options).each(function(i, e) {
        if ($(e).hasClass('block')) {
          $(e).removeClass().addClass('block mt15 option option-' + btnData);
        } else {
          $(e).removeClass().addClass('option option-' + btnData);
        }
      });

      // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');
      $('body').find('.ui-slider').each(function(i, e) {
        $(e).addClass('slider-primary');
      });

      $(switches).each(function(i, ele) {
        if ($(ele).hasClass('switch-round')) {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
          } else {
            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
          }
        } else {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
          } else {
            $(ele).removeClass().addClass('switch switch-' + btnData);
          }
        }

      });
      buttons.removeClass().addClass('button btn-' + btnData);
    });

    setTimeout(function() {
      adminForm.addClass('theme-primary');
      Panel.addClass('panel-primary');
      pageHeader.addClass('text-primary');

      $(options).each(function(i, e) {
        if ($(e).hasClass('block')) {
          $(e).removeClass().addClass('block mt15 option option-primary');
        } else {
          $(e).removeClass().addClass('option option-primary');
        }
      });

      // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');
      $('body').find('.ui-slider').each(function(i, e) {
        $(e).addClass('slider-primary');
      });

      $(switches).each(function(i, ele) {
        if ($(ele).hasClass('switch-round')) {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
          } else {
            $(ele).removeClass().addClass('switch switch-round switch-primary');
          }
        } else {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-primary');
          } else {
            $(ele).removeClass().addClass('switch switch-primary');
          }
        }
      });
      buttons.removeClass().addClass('button btn-primary');
    }, 800);



  });
  </script>
  <!-- END: PAGE SCRIPTS -->

@stop
