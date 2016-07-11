@extends('layouts.default')
@section('title')
    Preveiew
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
class="profile-page"
@stop


@section('content_wrapper')
<section id="content_wrapper">
      <!-- Begin: Content -->
      <section id="content" class="">

          
          <div class="clearfix"></div>
          <section id="form-control" class="well">
                <h2 class="page-header mtn">Offer informations</h2>           
                
                <table class="table mbn table-striped admin-form theme-info">
  <thead>
    <tr class="hiden">
      
      <th class="hidden-xs">Id</th>
      <th class="w175 text-right">{{$row->id}}</th>
    </tr>
  </thead>
  <tbody>
    <tr>    
      <td class="hidden-xs">Label</td>
      <td class="text-right">
        <label for="female" class="option block mn">
          {{$row->label}}
        </label>
      </td>
    </tr>
    <tr>      
      <td class="hidden-xs">Country</td>
      <td class="text-right">
        <label class="option block mn">
          {{$row->country}}
        </label>
      </td>
    </tr>
    <tr>   
      <td class="hidden-xs">Status</td>
      <td class="text-right">
        <label class="option block mn">
          @if ($row->status === 1) 
                      <button type="button" class="btn btn-xs btn-success">Enable</button>
                      @elseif ($row->status === 2) 
                      <button type="button" class="btn btn-xs btn-danger">Disable</button>
                      @else
                      <button type="button" class="btn btn-xs btn-warning ">Comming soon</button>
                      @endif
        </label>
      </td>
    </tr>
    <tr>
      <td class="hidden-xs">Category</td>
      <td class="text-right">
        <label class="option block mn">
          {{$categorie->label}}
        </label>
      </td>
    </tr>
    <tr>
      
      <td class="hidden-xs">Sponsor</td>
      <td class="text-right">
        <label class="option block mn">
          {{$sposors->label}}
        </label>
      </td>
    </tr>
 </tbody>
</table>
          </section>
          <div class="clearfix"></div>
          
     
        <!-- Begin .row page -->

        <div class="row">
            <div class="col-md-4">
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-money"></i>
                  </span>
                  <span class="panel-title">Payment Informations</span>
                </div>
                <div class="panel-body pn">
                  <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                    <thead>
                      <tr class="hidden">
                        <th class="mw30">#</th>
                        <th>Name</th>
                        <th>data</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fa fa-desktop text-warning"></span>
                        </td>
                        <td>Payout</td>
                        <td>
                          <i class="fa fa-caret-up text-info pr10"></i>{{$row->payout.' $'}}</td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fa fa-microphone text-primary"></span>
                        </td>
                        <td>Payment Methode</td>
                        <td>
                          <i class="fa fa-caret-down text-danger pr10"></i>{{$row->payouttype}}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-share-square"></i>
                  </span>
                  <span class="panel-title"> Redirections links</span>
                </div>
                <div class="panel-body pb10">
                    <h5>OptIn :</h5><span class="label-success">{{$row->optIn}}</span><br>
                    <h5>OptOut :</h5><span class="label-warning ">{{$row->opOut}}</span>
                </div>
              </div>
              <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-magic"></i>
                  </span>
                  <span class="panel-title">Forms and Subjects</span>
                </div>
                <div class="panel-body pb5">

                  <h4>Forms</h4>
                  <p class="text-muted" > <?php  echo nl2br("$row->forms"); ?> <!--nl2br: replace n with br-->
                  </p>

                  <hr class="short br-lighter">

                  <h4>Subjects</h4>
                  <p class="text-muted" > <?php  echo nl2br("$row->forms"); ?>   <!--nl2br: replace n with br-->
                  </p>

                  <hr class="short br-lighter">
                </div>
              </div>
            </div>
            <div class="col-md-8">
              @if ($creative->count()== 0) 
             
                  <div class="alert alert-dark light alert-dismissable">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <i class="fa fa-star-half-full pr10 "></i>
                  <strong>Opps!</strong> There is  no creative for
                  <a href="#" class="alert-link">this offer</a>.
                  </div>
              @else 
                 @foreach($creative as $creatives) <!--start boucle-->
                
                <div class="panel">
                <div class="panel-heading">
                  <span class="panel-icon">
                    <i class="fa fa-star"></i>
                  </span>
                  <span class="panel-title">Creative</span>
                </div>
                <div class="panel-body pn">
                  <table class="table mbn tc-icon-1 tc-med-2 tc-bold-last">
                    <thead>
                      <tr class="hidden">
                        <th class="mw30">#</th>
                        <th>Name</th>
                        <th>images</th>
                         <th>links</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <span class="fa fa-desktop text-warning"></span>
                        </td>
                        <td>Name</td>
                        <td>
                            <h4>{{$creatives->label}}</h4></td>
                         
                        <td>
                          <i class="fa fa-cloud-download text-info pr40"></i></td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fa fa-link text-primary"></span>
                        </td>
                        <td>Opt-In: </td>
                        <td>
                            <img src="{{ asset('assets/img/cr/'.$creatives->srcIn) }}"class="img img-responsive" alt="{{$creatives->srcIn}}" style="width: 250px; height: 150px;"></td>
                        <td>
                          <a href="{{url( 'download/'.$creatives->srcIn )}}"  class="btn btn-primary btn-block">Download</a>   
                      </td>
                      </tr>
                      <tr>
                        <td>
                          <span class="fa fa-unlink text-primary"></span>
                        </td>
                        <td>Unsubscribe</td>
                        <td>
                         <img src="{{ asset('assets/img/cr/'.$creatives->srcOut) }}" class="img img-responsive" alt="{{$creatives->srcOut}}"  style="width: 250px; height: 150px;"></td>
                      <td>
                         <a href="{{url( 'download/'.$creatives->srcOut )}}"  class="btn btn-primary btn-block">Download</a>
                      </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              
             @endforeach 
             @endif
             <!--end boucle-->
            </div>
          </div>
          
      </section>
      <!-- End: Content -->

    </section>
@stop
@section('script')
<!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <script src="{{asset('vendor/jquery/jquery-1.11.1.min.js')}}"></script>
  <script src="{{asset('vendor/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

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


  });
  </script>
  <!-- END: PAGE SCRIPTS -->


  
@stop