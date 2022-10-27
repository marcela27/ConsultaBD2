<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $id;
    private $email;
    private $endereco;
    private $senha;   
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Metodos Set
    public function setId($string){
        $this->id = $string;
    }
    public function setEmail($string){
        $this->email= $string;
    }
    public function setEndereco($string){
        $this->endereco= $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }
    public function setBairro($string){
        $this->bairro = $string;
    }
    public function setCEP($string){
        $this->cep = $string;
    }
    public function setCidade($string){
        $this->cidade = $string;
    }
    public function setEstado($string){
        $this->estado = $string;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCEP(){
        return $this->cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function incluir(){
        return $this->setAgendamentos($this->getEmail(),$this->getEndereco(),$this->getBairro(),$this->getCEP(),$this->getCidade(),$this->getSenha(),$this->getEstado());
    }
    public function listar($id){
        return $this->getAgendamentos($id);
    }
    public function editar(){
        return $this->uptadeAgendamentos($this->getId(),$this->getEmail(),$this->getEndereco(),$this->getBairro(),$this->getCEP(),$this->getCidade(),$this->getSenha(),$this->getEstado());
    }
    public function excluir($id){
        return $this->deleteConsulta($id);
    }

}
?>