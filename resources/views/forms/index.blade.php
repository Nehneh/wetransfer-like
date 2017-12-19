<!-- 	//Form::open(array('url' => 'upload','files' => true))  -->
<!DOCTYPE html>


@extends ('layout')

@section ('title')
	MEGATEAM-TRANSFER
@endsection

@section ('content')
	<div></div><html lang="fr">
	<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	</head>

	<style type="text/css">
	body{
		background-color: blue;
	}
	.fond{

	}
	.logo
	{
		background-image: url('img/logo.png');
	}


</style>



	<body>

<div class="row col-sm-6">
<div class="fond ">
	<div class="logo"></div>
	<h1 class="">upload a file</h1>


</div>


</div>
	{{ Form::open(array('url' => '/','files' => true)) }}
	   {{ Form::text('username', 'Your name') }}
	   {{ Form::email('emailto', 'Email to') }}
	   {{ Form::email('emailfrom', 'Your email') }}
	   {{ Form::file('thefile') }}
	   {{ Form::submit('Transfer') }}
	{{ Form::close() }}





@endsection

</body>
</html>

