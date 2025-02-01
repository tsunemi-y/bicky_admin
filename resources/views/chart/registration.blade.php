@extends('layouts.main')

@section('title', 'グラフ > 新規登録者数')

@section('content')
    <div class="mt-4">
        <h1>グラフ > 新規登録者数</h1>
        <canvas id="registrationChart"></canvas>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/chart/registration.js') }}"></script>
@endsection

<script>
    var year = @json($year);
    var months = @json($months);
    var totalRegistration = @json($totalRegistration);
</script>

