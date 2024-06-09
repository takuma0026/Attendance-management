@extends('layouts.default')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<main>
<div class="register-form_content">
    <div class="register-form_heading">
     <p class="register-form_head_text">会員登録</p>
    </div>
    <form class="form" action="/register" method="post">
        @csrf
     <div class="register-form_group">
        <div class="register-form_input">
        <input type="text" name="name" placeholder="名前" value="{{ old('name') }}"/>
        </div>
        <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
        </div>
     </div>
    <div class="register-form_group">
        <div class="register-form_input">
        <input type="email" name="email" placeholder="メールアドレス"value="{{ old('email') }}" />
        </div>
        <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>
    <div class="register-form_group">
        <div class="register-form_input">
        <input type="password" name="password" placeholder="パスワード" />
        </div>
        <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>
    <div class="register-form_group">
        <div class="register-form_input">
        <input type="" name="" placeholder="確認用パスワード" />
        </div>
        <div class="form__error">
        <!--バリデーション機能を実装したら記述します。-->
        </div>
    </div>
    <div class="registerform__button">
        <button class="registerform__button-submit" type="submit">会員登録</button>
    </div>
    </form>

    <div class="-form_new">
      <div class="register-form_newhead">
      <p class="newhead">アカウントをお持ちの方はこちら</p>
      </div>
      <div class="register-form_register">
      <a class="register-form_register_botton" href="/login">会員登録</a>
      </div>
    </div>
</div>
</main>
@endsection
