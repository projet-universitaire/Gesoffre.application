<aside id="sidebar_left" class="nano nano-light affix sidebar-default has-scrollbar">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content" tabindex="0" style="margin-right: -17px;">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                </div>
                <div class="media-author">Bakkali Oussama</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Menu (slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="{{url('/')}}" class="text-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="" data-original-title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <!-- Start: Sidebar Menu -->
        
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li {{ (current_page("/")) ? 'class=active' : ''}}>
        <a href="{{url('/')}}">
            <span class="glyphicon glyphicon-home"></span>
            <span class="sidebar-title">Dashboard</span>
        </a>
    </li>

    <li class="sidebar-label pt20">Offers</li>
    <li>
        <a class=" accordion-toggle" href="">
            <span class="fa fa-diamond"></span>
            <span class="sidebar-title">Offer Manager</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="">
                    <span class="fa fa-cube"></span> List Offers</a>
            </li>
            <li {{ (current_page("offer/create")) ? 'class=active' : ''}}>
                <a href="{{url('offer/create')}}">
                    <span class="fa fa-desktop"></span> Add New Offer </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-diamond"></span>
            <span class="sidebar-title">Sponsors</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li {{ (current_page("list-sponsors")) ? 'class=active' : ''}}>
                <a href="{{url('/list-sponsors')}}">
                    <span class="fa fa-cube"></span> List Sponsors</a>
            </li>
            <li {{ (current_page("create-sponsors")) ? 'class=active' : ''}}>
                <a href="{{url('/create-sponsors')}}">
                    <span class="fa fa-desktop"></span> Add New Sponsor </a>
            </li>
        </ul>
    </li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-check-circle"></span>
            <span class="sidebar-title">Categories</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li {{ (current_page("Categorie-list")) ? 'class=active' : ''}}>
                <a href="{{url('Categorie-list')}}">
                    <span class="fa fa-cube"></span> List Categories</a>
            </li>
            <li {{ (current_page("Categorie-create")) ? 'class=active' : ''}}>
                <a href="{{url('Categorie-create')}}">
                    <span class="fa fa-desktop"></span> Add Category </a>
            </li>
        </ul>
    </li>
    
    <li class="sidebar-label pt20">Setting</li>
    <li>
        <a class="accordion-toggle" href="#">
            <span class="fa fa-diamond"></span>
            <span class="sidebar-title">Users</span>
            <span class="caret"></span>
        </a>
        <ul class="nav sub-nav">
            <li>
                <a href="#">
                    <span class="fa fa-cube"></span> List Users</a>
            </li>
            <li>
                <a href="#">
                    <span class="fa fa-desktop"></span> Add User </a>
            </li>
            <li>
                <a href="#">
                    <span class="fa fa-desktop"></span> Groups </a>
            </li>
            <li>
                <a href="#">
                    <span class="fa fa-desktop"></span> Add Group </a>
            </li>
        </ul>
    </li>
</ul>
<!-- End: Sidebar Menu -->
        <!-- End: Sidebar Menu -->

	      <!-- Start: Sidebar Collapse Button -->
	      <div class="sidebar-toggle-mini">
	        <a href="#">
	          <span class="fa fa-sign-out"></span>
	        </a>
	      </div>
	      <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    <div class="nano-pane"><div class="nano-slider" style="height: 97px; transform: translate(0px, 0px);"></div></div></aside>