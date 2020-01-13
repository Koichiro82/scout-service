@extends('layouts.app')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <form action="/usersedit/{{$user->id}}" method="POST">　 <!-- 送りたい宛先のアクション -->
         
                <!-- 個人情報編集 -->
                <div>
                    <!-- name -->
                    <div class="form-group">
                    <label for="name">氏名</label>
                    <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <!--/ name -->
                    
                    <!-- email -->
                    <div class="form-group">
                    <label for="email">Eメール</label>
                    <input type="text" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <!--/ email -->
                    
                    <!-- category -->
                    <div class="form-group">
                    <label for="category">カテゴリー</label>
                    <input type="text" name="category" class="form-control" value="{{$user->category}}">
                    </div>
                    <!--/ category -->
    
                    <!-- position -->
                    <div class="form-group">
                    <label for="position">ポジション</label>
                    <input type="text" name="position" class="form-control" value="{{$user->position}}">
                    </div>
                    <!--/ position -->
    
                    <!-- height -->
                    <div class="form-group">
                    <label for="height">身長</label>
                    <input type="text" name="height" class="form-control" value="{{$user->height}}">
                    </div>
                    <!--/ height -->
     
                    <!-- weight -->
                    <div class="form-group">
                    <label for="weight">体重</label>
                    <input type="text" name="weight" class="form-control" value="{{$user->weight}}">
                    </div>
                    <!--/ weight -->
     
                    <!-- fat -->
                    <div class="form-group">
                    <label for="fat">体脂肪率</label>
                    <input type="text" name="fat" class="form-control" value="{{$user->fat}}">
                    </div>
                    <!--/ fat -->
     
                    <!-- shortrun -->
                    <div class="form-group">
                    <label for="shortrun">50m</label>
                    <input type="text" name="shortrun" class="form-control" value="{{$user->shortrun}}">
                    </div>
                    <!--/ shortrun -->
                    
                    <!-- longrun -->
                    <div class="form-group">
                    <label for="longrun">1500m</label>
                    <input type="text" name="longrun" class="form-control" value="{{$user->longrun}}">
                    </div>
                    <!--/ longrun -->
    
                    <!-- vo2max -->
                    <div class="form-group">
                    <label for="vo2max">vo2max</label>
                    <input type="text" name="vo2max" class="form-control" value="{{$user->vo2max}}">
                    </div>
                    <!--/ vo2max -->
                    
                    <!-- 個人情報Save ボタン/Back ボタン -->
                    <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a class="btn btn-link pull-right" href="{{ url('/users/{id}') }}"> Back
                    </a> </div>
                    <!--/ Save ボタン/Back ボタン -->
                </div>
                <!-- 個人情報編集 -->


                <!-- 動画登録 -->
                <div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-6">
                            <button type="submit" class="btn btn-primary">
                            アップロード
                            </button>
                        </div>
                    </div>
                
                    <!-- Save ボタン/Back ボタン -->
                        <div class="well well-sm">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <a class="btn btn-link pull-right" href="{{ url('/users/{id}') }}"> Back
                        </a> </div>
                    <!--/ Save ボタン/Back ボタン -->
                </div>
                <!-- 動画登録 -->


                <!-- CSRF -->
                {{ csrf_field() }}
                <!--/ CSRF -->
                </form>
            </div>
        </div>
    @endsection