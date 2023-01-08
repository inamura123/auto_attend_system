{"filter":false,"title":"create.blade.php","tooltip":"/myapp/resources/views/templete/create.blade.php","undoManager":{"mark":37,"position":37,"stack":[[{"start":{"row":0,"column":0},"end":{"row":5,"column":14},"action":"insert","lines":["<x-app-layout>","     <x-slot name=\"header\">","          <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","               {{ __('Create') }}","          </h2>","     </x-slot>"],"id":1}],[{"start":{"row":5,"column":14},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":6,"column":0},"end":{"row":6,"column":5},"action":"insert","lines":["     "]},{"start":{"row":6,"column":5},"end":{"row":7,"column":0},"action":"insert","lines":["",""]},{"start":{"row":7,"column":0},"end":{"row":7,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":1,"column":4},"end":{"row":1,"column":5},"action":"remove","lines":[" "],"id":3}],[{"start":{"row":2,"column":9},"end":{"row":2,"column":10},"action":"remove","lines":[" "],"id":4},{"start":{"row":2,"column":8},"end":{"row":2,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":4,"column":9},"end":{"row":4,"column":10},"action":"remove","lines":[" "],"id":5},{"start":{"row":4,"column":8},"end":{"row":4,"column":9},"action":"remove","lines":[" "]}],[{"start":{"row":3,"column":14},"end":{"row":3,"column":15},"action":"remove","lines":[" "],"id":6},{"start":{"row":3,"column":13},"end":{"row":3,"column":14},"action":"remove","lines":[" "]},{"start":{"row":3,"column":12},"end":{"row":3,"column":13},"action":"remove","lines":[" "]}],[{"start":{"row":5,"column":4},"end":{"row":5,"column":5},"action":"remove","lines":[" "],"id":7}],[{"start":{"row":7,"column":4},"end":{"row":22,"column":22},"action":"insert","lines":["<form action=\"{{ route('posts.create') }}\" method=\"POST\">","                    @csrf","                    <div class=\"bg-white shadow-sm sm:rounded-lg mb-10\">","                         <div class=\"p-6 flex items-center \">","                              <button type=\"submit\" class=\"rounded bg-blue-400 text-white py-2 px-3\">{{ __('Submit') }}</button>","                         </div>","                    </div>","                    <div class=\"bg-white shadow-sm sm:rounded-lg flex flex-col items-center p-6\">","                         <input type=\"text\" class=\"px-4 my-5 border shadow rounded w-3/4\" name=\"title\" placeholder=\"title\" required value=\"\">","                         ","                         <input type=\"hidden\" value=\"{{ auth()->id() }}\" name=\"user_id\">","","                         <textarea name=\"content\" class=\"p-4 my-1 border shadow rounded w-3/4\" id=\"\" cols=\"30\" rows=\"10\" required></textarea>","","                    </div>","               </form>"],"id":8}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":33},"action":"remove","lines":["posts"],"id":9},{"start":{"row":7,"column":28},"end":{"row":7,"column":29},"action":"insert","lines":["t"]},{"start":{"row":7,"column":29},"end":{"row":7,"column":30},"action":"insert","lines":["e"]}],[{"start":{"row":7,"column":28},"end":{"row":7,"column":30},"action":"remove","lines":["te"],"id":10},{"start":{"row":7,"column":28},"end":{"row":7,"column":37},"action":"insert","lines":["templetes"]}],[{"start":{"row":7,"column":36},"end":{"row":7,"column":37},"action":"remove","lines":["s"],"id":11}],[{"start":{"row":8,"column":16},"end":{"row":8,"column":20},"action":"remove","lines":["    "],"id":12},{"start":{"row":8,"column":12},"end":{"row":8,"column":16},"action":"remove","lines":["    "]},{"start":{"row":8,"column":8},"end":{"row":8,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":9,"column":16},"end":{"row":9,"column":20},"action":"remove","lines":["    "],"id":13},{"start":{"row":9,"column":12},"end":{"row":9,"column":16},"action":"remove","lines":["    "]},{"start":{"row":9,"column":8},"end":{"row":9,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":10,"column":24},"end":{"row":10,"column":25},"action":"remove","lines":[" "],"id":14},{"start":{"row":10,"column":20},"end":{"row":10,"column":24},"action":"remove","lines":["    "]},{"start":{"row":10,"column":16},"end":{"row":10,"column":20},"action":"remove","lines":["    "]},{"start":{"row":10,"column":12},"end":{"row":10,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":11,"column":29},"end":{"row":11,"column":30},"action":"remove","lines":[" "],"id":15},{"start":{"row":11,"column":28},"end":{"row":11,"column":29},"action":"remove","lines":[" "]},{"start":{"row":11,"column":24},"end":{"row":11,"column":28},"action":"remove","lines":["    "]},{"start":{"row":11,"column":20},"end":{"row":11,"column":24},"action":"remove","lines":["    "]},{"start":{"row":11,"column":16},"end":{"row":11,"column":20},"action":"remove","lines":["    "]}],[{"start":{"row":12,"column":24},"end":{"row":12,"column":25},"action":"remove","lines":[" "],"id":16},{"start":{"row":12,"column":20},"end":{"row":12,"column":24},"action":"remove","lines":["    "]},{"start":{"row":12,"column":16},"end":{"row":12,"column":20},"action":"remove","lines":["    "]},{"start":{"row":12,"column":12},"end":{"row":12,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":13,"column":16},"end":{"row":13,"column":20},"action":"remove","lines":["    "],"id":17},{"start":{"row":13,"column":12},"end":{"row":13,"column":16},"action":"remove","lines":["    "]},{"start":{"row":13,"column":8},"end":{"row":13,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":14,"column":16},"end":{"row":14,"column":20},"action":"remove","lines":["    "],"id":18},{"start":{"row":14,"column":12},"end":{"row":14,"column":16},"action":"remove","lines":["    "]},{"start":{"row":14,"column":8},"end":{"row":14,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":15,"column":24},"end":{"row":15,"column":25},"action":"remove","lines":[" "],"id":19},{"start":{"row":15,"column":20},"end":{"row":15,"column":24},"action":"remove","lines":["    "]},{"start":{"row":15,"column":16},"end":{"row":15,"column":20},"action":"remove","lines":["    "]},{"start":{"row":15,"column":12},"end":{"row":15,"column":16},"action":"remove","lines":["    "]},{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"remove","lines":["    "]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":12},"action":"insert","lines":["    "],"id":20}],[{"start":{"row":17,"column":24},"end":{"row":17,"column":25},"action":"remove","lines":[" "],"id":21},{"start":{"row":17,"column":20},"end":{"row":17,"column":24},"action":"remove","lines":["    "]},{"start":{"row":17,"column":16},"end":{"row":17,"column":20},"action":"remove","lines":["    "]},{"start":{"row":17,"column":12},"end":{"row":17,"column":16},"action":"remove","lines":["    "]}],[{"start":{"row":7,"column":3},"end":{"row":22,"column":23},"action":"remove","lines":[" <form action=\"{{ route('templete.create') }}\" method=\"POST\">","        @csrf","        <div class=\"bg-white shadow-sm sm:rounded-lg mb-10\">","            <div class=\"p-6 flex items-center \">","                <button type=\"submit\" class=\"rounded bg-blue-400 text-white py-2 px-3\">{{ __('Submit') }}</button>","            </div>","        </div>","        <div class=\"bg-white shadow-sm sm:rounded-lg flex flex-col items-center p-6\">","            <input type=\"text\" class=\"px-4 my-5 border shadow rounded w-3/4\" name=\"title\" placeholder=\"title\" required value=\"\">","                         ","            <input type=\"hidden\" value=\"{{ auth()->id() }}\" name=\"user_id\">","","                         <textarea name=\"content\" class=\"p-4 my-1 border shadow rounded w-3/4\" id=\"\" cols=\"30\" rows=\"10\" required></textarea>","","                    </div>","               </form> "],"id":22},{"start":{"row":7,"column":3},"end":{"row":63,"column":19},"action":"insert","lines":["<div>","                      <label>","                       templetes名","                      </label>","                      <input name=\"name\"  type=\"text\" >","                    </div>","                    <!-- カラム２ -->","                    <div>","                      <label>","                        曜日","                      </label>","                      <input name=\"week\"  type=\"text\" >","                    </div>","                    <!-- カラム３ -->","                    <div>","                      <label>","                        開始時間","                      </label>","                      <input name=\"start_hour\" type=\"text\">","                    </div>","                    <!-- カラム4 -->","                    <div>","                      <label>","                        開始分","                      </label>","                      <input name=\"start_minute\" type=\"text\" >","                    </div>","                    <!-- カラム5 -->","                    <div>","                      <label>","                        終了時間","                      </label>","                      <input name=\"end_hour\" type=\"text\" >","                    </div>","                    <!-- カラム5 -->","                    <div>","                      <label>","                        終了分","                      </label>","                      <input name=\"end_minute\" type=\"text\" >","                    </div>","                    ","                    <div>","                      <label>","                        遅刻許容分","                      </label>","                      <input name=\"late_minute\" type=\"text\">","                    </div>","                    ","                  </div>","                  <!-- カラム５ -->","                  <div>","                      <div>","                             <input type=\"submit\"></input>","                      </div>","                   </div>","            </form>"]}],[{"start":{"row":7,"column":8},"end":{"row":8,"column":7},"action":"insert","lines":["","       "],"id":23}],[{"start":{"row":8,"column":7},"end":{"row":12,"column":27},"action":"insert","lines":["<form action=\"{{ url('templete') }}\" method=\"POST\">","                @csrf","                  <div>","                   <!-- カラム１ -->","                      <div>"],"id":24}],[{"start":{"row":68,"column":19},"end":{"row":69,"column":0},"action":"insert","lines":["",""],"id":25},{"start":{"row":69,"column":0},"end":{"row":69,"column":12},"action":"insert","lines":["            "]},{"start":{"row":69,"column":12},"end":{"row":69,"column":13},"action":"insert","lines":["<"]}],[{"start":{"row":69,"column":13},"end":{"row":69,"column":14},"action":"insert","lines":["/"],"id":26},{"start":{"row":69,"column":14},"end":{"row":69,"column":15},"action":"insert","lines":["d"]}],[{"start":{"row":69,"column":14},"end":{"row":69,"column":15},"action":"remove","lines":["d"],"id":27},{"start":{"row":69,"column":14},"end":{"row":69,"column":17},"action":"insert","lines":["div"]}],[{"start":{"row":69,"column":17},"end":{"row":69,"column":18},"action":"insert","lines":[">"],"id":28}],[{"start":{"row":69,"column":18},"end":{"row":70,"column":0},"action":"insert","lines":["",""],"id":29},{"start":{"row":70,"column":0},"end":{"row":70,"column":12},"action":"insert","lines":["            "]},{"start":{"row":70,"column":12},"end":{"row":71,"column":0},"action":"insert","lines":["",""]},{"start":{"row":71,"column":0},"end":{"row":71,"column":12},"action":"insert","lines":["            "]}],[{"start":{"row":69,"column":8},"end":{"row":69,"column":12},"action":"remove","lines":["    "],"id":30}],[{"start":{"row":71,"column":8},"end":{"row":71,"column":22},"action":"insert","lines":["<x-app-layout>"],"id":31}],[{"start":{"row":71,"column":9},"end":{"row":71,"column":10},"action":"insert","lines":["/"],"id":32}],[{"start":{"row":71,"column":4},"end":{"row":71,"column":8},"action":"remove","lines":["    "],"id":33},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"remove","lines":["    "]}],[{"start":{"row":8,"column":37},"end":{"row":8,"column":38},"action":"insert","lines":["."],"id":34},{"start":{"row":8,"column":38},"end":{"row":8,"column":39},"action":"insert","lines":["c"]},{"start":{"row":8,"column":39},"end":{"row":8,"column":40},"action":"insert","lines":["r"]},{"start":{"row":8,"column":40},"end":{"row":8,"column":41},"action":"insert","lines":["e"]}],[{"start":{"row":8,"column":38},"end":{"row":8,"column":41},"action":"remove","lines":["cre"],"id":35},{"start":{"row":8,"column":38},"end":{"row":8,"column":44},"action":"insert","lines":["create"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":27},"action":"remove","lines":["url"],"id":36},{"start":{"row":8,"column":24},"end":{"row":8,"column":25},"action":"insert","lines":["r"]},{"start":{"row":8,"column":25},"end":{"row":8,"column":26},"action":"insert","lines":["o"]},{"start":{"row":8,"column":26},"end":{"row":8,"column":27},"action":"insert","lines":["u"]}],[{"start":{"row":8,"column":24},"end":{"row":8,"column":27},"action":"remove","lines":["rou"],"id":37},{"start":{"row":8,"column":24},"end":{"row":8,"column":30},"action":"insert","lines":["routes"]}],[{"start":{"row":8,"column":29},"end":{"row":8,"column":30},"action":"remove","lines":["s"],"id":38}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":17,"column":26},"end":{"row":17,"column":26},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":11,"state":"start","mode":"ace/mode/php_laravel_blade"}},"timestamp":1672131864579,"hash":"2defa036a8876e2a892d3bd7dbd46bb0724ceba9"}