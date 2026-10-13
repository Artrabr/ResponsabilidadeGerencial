<?php

class User {
    public int $id;
    public string $name;
    public string $login;
    public string $email;

    public function __construct(
        int $id,
        string $name,
        string $login,
        string $email
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->login = $login;
        $this->email = $email;
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
}