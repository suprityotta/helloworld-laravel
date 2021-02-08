<html>
<body>
<form method="post" action="FormSub">
{{@csrf_field()}}     
<!--
to overcome session expire error
-->

Name<input type="text" name="name"/><br>
Submit<input type="submit" name="submit"/><br>
</form>
</body>
</html>