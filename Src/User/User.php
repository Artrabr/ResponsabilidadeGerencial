<?php

class User {
    private int $id;
    private string $name;
    private string $login;
    private string $email;
    private string $passwordHash;

    public function __construct(
        int $id,
        string $name,
        string $login,
        string $email,
        string $passwordHash
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
        $this->email = $email;
        $this->passwordHash = $passwordHash;
    }

    public function getId(): int {
        return $this->id;
    }
    
    public function getName(): string {
        return $this->name;
    }

    public function getLogin(): string {
        return $this->login;
    }

    public function getEmail(): string {
        return $this->email;
    }

    public function verifyPassword(string $password): bool {
        return password_verify($password, $this->passwordHash);
    }
}