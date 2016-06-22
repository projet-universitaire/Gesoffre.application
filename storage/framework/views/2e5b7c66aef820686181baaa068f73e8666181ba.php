<!-- Start: Sidebar Menu -->
<ul class="nav sidebar-menu">
    <li class="sidebar-label pt20">Menu</li>

    <li <?php echo Request::is('dashboard') ? 'class="active"' : ''; ?>>
        <a href="">
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
            <li>
                <a href="<?php echo e(route('smarty_offer')); ?>">
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
            <li>
                <a href="">
                    <span class="fa fa-cube"></span> List Sponsors</a>
            </li>
            <li>
                <a href="">
                    <span class="fa fa-desktop"></span> Add Sponsor </a>
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
            <li>
                <a href="">
                    <span class="fa fa-cube"></span> List Categories</a>
            </li>
            <li>
                <a href="">
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