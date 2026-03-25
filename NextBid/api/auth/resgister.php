<?php

header('Content-Type: application/json');
require_once "../../config/db.php";
require_once '../../includes/UserManager.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userMgr = new UserManager($pdo);

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $bio = $_POST['bio'];

    if ($userMgr->register($name, $email, $password, $gender, $age)) {
        echo json_encode(['message' => 'Utilizador registado com sucesso!']);
    } else {
        http_response_code(400);
        echo json_encode(['message' => 'Erro ao registar utilizador']);
    }
}