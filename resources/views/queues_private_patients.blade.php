<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Queue Management System</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet" />
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet" />
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet" />
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"></script>
</head>
<body class="theme-green">
    <div class="overlay"></div>
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">QUEUE MANAGEMENT SYSTEM</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">launch</i>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">CHOOSE SCREEN</li>
                            <li class="body">
                                <ul class="menu">
                                    @if($screens)
                                        @foreach($screens as $screen)
                                        <li>
                                            <a href="{{URL::to('/displayent')}}">
                                                <div class="icon-circle bg-light-green">
                                                    <i class="material-icons">visibility</i>
                                                </div>
                                                <div class="menu-info">
                                                    <h4>{{$screen->OC_QUEUESCREEN_NAME}}</h4>
                                                </div>
                                            </a>
                                        </li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="{{URL::to('/waitingpatients')}}">Back</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <aside id="leftsidebar" class="sidebar">
            <div class="user-info">
                <div class="image">
                    <img src="images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome</div>
                    <!-- <div class="email">david.nyangi@ccbrt.org</div> -->
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
                            <li class="active">
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
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Reports</span>
                        </a>
                        <ul class="ml-menu">
                            <li class="active">
                                <a href="{{URL::to('tabular_reports')}}">
                                    <span>Tabular</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{URL::to('graphical_reports')}}">
                                    <span>Graphs</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="legal">
                <div class="copyright">
                    &copy; 2018 <a href="javascript:void(0);">CCBRT - Queue Management </a>.
                </div>
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>
        </aside>
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
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-12">
                                    <h2>TODAY'S PATIENTS</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable queues">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Patient Name <?php date_default_timezone_set('Africa/Nairobi');
                                             ?></th>
                                            <th>IP Number</th>
                                            <th>Department</th>
                                            <th>Clinic</th>
                                            <th>Ticket Printed?</th>
                                            <th>Arrival Time</th>
                                            <!-- <th>Patient Status</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @if($todaysQueue)
                                                <?php $dept="";$n=0;$a=1;$b=1;$c=1; $e=1;$po=1;$popt=1;$sopt=1;$srp=1;$prp=1;$sVV=1;$srpo=1;$prpo=1;$pgyn=1;$sgyn=1;$se=1;$sent=1;$sImaging=1;$pImaging=1;$pVV=1;?>
                                                @foreach($todaysQueue as $todayQueue)
                                                <?php $n++;  ?>
                                                <tr>
                                                    <td id="queuenumber"><?php echo $n ?></td>
                                                    <td id="patientname">{{ $todayQueue->firstname}} &nbsp; {{ $todayQueue->lastname}}</td>
                                                    <td id="patientip">{{ $todayQueue->Encounter_ip}}</td>
                                                    <td>@if(strpos($todayQueue->Department, 'PRV') !== false)
                                                    <?php $deptname = 'Private' ?>
                                                    Private
                                                    @elseif(strpos($todayQueue->Department, 'STD') !== false)
                                                    <?php $deptname = 'Standard' ?>
                                                    Standard
                                                    @endif
                                                    </td>
                                                    <td>{{substr($todayQueue->Department,4,3)}}</td>
                                                    <td>{{$todayQueue->Printed}}</td>
                                                    <td id="patienttime">{{ $todayQueue->Timea}}</td>
                                                    <!-- <td id="patientwaittime">{{ date('H:i', mktime(0,$todayQueue->Wait)) }} minutes</td> -->
                                                    <!-- <td id="patientstatus"><span class="badge badge-secondary" style="background:purple;boarder-radius:2px;">To be Called</span></td> -->
                                                    <td><button id="printQueues" type="button" class="btn btn-primary waves-effect"  data-patientname="{{ $todayQueue->firstname}} &nbsp; {{ $todayQueue->lastname}}" data-dept="{{$deptname}}" data-queue="{{$dept}}" data-patientip="{{ $todayQueue->Encounter_ip}}" data-starttime="{{ $todayQueue->Timea}}" data-waitingtime="{{ $todayQueue->Wait}}" data-encounterdept="{{ $todayQueue->Department}}" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#defaultModal">PRINT</button>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            @else
                                            <p><strong>Invalid: </strong> No Patients Yet</p>
                                            @endif
                                    </tbody>
                                </table>
                                <!-- Modal starts here -->
                                    <div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
                                        <div class="modal-dialog modal-sm" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title" id="defaultModalLabel">SELECT QUEUE</h4>
                                                </div>
                                                <div class="modal-body assignqueue">
                                                    <form  class="assignqueue-form validate-form" method="post" action="/assignqueue" id="assignqueueform">
                                                        {{ csrf_field() }}
                                                        <div class="isa_error" style="border: 2px solid #fff;height:40px;background:red;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                                               <i class="fa fa-times-circle"></i>
                                                        </div>
                                                        <div class="isa_success" style="border: 2px solid #fff;height:40px;background:green;border-radius:8px;padding-top:10px;color:#fff;font-size:12px;margin-top:-25px;margin-bottom:3px;text-align:center;display:none;">
                                                           <i class="fa fa-times-circle"></i>
                                                        </div>
                                                        <div class="form-line">
                                                            <strong>Name: </strong><div id="pname"></div>
                                                            <div class="form-line">
                                                                <input type="text" class="form-control" name = "pname2" id = "pname2" style="display:none;" />
                                                                <input type="text" class="form-control" name = "qnumber" id = "qnumber" style="display:none;" />
                                                            </div>
                                                            <strong>Dept: </strong><div class="Patient-ip" id="dept"></div>
                                                        </div><hr/>
                                                        <select class="form-control show-tick" name="qs" id="qs">
                                                            <option value="">-- Please select a queue --</option>
                                                             @if($queues)
                                                                @foreach($queues as $queue)
                                                                    <option value="{{$queue->OC_QUEUES_OBJECTID}}">{{$queue->OC_QUEUES_QUEUENAME}} ({{$queue->OC_QUEUES_ASSIGNEDDEPTID}} )</option>
                                                                @endforeach
                                                            @endif
                                                        </select>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" id="assignpatienttoqueue" class="btn btn-link waves-effect">PRINT</button>
                                                    <button type="button" id="closemodal" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal ends here -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="outprint" style="display:none;">
            <center>ASANTE NA UGUA POLE</center>
            
            <img style="display: none;" src="{{asset('images/logo.png')}}" alt="IMG">
        </div>
    </section>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('js/admin.js')}}"></script>
    <script src="{{asset('js/pages/index.js')}}"></script>
    <script src="{{asset('js/demo.js')}}"></script>
    <script type="text/javascript">
    // var win = window.open('{{URL::to('/waitingpatients')}}', '_blank');
    // if (win) {
    //     //Browser has allowed it to be opened
    //     win.focus();
    // } else {
    //     //Browser has blocked it
    //     alert('Please allow popups for this website');
    // }
    function autoRefreshPage()
    {
        window.location = window.location.href;
    }
    setInterval('autoRefreshPage()', 300000);
    $('.queues').DataTable();

    $("#closemodal").on("click", function(){
        $('.isa_error').slideUp("slow");
        $('.isa_success').slideUp("slow");
    window.location = window.location.href;
    });
    var fullname,queues,patientip,starttime,waitingtime,dept;
   $(".queues").on("click", "#printQueues", function (){ 
   
        var a  = 0 ;
     a = $(this).closest("tr")   // Finds the closest row <tr> 
                       .find("#queuenumber")     // Gets a descendent with class="nr"
                       .text();  
          fullname = $(this).data('patientname');
          queues = "Q - "+a;
          dept = $(this).data('dept');
          patientip = $(this).data('patientip');
          starttime = $(this).data('starttime');
          waitingtime = $(this).data('waitingtime');
          encounterdepartment = $(this).data('encounterdept');
        

        $(".assignqueue #dept").text(encounterdepartment);
        $(".assignqueue #pname").text(fullname);
        $(".assignqueue #pname2").val(patientip);
        $(".assignqueue #qnumber").val(a);
         // $("#outprint").printArea({ mode: 'popup', popClose: true });
       //PrintElem('outprint');
        // $.ajax({
            
        //      url :'saveQueue',
        //      type: "get",
        //     data: {fullname: fullname, 
        //         queues: queues, 
        //         patientip: patientip, 
        //         dept:dept,
        //         starttime: starttime, 
        //         waitingtime: waitingtime
        //     },
        //     success:function(response){
        //         //If Data Successfully Saved
        //         if((response.sms==1 )|| (response.sms==2)){
        //             // alert(response.sms);
        //           PrintElem('outprint');
        //         }//else {
        //         //     alert(response.sms);
        //         // }
        //     },error:function(response){
        //         alert('Error'+response);
        //     }
        // });

    });
    $('#assignpatienttoqueue').on('click',function(e){
    e.preventDefault();
           var assignqueueform = $('#assignqueueform').serializeArray();
        var url = $('#assignqueueform').attr('action');
        if(($('#qs').val()=='')){
            $('.isa_error').text('SORRY, PLEASE SELECT QUEUE NAME')
            $('.isa_error').slideDown("slow");
        }else{
          $.ajax({
                type: 'post',
                url : url,
                data: assignqueueform,
                success:function(response){
                     if((response.sms==1 )){
                        //alert(response.sms2);
                        $('.isa_error').slideUp("slow");
                        $('.isa_success').text('PATIENT SUCCESSFULLY ASSIGNED')
                        $('.isa_success').slideDown("slow");
                        if($('#qs').val()=='1')
                            var b='A - ';
                        else if($('#qs').val()=='2')
                            var b='B - ';
                        else if($('#qs').val()=='3')
                            var b='C - ';
                        else if($('#qs').val()=='4')
                            var b='D - ';
                        else if($('#qs').val()=='5')
                            var b='E - ';
                        else if($('#qs').val()=='6')
                            var b='F - ';
                        else if($('#qs').val()=='7')
                            var b='G - ';
                        else if($('#qs').val()=='8')
                            var b='H - ';
                        else if($('#qs').val()=='9')
                            var b='I - ';
                        //Display Printing Dialog
                        PrintElem('outprint',response.sms2,b);
                     }
                 },error:function(response){
                      $('.isa_error').text(response.responseJSON.error)
                      $('.isa_error').slideDown("slow");
                }
            });
        }
    });
    function PrintElem(elem, a,c)
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');
            mywindow.document.write('<html><head><title>CCBRT</title>');
            mywindow.document.write('</head><body>');
            mywindow.document.write('<center><img src="{{asset("images/logo.png")}}" height="60" width="75"/></center>');
            mywindow.document.write('<p>'+ fullname +'</p>');
            mywindow.document.write('<p>IP: '+ patientip +' &nbsp;&nbsp;&nbsp;Department: '+ dept +'</p>');
            mywindow.document.write('<span>Namba ya Tiketi Yako Ni:</span>');
            mywindow.document.write('<p><center><h1><b> '+ c +''+(a+1) +'</b></h1></center></p>');
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