<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
     
   <div>
       <form action="{{ route('templete.create') }}" method="POST">
                @csrf
                  <div>
                   <!-- カラム１ -->
                      <div>
                      <label>
                       templetes名
                      </label>
                      <input name="name"  type="text" >
                    </div>
                    
                    <!-- カラム３ -->
                    <div>
                      <label>
                        開始時間
                      </label>
                      <select name="start_hour" >
                      @for ($i = 0; $i < 24; $i++)
                      <option value='{{$i}}'>{{$i}}</option>
                      @endfor
                      </select>
                    </div>
                    <!-- カラム4 -->
                    <div>
                      <label>
                        開始分
                      </label>
                      <select name="start_minute" >
                      @for ($i = 0; $i < 60; $i++)
                      <option value='{{$i}}'>{{$i}}</option>
                      @endfor
                      </select>
                    </div>
                    <!-- カラム5 -->
                    <div>
                      <label>
                        終了時間
                      </label>
                      <select name="end_hour" >
                      @for ($i = 0; $i < 24; $i++)
                      <option value='{{$i}}'>{{$i}}</option>
                      @endfor
                      </select>
                    </div>
                    <!-- カラム5 -->
                    <div>
                      <label>
                        終了分
                      </label>
                      <select name="end_minute" >
                      @for ($i = 0; $i < 60; $i++)
                      <option value='{{$i}}'>{{$i}}</option>
                      @endfor
                      </select>
                    </div>
                    
                    <div>
                      <label>
                        遅刻許容分
                      </label>
                      <select name="late_minute" >
                      @for ($i = 1; $i <= 60; $i++)
                      <option value='{{$i}}'>{{$i}}</option>
                      @endfor
                      </select>
                    </div>
                    
                  </div>
                  <!-- カラム５ -->
                  <div>
                      <div>
                             <input type="submit"></input>
                      </div>
                   </div>
            </form>
        </div>
            
</x-app-layout>    