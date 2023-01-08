<h1>出席管理</h1>

<!--全エリア[START]-->
    <div>

        <!--左エリア[START]--> 
        <div>
            
            
            <!-- 本のタイトル -->
            <form action="{{ url('templete') }}" method="POST">
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
        <!--左エリア[END]--> 
    
    

</div>