<?php 
// PHP program to demonstrate the strtotime() 
// function when the english text is a date 

\DB::table('myTable')
    ->where('created_at', '>', 
        Carbon::now()->subHours(3)->toDateTimeString()
    );
// prints the converted english text in second 
echo strtotime("12th february 2017"), "\n"; 

// prints the above time in date format 
echo date("d-M-Y H:s a", strtotime("now"))."\n"; 

$created_at = date("Y-m-d H:i:s");
echo $created_at;
?>

{{date('d M Y h:i A', strtotime($val['event_date']))}}
o/p
16 Feb 2021 20:57 PM

diffforhumans();

date("Y-m-d H:i:s", 1388516401);


current date records
$posts = Post::whereDate('created_at', Carbon::today())->get();.


refrence link-: https://www.digitalocean.com/community/tutorials/easier-datetime-in-laravel-and-php-with-carbon

<!-- $dt = Carbon::now();


// set some things
$dt->year   = 2015;
$dt->month  = 04;
$dt->day    = 21;
$dt->hour   = 22;
$dt->minute = 32;
$dt->second = 5;

// get some things
var_dump($dt->year);
var_dump($dt->month);
var_dump($dt->day);
var_dump($dt->hour);
var_dump($dt->second);
var_dump($dt->dayOfWeek);
var_dump($dt->dayOfYear);
var_dump($dt->weekOfMonth);
var_dump($dt->daysInMonth); -->

<!-- ----------======================== date formate===========------------------------ -->
<!-- refernece link-: digitalocean.com/community/tutorials/easier-datetime-in-laravel-and-php-with-carbon 
 echo $dt->addYears(5);                   // 2017-01-31 00:00:00
echo $dt->addYear();                     // 2018-01-31 00:00:00
echo $dt->subYear();                     // 2017-01-31 00:00:00
echo $dt->subYears(5);                   // 2012-01-31 00:00:00

echo $dt->addMonths(60);                 // 2017-01-31 00:00:00
echo $dt->addMonth();                    // 2017-03-03 00:00:00 equivalent of $dt->month($dt->month + 1); so it wraps
echo $dt->subMonth();                    // 2017-02-03 00:00:00
echo $dt->subMonths(60);  -->

<!-- ///// output 
reference link
https://www.geeksforgeeks.org/php-strtotime-function/
 -->
<!-- 1486857600
07-Jan-2021 10:44 am -->
<!-- 
cron job-: reference link-:https://www.itsolutionstuff.com/post/laravel-8-cron-job-task-scheduling-tutorialexample.html

step 1-: php artisan make:command BillingCron --command=demo:cron -->
Carbon::now() ==> I want as ==> Carbon::now() – 10days

$users = Users::where('status_id', 'active')
               ->where( 'created_at', '<', Carbon::now())
               ->get();
$users = Users::where('status_id', 'active')
           ->where( 'created_at', '>', Carbon::now()->subDays(10))
           ->get();

-------==================imp link for date filter for current and last year records=--------==

refrence link-: https://www.tutsmake.com/laravel-get-record-last-week-month-15-days-year/#:~:text=Laravel%20Get%20Last%20Year%20Record,to%20fetch%20records%20from%20db.

Get Last 15 Days & 30 Days Records in Laravel

$last_15_days = User::where('created_at','>=',Carbon::now()->subdays(15))->get(['name','created_at']);

 $last_30_days = User::where('created_at','>=',Carbon::now()->subdays(30))->get(['name','created_at']);

 Laravel Get Last Year Record

 User::whereYear('created_at', date('Y', strtotime('-1 year')))->get(['name','created_at']);


 ========How to Get Current Month Records In Laravel?=========

 $users = DB::table('users')
                    ->whereYear('created_at', Carbon::now()->year)
                    ->whereMonth('created_at', Carbon::now()->month)
                    ->get();


--------==========change date formate using model laravel remove tz------=================
use DateTimeInterface;
protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
=============-------------multi where clause laravel----------------=====================
    $results = DB::table('table')
             ->where(function($query) use ($starttime,$endtime){
                 $query->where('starttime', '<=', $starttime);
                 $query->where('endtime', '>=', $endtime);
             })
             ->orWhere(function($query) use ($otherStarttime,$otherEndtime){
                 $query->where('starttime', '<=', $otherStarttime);
                 $query->where('endtime', '>=', $otherEndtime);
             })
             ->orWhere(function($query) use ($anotherStarttime,$anotherEndtime){
                 $query->where('starttime', '>=', $anotherStarttime);
                 $query->where('endtime', '<=', $anotherEndtime);
             })
             ->get();


get_class_methods(class)
================================Eloquent fetch records within recent 3 hours==========
\DB::table('myTable')
    ->where('created_at', '>', 
        Carbon::now()->subHours(3)->toDateTimeString()
    );

public function scopeRecent($query)
{
    return $query-> whereDate('created_at ' , '=',Carbon::today())
        ->whereTime('created_at' , '>',Carbon::now()->subHours(3));

}questionLists
claimedQuestion (question is claimed by doctors)
unclaimedQuestion (question is unclaimed by doctors)

answerQuestion (question is answer by doctors)
categoriesList (list of categoies)
forgotPassword (forgot password)
validateToken (to check the valid token)
resetPassword (set the passwords)
getProfile (get the detail of doctor profiles)
updateProfile (update the detail of doctor profiles)
uploadMedia (upload doctor profile picture)
getQuestionDetail (get the question details).
profileReload (reload the doctor profile)
flag (update the status of flag)
logout (logout doctor portal)
saveCurrentLanguage (change langauges by doctor)

http://15.207.86.109/api/available-bookings?start_date=2021-10-12&end_date=2021-10-14&number_of_person=40&number_of_houre=8