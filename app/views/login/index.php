<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistem</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            width: 100%;
            margin: auto;
            text-align: center;
        }

        h2 {
            color: #333;
        }

        table {
            width: 100%;
            margin-top: 10px;
        }

        table tr {
            margin-bottom: 10px;
        }

        table td {
            padding: 8px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            box-sizing: border-box;
        }

        input[type="checkbox"] {
            margin-top: 5px;
        }

        label {
            margin-left: 5px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        .error {
            color: red;
            margin-top: 10px;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <form action="<?php echo URL; ?>/login/proses" method="post">
        <h2>Login Sistem</h2>
        <table>
            <tr>
                <td>Username</td>
                <td><input type="email" name="email" placeholder="Email" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Password" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="checkbox" name="remember" id="remember"> <label for="remember">Ingat Password</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
    </form>

    <?php if (isset($_SESSION['login']) && $_SESSION['login'] == false) { ?>
        <div class="error">
            Login tidak ditemukan
        </div>
    <?php } ?>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Rafi Pratama:0702212133</p>
    </footer>

</body>

</html>
