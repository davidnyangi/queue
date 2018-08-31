<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
                    <li><!-- <a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a> --></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <!-- <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
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
                    <li class="active">
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
                    <li>
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
                                <div class="col-xs-12 col-sm-6">
                                    <h2>NEW CALL</h2>
                                </div>
                                
                            </div>
                        </div>
                        <div class="body">
                            <!-- <div class="row clearfix">
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>Patient Name: <p id="msg" style="display:none;"></p> 
                                    <p><b> @if($patientTobeCalled)
                                    @foreach($patientTobeCalled as $patientTobeCall)
                                    <span data-name="{{$patientTobeCall->patientname}}">{{$patientTobeCall->patientname}}</span>
                                    </b></p>
                                    <input type="checkbox" id="seen" class="filled-in2" name="seen"/>
                                    <label for="seen">Seen</label>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>Queue Number: 
                                    </b></p>
                                    <p><b>
                                    {{$patientTobeCall->queueno}}
                                    @endforeach
                                    @endif
                                    </b></p>
                                    <input type="checkbox" id="noshow" class="filled-in2" name="noshow"/>
                                    <label for="noshow">No Show</label>
                                </div>
                            </div> -->
                            <div class="row clearfix newcall">
                                <div class="col-md-12">
                                    <p><b>Select Room</b></p>
                                    <form  class="assignqueue-form validate-form" method="post" action="/getqueuesperroom" id="searchqueueform">
                                                    {{ csrf_field() }}
                                        <select class="form-control show-tick changeRoom" name="changeRoom" data-dependent="retrievedQueues">
                                            <option value="">-- Please select a room --</option>
                                            @if($rooms)
                                                @foreach($rooms as $room)
                                                    <option value="{{$room->OC_QUEUEROOM_OBJECTID}}">{{$room->OC_QUEUEROOM_ROOMNAME}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </form>
                                </div>
                                <div class="col-md-12">
                                     <p><b>Queue to Call</b></p>
                                        <select class="form-control show-tick allqs" name="qs" id="retrievedQueues" data-dependent="queues">
                                            <option value="">-- Please select a queue --</option>
                                           <!--  @if($queues)
                                                @foreach($queues as $queue)
                                                    <option value="{{$queue->OC_QUEUES_OBJECTID}}">{{$queue->OC_QUEUES_QUEUENAME}} ({{$queue->OC_QUEUES_ASSIGNEDDEPTID}} )</option>
                                                @endforeach
                                            @endif -->
                                        </select>
                                        <button type="button" id="speak" class="btn btn-primary m-t-15 waves-effect">CALL PATIENT</button>
                                       <button type="button" class="btn btn-primary m-t-15 waves-effect pull-right"  id ="callnext" style="display:none" >CALL NEXT</button>
                                </div>
                                {{ csrf_field() }}
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                    <h2>ON CALL</h2>
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <p><b>Patient Name: <p id="msg" style="display:none;"></p> 
                                    <p><b> @if($patientTobeCalled)
                                    @foreach($patientTobeCalled as $patientTobeCall)
                                    <span data-name="{{$patientTobeCall->patientname}}">{{$patientTobeCall->patientname}}</span>
                                    </b></p>
                                    <input type="checkbox" id="seen" class="filled-in2" name="seen"/>
                                    <label for="seen">Seen</label>
                                </div>
                                <div class="col-xs-6 col-sm-6 col-md-6">
                                    <p><b>Queue Number: 
                                    </b></p>
                                    <p><b>
                                    {{$patientTobeCall->queueno}}
                                    @endforeach
                                    @endif
                                    </b></p>
                                    <input type="checkbox" id="noshow" class="filled-in2" name="noshow"/>
                                    <label for="noshow">No Show</label>
                                </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="body">
                                <div id="page-wrapper">
                                 <p id="msg" style="display:none;"></p> 
                                <!-- <marquee><h1 id="speech-msg" x-webkit-speech>TICKET NAMBARI 123344</h1></marquee> -->
                                  <input type="text" readonly="readonly" value="Ticket Number A1 ; Please Proceed to Counter number 12" name="speech-msg" id="speech-msg" x-webkit-speech width="100%" style="display:none;">
                                    <div class="option" style="display:none;">
                                        <label for="voice">Voice</label>
                                        <select name="voice" id="voice"></select>
                                    </div>
                                    <div class="option" style="display:none;">
                                        <label for="volume">Volume</label>
                                        <input type="range" min="0" max="1" step="0.1" name="volume" id="volume" value="5">
                                    </div>
                                    <div class="option" style="display:none;">
                                        <label for="rate">Rate</label>
                                        <input type="range" min="0.1" max="10" step="0.1" name="rate" id="rate" value="0.4">
                                    </div>
                                    <div class="option" style="display:none;">
                                        <label for="pitch">Pitch</label>
                                        <input type="range" min="0" max="2" step="0.1" name="pitch" id="pitch" value="1">
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                    <h2>TO BE CALLED</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable queues">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Patient Name</th>
                                            <th>IP Number</th>
                                            <th>Department</th>
                                            <th>Queues</th>
                                            <th>Start date</th>
                                            <th>Called?</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @if($todaysQueue)
                                                <?php $n=0;$a=1;$b=1; ?>
                                                @foreach($todaysQueue as $todayQueue)
                                                <?php $n++;  ?>
                                                <tr>
                                                    <td><?php echo $n ?></td>
                                                    <td id="patientname">{{ $todayQueue->firstname}} &nbsp; {{ $todayQueue->lastname}}</td>
                                                    <td id="patientip">{{ $todayQueue->Encounter_ip}}</td>
                                                    <td>{{ $todayQueue->Department}}</td>
                                                    <td id="queuenumber">
                                                        @if($todayQueue->Department=='OPT')   
                                                            {{$todayQueue->Department.'-'.$a}}
                                                            <?php $a++;  ?>
                                                        @elseif($todayQueue->Department=='OTH')   
                                                        {{$todayQueue->Department.'-'.$b}}
                                                        <?php $b++;  ?>
                                                        @endif
                                                    </td>
                                                    <td id="patienttime">{{ $todayQueue->Audit_Timestamp}}</td>
                                                    
                                                    <td>YES</td>
                                                    <td><button type="button" class="btn btn-primary waves-effect">RECALL</button> </td>
                                                </tr>
                                                  
                                                @endforeach

                                            @else

                                            <p><strong>Invalid:</strong>No Patients Yet</p>

                                            @endif
                                        
                                      
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="outprint" style="display:none;">
            Welcome to CCBRT
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>
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
   $(document).ready(function () {
$('.queues').DataTable();
var jina = $(this).data('name');
});
    var fullname,queues;
   $(".queues").on("click", "#printQueue", function (){ 
          fullname = $(this).data('patientname');
          queues = $(this).data('queue');
     
        // $('.queues tr').each(function() {
            // var patName = $(".queues").find("#patientname").html();    
             // $('#outprint').append(fullname);
         // });

        PrintElem('outprint');
         // $("#outprint").printArea({ mode: 'popup', popClose: true });

    });
 //   $('.changeRoom').change(function(){
 //  $('#retrievedQueues').val('');
 // });

    // $('select.changeRoom').change(function(){

    //     var searchqueueform = $('#searchqueueform').serializeArray();
    //     var url = $('#searchqueueform').attr('action');
    //   var selectedRoom = $('select.changeRoom').val();
    
    //    $.ajax({
    //        type: 'POST',
    //       url: url,
    //       data: searchqueueform,
    //       success: function(response){ 
    //         if((response.sms==1 )){
    //             // for (var i = 0; i < response.allqueues.length; i++) {
    //             //  $(".allqs").append("<option value= "+response.allqueues[i].OC_QUEUES_OBJECTID+">" + response.allqueues[i].OC_QUEUES_QUEUENAME + "</option>");
    //             // }
    //             $.each(response.allqueues, function (i, item) {
    //                 $('#retrievedQueues').append($('<option>', { 
    //                     value: response.allqueues[i].OC_QUEUES_QUEUENAME,
    //                     text : response.allqueues[i].OC_QUEUES_QUEUENAME  
    //                 }));
    //                // alert("asdf");
    //             });
    //         }
    //       },error:function(response){
    //                  ALERT('error');
    //         }
    //     });

    // });
    $('.changeRoom').change(function(){
        if($(this).val() !=''){
            var select = $(this).attr("id");
            var value = $(this).val();
            var dependent = $(this).data('dependent');
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"{{route('getQueues')}}",
                method: "POST",
                data:{select:select, value:value, _token:_token, dependent:dependent},
                success:function(result){
                    $('#'+dependent).html(result);
                }
            })
        }
    });
    $("#noshow").change(function (){ 
      $('#callnext').toggle();
      $('#speak').toggle();
    });
    $("#seen").change(function (){ 
      $('#callnext').toggle();
      $('#speak').toggle();
    });
    function PrintElem(elem)
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');

            mywindow.document.write('<html><head><title>CCBRT</title>');
            mywindow.document.write('</head><body>');
            mywindow.document.write('<p>Name: '+ fullname +'</p>');
            mywindow.document.write('<p>IP: '+ document.getElementById("patientip").innerText +'</p>');
            mywindow.document.write('<p><center><h1><b> '+ queues +'</b></h1></center></p>');
            mywindow.document.write(document.getElementById(elem).innerHTML);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10*/

            mywindow.print();
            mywindow.close();

            return true;
        }
        function printContent(el){
            var restorepage = $('body').html();
            var printcontent = $('#' + el).clone();
            $('body').empty().html(printcontent);
            window.print();
            $('body').html(restorepage);
        }
    </script>
</body>

</html>