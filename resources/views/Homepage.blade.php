<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e9f7ec; /* soft light green */
            margin: 0;
            padding: 0;
            text-align: center;
            color: #2e5939;
        }

        header {
            background: #7ecf8f;
            padding: 25px 0;
            color: white;
        }

        .content {
            margin-top: 50px;
        }

        a.button {
            display: inline-block;
            padding: 12px 25px;
            background: #63b97a;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            margin-top: 25px;
        }

        a.button:hover {
            background: #539e66;
        }
    </style>
</head>
<body>

    <header>
        <h1>Welcome to My Homepage</h1>
    </header>

    <div class="content">
        <h2>Hello! 👋</h2>
        <p>Welcome to a simple Laravel homepage with a fresh, light green theme.</p>

        <a href="/about" class="button">About Us</a>
        <a href="/contact" class="button">Contact</a>
    </div>

</body>
</html>
