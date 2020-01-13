@extends('layouts.app')
    @section('content')
    <!-- Bootstrapの定形コード… -->
    <div class="card-body">
        <h1>{{$user->name}}</h1>
        <p>カテゴリー　{{$user->category}}</p>
        <p>ポジション　{{$user->position}}</p>
        <p>身長　{{$user->height}}cm</p>
        <p>体重　{{$user->weight}}kg</p>
        <p>体脂肪率　{{$user->fatpercentage}}%</p>
        <p>50m　{{$user->shortrun}}秒</p>
        <p>1500m　{{$user->longrun}}分</p>
        <p>vo2max　{{$user->vo2max}}</p>
        <p>登録動画一覧</p>
        @foreach($movies as $movie)
        <p>{{$movie->name}}</p>
        <video controls="controls" width="480" height="270"><source src="{{$movie->url}}"></video>
        @endforeach
    </div>

            <form action="{{ url('/usersedit/{id}')}}" method="POST">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary">
                編集
                </button>
            </form>
        </form>
    @endsection