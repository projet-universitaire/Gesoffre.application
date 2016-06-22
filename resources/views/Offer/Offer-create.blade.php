@extends('layouts.default')
@section('title')
    create offer
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
<!-- Start: Content-Wrapper -->
    <section id="content_wrapper">

        

        <!-- Begin: Content -->
        <section id="content" class="table-layout animated fadeIn">

            <!-- begin: .tray-center -->
            <div class="tray tray-center">
                @if($errors->any())
                    <div class="content-header">
                       
                    </div>
                @endif
                <!-- Validation Example -->
                <div class="admin-form theme-primary mw1000 center-block">

                    <div class="panel heading-border">
                            <div class="panel-body bg-light">
                                {!! Form::open(['id' => 'admin-form', 'url' => 'offer']) !!}
                                <div class="section-divider mt20 mb40" id="spy1">
                                    <span> Offer Informations </span>
                                </div>
                                <!-- .section-divider -->

                                <div class="section row">
                                    <div class="section">
                                        <div class="col-md-6">
                                            <label for="OfferName" class="field prepend-icon">
                                                {!! Form::text('label', null, ['name' => 'label', 'class' => 'gui-input', 'placeholder' => 'Offer name...']) !!}
                                                <label for="OfferName" class="field-icon">
                                                    <i class="fa fa-gavel"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="col-md-6">
                                            {!! Form::select(10, $sponsors ,'',['name' => 'sponsor_id', 'id' => 'sponsorList', 'class' => 'select2-primary form-control']) !!}
                                        </div>
                                    <!-- end section -->
                                    </div>
                                </div>
                                <!-- end .section row section -->
                                <div class="section row">
                                    <div class="col-md-6">
                                        <label for="SponsorOfferId" class="field prepend-icon">
                                            {!! Form::text('SponsorOfferId', null, ['name' => 'SponsorOfferId', 'id' => 'SponsorOfferId', 'class' => 'gui-input', 'placeholder' => 'Sponsor Offer Id ']) !!}
                                            <label for="OfferName" class="field-icon">
                                                <i class="fa fa-user"></i>
                                            </label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select(10, $categories,'',['name' => 'category_id', 'id' => 'categoryList', 'class' => 'select2-single form-control']) !!}
                                    </div>
                                    <!-- end section -->
                                </div>
                                <!-- end .section row section -->

                                <div class="section row">
                                    <div class="col-md-6">
                                        {!! Form::select(10, array('1' => 'US', '2' => 'UK', '3' => 'CA', '4' => 'AU'),'',['name' => 'country', 'id' => 'country', 'class' => 'select2-multiple form-control select-primary', 'multiple' => 'multiple']) !!}
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select(10, array('1' => 'Active', '2' => 'Inactive', '3' => 'Coming soon'),'',['name' => 'status', 'id' => 'status', 'class' => 'select2-single form-control']) !!}
                                    </div>
                                </div>
                                <!-- end section -->

                                <div class="section row">
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                  <i class="fa fa-usd"></i>
                                                </span>
                                            {!! Form::text('payout', null, ['name' => 'payout', 'id' =>'payout', 'class' => 'form-control ui-spinner-input', 'placeholder' => 'Payout']) !!}
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        {!! Form::select(10, array('CPC' => 'CPC: Cost Per Clic', 'CPL' => 'CPL: Cost Per Lead', 'CPS' => 'Cost Per Sale', 'CPA' => 'CPA: Cost Per Action'),'',['name' => 'payouttype', 'id' => 'payouttype', 'class' => 'select2-single form-control']) !!}
                                    </div>
                                </div>
                                <!-- end section -->
                                <div class="section-divider mt20 mb40" id="spy2">
                                    <span> Froms and Subjects </span>
                                </div>
                                <!-- .section-divider -->
                                <div class="section" >
                                    <label for="froms" class="field prepend-icon">
                                        {!! Form::textarea('froms', null, ['name' => 'froms', 'id' => 'froms', 'class' => 'gui-textarea', 'placeholder' => 'Froms..']) !!}
                                        <label for="froms" class="field-icon">
                                            <i class="fa fa-th-list"></i>
                                        </label>
                                        <span class="input-footer">
                                          <strong>Froms:</strong> Paste here all your Froms..
                                        </span>
                                    </label>
                                </div>
                                <!-- end  section -->

                                <div class="section">
                                    <label for="subjects" class="field prepend-icon">
                                        {!! Form::textarea('subjects', null, ['name' => 'subjects', 'id' => 'subjects', 'class' => 'gui-textarea', 'placeholder' => 'subjects..']) !!}
                                        <label for="subjects" class="field-icon">
                                            <i class="fa fa-th-list"></i>
                                        </label>
                                        <span class="input-footer">
                                          <strong>Subjects:</strong> Paste here all your Subjects..
                                        </span>
                                    </label>
                                </div>
                                <!-- end section -->
                                <!-- end section -->
                                <div class="section-divider mt20 mb40"  id="spy3">
                                    <span> Redirection Links </span>
                                </div>
                                <!-- .section-divider -->
                                <div class="section">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                  <i class="fa fa-globe"></i>
                                                </span>
                                        {!! Form::text('optin', null, ['name' => 'optIn', 'id' => 'optin', 'class' => 'gui-input', 'placeholder' => 'Opt-In...']) !!}
                                    </div>
                                </div>
                                <!-- end section -->
                                <div class="section">
                                    <div class="input-group">
                                                <span class="input-group-addon">
                                                  <i class="fa fa-link"></i>
                                                </span>
                                        {!! Form::text('optout', null, ['name' => 'optOut', 'id' => 'optout', 'class' => 'gui-input', 'placeholder' => 'Opt-Out...']) !!}
                                    </div>
                                </div>
                                <!-- end section -->

                                <div class="section row">

                                    <div class="col-md-6">
                                        <label class="option block option-primary">
                                           {!! Form::checkbox('hasSuppFile', null, ['name' => 'hasSuppFile', 'id' => 'hasSuppFile', 'class' => 'gui-input']) !!}
                                            <span class="checkbox"></span> Has suppression file ?
                                        </label>
                                    </div>
                                    <!-- end section -->

                                </div>
                                <!-- end .section row section -->

                                <div class="section-divider mv40" id="spy4">
                                    <span> Creatives </span>
                                </div>
                                <!-- .section-divider -->

                                <div class="input_fields_wrap">
                                <div class="section row">
                                    <div class="col-md-8">
                                        <div class="section">
                                            <label for="creativeName" class="field prepend-icon">
                                                <input name="labelCreatives[]" id="labelCreative" class="gui-input" placeholder="Creative name..." type="text" aria-required="true">
                                                <label for="creativeName" class="field-icon">
                                                    <i class="fa fa-apple"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <div class="section">
                                            <label class="field prepend-icon file">
                                                <span class="button">Choose File</span>
                                                {!! Form::file('optinfile', ['name' => 'optinfile[]','id' => 'optinfile' ,'class' => 'gui-file', 'onChange' => 'document.getElementById(\'uploader\').value = this.value;']) !!}
                                                {!! Form::text('uploader', null, ['name' => 'uploader','id' => 'uploader' , 'class' => 'gui-input', 'placeholder' => 'Opt-In File...']) !!}
                                                <label class="field-icon">
                                                    <i class="fa fa-upload"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <div class="section">
                                            <label class="field prepend-icon file">
                                                <span class="button">Choose File</span>
                                                {!! Form::file('unsubfile', ['name' => 'unsubfile[]','class' => 'gui-file', 'onChange' => 'document.getElementById(\'uploaderbis\').value = this.value;']) !!}
                                                {!! Form::text('uploaderbis', null, ['name' => 'uploaderbis','id' => 'uploaderbis' , 'class' => 'gui-input', 'placeholder' => 'Unsubscription File...']) !!}
                                                <label class="field-icon">
                                                    <i class="fa fa-upload"></i>
                                                </label>
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-4 hidden-xs">
                                        <div class="fileupload fileupload-new admin-form" data-provides="fileupload">
                                            <div class="fileupload-preview thumbnail mb20">
                                                <img data-src="holder.js/100%x140" alt="100%x140" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iMTk1IiBoZWlnaHQ9IjE0MCIgdmlld0JveD0iMCAwIDE5NSAxNDAiIHByZXNlcnZlQXNwZWN0UmF0aW89Im5vbmUiPjxkZWZzLz48cmVjdCB3aWR0aD0iMTk1IiBoZWlnaHQ9IjE0MCIgZmlsbD0iI0VFRUVFRSIvPjxnPjx0ZXh0IHg9IjcxLjU0Njg3NSIgeT0iNzAiIHN0eWxlPSJmaWxsOiNBQUFBQUE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LWZhbWlseTpBcmlhbCwgSGVsdmV0aWNhLCBPcGVuIFNhbnMsIHNhbnMtc2VyaWYsIG1vbm9zcGFjZTtmb250LXNpemU6MTBwdDtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4xOTV4MTQwPC90ZXh0PjwvZz48L3N2Zz4=" data-holder-rendered="true" style="height: 170px; width: 100%; display: block;">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- end .section row section -->
                                </div>
                                <div align='center'><button type="button" class="btn btn-sm btn-primary btn-block add_field_button">Add More Creatives</button></div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer text-right">
                                {!! Former::submit('Validate Form', null, ['name' => 'validate', 'id' => 'validate', 'class' => 'button btn-primary']) !!}
                                {!! Former::reset(' Reset ', null, ['name' => 'reset', 'id' => 'reset', 'class' => 'button']) !!}
                                {!! Former::button(' Cancel ', null, ['name' => 'cancel', 'id' => 'cancel', 'class' => 'button']) !!}

                            </div>
                            <!-- end .form-footer section -->
                        </form>

                    </div>

                </div>
                <!-- end: .admin-form -->

            </div>
            <!-- end: .tray-center -->

        </section>
        <!-- End: Content -->

        @include('layouts.foot')

    </section>
    <!-- End: Content-Wrapper -->
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
