@extends('layouts.app')

@section('content')

<?php

$link = new PDO('mysql:dbname=web_sourcing;host=localhost;port=8889;','web_sourcing_user','root');
$get = $link->prepare('SELECT * FROM categories');
$get->execute();
$categories = $get->fetchAll(PDO::FETCH_ASSOC);
unset($link);
?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('contractor.register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Nickname" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>

                            <div class="col-md-6">
                                <input id="Nickname" type="text" class="form-control @error('name') is-invalid @enderror" name="Nickname" value="{{ old('Nickame') }}" required autocomplete="Nickname" autofocus>

                                @error('Nickname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-row form-group">
                        <label class="col-md-2 form-label" style="margin-top:10px; margin-left:40px;">生年月日</label>
                            <div class="col-md-3">
                            <div class="form-row">
                                <div class="col">
                                <select id="year" class="form-control" name="year" placeholder="年">
                                    <option value="">----</option>
                                    <option>2000</option>                                    
                                </select>
                                </div>
                                <div class="col-auto my-2">年</div>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-row">
                                <div class="col">
                                <select id="month" class="form-control" name="month" placeholder="月">
                                    <option value="">--</option>
                                    <option>1</option>

                                </select>
                                </div>
                                <div class="col-auto my-2">月</div>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-row">
                                <div class="col">
                                <select id="day" class="form-control" name="day" placeholder="日">
                                    <option value="">--</option>
                                    <option>1</option>
                                </select>
                                </div>
                                <div class="col-auto my-2">日</div>
                            </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード再確認') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row" >
                            <div class="col-sm-1"></div>
                            <label for="photo_url" class="col-md-3">プロフィール画像</label>
                            <input id="photo_url" name="photo_url" type="file" class="form-control-file col-md-2">
                        </div>

                        <div class="form-group row">
                            <label for="Category" class="col-md-4 col-form-label text-md-right">{{ __('得意なカテゴリ') }}</label>
                            <div class="col-md-6">
                            <select id="category" class="form-control" name="category" placeholder="カテゴリ">
                                    <option value="">--</option>
                                    <?php
                                    foreach($categories as $category){
                                        ?>
                                    <option value="{{ $category['Category_id']}}">{{$category["Category_name"]}}</option>
                                    <?php
                                    }
                                    ?>

                                </select>
                        </div>
                        </div>

                        <div class="form-group row">
                            <label for="appeal" class="col-md-4 col-form-label text-md-right">{{ __('アピールポイント') }}</label>

                            <div class="col-md-6">
                                <textarea id="appeal" class="form-control @error('appeal') is-invalid @enderror" name="appeal"></textarea>
                                @error('appeal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
