<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Question;
use App\TimerSession;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::post('/post/login', function (Request $req) {

    $credentials = $req->only('email', 'password');
    $auth = Auth::attempt($credentials);
    // dd($auth);
    // // dd($credentials);
    // if (Auth::attempt($credentials)) {
    //     // Authentication passed...
    //     return "login";
    // } else {
    //     return "not login";
    // }
    // dd(Auth::attempt($credentials));
});

Route::get('/questions', function (Request $req) {
    $step_id = $req->step_id;
    $questions = Question::where('id_step_qus', $step_id)->get();
    if (!$questions) {
        return 'select question right';
    }
    $count = $questions->count();

    $user_timer_session = TimerSession::where([
        ['user_id', 271],
        ['step_id', $step_id],
    ])->first();


    if (!$user_timer_session) {
        // create a new sewssion
        $user_timer_session =  TimerSession::insert([
            'user_id' => 271,
            'step_id' => $step_id,
            'expires_in' => Carbon::now()->addMinutes(10)->toDateTimeString()
        ]);
        $min_remain = 10;
        return view('questions', compact('questions', 'count', 'min_remain'));
    }

    $exp = $user_timer_session->expires_in;
    // check if expired

    $exp_date = Carbon::parse($exp);

    if (Carbon::parse($exp_date)->isPast()) {
        return redirect('/timeout');
    }

    $min_remain = Carbon::now()->diffInMinutes($exp);
    return view('questions', compact('questions', 'count', 'min_remain'));
});

Route::get('timeout', function () {
    return view('timeout');
});
