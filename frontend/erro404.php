<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Floreria Doña Beatriz Online</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css?family=Athiti:400,500,600" rel="stylesheet">
    <link rel="icon" type="image/png" href="../backend/img/ico.png"/>
    <style type="text/css">
        body{
    background: rgb(8,28,34);
    margin: 0;
    padding: 0;
    height: 100vh;
    font-family: 'Athiti', sans-serif;
}
img{
    width: 50%;
}
.container{
    height: 100vh;
    display: flex;
    flex-direction: column;
    gap: 30px;
    align-items: center;
    justify-content: center;
}
h1{
    color: rgb(233, 238, 245);
    font-size: 20px;
    padding: 20px;
}
button{
    padding: 13px 30px;
    border-radius: 15px;
    border: none;
    background: #b9161d;
    color: white;
}

@media screen and (max-width:630px){
    h1{        
        font-size: 16px;        
    }
}
    </style>
</head>

<body>

    <div class="container">
        <img src="../backend/img/img1.svg" alt="">
        <h1>La página que ha solicitado no se encuentra disponible</h1>
        <div class="boton">
            <button style="cursor: pointer;" onclick="window.location.href='salir.php'">Volver atras</button>
        </div>
    </div>



</body>

</html>