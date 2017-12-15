<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
</head>
<body>

<h2>Mail</h2>




	
<!-- 
<p>Réception d'une prise de contact avec les éléments suivants :</p>
<ul>
<li><strong>Nom</strong> : {{ $contact['nom'] }}</li>
<li><strong>Email</strong> : {{ $contact['youremail'] }}</li>
<li><strong>Emailto</strong> : {{ $contact['email'] }}</li>
</ul>
 -->



{!! Form::open(array('url' => 'backend/account/edit_social','method'=>'POST', 'files'=>true)) !!} 
{!! Form::file('image_banner',null) !!} 
{!! Form::file('avatar_upload',array('accept'=>'image/*','class'=>'bgtans')) !!}
{!! Form::close() !!}











</body>
</html>