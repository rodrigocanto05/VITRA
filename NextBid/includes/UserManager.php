<?php

class UserManager
{
    private $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
        public function register($name, $email, $password, $gender, $age, $bio, $xp, $role)
        {
            $hash = password_hash($password, PASSWORD_BCRYPT);
            $initialXP = rand(10, 200);

            $sql = "INSERT INTO users (usr_name, usr_email, usr_passwor, usr_gender, usr_age, usr_bio, usr_xp, usr_role)
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
            $stmt = $this->pdo->prepare($sql);
            return $stmt->execute([$name, $email, $hash, $initialXP, $gender, $age, $initialXP]);

        }
        public function login($email, $password){
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['usr_passwor'])) {
            $token = bin2hex(random_bytes(32));
            return ["status" => 'success', "user" => $user, "token" => $token];
        }
        return ['status' => 'error', 'message' => 'Credencias inválidas'];
        }
}
