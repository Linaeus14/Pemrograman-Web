<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/login.css" />
    <title> Ungkapan Pikiran </title>
</head>
<body>
    <header>
        <hr>
        <h1> Ungkapan Pikiran </h1>
    </header>
    <hr>
    <nav>
        <div class="fnav">
            <p id="Activenav"> <> </p>
        </div>
    </nav>
    <main>
        <hr>
        <form id="login" action="./php/login.php" method="post">
            <table>
                <h2> Log In </h2>
                <tr>
                    <td> Username </td>
                    <td> <input type="text" name="id" placeholder="masukan username anda" required> </td>
                </tr>
                <tr>
                    <td> Password </td>
                    <td> <input type="password" name="pass" placeholder="masukan passwrod anda" required> </td>
                </tr>
                <tr>
                    <td>  Pengguna </td>
                    <td>
                        <select name="tipe">
                            <option value="user"> User </option>
                            <option value="admin"> Admin </option>
                        </select>
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="login">
        </form>
        <hr>
    </main>
<?php require "php/footer.php"?>