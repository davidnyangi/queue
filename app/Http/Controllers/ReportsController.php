<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ReportsController extends Controller
{

	public function getTables(){
    try {
		 	$patientTobeCalled = DB::connection('sqlsrv')->select('select top 1 a.personid,a.firstname,a.middlename,a.lastname,e.Encounter_ip from ocadmin.dbo.Admin a, openclinic.dbo.Encounter_queue_tokens e where cast(a.personid as varchar(100)) = e.Encounter_ip order by Queue_id asc');

		 	$todaysQueue = DB::connection('sqlsrv')->select('select e.OC_ENCOUNTER_OBJECTID Encounter_Object_ID,
case when (a.personid IN(SELECT distinct(OC_QUEUE_SUBJECTUID)
  FROM [openclinic].[dbo].[OC_TODAYSQUEUES] where convert(date,OC_QUEUE_BEGIN) = CONVERT(date, getdate()))) then \'YES\'
ELSE \'NO\' END AS \'Printed\',
case when (a.personid IN(select distinct(h.personId) from Transactions t, Healthrecord h
          where
          t.healthRecordId = h.healthRecordId and
          (CONVERT(date, t.ts, 103) = CONVERT(date, getdate()) ) and
          ((transactionType = \'be.mxs.common.model.vo.healthrecord.IConstants.TRANSACTION_TYPE_CCBRT_ENTCONSULTATION\')
          or (transactionType = \'be.mxs.common.model.vo.healthrecord.IConstants.TRANSACTION_TYPE_CCBRT_SURGERYCONSULTATION\')
          or (transactionType = \'be.mxs.common.model.vo.healthrecord.IConstants.TRANSACTION_TYPE_CCBRT_PHYSIO_REGISTRY\')
          or (transactionType = \'be.mxs.common.model.vo.healthrecord.IConstants.TRANSACTION_TYPE_CCBRT_PO_REGISTRY\')
          ))) then \'SEEN-THE-DOCTOR\'
ELSE \'WAITING-FOR-DOCTOR\' END AS \'pstatus\',a.personid,a.firstname,a.middlename,a.lastname,OC_ENCOUNTER_PATIENTUID  Encounter_ip,OC_ENCOUNTER_BEGINDATE, 
OC_ENCOUNTER_SERVICEUID Department,substring(convert(varchar,cast(e.OC_ENCOUNTER_BEGINDATE  as datetime)),12,17) 
Timea,DATEDIFF (MINUTE , e.OC_ENCOUNTER_BEGINDATE,CONVERT(datetime, getdate())) AS Wait 
 from oc_encounters e, OC_ENCOUNTER_SERVICES es, ocadmin.dbo.Admin a where e.OC_ENCOUNTER_OBJECTID = es.OC_ENCOUNTER_OBJECTID and es.OC_ENCOUNTER_SERVICEUID like \'%PRV%\' and
cast(a.personid as varchar(100)) = e.OC_ENCOUNTER_PATIENTUID  and
convert(date,oc_encounter_begindate) = CONVERT(date, getdate()) and OC_ENCOUNTER_ENDDATE is null order by wait asc');
		 	$queues = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_AVAILABLEQUEUES');
		 	$screens = DB::connection('sqlsrv')->select('select * from openclinic.dbo.OC_QUEUE_SCREENS');
		    return view('table_report', compact('patientTobeCalled','todaysQueue','queues','screens'));
		} catch (\Exception $e) {
		    die("Could not connect to the database.  Please check your configuration.");
		}
	}
}
