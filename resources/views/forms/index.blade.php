
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>

	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<br>
<div class=".col-lg-offset-4 col-lg-4">
		<h1>upload a file</h1>
{{ Form::open(array('url' => 'upload','files' => true)) }}
   {{ Form::text('username', 'Your name') }}
   {{ Form::email('emailto', 'Email to') }}
   {{ Form::email('emailfrom', 'Your email') }}
   {{ Form::file('thefile') }}
   {{ Form::submit('Transfer') }}
{{ Form::close() }}
</div>


</body>
</html>