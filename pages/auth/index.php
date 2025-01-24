<?php
require_once 'models/User.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    try {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $connection = require_once 'configs/connection.php';
        $userModel = new User($connection);

        $user = $userModel->getByUsername($username);

        echo json_encode($response);
    } catch (\Throwable $th) {
        echo $th->getMessage();
    }
    exit;
}
?>

<head>
    <link rel="stylesheet" href="styles/auth.css">
</head>

<body>
    <div>
        <form class="auth" method="post">
            <div class="title">

            </div>
            <div>
                <label>
                    Username
                </label>
                <input type="text" name="username" />
            </div>
            <div>
                <label>
                    Password
                </label>
                <input type="password" name="password" />
            </div>
            <div>
                <button>Submit</button>
            </div>
        </form>
    </div>
</body>