<?php

class Usuario {
    private $email;
    private $senha;

    public function __construct(string $email, string $senha) {
        $this->email = $email;
        $this->senha = $senha;
    }
    
}