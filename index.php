


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            background-image: url(cih-bank-logo-e1518713390720.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            flex-direction: column;
            gap: 10vh
        }

        .form-container {
            background-color: rgba(255, 255, 255, 0.752);
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }


        .form-container h2 {
            display: flex;
            justify-content: center;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #e15818;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #af4c5b;
        }

    </style>

</head>
<body>

    <div class="form-container">
        <h2>LOGIN</h2>
        <form id="registrationForm">
            <label for="email">Email:</label>
            <input type="email" id="email" placeholder="Enter your email" required>
            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Enter your password" required>
            <button type="button" onclick="validateForm()">Envoyer</button>
        </form>
    </div>
    

   <script src="app.js"></script>


</body>
</html>
