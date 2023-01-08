{"filter":false,"title":"show.blade.php","tooltip":"/myapp/resources/views/templete/show.blade.php","undoManager":{"mark":16,"position":16,"stack":[[{"start":{"row":0,"column":0},"end":{"row":5,"column":14},"action":"insert","lines":["<x-app-layout>","     <x-slot name=\"header\">","          <h2 class=\"font-semibold text-xl text-gray-800 leading-tight\">","               {{ __('Show') }}","          </h2>","     </x-slot>"],"id":1}],[{"start":{"row":5,"column":14},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2},{"start":{"row":6,"column":0},"end":{"row":6,"column":5},"action":"insert","lines":["     "]},{"start":{"row":6,"column":5},"end":{"row":7,"column":0},"action":"insert","lines":["",""]},{"start":{"row":7,"column":0},"end":{"row":7,"column":5},"action":"insert","lines":["     "]}],[{"start":{"row":7,"column":5},"end":{"row":20,"column":52},"action":"insert","lines":["<div class=\"py-12\">","          <div class=\"max-w-7xl mx-auto sm:px-6 lg:px-8\">","","               <div class=\"bg-white shadow-sm sm:rounded-lg mb-10\">","                    <div x-data=\"{toggle : false}\" class=\"p-6 flex items-center justify-between\">","","                         <a href=\"{{ route('posts.edit', $post->id) }}\">","                              <button class=\"rounded bg-green-400 text-white py-2 px-3\">編集</button>","                         </a>","                         <button x-show=\"!toggle\" @click=\"toggle = ! toggle\" class=\"p-2 bg-blue-400 rounded text-white\">削除</button>","                         <div x-show=\"toggle\" @click.away=\"toggle = false\" class=\"flex items-center mx-3 justify-between\" x-transition:enter=\"transition transform ease-out duration-300\" x-transition:enter-start=\"-translate-x-5 opacity-0\" x-transition:enter-end=\"translate-x-0\">","                              <form method=\"post\" action=\"{{ route('posts.destroy', $post->id) }}\">","                                   @csrf","                                   @method('DELETE')"],"id":5}],[{"start":{"row":13,"column":48},"end":{"row":13,"column":49},"action":"remove","lines":["s"],"id":6},{"start":{"row":13,"column":47},"end":{"row":13,"column":48},"action":"remove","lines":["t"]},{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"remove","lines":["s"]},{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"remove","lines":["o"]},{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"remove","lines":["p"]}],[{"start":{"row":13,"column":44},"end":{"row":13,"column":45},"action":"insert","lines":["t"],"id":7},{"start":{"row":13,"column":45},"end":{"row":13,"column":46},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":46},"end":{"row":13,"column":47},"action":"insert","lines":["m"],"id":8}],[{"start":{"row":13,"column":44},"end":{"row":13,"column":47},"action":"remove","lines":["tem"],"id":9},{"start":{"row":13,"column":44},"end":{"row":13,"column":52},"action":"insert","lines":["templete"]}],[{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"insert","lines":["t"],"id":10},{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"insert","lines":["e"]}],[{"start":{"row":13,"column":67},"end":{"row":13,"column":71},"action":"remove","lines":["teid"],"id":11},{"start":{"row":13,"column":67},"end":{"row":13,"column":78},"action":"insert","lines":["templete_id"]}],[{"start":{"row":20,"column":52},"end":{"row":21,"column":0},"action":"insert","lines":["",""],"id":12},{"start":{"row":21,"column":0},"end":{"row":21,"column":35},"action":"insert","lines":["                                   "]}],[{"start":{"row":21,"column":35},"end":{"row":30,"column":21},"action":"insert","lines":["<button type=\"submit\" class=\"py-2 px-3 bg-red-400 rounded-lg text-white\">決定</button>","                              </form>","","                              <button @click=\"toggle = false\" class=\"p-2 mx-3 rounded-sm shadow-sm bg-yellow-100\">キャンセル</button>","","                              <p class=\"text-red-300 \">本当にいいですか？</p>","                         </div>","","                    </div>","               </div>"],"id":13}],[{"start":{"row":30,"column":21},"end":{"row":31,"column":0},"action":"insert","lines":["",""],"id":14},{"start":{"row":31,"column":0},"end":{"row":31,"column":15},"action":"insert","lines":["               "]},{"start":{"row":31,"column":15},"end":{"row":32,"column":0},"action":"insert","lines":["",""]},{"start":{"row":32,"column":0},"end":{"row":32,"column":15},"action":"insert","lines":["               "]}],[{"start":{"row":32,"column":15},"end":{"row":34,"column":15},"action":"insert","lines":["</div>","     </div>","</x-app-layout>"],"id":15}],[{"start":{"row":34,"column":15},"end":{"row":35,"column":0},"action":"insert","lines":["",""],"id":16}],[{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"remove","lines":["t"],"id":17},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"remove","lines":["s"]},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"remove","lines":["o"]},{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"remove","lines":["p"]}],[{"start":{"row":13,"column":61},"end":{"row":13,"column":62},"action":"insert","lines":["t"],"id":18},{"start":{"row":13,"column":62},"end":{"row":13,"column":63},"action":"insert","lines":["e"]},{"start":{"row":13,"column":63},"end":{"row":13,"column":64},"action":"insert","lines":["m"]},{"start":{"row":13,"column":64},"end":{"row":13,"column":65},"action":"insert","lines":["p"]}],[{"start":{"row":13,"column":65},"end":{"row":13,"column":66},"action":"insert","lines":["l"],"id":19},{"start":{"row":13,"column":66},"end":{"row":13,"column":67},"action":"insert","lines":["e"]},{"start":{"row":13,"column":67},"end":{"row":13,"column":68},"action":"insert","lines":["t"]},{"start":{"row":13,"column":68},"end":{"row":13,"column":69},"action":"insert","lines":["e"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":107,"selection":{"start":{"row":13,"column":50},"end":{"row":13,"column":50},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1672147580448,"hash":"431a455c8727e56c61710a32cd786b8a10eb819f"}