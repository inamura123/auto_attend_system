<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Templete;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DateTime;
use Carbon\Carbon;

class EventController extends Controller
{
    //
    public function __construct()
    {
    // https://logsuke.com/web/programming/laravel/laravel-post-routing
    $this->middleware('auth');
    }
    
    
    public function list(){
        // https://chigusa-web.com/blog/laravel-crud/
        
        $id = auth()->id();
        
        $event = Event::where('user_id', $id)->get();
        
        return view(
          'event.list',
          ['event' => $event]
      );
    }
    
    public function create(){
        
        $templete = Templete::all();
        
        return view('event.create',['templete' => $templete]);
    }
    
    public function store(Request $request){
        
        $request ->validate([
          'event_name' => ['required', 'string', 'max:100'],
          'event_at' => ['required', 'date'],
        ]);
        
        // 作成ユーザ取得
        $id = auth()->id();
        
        $templete = Templete::find($request->templete_id);
        
        if(strlen($templete->start_hour) == 1){
            $shour = '0' . $templete->start_hour;
        }else{
            $shour = $templete->start_hour;
        }
        
        if(strlen($templete->start_minute) == 1){
            $sminute = '0' . $templete->start_minute;
        }else{
            $sminute = $templete->start_minute;
        }
        
        if(strlen($templete->end_hour) == 1){
            $ehour = '0' . $templete->end_hour;
        }else{
            $ehour = $templete->end_hour;
        }
        
        if(strlen($templete->end_minute) == 1){
            $eminute = '0' . $templete->end_minute;
        }else{
            $eminute = $templete->end_minute;
        }
        
        $start_time = $shour . $sminute;
        $end_time = $ehour . $eminute;
        
        // 入力日取得
        $setdate = new DateTime($request->event_at);
        
        $dt1 = new Carbon($setdate);
        
        $dt = Carbon::now();
        
        $nowdate = date('H') . date('i');
        
        $flag = 0;
        if($dt1->isToday()){
            if($start_time <= $nowdate){
                if($end_time >= $nowdate){
                    $flag = 1;
                }
            }
        }
        
        $data = new Event;
    
        $data ->user_id = $id;
        $data ->templete_id = $request->templete_id;
        $data ->event_name = $request->event_name;
        $data ->status = $flag;
        $data ->event_at = $request->event_at;
        $data ->timestamps = false;
        
        $data->save(); 
        
        return redirect('/event');
    }
    
    public function edit($event_id){
        $templete = Templete::all();
        
        $event = Event::find($event_id);
        return view('event.edit', ['event' => $event],['templete'=>$templete]);
    }
    
    public function update(Request $request,$event_id){
        
        $request ->validate([
          'event_name' => ['required', 'string', 'max:100'],
          'event_at' => ['required', 'date'],
        ]);
        
        $data = Event::find($event_id);
        
        $data ->templete_id = $request->templete_id;
        $data ->event_name = $request->event_name;
        $data ->event_at = $request->event_at;
        $data ->timestamps = false;
        
        $data->save();
        
        return redirect('/event');
    }
    
    public function delete($event_id){
        $event = Event::find($event_id);
        $event->delete();
        return redirect('/event');
    }
    
    public function check($event_id){
        
        $status_flag = $this->status_check($event_id);
        
        
        $data = Event::find($event_id);
        
        $data ->status = $status_flag;
        $data ->timestamps = false;
        
        $data->update(); 
        
        return redirect('/event');
    }
    
    private function status_check($id){
        
        
        $item = Event::where('event_id', $id)->first();
        
        $templete = Templete::where('templete_id',$item->templete_id)->first();
        
        
        if(strlen($templete->start_hour) == 1){
            $shour = '0' . $templete->start_hour;
        }else{
            $shour = $templete->start_hour;
        }
        
        if(strlen($templete->start_minute) == 1){
            $sminute = '0' . $templete->start_minute;
        }else{
            $sminute = $templete->start_minute;
        }
        
        if(strlen($templete->end_hour) == 1){
            $ehour = '0' . $templete->end_hour;
        }else{
            $ehour = $templete->end_hour;
        }
        
        if(strlen($templete->end_minute) == 1){
            $eminute = '0' . $templete->end_minute;
        }else{
            $eminute = $templete->end_minute;
        }
        
        $start_time = $shour . $sminute;
        $end_time = $ehour . $eminute;
        
        
        // 入力日取得
        $setdate = new DateTime($item->event_at);
        
        $dt1 = new Carbon($setdate);
        
        
        $nowdate = date('H') . date('i');
        
        $flag = 0;
        if($dt1->isToday()){
            if($start_time <= $nowdate){
                if($end_time >= $nowdate){
                    $flag = 1;
                }
            }
        }
        
        return $flag;
    }
    
}
