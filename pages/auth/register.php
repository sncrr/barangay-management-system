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
    <div class="full center-child">
        <div class="auth">
            <div class="panel left">

                <div class="title">
                    Barangay Name
                </div>
            </div>
            <div class="panel right">
                <form method="post">
                    <div class="title">
                        Register
                    </div>
                    <div class="control">
                        <div><label>
                                Username
                            </label></div>
                        <div>
                            <input type="text" name="username" />
                        </div>
                    </div>
                    <div class="control">
                        <div><label>
                                Password
                            </label></div>
                        <div>
                            <input type="password" name="password" />
                        </div>
                    </div>
                    <div class="control">
                        <button class="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>