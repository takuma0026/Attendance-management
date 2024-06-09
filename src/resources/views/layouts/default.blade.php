<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Atte</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  @yield('css')
</head>

<body>
        <nav class="header">
            <h1 class="header_logo">Atte</h1>
            <ul class="header_right">
                @if (Auth::check())
                <li class="header_navi">ホーム</li>
                <li class="header_navi">日付一覧</li>
                <li class="header_navi">
                   <form class="form" action="/logout" method="post">
                    @csrf
                      <button class="header-nav__button">ログアウト</button>
                   </form>
                </li>
            @endif
            </ul>
        </nav>
  <main>
    @yield('content')
  </main>
</body>
<footer class="footer">
  	<p>Atte,inc</p>

</footer>
</html>
