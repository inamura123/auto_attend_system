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
                    <!-- カラム２ -->
                    <div>
                      <label>
                        曜日
                      </label>
                      <input name="week"  type="text" >
                    </div>
                    <!-- カラム３ -->
                    <div>
                      <label>
                        開始時間
                      </label>
                      <input name="start_hour" type="text">
                    </div>
                    <!-- カラム4 -->
                    <div>
                      <label>
                        開始分
                      </label>
                      <input name="start_minute" type="text" >
                    </div>
                    <!-- カラム5 -->
                    <div>
                      <label>
                        終了時間
                      </label>
                      <input name="end_hour" type="text" >
                    </div>
                    <!-- カラム5 -->
                    <div>
                      <label>
                        終了分
                      </label>
                      <input name="end_minute" type="text" >
                    </div>
                    
                    <div>
                      <label>
                        遅刻許容分
                      </label>
                      <input name="late_minute" type="text">
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