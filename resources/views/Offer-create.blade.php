@extends('layouts.default')
@section('title')
    Add a New Offer
@stop
@section('header')
    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'
          xmlns="http://www.w3.org/1999/html">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/datepicker/css/bootstrap-datetimepicker.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/plugins/select2/css/core.css')}}">

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
      <div id="topbar-dropmenu" class="alt">
        <div class="topbar-menu row">
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-primary light">
              <span class="glyphicon glyphicon-inbox text-muted"></span>
              <span class="metro-title">Messages</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-info light">
              <span class="glyphicon glyphicon-user text-muted"></span>
              <span class="metro-title">Users</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-success light">
              <span class="glyphicon glyphicon-headphones text-muted"></span>
              <span class="metro-title">Support</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-system light">
              <span class="glyphicon glyphicon-facetime-video text-muted"></span>
              <span class="metro-title">Videos</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-warning light">
              <span class="fa fa-gears text-muted"></span>
              <span class="metro-title">Settings</span>
            </a>
          </div>
          <div class="col-xs-4 col-sm-2">
            <a href="#" class="metro-tile bg-alert light">
              <span class="glyphicon glyphicon-picture text-muted"></span>
              <span class="metro-title">Pictures</span>
            </a>
          </div>
        </div>
      </div>
      <!-- End: Topbar-Dropdown -->

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
            <li class="crumb-trail">Dashboard</li>
          </ol>
        </div>
        <div class="topbar-right">
          <div class="ib topbar-dropdown">
            <label for="topbar-multiple" class="control-label pr10 fs11 text-muted">Reporting Period</label>
            <select id="topbar-multiple" class="hidden" style="display: none;">
              <optgroup label="Filter By:">
                <option value="1-1">Last 30 Days</option>
                <option value="1-2" selected="selected">Last 60 Days</option>
                <option value="1-3">Last Year</option>
              </optgroup>
            </select><div class="btn-group"><button type="button" class="multiselect dropdown-toggle btn btn-default btn-sm ph15" data-toggle="dropdown" title="Last 60 Days">Last 60 Days <b class="caret"></b></button><ul class="multiselect-container dropdown-menu pull-right"><li class="multiselect-item multiselect-group"><label>Filter By:</label></li><li><a href="javascript:void(0);"><label class="radio"><input type="radio" value="1-1"> Last 30 Days</label></a></li><li class="active"><a href="javascript:void(0);"><label class="radio"><input type="radio" value="1-2"> Last 60 Days</label></a></li><li><a href="javascript:void(0);"><label class="radio"><input type="radio" value="1-3"> Last Year</label></a></li></ul></div>
          </div>
          <div class="ml15 ib va-m" id="toggle_sidemenu_r">
            <a href="#" class="pl5">
              <i class="fa fa-sign-in fs22 text-primary"></i>
              <span class="badge badge-hero badge-danger">3</span>
            </a>
          </div>
        </div>
      </header>
      <!-- End: Topbar -->

      <!-- Begin: Content -->
      <section id="content" class="table-layout">

        <!-- begin: .tray-center -->
        <div class="tray tray-center" style="height: 380px;">

            <!-- Begin: Content Header -->
            <div class="content-header">
              <h2> AdminForms makes <b class="text-primary">Validation</b> is easier than ever</h2>
              <p class="lead">Use the Admin Forms you know and love to help build the perfect form.</p>
            </div>

            <!-- Validation Example -->
            <div class="admin-form theme-primary mw1000 center-block" style="padding-bottom: 175px;">

              <div class="panel heading-border panel-primary">

                <form method="post" action="http://admindesigns.com/" id="admin-form" novalidate="novalidate">

                  <div class="panel-body bg-light">

                    <div class="section-divider mt20 mb40">
                      <span> Normal validation rules </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row" id="spy1">
                      <div class="col-md-6">
                        <label for="firstname" class="field prepend-icon">
                          <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                          <label for="firstname" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                      <div class="col-md-6">
                        <label for="lastname" class="field prepend-icon">
                          <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                          <label for="lastname" class="field-icon">
                            <i class="fa fa-user"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->
                    </div>
                    <!-- end .section row section -->

                    <div class="section">
                      <label for="useremail" class="field prepend-icon">
                        <input type="email" name="useremail" id="useremail" class="gui-input" placeholder="Email address">
                        <label for="useremail" class="field-icon">
                          <i class="fa fa-envelope"></i>
                        </label>
                      </label>

                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="website" class="field prepend-icon">
                        <input type="url" name="website" id="website" class="gui-input" placeholder="Current website url">
                        <label for="website" class="field-icon">
                          <i class="fa fa-globe"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label class="field select">
                        <select id="language" name="language">
                          <option value="">Select language...</option>
                          <option value="EN">English</option>
                          <option value="FR">French</option>
                          <option value="SP">Spanish</option>
                          <option value="CH">Chinese</option>
                          <option value="JP">Japanese</option>
                        </select>
                        <i class="arrow double"></i>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section" id="spy2">
                      <label for="file1" class="field file">
                        <span class="button btn-primary"> Choose File </span>
                        <input type="file" class="gui-file" name="upload1" id="file1" onchange="document.getElementById('uploader1').value = this.value;">
                        <input type="text" class="gui-input" id="uploader1" placeholder="no file selected" readonly="">
                      </label>
                    </div>
                    <!-- end  section -->

                    <div class="section">
                      <label class="field select-multiple">
                        <select name="mobileos" id="mobileos" multiple="">
                          <option value="0">Apple iOS </option>
                          <option value="1">Windows Mobile </option>
                          <option value="2">Google Android</option>
                          <option value="3">Tizen mobile OS</option>
                          <option value="5">Firefox OS</option>
                          <option value="6">Blackberry OS</option>
                          <option value="6">Symbian</option>
                        </select>
                      </label>
                    </div>
                    <!-- end  section -->

                    <div class="section" id="spy3">
                      <label for="comment" class="field prepend-icon">
                        <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                        <label for="comment" class="field-icon">
                          <i class="fa fa-comments"></i>
                        </label>
                        <span class="input-footer">
                          <strong>A Footer!:</strong> Use this area to put a useful tip or guideline..
                        </span>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section-divider mv40">
                      <span> Fill at least one </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row">

                      <div class="col-md-6">
                        <label for="mobile_phone" class="field prepend-icon">
                          <input type="tel" name="mobile_phone" id="mobile_phone" class="gui-input phone-group" placeholder="Mobile number">
                          <label for="mobile_phone" class="field-icon">
                            <i class="fa fa-mobile-phone"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                      <div class="col-md-6">
                        <label for="home_phone" class="field prepend-icon">
                          <input type="tel" name="home_phone" id="home_phone" class="gui-input phone-group" placeholder="Home number">
                          <label for="home_phone" class="field-icon">
                            <i class="fa fa-phone"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                    </div>
                    <!-- end .section row section -->

                    <div class="section-divider mv40" id="spy4">
                      <span> Equal - Matching elements </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section">
                      <label for="password" class="field prepend-icon">
                        <input type="password" name="password" id="password" class="gui-input" placeholder="Create a password">
                        <label for="password" class="field-icon">
                          <i class="fa fa-lock"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="repeatPassword" class="field prepend-icon">
                        <input type="password" name="repeatPassword" id="repeatPassword" class="gui-input" placeholder="Repeat password">
                        <label for="repeatPassword" class="field-icon">
                          <i class="fa fa-unlock-alt"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                    <div class="section-divider mv40" id="spy5">
                      <span> Checkboxes + Radios Group </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section row">

                      <div class="col-md-6 pad-r40 border-right">
                        <div class="option-group field">
                          <label for="female" class="block mt15 option option-primary">
                            <input type="radio" name="gender" id="female" value="female">
                            <span class="radio"></span> Female specie
                          </label>

                          <label for="male" class="block mt15 option option-primary">
                            <input type="radio" name="gender" id="male" value="male">
                            <span class="radio"></span> Male specie
                          </label>

                          <label for="other" class="block mt15 option option-primary">
                            <input type="radio" name="gender" id="other" value="other">
                            <span class="radio"></span> Other specie
                          </label>

                        </div>

                      </div>
                      <!-- end .section section -->

                      <div class="col-md-6 pl40">
                        <div class="option-group field">

                          <label class="block mt15 option option-primary">
                            <input type="checkbox" name="languages" value="FR">
                            <span class="checkbox"></span> Fluent french
                          </label>

                          <label class="block mt15 option option-primary">
                            <input type="checkbox" name="languages" value="EN">
                            <span class="checkbox"></span> Fluent english
                          </label>

                          <label class="block mt15 option option-primary">
                            <input type="checkbox" name="languages" value="CH">
                            <span class="checkbox"></span> Fluent chinese
                          </label>

                        </div>
                      </div>
                      <!-- end section -->

                    </div>
                    <!-- end .section row section -->


                    <div class="section-divider mv40" id="spy6">
                      <span> Custom Methods </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section">
                      <div class="smart-widget sm-left sml-120">
                        <label for="verification" class="field prepend-icon">
                          <input type="text" name="verification" id="verification" class="gui-input" placeholder="Solve verification">
                          <label for="verification" class="field-icon">
                            <i class="fa fa-shield"></i>
                          </label>
                        </label>
                        <label for="verification" class="button btn-primary">15 + 4 = </label>
                      </div>
                      <!-- end .smart-widget section -->
                    </div>
                    <!-- end section -->


                    <div class="section-divider mv40" id="spy7">
                      <span> Conditional validation </span>
                    </div>
                    <!-- .section-divider -->

                    <div class="section">
                      <p> 1 - The applicant age must be 16 years and above </p>
                      <p> 2 - For applicants above 19 years, a licence number will be required </p>
                    </div>
                    <!-- end section -->

                    <div class="section row">

                      <div class="col-md-6">
                        <label for="applicant_age" class="field prepend-icon">
                          <input type="text" name="applicant_age" id="applicant_age" class="gui-input" placeholder="Applicant age">
                          <label for="applicant_age" class="field-icon">
                            <i class="fa fa-male"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                      <div class="col-md-6">
                        <label for="licence_no" class="field prepend-icon">
                          <input type="text" name="licence_no" id="licence_no" class="gui-input" placeholder="Licence number">
                          <label for="licence_no" class="field-icon">
                            <i class="fa fa-credit-card"></i>
                          </label>
                        </label>
                      </div>
                      <!-- end section -->

                    </div>
                    <!-- end .section row section -->

                    <hr class="alt short">

                    <div class="section">
                      <p> Child name will be required when you agree / tick / check that you are a parent </p>
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <div class="option-group field">

                        <label class="block mt15 option option-primary">
                          <input type="checkbox" name="parents" id="parents" value="parents">
                          <span class="checkbox"></span> Yes i am a parent
                        </label>

                      </div>
                      <!-- end .option-group section -->
                    </div>
                    <!-- end section -->

                    <div class="section">
                      <label for="child_name" class="field prepend-icon">
                        <input type="text" name="child_name" id="child_name" class="gui-input" placeholder="Enter childs name">
                        <label for="child_name" class="field-icon">
                          <i class="fa fa-female"></i>
                        </label>
                      </label>
                    </div>
                    <!-- end section -->

                  </div>
                  <!-- end .form-body section -->
                  <div class="panel-footer text-right">
                    <button type="submit" class="button btn-primary"> Validate Form </button>
                    <button type="reset" class="button btn-primary"> Cancel </button>
                  </div>
                  <!-- end .form-footer section -->
                </form>

              </div>

            </div>
            <!-- end: .admin-form -->

        </div>
        <!-- end: .tray-center -->

        <!-- begin: .tray-right -->
        <aside class="tray tray-right tray290" data-tray-height="match" style="height: 335px;">

          <h4> Admin Panels - <small>A Theme Exclusive</small></h4>
          <ul class="icon-list">
            <li>
              <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
              <b> Author:</b> Admin Designs
            </li>
            <li>
              <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
              <b> License:</b> CC - Commercial 3.0
            </li>
            <li>
              <i class="fa fa-exclamation-circle text-warning fa-lg pr10"></i>
              <b> Info:</b>
              <a href="http://www.themeforest.net/user/AdminDesigns"> www.admindesigns.com </a>
            </li>
          </ul>

          <div class="tray-affix affix" data-smoothscroll="-80" data-spy="affix" data-offset-top="200">

            <div id="skin-switcher" class="row tray-bin btn-dimmer mb20">
                <div class="col-xs-4 pln">
                  <a class="btn btn-primary btn-gradient btn-alt btn-block item-active" data-form-skin="primary">Primary</a>
                </div>
                <div class="col-xs-4">
                  <a class="btn btn-success btn-gradient btn-alt btn-block" data-form-skin="success">Success</a>
                </div>
                <div class="col-xs-4">
                  <a class="btn btn-info btn-gradient btn-alt btn-block" data-form-skin="info">Info</a>
                </div>
                <div class="col-xs-4 pln">
                  <a class="btn btn-warning btn-gradient btn-alt btn-block" data-form-skin="warning">Warning</a>
                </div>
                <div class="col-xs-4">
                  <a class="btn btn-danger btn-gradient btn-alt btn-block" data-form-skin="danger">Danger</a>
                </div>
                <div class="col-xs-4">
                  <a class="btn btn-alert btn-gradient btn-alt btn-block" data-form-skin="alert">Alert</a>
                </div>
                <div class="col-xs-4 pln">
                  <a class="btn btn-system btn-gradient btn-alt btn-block" data-form-skin="system">System</a>
                </div>
                <div class="col-xs-4">
                  <a class="btn btn-dark btn-gradient btn-alt btn-block" data-form-skin="dark">Dark</a>
                </div>
                <div class="col-xs-4">
                  <a class="btn btn-default btn-gradient btn-alt btn-block" data-form-skin="default">Default</a>
                </div>
              </div>

            <div id="nav-spy">
              <ul class="nav tray-nav">
                <li class="">
                  <a href="#spy1">
                    <span class="fa fa-clock-o fa-lg"></span> Basic Inputs</a>
                </li>
                <li class="active">
                  <a href="#spy2">
                    <span class="fa fa-calendar fa-lg"></span> File Input</a>
                </li>
                <li class="">
                  <a href="#spy3">
                    <span class="fa fa-list-alt fa-lg"></span> Textarea</a>
                </li>
                <li class="">
                  <a href="#spy4">
                    <span class="fa fa-calendar-o fa-lg"></span> Matcing Elements</a>
                </li>
                <li class="">
                  <a href="#spy5">
                    <span class="fa fa-eyedropper fa-lg"></span> Checkboxes/Radios</a>
                </li>
                <li class="">
                  <a href="#spy6">
                    <span class="fa fa-sliders fa-lg"></span> Custom Methods</a>
                </li>
              </ul>
            </div>

          </div>
        </aside>
        <!-- end: .tray-right -->

      </section>
      <!-- End: Content -->

      <!-- Begin: Content -->
      <section id="contents" class="animated fadeIn hidden">

        <!-- Begin: Content Header -->
        <div class="content-header">
          <h2>Form Validation made <b class="text-primary">Easy</b></h2>
          <p class="lead">Use the Admin Forms you know and love to build the perfect form.</p>
        </div>

        <!-- Validation Example -->
        <div class="admin-form theme-primary mw1000 center-block">

          <div class="panel panel-primary heading-border">

            <form method="post" action="http://admindesigns.com/" id="admin-form">
              <div class="panel-body">

                <div class="section-divider mt20 mb40">
                  <span> Normal validation rules </span>
                </div>
                <!-- .section-divider -->

                <div class="section row">
                  <div class="col-md-6">
                    <label for="firstname" class="field prepend-icon">
                      <input type="text" name="firstname" id="firstname" class="gui-input" placeholder="First name...">
                      <label for="firstname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="lastname" class="field prepend-icon">
                      <input type="text" name="lastname" id="lastname" class="gui-input" placeholder="Last name...">
                      <label for="lastname" class="field-icon">
                        <i class="fa fa-user"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->
                </div>
                <!-- end .section row section -->

                <div class="section">
                  <label for="useremail" class="field prepend-icon">
                    <input type="email" name="useremail" id="useremail" class="gui-input" placeholder="Email address">
                    <label for="useremail" class="field-icon">
                      <i class="fa fa-envelope"></i>
                    </label>
                  </label>

                </div>
                <!-- end section -->

                <div class="section">
                  <label for="website" class="field prepend-icon">
                    <input type="url" name="website" id="website" class="gui-input" placeholder="Current website url">
                    <label for="website" class="field-icon">
                      <i class="fa fa-globe"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <label class="field select">
                    <select id="language" name="language">
                      <option value="">Select language...</option>
                      <option value="EN">English</option>
                      <option value="FR">French</option>
                      <option value="SP">Spanish</option>
                      <option value="CH">Chinese</option>
                      <option value="JP">Japanese</option>
                    </select>
                    <i class="arrow double"></i>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <label for="file1" class="field file">
                    <span class="button btn-primary"> Choose File </span>
                    <input type="file" class="gui-file" name="upload1" id="file1" onchange="document.getElementById('uploader1').value = this.value;">
                    <input type="text" class="gui-input" id="uploader1" placeholder="no file selected" readonly="">
                  </label>
                </div>
                <!-- end  section -->

                <div class="section">
                  <label class="field select-multiple">
                    <select name="mobileos" id="mobileos" multiple="">
                      <option value="0">Apple iOS </option>
                      <option value="1">Windows Mobile </option>
                      <option value="2">Google Android</option>
                      <option value="3">Tizen mobile OS</option>
                      <option value="5">Firefox OS</option>
                      <option value="6">Blackberry OS</option>
                      <option value="6">Symbian</option>
                    </select>
                  </label>
                </div>
                <!-- end  section -->

                <div class="section">
                  <label for="comment" class="field prepend-icon">
                    <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                    <label for="comment" class="field-icon">
                      <i class="fa fa-comments"></i>
                    </label>
                    <span class="input-footer">
                      <strong>DO NOT:</strong> Be negative or off topic, we expect a great comment...
                    </span>
                  </label>
                </div>
                <!-- end section -->

                <div class="section-divider mv40">
                  <span> Fill at least one </span>
                </div>
                <!-- .section-divider -->
                <div class="section row">

                  <div class="col-md-6">
                    <label for="mobile_phone" class="field prepend-icon">
                      <input type="tel" name="mobile_phone" id="mobile_phone" class="gui-input phone-group" placeholder="Mobile number">
                      <label for="mobile_phone" class="field-icon">
                        <i class="fa fa-mobile-phone"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="home_phone" class="field prepend-icon">
                      <input type="tel" name="home_phone" id="home_phone" class="gui-input phone-group" placeholder="Home number">
                      <label for="home_phone" class="field-icon">
                        <i class="fa fa-phone"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                </div>
                <!-- end .section row section -->

                <div class="section-divider mv40">
                  <span> Equal - Matching elements </span>
                </div>
                <!-- .section-divider -->

                <div class="section">
                  <label for="password" class="field prepend-icon">
                    <input type="password" name="password" id="password" class="gui-input" placeholder="Create a password">
                    <label for="password" class="field-icon">
                      <i class="fa fa-lock"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section">
                  <label for="repeatPassword" class="field prepend-icon">
                    <input type="password" name="repeatPassword" id="repeatPassword" class="gui-input" placeholder="Repeat password">
                    <label for="repeatPassword" class="field-icon">
                      <i class="fa fa-unlock-alt"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

                <div class="section-divider mv40">
                  <span> Checkboxes + Radios Group </span>
                </div>
                <!-- .section-divider -->

                <div class="section row">

                  <div class="col-md-6 pad-r40 border-right">
                    <div class="option-group field">
                      <label for="female" class="block mt15 option option-primary">
                        <input type="radio" name="gender" id="female" value="female">
                        <span class="radio"></span> Female specie
                      </label>

                      <label for="male" class="block mt15 option option-primary">
                        <input type="radio" name="gender" id="male" value="male">
                        <span class="radio"></span> Male specie
                      </label>

                      <label for="other" class="block mt15 option option-primary">
                        <input type="radio" name="gender" id="other" value="other">
                        <span class="radio"></span> Other specie
                      </label>

                    </div>

                  </div>
                  <!-- end .section section -->


                  <div class="col-md-6 pl40">
                    <div class="option-group field">

                      <label class="block mt15 option option-primary">
                        <input type="checkbox" name="languages" value="FR">
                        <span class="checkbox"></span> Fluent french
                      </label>

                      <label class="block mt15 option option-primary">
                        <input type="checkbox" name="languages" value="EN">
                        <span class="checkbox"></span> Fluent english
                      </label>

                      <label class="block mt15 option option-primary">
                        <input type="checkbox" name="languages" value="CH">
                        <span class="checkbox"></span> Fluent chinese
                      </label>

                    </div>
                  </div>
                  <!-- end section -->

                </div>
                <!-- end .section row section -->


                <div class="section-divider mv40">
                  <span> Custom Methods </span>
                </div>
                <!-- .section-divider -->

                <div class="section">
                  <div class="smart-widget sm-left sml-120">
                    <label for="verification" class="field prepend-icon">
                      <input type="text" name="verification" id="verification" class="gui-input" placeholder="Solve verification">
                      <label for="verification" class="field-icon">
                        <i class="fa fa-shield"></i>
                      </label>
                    </label>
                    <label for="verification" class="button btn-primary">15 + 4 = </label>
                  </div>
                  <!-- end .smart-widget section -->
                </div>
                <!-- end section -->


                <div class="section-divider mv40">
                  <span> Conditional validation </span>
                </div>
                <!-- .section-divider -->

                <div class="section">
                  <p class="small-text text-muted"> 1 - The applicant age must be 16 years and above </p>
                  <p class="small-text text-muted"> 2 - For applicants above 19 years, a licence number will be required </p>
                </div>
                <!-- end section -->

                <div class="section row">

                  <div class="col-md-6">
                    <label for="applicant_age" class="field prepend-icon">
                      <input type="text" name="applicant_age" id="applicant_age" class="gui-input" placeholder="Applicant age">
                      <label for="applicant_age" class="field-icon">
                        <i class="fa fa-male"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                  <div class="col-md-6">
                    <label for="licence_no" class="field prepend-icon">
                      <input type="text" name="licence_no" id="licence_no" class="gui-input" placeholder="Licence number">
                      <label for="licence_no" class="field-icon">
                        <i class="fa fa-credit-card"></i>
                      </label>
                    </label>
                  </div>
                  <!-- end section -->

                </div>
                <!-- end .section row section -->

                <div class="spacer"></div>

                <div class="section">
                  <p class="small-text text-muted"> Child name will be required when you agree / tick / check that you are a parent </p>
                </div>
                <!-- end section -->


                <div class="section">
                  <div class="option-group field">

                    <label class="block mt15 option option-primary">
                      <input type="checkbox" name="parents" id="parents" value="parents">
                      <span class="checkbox"></span> Yes i am a parent
                    </label>

                  </div>
                  <!-- end .option-group section -->
                </div>
                <!-- end section -->

                <div class="section">
                  <label for="child_name" class="field prepend-icon">
                    <input type="text" name="child_name" id="child_name" class="gui-input" placeholder="Enter childs name">
                    <label for="child_name" class="field-icon">
                      <i class="fa fa-female"></i>
                    </label>
                  </label>
                </div>
                <!-- end section -->

              </div>
              <!-- end .form-body section -->
              <div class="panel-footer text-right">
                <button type="submit" class="button btn-primary"> Validate Form </button>
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

@stop
@section('script')
    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
    <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

    <!-- jQuery Validate Plugin-->
    <script src="{{asset('assets/admin-tools/admin-forms/js/jquery.validate.min.js')}}"></script>

    <!-- jQuery Validate Addon -->
    <script src="{{asset('assets/admin-tools/admin-forms/js/additional-methods.min.js')}}"></script>

    <!-- Select2 Plugin Plugin -->
    <script src="{{asset('vendor/plugins/select2/select2.min.js')}}"></script>

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

            // Init Select2 - Contextuals (via html classes)
            //Add plank option
            $("#sponsorList").prepend('<option/>').val(function(){return $('[selected]',this).val() ;})
            $("#sponsorList").select2({
                placeholder: "Select a Sponsor",
                allowClear: true
            }); // select2 contextual - primary
            $("#categoryList").prepend('<option/>').val(function(){return $('[selected]',this).val() ;})
            $("#categoryList").select2({
                placeholder: "Select a Category",
                allowClear: true
            }); // select2 contextual - primary
            $("#status").prepend('<option/>').val(function(){return $('[selected]',this).val() ;})
            $("#status").select2({
                placeholder: "Select a Status",
                allowClear: true
            }); // select2 contextual - primary
            $("#country").select2({
                placeholder: "Select a Geotargets",
                allowClear: true
            }); // select2 contextual - primary
            $("#payouttype").prepend('<option/>').val(function(){return $('[selected]',this).val() ;})
            $("#payouttype").select2({
                placeholder: "Payement Method",
                allowClear: true
            }); // select2 contextual - primary
            // Init jQuery spinner init - currency
            $("#payout").spinner({
                min: 0,
                max: 2500,
                step: 0.5,
                start: 1000
                //numberFormat: "C"
            });



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
                    },
                    sponsor_id: {
                        required: true
                    },
                    SponsorOfferId: {
                        required: true
                    },
                    category: {
                        required: true
                    },
                    country: {
                        required: true
                    },
                    status: {
                        required: false
                    },
                    payout: {
                        required: true
                    },
                    payouttype: {
                        required: true
                    },
                    froms: {
                        required: true,
                        minlength: 30
                    },
                    subjects: {
                        required: true,
                        minlength: 30
                    },
                    optIn: {
                        required: true,
                        url: true
                    },
                    optOut: {
                        required: true,
                        url: true
                    },
                    hasSuppFile: {
                        required: true
                    },
                    "labelCreatives[]": {
                        required: true
                    },
                    labelCreative: {
                        required: true
                    },
                    "optinfile[]": {
                        required: true,
                        extension: "jpg|png|gif|jpeg"
                    },
                    "unsubfile[]": {
                        required: false,
                        extension: "jpg|png|gif|jpeg"
                    }
                },

                /* @validation error messages
                 ---------------------------------------------- */

                messages: {
                    label: {
                        required: 'Enter Offer name'
                    },
                    sponsorList: {
                        required: 'Choose a Sponsor'
                    },
                    SponsorOfferId: {
                        required: 'Enter the Offer Id'
                    },
                    categoryList: {
                        required: 'Choose a Category Offer'
                    },
                    country: {
                        required: 'Enter Geotargets'
                    },
                    payout: {
                        required: 'Enter the Offer payout'
                    },
                    payouttype: {
                        required: 'Choose a payout type'
                    },
                    froms: {
                        required: 'Enter email Froms',
                        minlength: 'Enter at least 30 characters or more'
                    },
                    subjects: {
                        required: 'Enter email Subjects',
                        minlength: 'Enter at least 30 characters or more'
                    },
                    optin: {
                        required: 'Enter the Opt-In URL',
                        url: 'URL should start with - http://www'
                    },
                    optout: {
                        required: 'Enter the Opt-Out URL',
                        url: 'URL should start with - http://www'
                    },
                    hasSuppFile: {
                        required: 'Specify whether the Offer has suppression file !'
                    },
                    "labelCreatives[]": {
                        required: 'Enter a creative name'
                    },
                    labelCreative: {
                        required: 'Enter a creative name'
                    },
                    "optinfile[]": {
                        required: 'Upload the Opt-In file'
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

            var x = 1; //initlal text box count
            var tx = 1;
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment
                    tx++; //total text box increment
                    $(wrapper).append('<div class="creative"><hr class="short alt"><div align="center"><a href="#" class="remove_field">Remove this creative</a><br/>-----</div>' +
                    '<div class="section row">' +
                    '<div class="col-md-8">' +
                    '<div class="section">' +
                    '<label for="creativeName" class="field prepend-icon">' +
                    '<input name="labelCreatives[]" id="labelCreative" class="gui-input" placeholder="Creative name..." type="text" aria-required="true">' +
                    '<label for="creativeName" class="field-icon">' +
                    '<i class="fa fa-apple"></i>' +
                    '</label>' +
                    '</label>' +
                    '</div>' +
                    '<div class="section">' +
                    '<label class="field prepend-icon file">' +
                    '<span class="button btn-primary">Choose File</span>' +
                    '<input name="optinfile[]" id="optinfile" class="gui-file" onchange="document.getElementById(\'uploader'+tx+'\').value = this.value;" type="file">' +
                    '<input name="uploader" id="uploader'+tx+'" class="gui-input" placeholder="Opt-In File..." type="text">' +
                    '<label class="field-icon">' +
                    '<i class="fa fa-upload"></i>' +
                    '</label>' +
                    '</label>' +
                    '</div>' +
                    '<div class="section">' +
                    '<label class="field prepend-icon file">' +
                    '<span class="button btn-primary">Choose File</span>' +
                    '<input name="unsubfile[]" id="unsubfile" class="gui-file" onchange="document.getElementById(\'uploaderbis'+tx+'\').value = this.value;" type="file">' +
                    '<input name="uploaderbis" id="uploaderbis'+tx+'" class="gui-input" placeholder="Unsubscription File..." type="text">' +
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
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault(); $(this).closest('div.creative').remove(); x--;
            });


        });
    </script>
    <!-- END: PAGE SCRIPTS -->
@stop