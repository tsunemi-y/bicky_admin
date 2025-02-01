<div class="" id="sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="#">
                <i class="fas fa-tachometer-alt"></i> ダッシュボード
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#charts" aria-expanded="false">
                <i class="fas fa-chart-pie"></i> グラフ
            </a>
            <ul class="collapse" id="charts">
                <li><a href="{{ route('chart.sales') }}" class="nav-link">売上</a></li>
                <li><a href="{{ route('chart.registration') }}" class="nav-link">新規登録者</a></li>
            </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="/reservation">
                <i class="fas fa-tachometer-alt"></i> 予約キャンセル
            </a>
        </li>

    </ul>
</div>