<?php
class Usuario{

    private $nome;
    private $email;
    private $senhaHash;

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setSenha($senhaHash) {
        $this->senhaHash = $senhaHash;
    }

    public function getSenha() {
        return $this->senhaHash;
    }
}



?>