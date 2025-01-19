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
            <tr height="28px" align="left">
              <td>{{ $reservation->parentName }}</td>
              <td>{{ $reservation->reservation_date }}</td>
            </tr>
            @endforeach
        @endif
      </table>
    </div>
  </div>
@endsection