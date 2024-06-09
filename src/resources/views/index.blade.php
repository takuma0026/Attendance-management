@extends('layouts.default')

@section('css')

<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('content')
<main>
<div class="stamp-form_content">
    <div class="stamp-form_heading">
     <p class="stamp-form_head_text">福場凛太朗さんお疲れ様です！</p>
    </div>
    <div class="stamp_area">
    <div class="stamp-button">
        <button class="stamp_button-submit" type="submit">勤務開始</button>
    </div>
    <div class="stamp-button">
        <button class="stamp_button-submit" type="submit">勤務終了</button>
    </div>
    <div class="stamp-button">
        <button class="stamp_button-submit" type="submit">休憩開始</button>
    </div>
    <div class="stamp-button">
        <button class="stamp_button-submit" type="submit">休憩終了</button>
    </div>
    </div>
</div>
</main>
@endsection
