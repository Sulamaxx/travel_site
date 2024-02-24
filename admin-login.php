<!DOCTYPE html>
<html lang="en">

<head>
<?php   include "include/admin/dashboard-header.php";?>
<title>Admin Login</title>
</head>

<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

    .login-container {
        background-color: #ffffff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
        width: 350px;
        text-align: center;
    }

    .login-container h2 {
        margin: 20px 0;
        color: #333333;
    }

    .login-form {
        padding: 20px;
        box-sizing: border-box;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        text-align: left;
        margin-bottom: 5px;
        color: #666666;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #cccccc;
        border-radius: 4px;
        font-size: 16px;
    }

    .form-group button {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        background-color: #3498db;
        color: #ffffff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .form-group button:hover {
        background-color: #2980b9;
    }
</style>
</head>

<body>
    <div class="login-container">
        <h2>Admin Login</h2>
        <form class="login-form" method="POST">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <button type="button" onclick="logIn()">Login</button>
            </div>
        </form>
    </div>
    <script>
        function logIn() {

            const username = document.getElementById('username').value;
            const passowrd = document.getElementById('password').value;
            // alert('ok')

            const form = new FormData();

            form.append('username', username);
            form.append('password', passowrd);
            fetch('adminLoginProcess.php', {
                    method: 'POST',
                    body: form
                })
                .then(res => res.text())
                .then(data => {
                    alert(data)
                    if (data == "Success") {
                        window.location.replace('dashboard.php');
                    }
                })
                .catch(error => {
                    console.error("Error :", error);
                    alert("Some thing went wrong try again later");
                });

        }
    </script>
</body>

</html>