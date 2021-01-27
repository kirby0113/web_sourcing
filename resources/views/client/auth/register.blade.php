@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('client.register') }}" enctype="multipart/form-data" >
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
                            <label for="NickName" class="col-md-4 col-form-label text-md-right">{{ __('ニックネーム') }}</label>

                            <div class="col-md-6">
                                <input id="NickName" type="text" class="form-control @error('NickName') is-invalid @enderror" name="NickName" value="{{ old('NickName') }}" required autocomplete="NickName">

                                @error('NickName')
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mailアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row" >
                            <div class="col-sm-1"></div>
                            <label for="photo_url" class="col-md-3">プロフィール画像</label>
                            <input id="photo_url" name="photo_url" type="file" class="form-control-file col-md-2">
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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('パスワード再入力') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
