<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>

<body style="background: #ddd">

    <header style="margin-top: 20px">
        <h1 style="text-align: center">Prodigit</h1>
    </header>

    <main style="background: #fff; padding: 20px; margin: 50px">

        @foreach ($data as $key => $value)
            <p style="padding: 6px">
                {{ ucfirst($key)  }}: {{ $value }}
            </p>
        @endforeach

    </main>

</body>

</html>
