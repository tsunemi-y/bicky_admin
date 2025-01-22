@extends('layouts.main')

@section('title', '予約キャンセル')

@section('content')
<div class="container-reservation">
    <h2 class="reservation-h2">利用者氏名</h2>
    <form method="get" action="{{ route('reservation.show') }}" class="reservation-form">
      <input type="serch" class="reservation-search">
      <button type="submit" class="reservation-search-button"><img src="{{ asset('images/search-icon.png') }}" width="20" height="20"></button>
    </form>
    <div class="reservation-table">
      <table>
        <tr><th>予約リスト</th></tr>
        <tr height="28px" align="left"><th>氏名</th><th>予約日</th></tr>
        @if(isset($reservationSearch))
            @foreach($reservationSearch as $reservation)
            <tr align="left" height="28px">
              <td>{{ $reservation->parentName }}</td>
              <td>{{ $reservation->reservation_date }}</td>
              <form method="post" action="{{ route('reservation.delete', 
              ['id' => $reservation->user_id]) }}">
                @csrf
                @method('delete')
                <td><button type="submit" class="deleteBtn">削除</button></td>
              </form>
            </tr>
            @endforeach
        @endif
      </table>
    </div>
  </div>

  <script type="text/javascript">
  $('.deleteBtn').click(function(){
    if(!confirm('予約者 日時をキャンセルします。ほんとうによろしいですか?')){
        return false;
    }else{
        return true;
    }
  });
</script>
@endsection