<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Welcome To | Queue Management System</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
<link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/multi-select/css/multi-select.css')}}" rel="stylesheet">
    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
     <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></script>
     <style type="text/css">
     #speech-msg{
    outline: none;
}</style>
</head>

<body class="theme-green">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">QUEUE MANAGEMENT SYSTEM</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li>
                    <!-- <a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a> -->
                    </li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                       <!--  <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a> -->
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                    <li class="dropdown">
                        <!-- <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">flag</i>
                            <span class="label-count">9</span>
                        </a> -->
                        <ul class="dropdown-menu">
                            <li class="header">TASKS</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Footer display issue
                                                <small>32%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-pink" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 32%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Make new buttons
                                                <small>45%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-cyan" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Create new dashboard
                                                <small>54%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-teal" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 54%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Solve transition issue
                                                <small>65%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <h4>
                                                Answer GitHub questions
                                                <small>92%</small>
                                            </h4>
                                            <div class="progress">
                                                <div class="progress-bar bg-purple" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 92%">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">David Nyangi</div>
                    <div class="email">david.nyangi@ccbrt.org</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="{{URL::to('/logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                   <li>
                        <a href="{{URL::to('/dashboard')}}">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{URL::to('calls')}}">
                            <i class="material-icons">message</i>
                            <span>Call</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Assign Patients to Queues</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="{{URL::to('waiting_private_patients')}}">
                                    <span>Private Clinic</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('waiting_standard_patients')}}">
                                    <span>Standard Clinic</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{URL::to('addparams')}}">
                            <i class="material-icons">message</i>
                            <span>Add Queues/Rooms</span>
                        </a>
                    </li>
                    <li  class="active">
                        <a href="{{URL::to('setparams')}}">
                            <i class="material-icons">message</i>
                            <span>Set Parameters</span>
                        </a>
                    </li>
                   
                    <li class="header">LABELS</li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-red">donut_large</i>
                            <span>Report an Error</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-amber">donut_large</i>
                            <span>Open Ticket</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-light-blue">donut_large</i>
                            <span>Information</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">CCBRT - Queue Management </a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                <li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active in active" id="skins">
                    <ul class="demo-choose-skin">
                        <li data-theme="red" class="active">
                            <div class="red"></div>
                            <span>Red</span>
                        </li>
                        <li data-theme="pink">
                            <div class="pink"></div>
                            <span>Pink</span>
                        </li>
                        <li data-theme="purple">
                            <div class="purple"></div>
                            <span>Purple</span>
                        </li>
                        <li data-theme="deep-purple">
                            <div class="deep-purple"></div>
                            <span>Deep Purple</span>
                        </li>
                        <li data-theme="indigo">
                            <div class="indigo"></div>
                            <span>Indigo</span>
                        </li>
                        <li data-theme="blue">
                            <div class="blue"></div>
                            <span>Blue</span>
                        </li>
                        <li data-theme="light-blue">
                            <div class="light-blue"></div>
                            <span>Light Blue</span>
                        </li>
                        <li data-theme="cyan">
                            <div class="cyan"></div>
                            <span>Cyan</span>
                        </li>
                        <li data-theme="teal">
                            <div class="teal"></div>
                            <span>Teal</span>
                        </li>
                        <li data-theme="green">
                            <div class="green"></div>
                            <span>Green</span>
                        </li>
                        <li data-theme="light-green">
                            <div class="light-green"></div>
                            <span>Light Green</span>
                        </li>
                        <li data-theme="lime">
                            <div class="lime"></div>
                            <span>Lime</span>
                        </li>
                        <li data-theme="yellow">
                            <div class="yellow"></div>
                            <span>Yellow</span>
                        </li>
                        <li data-theme="amber">
                            <div class="amber"></div>
                            <span>Amber</span>
                        </li>
                        <li data-theme="orange">
                            <div class="orange"></div>
                            <span>Orange</span>
                        </li>
                        <li data-theme="deep-orange">
                            <div class="deep-orange"></div>
                            <span>Deep Orange</span>
                        </li>
                        <li data-theme="brown">
                            <div class="brown"></div>
                            <span>Brown</span>
                        </li>
                        <li data-theme="grey">
                            <div class="grey"></div>
                            <span>Grey</span>
                        </li>
                        <li data-theme="blue-grey">
                            <div class="blue-grey"></div>
                            <span>Blue Grey</span>
                        </li>
                        <li data-theme="black">
                            <div class="black"></div>
                            <span>Black</span>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h2>ASSIGN QUEUE TO ROOM</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <form  class="savequeue-form validate-form" method="post" action="/savequeuetoroom" id="savequeuetormform">
                                        {{ csrf_field() }}
                                        <div class="isa_aqerror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                               <i class="fa fa-times-circle"></i>
                                        </div>
                                        <div class="isa_aqsuccess" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                           <i class="fa fa-times-circle"></i>
                                        </div>
                                        <select class="form-control show-tick" name="qs" id="qs">
                                            <option value="">-- Please select a queue --</option>
                                             @if($queues)
                                                @foreach($queues as $queue)
                                                    <option value="{{$queue->OC_QUEUES_OBJECTID}}">{{$queue->OC_QUEUES_QUEUENAME}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <select class="form-control show-tick allrooms" name="rm" id="rm">
                                            <option value="">-- Please select a room --</option>
                                            @if($rooms)
                                                @foreach($rooms as $room)
                                                    <option value="{{$room->OC_QUEUEROOM_OBJECTID}}">{{$room->OC_QUEUEROOM_ROOMNAME}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                      <!--   <select class="form-control show-tick" name="dpt" id="dpt">
                                            <option value="">-- Please select a Department --</option>
                                                @if($depts)
                                                    @foreach($depts as $dept)
                                                        <option value="{{$dept->OC_ENCOUNTER_SERVICEUID}}">{{$dept->OC_ENCOUNTER_SERVICEUID}}</option>
                                                    @endforeach
                                                @endif
                                        </select>
                                        <select class="form-control show-tick allrooms" name="screenname" id="screenname">
                                            <option>-- Please Select a Screen --</option>
                                            @if($screens)
                                                @foreach($screens as $screen)
                                                    <option value="{{$screen->OC_QUEUESCREEN_OBJECTID}}">{{$screen->OC_QUEUESCREEN_NAME}}</option>
                                                @endforeach
                                            @endif
                                        </select> -->
                                        <button type="button" id="assignqueuetoroom" class="btn btn-primary m-t-15 waves-effect">ASSIGN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h2>ASSIGN QUEUE TO CLINIC</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                <form  class="savequeue-form validate-form" method="post" action="/savequeuetodept" id="savequeuetodeptform">
                                        {{ csrf_field() }}
                                        <div class="isa_aqderror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                               <i class="fa fa-times-circle"></i>
                                        </div>
                                        <div class="isa_aqdsuccess" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                           <i class="fa fa-times-circle"></i>
                                        </div>
                                        <select class="form-control show-tick" name="q" id="q">
                                            <option value="">-- Please select a queue --</option>
                                             @if($queues)
                                                @foreach($queues as $queue)
                                                    <option value="{{$queue->OC_QUEUES_OBJECTID}}">{{$queue->OC_QUEUES_QUEUENAME}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <select class="form-control show-tick" name="dpt" id="dpt">
                                            <option value="">-- Please select a Department --</option>
                                                @if($depts)
                                                    @foreach($depts as $dept)
                                                        <option value="{{$dept->OC_ENCOUNTER_SERVICEUID}}">{{$dept->OC_ENCOUNTER_SERVICEUID}}</option>
                                                    @endforeach
                                                @endif
                                        </select>
                                        <button type="button" id="assignqueuetodept" class="btn btn-primary m-t-15 waves-effect">ASSIGN</button>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of First Row -->
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <h2>ASSIGN QUEUE TO SCREEN</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <form  class="savequeue-form validate-form" method="post" action="/savequeuetoscreen" id="savequeuetoscreenform">
                                        {{ csrf_field() }}
                                        <div class="isa_aserror" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                               <i class="fa fa-times-circle"></i>
                                        </div>
                                        <div class="isa_assuccess" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                           <i class="fa fa-times-circle"></i>
                                        </div>
                                        <select class="form-control show-tick" name="qscreen" id="qscreen">
                                            <option value="">-- Please select a queue --</option>
                                             @if($queues)
                                                @foreach($queues as $queue)
                                                    <option value="{{$queue->OC_QUEUES_OBJECTID}}">{{$queue->OC_QUEUES_QUEUENAME}} ({{$queue->OC_QUEUES_ASSIGNEDDEPTID}} )</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <select class="form-control show-tick allrooms" name="screenname" id="screenname">
                                            <option>-- Please Select a Screen --</option>
                                            @if($screens)
                                                @foreach($screens as $screen)
                                                    <option value="{{$screen->OC_QUEUESCREEN_OBJECTID}}">{{$screen->OC_QUEUESCREEN_NAME}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                        <button type="button" id="assignqueuetoscreen" class="btn btn-primary m-t-15 waves-effect">ASSIGN QUEUE</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Second Row -->
            <!-- Multi select Starts here -->
            <!-- <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               ASSIGN QUEUE TO SCREEN
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <select id="optgroup" class="ms" multiple="multiple">
                                    @if($queues)
                                        @foreach($queues as $queue)
                                            <option value="{{$queue->OC_QUEUES_OBJECTID}}">{{$queue->OC_QUEUES_QUEUENAME}} ({{$queue->OC_QUEUES_ASSIGNEDDEPTID}} )</option>
                                        @endforeach
                                    @endif
                            </select>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- End of Multi Select -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('plugins/multi-select/js/jquery.multi-select.js')}}"></script>
    <script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('plugins/node-waves/waves.js')}}"></script>
    <script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>
    <script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('plugins/morrisjs/morris.js')}}"></script>
    <script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/index.js')}}"></script>
 <script src="{{asset('js/voice/index.js')}}"></script>
    <!-- Demo Js -->
    <script src="{{asset('js/demo.js')}}"></script>
    <script type="text/javascript">
     $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      } 

  });
  
   function loader(v){
      if(v=='on'){
            $('#loader').show();
          }else{
            $('#saveroomform').css({
              opacity:1
            });
            $('#loader').hide();
        }
    }
     
   function removeError(){
      var div = ".isa_error";
      $(div).slideUp('slow','swing');
  }
  function removeSuccess(){
      var div = ".isa_success";
      $(div).slideUp('slow','swing');
  }
  $('#roomname').keyup(function() {
        removeError();
        removeSuccess();
      });
  $('#roomdesc').keyup(function() {
    removeError();
    removeSuccess();
  });
  $('#optgroup').multiSelect({
     afterSelect: function(values){
        alert("Select value: "+values);
      }
  });
$('#assignqueuetoroom').on('click',function(e){
    e.preventDefault();
           var savequeuetormform = $('#savequeuetormform').serializeArray();
        var url = $('#savequeuetormform').attr('action');
        if(($('#qs').val()=='') || ($('#rm').val()=='')){
            $('.isa_aqerror').text('SORRY, PLEASE SELECT QUEUE AND ROOM NAME')
            $('.isa_aqerror').slideDown("slow");
        }else{
          $.ajax({
                type: 'post',
                url : url,
                data: savequeuetormform,
                success:function(response){
                     if((response.sms==1 )){
                        $('.isa_aqsuccess').text('QUEUE SUCCESSFULLY ASSIGNED')
                        $('.isa_aqsuccess').slideDown("slow");
                     }
                 },error:function(response){
                      $('.isa_aqerror').text(response.responseJSON.error)
                      $('.isa_aqerror').slideDown("slow");
                }
            });
        }
    });
$('#assignqueuetoscreen').on('click',function(e){
    e.preventDefault();
           var savequeuetoscreenform = $('#savequeuetoscreenform').serializeArray();
        var url = $('#savequeuetoscreenform').attr('action');
        if(($('#qname').val()=='') || ($('#screenname').val()=='')){
            $('.isa_aserror').text('SORRY, PLEASE SELECT QUEUE AND SCREEN NAME')
            $('.isa_aserror').slideDown("slow");
        }else{
          $.ajax({
                type: 'post',
                url : url,
                data: savequeuetoscreenform,
                success:function(response){
                     if((response.sms==1 )){
                        $('.isa_aserror').slideUp("slow");
                        $('.isa_assuccess').text('QUEUE SUCCESSFULLY ASSIGNED')
                        $('.isa_assuccess').slideDown("slow");
                     }
                 },error:function(response){
                        $('.isa_assuccess').slideUp("slow");
                        $('.isa_aserror').text(response.responseJSON.error)
                        $('.isa_aserror').slideDown("slow");
                }
            });
        }
    });
$('#assignqueuetodept').on('click',function(e){
    e.preventDefault();
           var savequeuetodeptform = $('#savequeuetodeptform').serializeArray();
        var url = $('#savequeuetodeptform').attr('action');
        if(($('#q').val()=='') || ($('#dpt').val()=='')){
            $('.isa_aqderror').text('SORRY, PLEASE SELECT QUEUE NAME AND DEPARTMENT')
            $('.isa_aqdsuccess').slideUp("slow");
            $('.isa_aqderror').slideDown("slow");

        }else{
          $.ajax({
                type: 'post',
                url : url,
                data: savequeuetodeptform,
                success:function(response){
                     if((response.sms==1 )){
                        $('.isa_aqdsuccess').text('QUEUE NAME SUCCESSFULLY ASSIGNED TO DEPT')
                         $('.isa_aqderror').slideUp("slow");
                        $('.isa_aqdsuccess').slideDown("slow");
                     }
                 },error:function(response){
                      $('.isa_qerror').text(response.responseJSON.error)
                      $('.isa_qerror').slideDown("slow");
                }
            });
        }
      });
    </script>
</body>

</html>