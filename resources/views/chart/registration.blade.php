@extends('layouts.main')

@section('title', 'グラフ > 売上')

@section('content')
    <div class="mt-4">
        <h1>グラフ > 売上</h1>
        <canvas id="myChart"></canvas>
    </div>
@endsection

@section('script')
    <script src="{{ asset('js/chart/sales.js') }}"></script>
@endsection

<script>
    var year = @json($year);
    var months = @json($months);
    var totalSales = @json($totalSales);
</script>

