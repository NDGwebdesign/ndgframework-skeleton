
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #111823;
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 4rem;
            color: #FFD700;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.5rem;
            color: #ccc;
            margin-bottom: 20px;
        }

        .joke {
            font-size: 1.2rem;
            color: #ff6347;
            margin-bottom: 40px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #19647E;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 1.2rem;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #1a708e;
        }

        .code-snippet {
            font-family: "Courier New", monospace;
            background-color: #1e2a38;
            color: #00ff7f;
            padding: 10px;
            border-radius: 5px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>404</h1>
        <p>Oops! The page you're looking for doesn't exist.</p>
        <p class="joke">But don't worry, even the best programmers miss a semicolon sometimes!</p>
        
        <div class="code-snippet">
            <code>// TODO: Find the missing page<br>return toHomePage();</code>
        </div>
        
        <a href="/">Go Back Home</a>
    </div>
</body>
</html>
