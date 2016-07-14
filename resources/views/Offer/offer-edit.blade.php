@extends('layouts.default')
@section('title')
    Offer edit
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

<section id="content_wrapper">

      <!-- Start: Topbar-Dropdown -->
      
      <!-- End: Topbar-Dropdown -->

      <!-- Start: Topbar -->
      <header id="topbar" class="alt">
        <div class="topbar-left">
          <ol class="breadcrumb">
            <li class="crumb-active">
              <a href="{{url('/')}}">Dashboard</a>
            </li>
            <li class="crumb-icon">
              <a href="dashboard.html">
                <span class="glyphicon glyphicon-home"></span>
              </a>
            </li>
            <li class="crumb-link">
              <a href="{{url('/')}}">Home</a>
            </li>
            <li class="crumb-trail">Edit Offer</li>
          </ol>
        </div>
        
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout">

        <!-- begin: .tray-center -->
        <div class="tray tray-center" style="height: 629px;">

            <!-- Begin: Content Header -->

            <!-- Validation Example -->
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

              <div class="panel heading-border panel-primary">

                <form method="post" action="{{action('OfferController@save')}}" id="admin-form" enctype="multipart/form-data">
                   <input type="hidden"  name="_token" value="<?= csrf_token(); ?>">
                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Offer information </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row" id="spy1">
                        
                      <div class="col-md-6">
                          <p>Type :</p>
                       <div class="section">
                        <label class="field select">
                        <select id="type" name="type">
                         <option value="Email" @if($row->type === 'Email') selected="selected"@endif>Email</option>
                         <option value="Landing Page" @if($row->type === 'Landing Page') selected="selected"@endif>Landing Page</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                      </div>
                      </div>
                        
                      <div class="col-md-6">
                      <p>Offer Name :</p>
                      <div class="section">
                        <label for="firstname" class="field prepend-icon">
                            <input type="text" name="label" id="label" class="gui-input" value='{{$row->label}}'>
                          <label for="firstname" class="field-icon">
                            <i class="fa fa-pencil-square-o"></i>
                          </label>
                        </label>
                      </div>
                      </div>
                       
                      <!-- end section -->
                      <div class="col-md-6">
                      <div class="section">
                      <p>Select Sponsor :</p>
                        <label class="field select">
                        <select id="sponsor" name="sponsor">
                         @foreach ($sponsors as $sponsor)  
                          <option value="{{$sponsor->id}}" @if($row->sponsor_id == $sponsor->id ) selected="selected"@endif> {{$sponsor->label }} </option>
                         @endforeach
                        </select>
                        <i class="arrow double"></i>
                      </label> 
                      </div>
                      </div>
                      <!-- end section -->
                    
                      <div class="col-md-6">
                      <div class="section">
                      <p>Sponsor offer Id :</p>
                        <label for="lastname" class="field prepend-icon">
                            <input type="text" name="sponsoroffer" id="sponsoroffer" class="gui-input" value="${{$row->SponsorOfferId}}" >
                          <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      </div>
                      <!-- end section -->
                     <div class="col-md-6">
                     <div class="section"> 
                         <p>Select Categorie</p>
                        <label class="field select">
                        <select id="Categorie" name="Categorie">
                          @foreach ($categorie as $category)  
                          <option value="{{$category->id}}" @if($row->category_id == $category->id ) selected="selected"@endif>{{$category->label}} </option>
                         @endforeach
                        </select>
                        <i class="arrow double"></i>
                      </label> 
                      </div>
                      </div>
                      
                      <!-- end section -->
                      <div class="col-md-6">
                      <div class="section">
                          <p>Select Country :</p>
                        <label class="field select">
                        <select id="Country" name="Country">
                          <option value="US"@if($row->country === 'US') selected="selected"@endif>US</option>
                          <option value="UK"@if($row->country === 'UK') selected="selected"@endif>UK</option>
                          <option value="CA"@if($row->country === 'CA') selected="selected"@endif>CA</option>
                          <option value="AU"@if($row->country === 'AU') selected="selected"@endif>AU</option>
                        </select>
                        <i class="arrow double"></i>
                      </label> 
                      </div>
                      </div>   
                      <!-- end section -->
                      <div class="col-md-6">
                      <div class="section">
                           <p>Select Status :</p>
                        <label class="field select">
                        <select id="Status" name="Status">
                          <option value="1"@if($row->status === 1) selected="selected"@endif>Active</option>
                          <option value="2"@if($row->status === 2) selected="selected"@endif>Inactive</option>
                          <option value="3"@if($row->status === 3) selected="selected"@endif>Coming soon</option>
                        </select>
                        <i class="arrow double"></i>
                      </label> 
                      </div>
                      </div>
                      <!-- end section -->
                      <div class="col-md-6">
                      <div class="section">
                          <p>Payout : </p>
                        <label for="lastname" class="field prepend-icon">
                            <input type="text" name="payout" id="payout" class="gui-input" value="{{$row->payout}}">
                          <label for="lastname" class="field-icon">
                            <i class="fa fa-money"></i>
                          </label>
                        </label>
                      </div>
                      </div>
                      <!--end section-->
                       <div class="col-md-6">
                      <div class="section">
                          <p>Select Payment Method :</p>
                        <label class="field select">
                        <select id="paymentmethode" name="paymentmethode">
                          <option value="CPC: Cost Per Clic" @if($row->payouttype === 'CPC: Cost Per Clic') selected="selected"@endif>CPC: Cost Per Clic</option>
                          <option value="CPL: Cost Per Lead"@if($row->payouttype === 'CPL: Cost Per Lead') selected="selected"@endif>CPL: Cost Per Lead</option>
                          <option value="CPS: Cost Per Sale"@if($row->payouttype ==='CPS: Cost Per Sale') selected="selected"@endif>CPS: Cost Per Sale</option>
                          <option value="CPA: Cost Per Action"@if($row->payouttype === 'CPA: Cost Per Action') selected="selected"@endif>CPA: Cost Per Action</option>
                        </select>
                        <i class="arrow double"></i>
                      </label> 
                      </div>
                      </div>
                      <!--end section-->
                    
                    <!--end rows-->
                    </div> 
                    <!--end rows-->
                    <!-- end .section row section -->
                    <div class="section-divider mt20 mb40">
                      <span> Forms and Subjects </span>
                    </div>
                    <!--forms-->
                    <p>Your forms :</p>
                    <div class="section" id="spy3">
                      <label for="comment" class="field prepend-icon">
                        <textarea class="gui-textarea" id="forms" name="forms" >{{$row->forms}}</textarea>
                        <label for="comment" class="field-icon">
                          <i class="fa fa-tasks"></i>
                        </label>
                        <span class="input-footer">
                          <strong>Forms:</strong> Paste your forms..
                        </span>
                      </label>
                    </div>
                    <!--end forms-->
                    <!--Subjects-->
                     <p>Your Subjects :</p>
                    <div class="section" id="spy3">
                      <label for="comment" class="field prepend-icon">
                        <textarea class="gui-textarea" id="subjects" name="subjects" >{{$row->subjects}}</textarea>
                        <label for="comment" class="field-icon">
                          <i class="fa fa-tasks"></i>
                        </label>
                        <span class="input-footer">
                          <strong>subjects:</strong> Paste your subjects..
                        </span>
                      </label>
                    </div>
                    <!--end subjects-->
                    <div class="section-divider mt20 mb40">
                      <span> Redirections links </span>
                    </div>
                    
                   
                    <!-- end section -->
                    <p>Opt-In..</p>
                    <div class="section">
                      <label for="website" class="field prepend-icon">
                          <input type="url" name="OptIn" id="OptIn" class="gui-input"  value="{{$row->optIn}}">
                        <label for="website" class="field-icon">
                          <i class="fa fa-globe"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->
                    <p>Opt-Out..</p>
                    <div class="section">
                      <label for="useremail" class="field prepend-icon">
                          <input type="url" name="OptOut" id="OptOut" class="gui-input" value="{{$row->opOut}}">
                        <label for="useremail" class="field-icon">
                          <i class="fa fa-external-link"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->
                    <!-- SuppreFile -->
                    <div class="section">
                      <div class="option-group field">
                        <label class="block mt15 option option-primary">
                          <input type="checkbox" name="Suppfile" id="Suppfile" value="yes">
                          <span class="checkbox"></span> Has Suppression file ?
                        </label>
                      </div>
                     </div>
                    <!--End SuppreFile-->
                  
             <?php $i=0;  ?>        
   @if ($creative->count()== 0) 
                   
                   <div class="section-divider mt20 mb40">
                      <span> Creatives </span>
                    </div>
                     <!--offer name -->
                    <div class="input_fields_wrap">
                     
                     <!-- end  rows  -->
                     <!-- traitement more cretives -->
                    </div>
                      
                    <div align='center'><button type="button" class="btn btn-sm btn-primary btn-block add_field_button">Add Creatives</button></div>
                   @else 
                   
                      <div class="section-divider mt20 mb40">
                      <span> Creatives </span>
                    </div>
                     <!--offer name -->
                    <div class="input_fields_wrap">   
        @foreach($creative as $creatives) <!--start boucle for disaplay more creative fo this offer-->
         
                   
                
                          
                    <p>Creative Name : </p>          
                    <div class="section">
                        <label for="firstname" class="field prepend-icon">
                            <input type="text" name="Creative[]" id="Creative{{$i}}" class="gui-input" value="{{$creatives->label}}">
                          <label for="firstname" class="field-icon">
                            <i class="fa fa-star-half-empty"></i>
                          </label>
                        </label>
                      </div>
                     
                    <!--end offer name -->
                 
                    <!-- end section -->
             <div class="section row" id="spy1"> 
                 
                <div class="col-md-6">
                    <!-- image javascript  -->
                    
                                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb20">
                                                <img id="previewopt-In{{$i}}"  alt="100%x140" src="{{asset('assets/img/cr/'.$creatives->srcIn) }}" style="height: 170px; width: 100%; display: block;">
                                            </div>
                                        </div>
                                
                     <!-- end image javascript  -->
                </div>  
                 
                <div class="col-md-6">
                    <!-- image javascript  -->
                  
                                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb20">
                                                <img id="previewopt-Out{{$i}}"  alt="100%x140" src="{{ asset('assets/img/cr/'.$creatives->srcOut) }}" style="height: 170px; width: 100%; display: block;">
                                            </div>
                                        </div>
                         
                     <!-- end image javascript  -->
                </div>
                 
                   
                <div class="col-md-6">
                    <div class="section" id="spy2">
                      <label for="file1" class="field file">
                        <span class="button btn-primary"> Change image </span>
                        <input type="file" class="gui-file" name="optinfile[]" id="optinfile{{$i}}" onchange="document.getElementById('uploader{{$i}}').value = this.value;">
                        <input type="text" class="gui-input" id="uploader{{$i}}"  value="{{$creatives->srcIn}}" readonly="">
                      </label>
                    </div>
                </div>      
                    <!-- end  section -->
                    <!-- end section -->
                   
                <div class="col-md-6">       
                    <div class="section" id="spy2">
                      <label for="file1" class="field file">
                        <span class="button btn-primary"> Change image</span>
                        <input type="file" class="gui-file" name="optoutfile[]" id="optoutfile" value="{{$creatives->srcOut}}" onchange="document.getElementById('uploader1-2{{$i}}').value = this.value;">
                        <input type="text" class="gui-input" id="uploader1-2{{$i}}" value="{{$creatives->srcOut}}" readonly="">
                      </label>
                    </div>
                </div>
                        
                    
                    <!-- end  section  -->
                 
                 
           
                    </div>
                     <!-- end  rows  -->
                     <!-- traitement more cretives -->
                    
                 
                     
               <?php $i++; ?>       
                     
         @endforeach
          </div>
         <div class=""></div>
          <div align='center'><button type="button" class="btn btn-sm btn-primary btn-block add_field_button">Add More Creatives</button></div> 
         @endif
                    
                    <!--end boucle for disaplay more creative fo this offer-->
                     <!--offer name -->
                    
                     <!-- end traitement more cretives -->
                     
                     <!-- button add more creatives  -->
                     
                     <!--end  button add more creatives  -->
                     
                 <!-- end .form-body section -->
                  </div>
                  <!-- end .form-body section -->
                  <div class="panel-footer text-right">
                    <button type="submit" class="button btn-primary"> Validate </button>
                    <button type="reset" class="button btn-primary"> Reset </button>
                    <a href="{{url('/')}}" class="button btn-primary"> Cancel </a>
                  </div>
                  <!-- end .form-footer section -->
                </form>
              </div>
            </div>
            <!-- end: .admin-form -->
        </div> 
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
<!--jquery previiew image -->
    
   
<!--jquery previiew image -->

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
        type: {
          required: true
        },  
        label: {
          required: true
        },
        sponsor: {
          required: true
        },
        sponsoroffer: {
          required: true
        },
        Categorie:{
            required:true 
        },
        Country:{
            required:true 
        },
        Status:{
            required:true 
        },
        payout:{
            required:true,
            number: true
        },
        paymentmethode:{
            required:true
        },
        forms: {
          required: true,
          minlength: 10
        },
        subjects: {
          required: true,
          minlength: 10
        },
        OptIn: {
          required: true,
          url: true
        },
        OptOut: {
          required: true,
          url: true
        },
        Creative: {
            required:true
        },
        optinfile: {
          required: true,
          extension: "jpg|png|gif|jpeg|rar|zip"
        },
        optoutfile: {
          required: true,
          extension: "jpg|png|gif|jpeg|rar|zip"
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
        type: {
          required: 'Chose a type'
        },
        label: {
          required: 'Enter Offer name'
        },
        sponsor: {
          required: 'Select sponsor'
        },
        sponsoroffer: {
          required: 'Enter Sponsor Offer Id'
        },
         Categorie:{
            required:'Select Categorie' 
        },
        Country:{
            required:'Select Country' 
        },       
        Status:{
            required:'Select Status' 
        },
        payout:{
            required:'Enter payout' 
        },
        paymentmethode:{
            required:'Select Payment Methode'
        },
        forms: {
          required: 'Oops you forgot forms',
          minlength: 'Enter at least 10 characters or more'
        },
        subjects: {
          required: 'Oops you forgot subjects',
          minlength: 'Enter at least 10 characters or more'
        },
        OptIn: {
          required: 'Enter your Opt-In URL',
          url: 'URL should start with - http://www'
        },
        OptOut: {
          required: 'Enter your Opt-Out URL',
          url: 'URL should start with - http://www'
        },
        Creative: {
            required:'Enter Creative name'
        },
        optinfile: {
          required: 'Please browse a Opt-In file',
          extension: 'File format not supported'
        },
        optoutfile: {
          required: 'Please browse a Opt-Out file',
          extension: 'File format not supported'
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


  //Adding dynamically inputs

            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $(".add_field_button"); //Add button ID

            var x = {{$i}}; //initlal text box count
            var tx = {{$i}};
       
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                   
                    $(wrapper).append('<div class="creative"><hr class="short alt"><div align="center"><a href="#" class="remove_field">Remove this creative</a><br/>-----</div>' +
                    '<div class="section row">' +
                    '<div class="col-md-8">' +
                    '<div class="section">' +
                    '<label for="Creative" class="field prepend-icon">' +
                    '<input name="Creative[]" id="Creative'+tx+'" class="gui-input" placeholder="Creative name..." type="text" aria-required="true">' +
                    '<label for="Creative" class="field-icon">' +
                    '<i class="fa fa-star-half-empty"></i>' +
                    '</label>' +
                    '</label>' +
                    '</div>' +
                    '<div class="section">' +
                    '<label class="field prepend-icon file">' +
                    '<span class="button btn-primary">Choose File</span>' +
                    '<input name="optinfile[]" id="optinfile'+tx+'" class="gui-file" onchange="document.getElementById(\'uploader'+tx+'\').value = this.value;" type="file">' +
                    '<input name="uploader" id="uploader'+tx+'" class="gui-input" placeholder="Opt-In File..." type="text">' +
                    '<label class="field-icon">' +
                    '<i class="fa fa-upload"></i>' +
                    '</label>' +
                    '</label>' +
                    '</div>' +
                    '<div class="section">' +
                    '<label class="field prepend-icon file">' +
                    '<span class="button btn-primary">Choose File</span>' +
                    '<input name="optoutfile[]" id="optoutfile'+tx+'" class="gui-file" onchange="document.getElementById(\'uploader1-2'+tx+'\').value = this.value;" type="file">' +
                    '<input name="uploaderbis" id="uploader1-2'+tx+'" class="gui-input" placeholder="Opt-Out File..." type="text">' +
                    '<label class="field-icon">' +
                    '<i class="fa fa-upload"></i>' +
                    '</label>' +
                    '</label>' +
                    '</div>' +
                    '</div>' +
                    '<div class="col-md-4 hidden-xs">' +
                    '<div class="fileupload fileupload-new admin-form" data-provides="fileupload">' +
                    '<div class="fileupload-preview thumbnail mb20">' +
                    '<img data-src="holder.js/100%x140" alt="100%x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE5NSAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTk1IiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjcxLjU0Njg3NSIgeT0iNzAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xOTV4MTQwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 170px; width: 100%; display: block;">' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>' +
                    '</div>'); //add input box
                    x++; //text box increment
                    tx++;//total text box increment
             
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).closest('div.creative').remove(); x--;
            });


  });
  </script>
  <!-- END: PAGE SCRIPTS -->

@stop
