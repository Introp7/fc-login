
<!DOCTYPE html>
<html lang='en'>
<head>
<meta charset="UTF-8" />
<title>
Introp login
</title>
<link rel="stylesheet" type="text/css" href="{{ url(elixir('css/app.css')) }}" />
</head>
<body>

<form>
<h1>Introp Login</h1>
<div class="inset">
<p>
<label for="email">EMAIL ADDRESS</label>
<input type="text" name="email" id="email">
</p>
<p>
<label for="password">PASSWORD</label>
<input type="password" name="password" id="password">
</p>
<p>
<input type="checkbox" name="remember" id="remember">
<label for="remember">Remember me for 14 days</label>
</p>
</div>
<p class="p-container">
<span>Forgot password ?</span>
<input type="submit" name="go" id="go" value="Log in">
</p>
</form>

<a href="redirect">FB Login</a>

</body>
</html>
