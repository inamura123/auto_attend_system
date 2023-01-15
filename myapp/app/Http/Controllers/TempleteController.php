<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Templete;

class TempleteController extends Controller
{
    public function __construct()
    {
    // https://logsuke.com/web/programming/laravel/laravel-post-routing
    $this->middleware('auth');
    }
    
    
    public function list(){
        // https://chigusa-web.com/blog/laravel-crud/
        $templete = Templete::all();

        return view(
          'templete.list',
          ['templete' => $templete]
      );
    }
    
    public function create(){
        return view('templete.create');
    }
    
    public function store(Request $request){
        
        $request ->validate([
          'name' => ['required', 'string', 'max:100'],
          'start_hour' => ['required', 'integer','max:23'],
          'start_minute' => ['required', 'integer','max:59'],
          'end_hour' => ['required', 'integer','max:23'],
          'end_minute' => ['required', 'integer','max:59'],
          'late_minute' => ['required', 'integer'],
        ]);
        
        $data = new Templete;
        
        
        $data ->name = $request->name;
        $data ->start_hour = $request->start_hour;
        $data ->start_minute = $request->start_minute;
        $data ->end_hour = $request->end_hour;
        $data ->end_minute = $request->end_minute;
        $data ->late_minute = $request->late_minute;
        $data ->late_minute = $request->late_minute;
        $data ->timestamps = false;
        
        $data->save(); 
        
        return redirect('/templete');
    }
    // public function show(Templete $templete){
    //     return view('templete.show', ['templete' => $templete]);
    // }
    
    public function edit($templete_id){
        
        $templete = Templete::find($templete_id);
        return view('templete.edit', ['templete' => $templete]);
    }
    
    public function update(Request $request,$templete_id, Templete $templete){
        
        $request ->validate([
          'name' => ['required', 'string', 'max:100'],
          'start_hour' => ['required', 'integer','max:23'],
          'start_minute' => ['required', 'integer','max:59'],
          'end_hour' => ['required', 'integer','max:23'],
          'end_minute' => ['required', 'integer','max:59'],
          'late_minute' => ['required', 'integer'],
        ]);
        
        
        $data = Templete::find($templete_id);
        
        
        $data ->name = $request->name;
        $data ->start_hour = $request->start_hour;
        $data ->start_minute = $request->start_minute;
        $data ->end_hour = $request->end_hour;
        $data ->end_minute = $request->end_minute;
        $data ->late_minute = $request->late_minute;
        $data ->late_minute = $request->late_minute;
        $data ->timestamps = false;
        
        $data->update(); 
        
        return redirect('/templete');
        
    }
    
    public function delete($templete_id){
        $templete = Templete::find($templete_id);
        $templete->delete();
        return redirect('/templete');
    }
}