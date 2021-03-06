@include('admin.header')
            <!-- Left panel : Navigation area -->
        <!-- Note: This width of the aside area can be adjusted through LESS variables -->
        <aside id="left-panel">

            <!-- User info -->
            <div class="login-info">
                <span> <!-- User image size is adjusted inside CSS, it should stay as is -->

                    <a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
                        <img src="{{url('backend/smartadmin/img/avatars/sunny.png')}}" alt="me" class="online" />
                        <span>
                            {{Auth::user()->username}}
                        </span>
                        
                    </a>

                </span>
            </div>
            <!-- end user info -->

            <!-- NAVIGATION : This navigation is also responsive

            To make this navigation dynamic please make sure to link the node
            (the reference to the nav > ul) after page load. Or the navigation
            will not initialize.
            -->
            <nav>
                <!-- NOTE: Notice the gaps after each icon usage <i></i>..
                Please note that these links work a bit different than
                traditional hre="" links. See documentation for details.
                -->
                <ul>
                    <li>
                        <a href="dashboard/index"  title="Dashboard">
                            <i class="fa fa-lg fa-fw fa-dashboard"></i> 
                            <span class="menu-item-parent">Dashboard</span>
                        </a>
                    </li>
                  
                    <li>
                        <a href="#"  title="Home">
                            <i class="fa fa-lg fa-fw fa-home"></i> 
                            <span class="menu-item-parent">Home</span>
                        </a>
                        <ul>
                            <li><a href="slider">Sliders</a></li>
                            <li><a href="news">News</a></li>
                        </ul>  
                    </li>
                    <li>
                        <a href="#dmphim"  title="">
                            <i class="fa fa-lg fa-fw fa-search"></i> 
                            <span class="menu-item-parent">Danh mục</span>
                        </a>
                    </li>
                   <li>
                        <a href="#tlphim"  title="">
                            <i class="fa fa-lg fa-fw fa-search"></i> 
                            <span class="menu-item-parent">Thể loại</span>
                        </a>
                    </li>
                  
                   
                   
                    
                   
                  
                    
                </ul>

            </nav>
            <span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

        </aside>
        <!-- END NAVIGATION --><!-- ==========================CONTENT STARTS HERE ========================== -->
<!-- MAIN PANEL -->
<div id="main" role="main">
        <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment"> 
            <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true" data-reset-msg="Would you like to RESET all your saved widgets and clear LocalStorage?"><i class="fa fa-refresh"></i></span> 
        </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <!-- This is auto generated -->
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->
    <!-- MAIN CONTENT -->
    <div id="content">

    </div>
    <!-- END MAIN CONTENT -->
    
</div>
<!-- END MAIN PANEL -->
@include('admin.tail')