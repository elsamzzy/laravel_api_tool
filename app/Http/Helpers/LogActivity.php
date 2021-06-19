<?php


namespace App\Http\Helpers;
use Illuminate\Http\Request;
//use Request;
use App\Models\UserLogActivities as LogActivityModel;

class LogActivity
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public static function addToLog($subject, $logtype='Audit Trail', $subjecthint=null)
    {
        $request = Request();
        $log = [];
        $log['subject'] = $subject;
        $log['log_type'] = $logtype;
        $log['subject_hint'] = $subjecthint;
        $log['log_url'] = $request->fullUrl();
        $log['log_method'] = $request->method(); // (new \Illuminate\Http\Request)->method();
        $log['ip_address'] = $request->ip();
        $log['agent'] = $request->header('user-agent'); //(new \Illuminate\Http\Request)->header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 0;
        $log['created_at'] = date("Y-m-d H:i:s");
        LogActivityModel::create($log);
    }

    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }
}
