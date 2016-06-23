@extends('layouts.default')
@section('title')
    Offer Create
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
class="admin-validation-page" data-spy="scroll" data-target="#nav-spy" data-offset="200"
@stop


@section('content_wrapper')
<!-- Start: Content-Wrapper -->

<h1>hello</h1>


        <!-- Begin: Content -->
      




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
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS     
    Demo.init();

    /* @custom validation method (smartCaptcha) 
    ------------------------------------------------------------------ */

    $.validator.methods.smartCaptcha = function(value, element, param) {
      return value == param;
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
        firstname: {
          required: true
        },
        lastname: {
          required: true
        },
        useremail: {
          required: true,
          email: true
        },
        website: {
          required: true,
          url: true
        },
        language: {
          required: true
        },
        upload1: {
          required: true,
          extension: "jpg|png|gif|jpeg|doc|docx|pdf|xls|rar|zip"
        },
        mobileos: {
          required: true
        },
        comment: {
          required: true,
          minlength: 30
        },
        mobile_phone: {
          require_from_group: [1, ".phone-group"]
        },
        home_phone: {
          require_from_group: [1, ".phone-group"]
        },
        password: {
          required: true,
          minlength: 6,
          maxlength: 16
        },
        repeatPassword: {
          required: true,
          minlength: 6,
          maxlength: 16,
          equalTo: '#password'
        },
        gender: {
          required: true
        },
        languages: {
          required: true
        },
        verification: {
          required: true,
          smartCaptcha: 19
        },
        applicant_age: {
          required: true,
          min: 16
        },
        licence_no: {
          required: function(element) {
            return $("#applicant_age").val() > 19;
          }
        },
        child_name: {
          required: "#parents:checked"
        }

      },

      /* @validation error messages 
      ---------------------------------------------- */

      messages: {
        firstname: {
          required: 'Enter first name'
        },
        lastname: {
          required: 'Enter last name'
        },
        useremail: {
          required: 'Enter email address',
          email: 'Enter a VALID email address'
        },
        website: {
          required: 'Enter your website URL',
          url: 'URL should start with - http://www'
        },
        language: {
          required: 'Choose a language'
        },
        upload1: {
          required: 'Please browse a file',
          extension: 'File format not supported'
        },
        mobileos: {
          required: 'Please select a mobile platform'
        },
        comment: {
          required: 'Oops you forgot to comment',
          minlength: 'Enter at least 30 characters or more'
        },
        mobile_phone: {
          require_from_group: 'Fill at least a mobile contact'
        },
        home_phone: {
          require_from_group: 'Fill at least a home contact'
        },
        password: {
          required: 'Please enter a password'
        },
        repeatPassword: {
          required: 'Please repeat the above password',
          equalTo: 'Password mismatch detected'
        },
        gender: {
          required: 'Please choose specie'
        },
        languages: {
          required: 'Select laguages spoken'
        },
        verification: {
          required: 'Please enter verification code',
          smartCaptcha: 'Oops - enter a correct verification code'
        },
        applicant_age: {
          required: 'Enter applicant age',
          min: 'Must be 16 years and above'
        },
        licence_no: {
          required: 'Enter licence number'
        },
        child_name: {
          required: 'Please enter your childs name'
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
