<html>
<head><title>...</title></head>
<body>
$(if chap-id)
<noscript>
<center><b>JavaScript required. Enable JavaScript to continue.</b></center>
</noscript>
$(endif)
<center>If you are not redirected in a few seconds, click 'continue' below<br>
<form name="redirect" action="http://localhost:9000/hotspot/login" method="post">
<input type="hidden" name="mac" value="$(mac)">
<input type="hidden" name="ip" value="$(ip)">
<input type="hidden" name="username" value="$(username)">
<input type="hidden" name="link-login" value="$(link-login)">
<input type="hidden" name="link-orig" value="$(link-orig)">
<input type="hidden" name="error" value="$(error)">
<input type="hidden" name="chap-id" value="$(chap-id)">
<input type="hidden" name="chap-challenge" value="$(chap-challenge)">
<input type="hidden" name="link-login-only" value="$(link-login-only)">
<input type="hidden" name="link-orig-esc" value="$(link-orig-esc)">
<input type="hidden" name="mac-esc" value="$(mac-esc)">
<input type="hidden" name="macserver" value="4C:5E:0C:F8:77:47">
<input type="submit" value="continue">
</form>
<script language="JavaScript">
<!--
   document.redirect.submit();
//-->
</script></center>
</body>
</html>