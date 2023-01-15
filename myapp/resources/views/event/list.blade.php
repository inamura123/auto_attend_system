<x-app-layout>
     <x-slot name="header">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               {{ __('Event') }}
          </h2>
     </x-slot>
     
     <a href="{{ route('event.create') }}">
        <button>create</button>
     </a>
     
     <table>
  <colgroup span="4"></colgroup>
  <tr>
    <th>ID</th>
    <th>名前</th>
    <th>イベント日</th>
    <th>テンプレートID</th>
    <th>ステータス</th>
    <th>アクション</th>
  </tr>
  @foreach ($event as $e)
  <tr>
    <td>
        <span class="text-xs text-gray-800">{{ $e->event_id }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $e->event_name }}</span>
    </td>
    <td>
        <span class="text-xs text-gray-800">{{$e->event_at}}
    </td>
    <td>
        <span class="text-xs text-gray-800">{{ $e->templete_id }}</span>
    </td>
    <td>
            @if( $e->status == 0)
                <span class="text-xs text-gray-800">非アクティブ</span>
            @else
                <span class="text-xs text-gray-800">アクティブ</span>
            @endif
    </td>
    <td>
        <a href="{{ route('event.check', ['event_id' =>  $e->event_id]) }}">
        <button>更新</button>
        </a>
        <a href="{{ route('event.edit', ['event_id' =>  $e->event_id]) }}">
        <button>修正</button>
        </a>
        <a href="{{ route('event.delete', ['event_id' =>  $e->event_id]) }}">
        <button>削除</button>
        </a>
    </td>
    </tr>
    @endforeach
</table>
     
</x-app-layout>