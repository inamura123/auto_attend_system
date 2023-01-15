<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Create') }}
        </h2>
    </x-slot>
     
   <div>
       <form action="{{ route('event.create') }}" method="POST">
                @csrf
                  <div>
                   <!-- カラム１ -->
                      <div>
                      <label>
                       event名
                      </label>
                      <input name="event_name"  type="text" >
                    </div>
                    <!-- カラム２ -->
                    <div>
                        
                      <label>
                        セットテンプレート
                      </label>
                      <select name="templete_id" >
                      @foreach ($templete as $temp)
                      <option value='{{$temp->templete_id}}'>{{$temp->name}}</option>
                      @endforeach
                      </select>
                    </div>
                  </div>
                    
                    <div>
                        <label>
                        イベント日
                    </label>
                  <input type="date" name="event_at"
                        value="2023-01-01"
                    min="2023-01-01" max="2023-12-31">
                  </div>
                  <div>
                      <div>
                             <input type="submit"></input>
                      </div>
                   </div>
            </form>
        </div>
            
</x-app-layout>
