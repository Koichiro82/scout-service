@extends('layouts.app')
    @section('content')
    <!-- Bootstrapの定形コード… -->

    <!-- 絞り込みナビゲーション… -->
    <div class="card-body">
        <h1>カテゴリー</h1>
        <p1>高校生</p1>
        <p1>大学生</p1>
        <p1>社会人/一般</p1>
        <p1>社会人/企業</p1>
        <p1>その他</p1>

        <h2>ポジション</h2>
        <p2>センターフォワード</p2>
        <p2>ウィング</p2>
        <p2>オフェンシブハーフ/トップ下</p2>
        <p2>ディフェンシブハーフ/ボランチ</p2>
        <p2>サイドハーフ</p2>
        <p2>ウィングバック</p2>
        <p2>サイドバック</p2>
        <p2>センターバック</p2>
        <p2>ゴールキーパー</p2>
        <p2>その他</p2>

        <h3>身長</h3>
        <p3>180cm以上</p3>

        <h4>瞬発力/50m走</h4>
        <p4>４秒台</p4>
        <p4>５秒台</p4>
        <p4>６秒台</p4>

        <h5>持久力/1500m走</h5>
        <p5>４分以下</p5>
        <p5>５分以下</p5>
        <p5>６分以下</p5>
        
        <h6>大会名</h6>
        <p6>高校選手権大会/地区予選含む</p6>
        <p6>全日本大学サッカー選手権大会</p6>
        <p6>全国社会人社会人サッカー選手権大会</p6>
        <p6>天皇杯</p6>
        
    </div>
    
    <!-- 動画一覧表示… -->
    <div class="card-body">
        @foreach($movies as $movie)
        <h1>{{$movie->name}}</h1>
        <video controls="controls" width="480" height="270"><source src="{{$movie->url}}"></video>
        <a href="/users/{{$movie->user->id}}">{{$movie->user->name}}</a>
        <p>{{$movie->user->position}}</p>
    </div>
        @endforeach
    </div>
    @endsection