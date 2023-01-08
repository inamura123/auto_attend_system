<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               {{ __('Templete') }}
          </h2>
     </x-slot>
     
     <a href="{{ route('templete.create') }}">
        <button>create</button>
     </a>
     
     <table>
  <colgroup span="4"></colgroup>
  <tr>
    <th>ID</th>
    <th>名前</th>
    <th>曜日</th>
    <th>開始時</th>
    <th>開始分</th>
    <th>終了時</th>
    <th>終了分</th>
    <th>遅刻許容分</th>
    <th>アクション</th>
  </tr>
  @foreach ($templete as $temp)
  <tr>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->templete_id }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->name }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">
            @if ($temp->week === 1)
                月
            @elseif ($temp->week === 2)
                火
            @elseif ($temp->week === 3)
                水
            @elseif ($temp->week === 4)
                木
            @elseif ($temp->week === 5)
                金
            @elseif ($temp->week === 6)
                土
            @elseif ($temp->week === 7)
                日
            @endif
        </span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->start_hour }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->start_minute }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->end_hour }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->end_minute }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $temp->late_minute }}</span>
    </td>
    <td>
        <a href="{{ route('templete.edit', ['templete_id' =>  $temp->templete_id]) }}">
        <button>修正</button>
        </a>
        <a href="{{ route('templete.delete', ['templete_id' =>  $temp->templete_id]) }}">
        <button>削除</button>
        </a>
    </td>
    </tr>
    @endforeach
</table>
     
</x-app-layout>