<html>
<head>
    
    <title>FORM</title>
</head>
<body>
<form method="post" action="FormSub1" enctype="multipart/form-data" name="Loginform">
{{@csrf_field()}}
    <h3>Name</h3>
    <input type="text" name="name"/>
    <!-- for showing customize error message -->
    @error('name')
    {{'wrong format of name or blank'}}
    @enderror                                 
    <br>
    <h3>Email</h3>
    <input type="text" name="email"/>
    <!-- for showing system error message -->
    @error('email')
    {{$message}}
    @enderror
    <br>
    <input type="file" name="doc"><br>
    <input type="submit">
    </form>
</body>
</html>