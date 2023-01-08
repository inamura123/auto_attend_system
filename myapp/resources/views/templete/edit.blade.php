<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               {{ __('Templete') }}
          </h2>
     </x-slot>

<h1>{{$templete->templete_id}}を編集する</h1>

 <form action="{{ route('templete.update', ['templete_id' =>  $templete->templete_id]) }}" method="POST">
  @csrf
  <div>
    <div>
      <label>templetes名</label>
      <input name="name"  type="text" value={{$templete->name}}>
    </div>
  
    <div>
      <label>曜日</label>
      <input name="week"  type="text" value={{$templete->week}}>
    </div>
  
    <div>
      <label>開始時</label>
      <input name="start_hour" type="text" value={{$templete->start_hour}}>
    </div>
    
    <div>
      <label>開始分</label>
      <input name="start_minute" type="text" value={{$templete->start_minute}}>
    </div>
    
    <div>
      <label>終了時</label>
      <input name="end_hour" type="text" value={{$templete->end_hour}}>
    </div>
    
    <div>
      <label>終了分</label>
      <input name="end_minute" type="text" value={{$templete->end_minute}}>
    </div>
    
    <div>
      <label>遅刻許容分</label>
      <input name="late_minute" type="text" value={{$templete->late_minute}}>
    </div>
    
    <div>
      <input type="submit"></input>
    </div>
    
  </form>
  
  </x-app-layout>