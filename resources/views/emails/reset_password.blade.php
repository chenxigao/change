<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>重置密码</title>
</head>
<body>

<p>你好，{{ $username }}！点击下面的链接，重置密码：<a href="{{ url(config('app.url').route('password.reset', $token, false)) }}">
        {{  url(config('app.url').route('password.reset', $token, false)) }}</a></p>

如果非本人操作，请忽略这封邮件。

<p>你的，<br> {{ config('app.name') }}</p>

</body>

</html>