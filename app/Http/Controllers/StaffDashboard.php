<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Request;
// use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Encounters;
use App\Queues;
class StaffDashboard extends Controller
{
	public function addparameters(){
		 try {
		   // DB::connection()->getPdo();
		 	$patientEncounters = DB::connection('sqlsrv')->select('select top 5 * from openclinic.dbo.AdminView');
		 	 $rooms = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_ROOMS');
		    return view('add_parameters', compact('patientEncounters','rooms'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function setparameters(){
		 try {
		   // DB::connection()->getPdo();
		 	$patientEncounters = DB::connection('sqlsrv')->select('select top 5 * from openclinic.dbo.AdminView');
		 	 $rooms = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_ROOMS');
		 	 $queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
		 	 $screens = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_SCREENS');
		 	 $depts = DB:: connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_SERVICEUID) from OC_ENCOUNTER_SERVICES order by OC_ENCOUNTER_SERVICEUID desc');
		    return view('set_parameters', compact('patientEncounters','rooms','queues','depts','screens'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function homepage(){
		 try {
		   date_default_timezone_set('Africa/Nairobi');
		 	 	$todaysDate = date('Y-m-d');
			 	
  				// $standard = DB::table('oc_encounters')
  				// 			->join('oc_debets', 'oc_debets.oc_debet_encounteruid', '=',  'convert(varchar,oc_encounter_serverid)+\'.\'+convert(varchar,oc_encounter_objectid)')
  				// 			->where('oc_debets.OC_DEBET_SERVICEUID', 'LIKE',  '%STD%')
  				// 			->whereBetween('convert(smalldatetime,oc_encounters.OC_ENCOUNTER_BEGINDATE)',['2018-06-15 07:30:00', '2018-06-15 08:30:59'])
  				// 			->distinct('oc_encounters.oc_encounter_patientuid');
  				
  				$standard0 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 06:00:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\'  and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard0 = collect($standard0);
			 	 	$naStandard0 = $naStandard0->count();
			 	$private0 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 06:00:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate0 = collect($private0);
			 	$naPrivate0 = $naPrivate0->count();
  				$standard = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 08:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard = collect($standard);
			 	 	$naStandard = $naStandard->count();
			 	$private = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 07:30:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 08:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate = collect($private);
			 	$naPrivate = $naPrivate->count();
			 	$standard2 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 08:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 09:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard2 = collect($standard2);
			 	 	$naStandard2 = $naStandard2->count();
			 	$private2 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 08:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 09:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate2 = collect($private2);
			 	$naPrivate2 = $naPrivate2->count();
			 	$standard3 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 09:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 10:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard3 = collect($standard3);
			 	 	$naStandard3 = $naStandard3->count();
			 	$private3 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 09:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 10:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate3 = collect($private3);
			 	$naPrivate3 = $naPrivate3->count();
			 	$standard4 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 10:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 11:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard4 = collect($standard4);
			 	 	$naStandard4 = $naStandard4->count();
			 	$private4 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 10:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 11:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate4 = collect($private4);
			 	$naPrivate4 = $naPrivate4->count();
			 	$standard5 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 11:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 12:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard5 = collect($standard5);
			 	 	$naStandard5 = $naStandard5->count();
			 	$private5 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 11:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 12:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate5 = collect($private5);
			 	$naPrivate5 = $naPrivate5->count();
			 	$standard6 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 12:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 13:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard6 = collect($standard6);
			 	 	$naStandard6 = $naStandard6->count();
			 	$private6 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 12:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 13:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate6 = collect($private6);
			 	$naPrivate6 = $naPrivate6->count();
			 	$standard7 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 13:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 14:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard7 = collect($standard7);
			 	 	$naStandard7 = $naStandard7->count();
			 	$private7 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 13:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 14:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate7 = collect($private7);
			 	$naPrivate7 = $naPrivate7->count();
			 	$standard8 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 14:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 15:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid');
			 		$naStandard8 = collect($standard8);
			 	 	$naStandard8 = $naStandard8->count();
			 	$private8 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 14:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 15:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate8 = collect($private8);
			 	$naPrivate8 = $naPrivate8->count();
			 	$standard9 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 15:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 16:30:59\' and
					OC_DEBET_SERVICEUID like \'%STD%\'
					group by oc_encounter_patientuid ');
			 		$naStandard9 = collect($standard9);
			 	 	$naStandard9 = $naStandard9->count();
			 	$private9 = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					convert(smalldatetime,OC_ENCOUNTER_BEGINDATE) BETWEEN 
					substring(convert(varchar, getdate(), 120),1,10)+\' 15:31:00\' 
					 AND substring(convert(varchar, getdate(), 120),1,10)+\' 16:30:59\' and
					OC_DEBET_SERVICEUID like \'%PRV%\'
					group by oc_encounter_patientuid');
			 	$naPrivate9 = collect($private9);
			 	$naPrivate9 = $naPrivate9->count();
			 	$todayEye = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%EYE%\'
					group by oc_encounter_patientuid ');
			 		$todayEye = collect($todayEye);
			 	 	$todayEye = $todayEye->count();
			 	 	$yesterdayEye = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%EYE%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayEye = collect($yesterdayEye);
			 	 	$yesterdayEye = $yesterdayEye->count();
			 	 	$todayOrtho = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%OTH%\'
					group by oc_encounter_patientuid ');
			 		$todayOrtho = collect($todayOrtho);
			 	 	$todayOrtho = $todayOrtho->count();
			 	 	$yesterdayOrtho = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%OTH%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayOrtho = collect($yesterdayOrtho);
			 	 	$yesterdayOrtho = $yesterdayOrtho->count();
			 	 	$todayOptical = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%OPT%\'
					group by oc_encounter_patientuid ');
			 		$todayOptical = collect($todayOptical);
			 	 	$todayOptical = $todayOptical->count();
			 	 	$yesterdayOptical = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%OPT%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayOptical = collect($yesterdayOptical);
			 	 	$yesterdayOptical = $yesterdayOptical->count();
			 	 	$todayRehab = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%RHB%\'
					group by oc_encounter_patientuid ');
			 		$todayRehab = collect($todayRehab);
			 	 	$todayRehab = $todayRehab->count();
			 	 	$yesterdayRehab = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				     dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%RHB%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayRehab = collect($yesterdayRehab);
			 	 	$yesterdayRehab = $yesterdayRehab->count();
			 	 	$todayEnt = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%ENT%\'
					group by oc_encounter_patientuid ');
			 		$todayEnt = collect($todayEnt);
			 	 	$todayEnt = $todayEnt->count();
			 	 	$yesterdayEnt = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%ENT%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayEnt = collect($yesterdayEnt);
			 	 	$yesterdayEnt = $yesterdayEnt->count();
			 	 	$todayVVF = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%VVF%\'
					group by oc_encounter_patientuid ');
			 		$todayVVF = collect($todayVVF);
			 	 	$todayVVF = $todayVVF->count();
			 	 	$yesterdayVVF = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%VVF%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayVVF = collect($yesterdayVVF);
			 	 	$yesterdayVVF = $yesterdayVVF->count();
			 	 	$todayGYN = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    substring(convert(varchar, getdate(), 120),1,10)
					 AND substring(convert(varchar, getdate(), 120),1,10)) and
					OC_DEBET_SERVICEUID like \'%GYN%\'
					group by oc_encounter_patientuid ');
			 		$todayGYN = collect($todayGYN);
			 	 	$todayGYN = $todayGYN->count();
			 	 	$yesterdayGYN = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters inner join openclinic.dbo.oc_debets on 
					 oc_debet_encounteruid=convert(varchar,oc_encounter_serverid)+\'.\'
					 +convert(varchar,oc_encounter_objectid) and
					(convert(date,OC_ENCOUNTER_BEGINDATE) BETWEEN 
				    dateadd(day,-1, cast(getdate() as date))
					 AND dateadd(day,-1, cast(getdate() as date))) and
					OC_DEBET_SERVICEUID like \'%GYN%\'
					group by oc_encounter_patientuid ');
			 		$yesterdayGYN = collect($yesterdayGYN);
			 	 	$yesterdayGYN = $yesterdayGYN->count();

			 	 	// $todaysPatients = Encounter::where(OC_ENCOUNTER_BEGINDATE)
			 	 	// $todaysPatients = Encounters::where('OC_ENCOUNTER_BEGINDATE','LIKE', '%'.$todaysDate.'%')->count();
			 	 	$todaysPatients = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters where
					(convert(date,OC_ENCOUNTER_BEGINDATE) = cast(getdate() as date))');
			 		$todaysPatients = collect($todaysPatients);
			 	 	$todaysPatients = $todaysPatients->count();
			 	 	$todaysSTDPatients = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters e, openclinic.dbo.oc_encounter_services es where
					e.OC_ENCOUNTER_OBJECTID = es.OC_ENCOUNTER_OBJECTID 
					and es.OC_ENCOUNTER_SERVICEUID like \'%STD%\' AND
					(convert(date,OC_ENCOUNTER_BEGINDATE) = cast(getdate() as date))');
			 		$todaysSTDPatients = collect($todaysSTDPatients);
			 	 	$todaysSTDPatients = $todaysSTDPatients->count();
			 	 	$todaysPRVPatients = DB::connection('sqlsrv')->select('select distinct(OC_ENCOUNTER_PATIENTUID)
					from openclinic.dbo.oc_encounters e, openclinic.dbo.oc_encounter_services es where
					e.OC_ENCOUNTER_OBJECTID = es.OC_ENCOUNTER_OBJECTID 
					and es.OC_ENCOUNTER_SERVICEUID like \'%PRV%\' AND
					(convert(date,OC_ENCOUNTER_BEGINDATE) = cast(getdate() as date))');
			 		$todaysPRVPatients = collect($todaysPRVPatients);
			 	 	$todaysPRVPatients = $todaysPRVPatients->count();

					$todaysPatientsinqueues = DB::connection('sqlsrv')->select('select OC_QUEUE_SUBJECTUID from OC_TODAYSQUEUES where convert(date, OC_QUEUE_BEGIN) = CONVERT(date, getdate())');
			 		$todaysPatientsinqueues = collect($todaysPatientsinqueues);
			 	 	$todaysPatientsinqueues = $todaysPatientsinqueues->count();
			 	 	
		 	$patientEncounters = DB::connection('sqlsrv')->select('select top 5 * from openclinic.dbo.AdminView');
		    return view('dashboard_staffs', compact('naStandard0','naPrivate0','naStandard','naPrivate','naStandard2','naPrivate2','naStandard3','naPrivate3','naStandard4','naPrivate4','naStandard5','naPrivate5','naStandard6','naPrivate6','naStandard7','naPrivate7','naStandard8','naPrivate8','naStandard9','naPrivate9','todayEye','yesterdayEye','todayOrtho','todayOptical','yesterdayOptical','todayRehab','todayEnt','todayVVF','todayGYN','yesterdayGYN','yesterdayVVF','yesterdayEnt','yesterdayRehab','yesterdayOptical','yesterdayOrtho','todaysPatients','todaysDate','todaysSTDPatients','todaysPRVPatients','todaysPatientsinqueues'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function callPatient(){
		 try {
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 * from openclinic.dbo.QueueCalls where callingstatus=\'NOT-CALLED\' order by waitingendtime desc');
			$rooms = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_ROOMS');
			$queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
		 	$todaysQueue = DB::connection('sqlsrv')->select('select top 5 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip,
				e.Encounter_Object_ID,e.Encounter_token,e.Audit_Timestamp,
				Department=STUFF((
				          SELECT distinct \',\' + substring(ee.oc_encounter_serviceuid,5,3)
				          FROM openclinic..oc_encounter_services ee
				          WHERE ee.oc_encounter_objectid = e.Encounter_Object_ID
				          FOR XML PATH(\'\'), TYPE).value(\'.\', \'NVARCHAR(MAX)\'), 1, 1, \'\')
				from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e
				where 
				cast(a.personid as varchar(100)) = e.Encounter_ip  and cast(e.Audit_Timestamp as date) = CONVERT(date, getdate()) order by Queue_id asc');
		    return view('staff_call', compact('patientTobeCalled','todaysQueue','rooms','queues'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function queuedpatients(){
		 try {
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e where cast(a.personid as varchar(100)) = e.Encounter_ip order by Queue_id asc');

		 	$todaysQueue = DB::connection('sqlsrv')->select('select e.OC_ENCOUNTER_OBJECTID Encounter_Object_ID,a.personid,a.firstname,a.middlename,a.lastname,OC_ENCOUNTER_PATIENTUID  Encounter_ip,OC_ENCOUNTER_BEGINDATE, 
OC_ENCOUNTER_SERVICEUID Department,substring(convert(varchar,cast(e.OC_ENCOUNTER_BEGINDATE  as datetime)),12,17) 
Timea,DATEDIFF (MINUTE , e.OC_ENCOUNTER_BEGINDATE,CONVERT(datetime, getdate())) AS Wait 
 from oc_encounters e, OC_ENCOUNTER_SERVICES es, ocadmin.dbo.Admin a where e.OC_ENCOUNTER_OBJECTID = es.OC_ENCOUNTER_OBJECTID and
cast(a.personid as varchar(100)) = e.OC_ENCOUNTER_PATIENTUID  and
convert(date,oc_encounter_begindate) = CONVERT(date, getdate()) and OC_ENCOUNTER_ENDDATE is null order by wait desc');
		 	$queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
		 	$screens = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_SCREENS');
		    return view('queues_patients', compact('patientTobeCalled','todaysQueue','queues','screens'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function queuedppatients(){
		 try {
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e where cast(a.personid as varchar(100)) = e.Encounter_ip order by Queue_id asc');

		 	$todaysQueue = DB::connection('sqlsrv')->select('select e.OC_ENCOUNTER_OBJECTID Encounter_Object_ID,a.personid,a.firstname,a.middlename,a.lastname,OC_ENCOUNTER_PATIENTUID  Encounter_ip,OC_ENCOUNTER_BEGINDATE, 
OC_ENCOUNTER_SERVICEUID Department,substring(convert(varchar,cast(e.OC_ENCOUNTER_BEGINDATE  as datetime)),12,17) 
Timea,DATEDIFF (MINUTE , e.OC_ENCOUNTER_BEGINDATE,CONVERT(datetime, getdate())) AS Wait 
 from oc_encounters e, OC_ENCOUNTER_SERVICES es, ocadmin.dbo.Admin a where e.OC_ENCOUNTER_OBJECTID = es.OC_ENCOUNTER_OBJECTID and es.OC_ENCOUNTER_SERVICEUID like \'%PRV%\' and
cast(a.personid as varchar(100)) = e.OC_ENCOUNTER_PATIENTUID  and
convert(date,oc_encounter_begindate) = CONVERT(date, getdate()) and OC_ENCOUNTER_ENDDATE is null order by wait desc');
		 	$queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
		 	$screens = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_SCREENS');
		    return view('queues_private_patients', compact('patientTobeCalled','todaysQueue','queues','screens'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function queuedspatients(){
		 try {
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e where cast(a.personid as varchar(100)) = e.Encounter_ip order by Queue_id asc');

		 	$todaysQueue = DB::connection('sqlsrv')->select('select e.OC_ENCOUNTER_OBJECTID Encounter_Object_ID,a.personid,a.firstname,a.middlename,a.lastname,OC_ENCOUNTER_PATIENTUID  Encounter_ip,OC_ENCOUNTER_BEGINDATE, 
OC_ENCOUNTER_SERVICEUID Department,substring(convert(varchar,cast(e.OC_ENCOUNTER_BEGINDATE  as datetime)),12,17) 
Timea,DATEDIFF (MINUTE , e.OC_ENCOUNTER_BEGINDATE,CONVERT(datetime, getdate())) AS Wait 
 from oc_encounters e, OC_ENCOUNTER_SERVICES es, ocadmin.dbo.Admin a where e.OC_ENCOUNTER_OBJECTID = es.OC_ENCOUNTER_OBJECTID and es.OC_ENCOUNTER_SERVICEUID like \'%STD%\' and
cast(a.personid as varchar(100)) = e.OC_ENCOUNTER_PATIENTUID  and
convert(date,oc_encounter_begindate) = CONVERT(date, getdate()) and OC_ENCOUNTER_ENDDATE is null order by wait desc');
		 	$queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
		 	$screens = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_SCREENS');
		    return view('queues_standard_patients', compact('patientTobeCalled','todaysQueue','queues','screens'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
	public function addQueue(Request $request){
		try{
				 $fullname = $request->fullname;
				 $queues = $request->queues;
                 $patientip = $request->patientip; 
                 $starttime = $request->starttime; 
                 $waitingtime = $request->waitingtime;
                 $dept = $request->dept;
				 $calling = "NOT-CALLED";
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $patientTobeCalled = DB::connection('sqlsrv')->insert('insert into openclinic.dbo.queuecalls(patientname,queueno,Encounter_ip,waitingstarttime,waitingendtime,Department,created_at,callingstatus) values (?,?,?,?,?,?,?,?)',[$fullname,$queues,$patientip,$starttime,$waitingtime,$dept,$todaysdate,$calling]);
                 if($patientTobeCalled)
	            return response()->json(array('sms'=>'1'));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}

	public function display(){
		$currentPatient = DB::connection('sqlsrv')->select('select top 1 * from openclinic.dbo.OC_TODAYSQUEUES where oc_queue_id = 1 and convert(date,OC_QUEUE_BEGIN) = convert(date, getdate()) and OC_QUEUE_END is null order by OC_QUEUE_BEGIN asc');
		$threePatients = DB::connection('sqlsrv')->select('select top 4 * from openclinic.dbo.OC_TODAYSQUEUES where oc_queue_id = 1 and convert(date,OC_QUEUE_BEGIN) = convert(date, getdate()) and OC_QUEUE_END is null order by OC_QUEUE_BEGIN asc');
		$screens = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_SCREENS');
		return view('display_ent', compact('currentPatient','threePatients','screens'));
	}

	public function displayeye(){
		$currentPatient = DB::connection('sqlsrv')->select('select top 1 * from openclinic.dbo.OC_TODAYSQUEUES where oc_queue_id = 2 and convert(date,OC_QUEUE_BEGIN) = convert(date, getdate()) and OC_QUEUE_END is null order by OC_QUEUE_BEGIN asc');
		$threePatients = DB::connection('sqlsrv')->select('select top 4 * from openclinic.dbo.OC_TODAYSQUEUES where oc_queue_id = 2 and convert(date,OC_QUEUE_BEGIN) = convert(date, getdate()) and OC_QUEUE_END is null order by OC_QUEUE_BEGIN asc');

		return view('display_eye', compact('currentPatient','threePatients'));
	}

	public function saverooms(Request $request){
		try{
				 $roomname = $request->roomname;
				 $roomdescription = $request->roomdesc;
                
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $saveRoom = DB::connection('sqlsrv')->insert('insert into openclinic.dbo.OC_QUEUE_ROOMS(OC_QUEUEROOM_ROOMNAME,OC_QUEUEROOM_ROOMDESC,OC_QUEUEROOM_CREATETIME) values (?,?,?)',[$roomname,$roomdescription,$todaysdate]);
                 $rooms = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_ROOMS');
                 if($saveRoom)
	            return response()->json(array('sms'=>'1','availablerooms'=>$rooms));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function savequeues(Request $request){
		try{
				 $queuename = $request->queuename;
				 $queuedescription = $request->queuedesc;
                
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $saveQueue = DB::connection('sqlsrv')->insert('insert into openclinic.dbo.OC_AVAILABLEQUEUES(OC_QUEUES_QUEUENAME,OC_QUEUES_QUEUEDESC,OC_QUEUES_CREATETIME) values (?,?,?)',[$queuename,$queuedescription,$todaysdate]);
                 $queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
                 if($saveQueue)
	            return response()->json(array('sms'=>'1','availablequeues'=>$queues));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function assignqueuetoroom(Request $request){
		try{
				 $q = $request->qs;
				 $r = $request->rm;
                
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $saveQueue = DB::connection('sqlsrv')->update('update openclinic.dbo.OC_AVAILABLEQUEUES set OC_QUEUES_ASSIGNEDROOMID=? where OC_QUEUES_OBJECTID=?',[$r,$q]);
                 $queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
                 if($saveQueue)
	            return response()->json(array('sms'=>'1','availablequeues'=>$queues));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function assignqueuetodepts(Request $request){
		try{
				 $qs = $request->q;
				 $dpts = $request->dpt;
                
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $saveQueue = DB::connection('sqlsrv')->update('update openclinic.dbo.OC_AVAILABLEQUEUES set OC_QUEUES_ASSIGNEDDEPTID=? where OC_QUEUES_OBJECTID=?',[$dpts,$qs]);
                // $queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
                 if($saveQueue)
	            return response()->json(array('sms'=>'1'));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
   	public function assignpatienttoqueue(Request $request){
		try{
				$pname = $request->pname2;
				$qs = $request->qs;
				$token = $request->qnumber;
				
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $saveQueue = DB::connection('sqlsrv')->insert('insert into openclinic.dbo.OC_TODAYSQUEUES(OC_QUEUE_ID,OC_QUEUE_SUBJECTUID,OC_QUEUE_BEGIN,OC_QUEUE_PATIENTNUMBER) values (?,?,?,?)',[$qs,$pname,$todaysdate,$token]);
                // $queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
                 if($saveQueue)
	            return response()->json(array('sms'=>'1'));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function getroomsqueue(Request $request){
		try{
				$chosenroom = $request->changeRoom;
				$qs = $request->qs;
				$token = $request->qnumber;
				
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $assignedQueues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES where 
                 	OC_QUEUES_ASSIGNEDROOMID=?',[$chosenroom]);
                // $queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
                 if($assignedQueues)
	            return response()->json(array('sms'=>'1', 'allqueues'=>$assignedQueues));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function setDefaultDisplayQueue(Request $request){
		try{
				$screenname = $request->screenname;
				$qscreen = $request->qscreen;
				
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 
                 $saveScreenQueue = DB::connection('sqlsrv')->update('update openclinic.dbo.OC_QUEUE_SCREENS set OC_QUEUESCREEN_QUEUE=? where OC_QUEUESCREEN_OBJECTID=?',[$qscreen,$screenname]);
                 if($saveScreenQueue)
	            return response()->json(array('sms'=>'1'));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function savescreens(Request $request){
		try{
				 $screenname = $request->screenname;
				 $screendesc = $request->screendesc;
                
				 date_default_timezone_set('Africa/Nairobi');
				 $todaysdate = date('Y-m-d h:i:s a', time());
                 $saveScreen = DB::connection('sqlsrv')->insert('insert into openclinic.dbo.OC_QUEUE_SCREENS(OC_QUEUESCREEN_NAME,OC_QUEUESCREEN_DESC,OC_QUEUESCREEN_CREATETIME) values (?,?,?)',[$screenname,$screendesc,$todaysdate]);
                
                 if($saveScreen)
	            return response()->json(array('sms'=>'1'));
        		else
	            return response()->json(array('sms'=>'2'));
		}catch(\Exception $e) {
			return response()->json(array('sms'=>'Information NOT saved!!'));
		}
	}
	public function getLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}