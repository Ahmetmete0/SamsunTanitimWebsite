<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Şehir Tantımı | SAMSUN</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" >

    <style type="text/css">
        .login-page {

            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-color: #2c3e50;



        }

        .box {

            width: 300px;
            padding: 40px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #2c3e50;
            text-align: center;


        }

        .box input[type="text"],
        .box input[type="password"] {

            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #27ae60;
            padding: 14px 10px;
            width: 200px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;


        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {

            width: 260px;
            border-color: #2ecc71;



        }

        .box input[type="submit"] {
            border: 0;
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 2px solid #2ecc71;
            padding: 14px 30px;
            outline: none;
            color: white;
            border-radius: 24px;
            transition: 0.25s;
            cursor: pointer;



        }

        .box input[type="submit"]:hover {

            background: #27ae60;

        }

        .box h1 {

            color: white;
            text-transform: uppercase;
            font-weight: 500;

        }
    </style>

</head>

<body class="login-page">

    <form action="login.php" method="POST" class="box">
        <table>
            <h1>Giriş Sayfasına Hoşgeldiniz</h1>

            <tr>
                <td>Kullanici Adi</td>
                <td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Sifre</td>
                <td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Giris"></td>
            </tr>
        </table>
    </form>

</body>

</html>