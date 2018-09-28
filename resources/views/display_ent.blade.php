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
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">QUEUE MANAGEMENT SYSTEM</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                  <!--   <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">launch</i></a></li> -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">launch</i>
                            <!-- <span class="label-count">7</span> -->
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="container" style="height: auto;margin-top: 80px;margin-left: 1px;margin-right: 1px;width: 100%;">
            <div class="row">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="card" style="height:80%;margin-top: 10%;margin-bottom: 10%;">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <h2>UPCOMING</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            @if($threePatients)
                             <?php $n = 0; ?>
                                    @foreach($threePatients as $threePatient)
                                        @if($n==0)
                                        <center><h1  style="font-size: 1px;display: none;"> {{$threePatient->OC_QUEUE_PATIENTNUMBER}}</h1></center>
                                        <?php $n++; ?>
                                        @else
                                        <center><h1  style="font-size: 100px;"> {{$threePatient->OC_QUEUE_PATIENTNUMBER}}</h1></center> <hr/>
                                        @endif
                                    @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                    <div class="card" style="height:80%;margin-top: 5%;margin-bottom: 10%;">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                <h2>CURRENT PATIENT</h2>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                        <center style="font-size: 50px;">Ticket Number</center>
                        <center>
                            <h1  style="font-size: 160px;">
                                @if($currentPatient)
                                     @foreach($currentPatient as $current)
                                        {{$current->OC_QUEUE_PATIENTNUMBER}}
                                     @endforeach
                                @endif
                                </div>
                            </h1>
                        </center> 
                        <center style="font-size: 50px;">Proceed to</center>
                        <center style="font-size: 25px;">ROOM 1</center>
                        <hr/>
                        </div>
                    </div>
                </div>
                
            </div>
    </div>
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
    // var win = window.open('http://stackoverflow.com/', '_blank');
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
    setInterval('autoRefreshPage()', 5000);
    $('.queues').DataTable();

    var fullname,queues,patientip,starttime,waitingtime,dept;
   $(".queues").on("click", "#printQueue", function (){ 
    
          fullname = $(this).data('patientname');
          queues = $(this).data('queue');
          dept = $(this).data('dept');
          patientip = $(this).data('patientip');
          starttime = $(this).data('starttime');
          waitingtime = $(this).data('waitingtime');
        
         // $("#outprint").printArea({ mode: 'popup', popClose: true });
       //PrintElem('outprint');
        $.ajax({
            
             url :'saveQueue',
             type: "get",
            data: {fullname: fullname, 
                queues: queues, 
                patientip: patientip, 
                dept:dept,
                starttime: starttime, 
                waitingtime: waitingtime
            },
            success:function(response){
                //If Data Successfully Saved
                if((response.sms==1 )|| (response.sms==2)){
                    // alert(response.sms);
                  PrintElem('outprint');
                }//else {
                //     alert(response.sms);
                // }
            },error:function(response){
                alert('Error'+response);
            }
        });

    });

    function PrintElem(elem)
        {
            var mywindow = window.open('', 'PRINT', 'height=400,width=600');
            mywindow.document.write('<html><head><title>CCBRT</title>');
            mywindow.document.write('</head><body>');
            mywindow.document.write('<center><img src="http://192.168.2.19/queue/images/a.jpg" height="50" width="50"/></center>');
            mywindow.document.write('<p>Name: '+ fullname +'</p>');
            mywindow.document.write('<p>IP: '+ patientip +' &nbsp;&nbsp;&nbsp;Department: '+ dept +'</p>');
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