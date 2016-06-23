
<?php $__env->startSection('title'); ?>
    Edit Sponsor
<?php $__env->stopSection(); ?>
<?php $__env->startSection('header'); ?>
<!-- Font CSS (Via CDN) -->
  <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>

  <!-- Theme CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/skin/default_skin/css/theme.css')); ?>">

  <!-- Admin Forms CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/admin-tools/admin-forms/css/admin-forms.css')); ?>">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo e(asset('assets/img/favicon.ico')); ?>">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->



<?php $__env->stopSection(); ?>

<?php $__env->startSection('body_atributes'); ?>
class="admin-validation-page sb-l-o sb-r-c onload-check" data-spy="scroll" data-target="#nav-spy" data-offset="200" style="min-height: 502px;"
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content_wrapper'); ?>
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
            <li class="crumb-trail">Edit Sponsor</li>
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

                <form method="post" action="<?php echo e(action('sponsorController@update')); ?>" id="admin-form" novalidate="novalidate">
                    <input type="hidden"  name="_token" value="<?= csrf_token(); ?>">

                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Edit Sponsor </span>
                    </div>
                    <!-- .section-divider -->
                    <!--errors with laravel -->
                    <p style="color: red "><?php echo e($errors->first('label')); ?></p>
                    
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
                      <p>Website URL : </p>
                      <div class="section">
                      <label for="website" class="field prepend-icon">
                        <input type="url" name="Website" id="website" class="gui-input" value="<?=$row->Website ?>" >
                        <label for="website" class="field-icon">
                          <i class="fa fa-globe"></i>
                        </label>
                      </label>
                    </div>
                     <!-- end section -->
                     <p>Login :</p>
                      <div class="section">
                        <label for="Login" class="field prepend-icon">
                          <input type="text" name="login" id="Login" class="gui-input" value="<?=$row->login ?>">
                          <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                
                    <!-- end .section row section -->
                    <p>Password : </p>
                    <div class="section">
                        <label for="password" class="field prepend-icon">
                          <input type="text" name="password" id="password" class="gui-input"value="<?=$row->password ?>" >
                          <label for="password" class="field-icon">
                            <i class="fa fa-unlock-alt"></i>
                          </label>
                        </label>
                    </div>    
                    
                    <!-- end section -->

                    <p>label : </p>
                    <div class="section">
                      <label class="field select">
                        <select id="language" name="status" value="<?=$row->status ?>">
                       

                          <option value="">Select Status...</option>
                          <option value="Enable">Enable</option>
                          <option value="Disable">Disable</option>
                          <option value="Coming Soon">Coming Soon</option>
                         
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end section --> 
                  </div>
              <!-- end .form-body section -->
              <div class="panel-footer text-right">
                <button type="submit" class="button btn-primary"> Validate change </button>
                <button type="reset" class="button btn-primary"> Cancel </button>
              </div>
              <!-- end .form-footer section -->
            </form>

          </div>

        </div>
        <!-- end: .admin-form -->

      </section>
      <!-- End: Content -->

    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
  <script src="<?php echo e(asset('vendor/jquery/jquery-1.11.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/jquery/jquery_ui/jquery-ui.min.js')); ?>"></script>

  <!-- jQuery Validate Plugin-->
  <script src="<?php echo e(asset('assets/admin-tools/admin-forms/js/jquery.validate.min.js')); ?>"></script>

  <!-- jQuery Validate Addon -->
  <script src="<?php echo e(asset('assets/admin-tools/admin-forms/js/additional-methods.min.js')); ?>"></script>

  <!-- Theme Javascript -->
  <script src="<?php echo e(asset('assets/js/utility/utility.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/demo/demo.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
  <script type="text/javascript" >
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core    
    Core.init();

    // Init Demo JS     
    Demo.init();

    /* @custom  validation method (smartCaptcha) 
    ------------------------------------------------------------------ */

    $.validator.methods.smartCaptcha = function(value, element, param) {
      return value == param
    };

    $("#admin-form").validate({

      /* @validation  states + elements 
      ------------------------------------------- */

      errorClass: "state-error",
      validClass: "state-success",
      errorElement: "em",

      /* @validation  rules 
      ------------------------------------------ */

      rules: {
        label: {
          required: true
        },
        login: {
          required: true
        },
        useremail: {
          required: true,
          email: true
        },
        Website: {
          required: true,
          url: true
        },
        status: {
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
          required: true
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

      /* @validation  error messages 
      ---------------------------------------------- */

      messages: {
        label: {
          required: 'Enter Label'
        },
        login: {
          required: 'Enter Login'
        },
        useremail: {
          required: 'Enter password'
          
        },
        Website: {
          required: 'Enter  website URL',
          url: 'URL should start with - http://www'
        },
        status: {
          required: 'Choose a Status'
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
          required: 'Please enter the password'
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

      /* @validation  highlighting + error placement  
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>