<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body class="container" method="post">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/" role="tab" aria-controls="contact"
                aria-selected="false">Home</a>
        </li>
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="/agendamento" role="tab"
            aria-controls="profile" aria-selected="false">Agendamento</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/programacao" role="tab"
                aria-controls="contact" aria-selected="false">Programação</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="/sala" role="tab" aria-controls="contact"
                aria-selected="false">Sala</a>
        </li>

    </ul>

    <div class="container mt-5">
        <h1>Agendamento<i class="bi bi-list-nested"></i></h1>
        <p>Preencha os campos abaixo para reliazar o agendamento.</p>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" onclick="recebaNomes()">Nome</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" onclick="recebaIdade()">Idade</label>
                    <input type="number" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"onclick="recebaFilme()">Filme</label>
                    <input type="text" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-danger mt-5" onclick="recebaDados()">Enviar</button>
        </form>
    </div>
    <form>

        <script src="../js/script.js"></script>
</body>

</html>
