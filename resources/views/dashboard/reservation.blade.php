@extends('layouts.main')

@section('title', '予約キャンセル')

@section('content')

    <h2 class="reservation-h2">利用者氏名</h2>
    <div class="reservation-form">
      <input type="serch" name="query" value="{{ $query ?? '' }}" class="reservation-search">
      <button type="button" class="reservation-search-button" id="btn"><img src="{{ asset('images/search-icon.png') }}" width="20" height="20"></button>
    </div>
    <div class="reservation-table">
      <table id="list">
        <p>予約リスト</p>
        <tr height="28px" align="left"><th>氏名</th><th>予約日</th></tr>
      </table>
    </div>
@endsection

@section('script')
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="{{ asset('js/ajax/reservation.js') }}"></script>
@endsection