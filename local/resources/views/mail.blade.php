<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
     <link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
     <style>
     *{
     font-family: 'Baloo Bhaina', cursive;
     }
     span
     {
         font-size:15px;
     }
     
     </style>
</head>
<body>
    <h3>Nom : <span>{{$data['nom']}}</span></h3>
    <h3>Prenom : <span>{{$data['prenom']}}</span></h3>
    <h3>Objet de demande : <span>{{$data['objet']}}</span></h3>
    <h3>Email : <span>{{$data['mail']}}</span></h3>
    <h3>Téléphone : <span>{{$data['telehpone']}}</span></h3>
     <h3>Message : <span>{{$data['message']}}</span></h3>
</body>
</html>