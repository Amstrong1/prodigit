<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body style="background: #ccc">

    <header style="margin-top: 20px">
        <h1 style="text-align: center">Prodigit</h1>
    </header>

    <main style="background: #fff; padding: 20px; margin: 50px">
        <p style="padding: 10px">
            Message de {{ $data['email'] }}
        </p>

        <p style="padding: 10px">
            Contact : {{ $data['tel'] }}
        </p>

        <p style="padding: 10px">
            Statut : {{ $data['status'] }}
        </p>

        <p style="padding: 10px">
            Service : {{ $data['service'] }}
        </p>

        <p style="padding: 10px">
            Message : {{ $data['message'] }}
        </p>
    </main>
    
</body>
</html>