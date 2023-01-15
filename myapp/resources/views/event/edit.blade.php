<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Edit') }}
        </h2>
    </x-slot>
     
   <div>
       <form action="{{ route('event.update', ['event_id' =>  $event->event_id]) }}" method="POST">
            @csrf
            <div>
                <div>
                    <label>event名</label>
                    <input name="event_name"  type="text" value={{$event->event_name}}>
                </div>
                    
                <div>
                    <label>セットテンプレート</label>
                    <select name="templete_id" >
                        @foreach ($templete as $temp)
                            @if($temp->templete_id == $event->templete_id)
                                <option value='{{$temp->templete_id}}' selected>{{$temp->name}}</option>
                            @else
                                <option value='{{$temp->templete_id}}'>{{$temp->name}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                    
                <div>
                    <label>イベント日</label>
                    <input type="date" name="event_at"
                        value={{$event->event_at}}
                    min="2023-01-01" max="2023-12-31" >
                </div>
                 
                <div>
                    <div>
                        <input type="submit"></input>
                    </div>
                </div>
            </form>
        </div>
            
</x-app-layout>
