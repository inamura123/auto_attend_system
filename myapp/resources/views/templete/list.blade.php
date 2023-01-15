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


<!--<table class="table">-->
<!--  <thead>-->
<!--    <tr>-->
<!--      <th scope="col">#</th>-->
<!--      <th scope="col">First</th>-->
<!--      <th scope="col">Last</th>-->
<!--      <th scope="col">Handle</th>-->
<!--    </tr>-->
<!--  </thead>-->
<!--  <tbody>-->
<!--    <tr>-->
<!--      <th scope="row">1</th>-->
<!--      <td>Mark</td>-->
<!--      <td>Otto</td>-->
<!--      <td>@mdo</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">2</th>-->
<!--      <td>Jacob</td>-->
<!--      <td>Thornton</td>-->
<!--      <td>@fat</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--      <th scope="row">3</th>-->
<!--      <td colspan="2">Larry the Bird</td>-->
<!--      <td>@twitter</td>-->
<!--    </tr>-->
<!--  </tbody>-->
<!--</table>-->
     
</x-app-layout>