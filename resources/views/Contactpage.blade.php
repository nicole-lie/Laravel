<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #e9f7ec;
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

        form {
            margin-top: 40px;
        }

        input, textarea {
            width: 80%;
            max-width: 400px;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #9acfa9;
            border-radius: 8px;
            background: #ffffff;
        }

        button {
            padding: 12px 25px;
            background: #63b97a;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #539e66;
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
        <h1>Contact Us</h1>
    </header>

    <form action="#" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Your Name" required>
        <br>

        <input type="email" name="email" placeholder="Your Email" required>
        <br>

        <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
        <br>

        <button type="submit">Send Message</button>
    </form>

    <a href="/" class="button">Back to Homepage</a>

</body>
</html>
