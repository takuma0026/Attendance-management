@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<main>
<div class="login-form_content">
    <div class="login-form_heading">
     <p class="login-form_head_text">ログイン</p>
    </div>
    <form class="form" action="/login" method="POST">
     @csrf
     <div class="Login-form_group">
        <div class="Login-form_input">
        <input type="text" name="email" placeholder="メールアドレス" value="{{ old('email') }}"  />
        </div>
        <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
        </div>
     <div class="Login-form_group">
        <div class="Login-form_input">
        <input type="password" name="password" placeholder="パスワード" />
        </div>
        <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
        </div>
        <div class="loginform__button">
          <button class="loginform__button-submit" type="submit">ログイン</button>
        </div>
     </div>
    </form>

    <div class="Login-form_new">
      <div class="Login-form_newhead">
      <p class="newhead">アカウントをお持ちでない方はこちら</p>
      </div>
      <div class="Login-form_register">
      <a class="Login-form_register_botton" href="/register">会員登録</a>
      </div>
    </div>
</div>
</main>
@endsection
