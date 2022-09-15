<?php

//timezone

date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados

define('BD_SERVIDOR','localhost');
define('BD_USUARIO','root');
define('BD_SENHA','');
define('BD_BANCO','projetoweb');
    
class Banco{

    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    private function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR, BD_USUARIO , BD_SENHA, BD_BANCO);
    }

    public function setConsulta($email,$senha,$endereco,$bairro,$cidade,$cep,$estado){
        $stmt = $this->mysqli->prepare("INSERT INTO consulta (`email`, `endereco`, `bairro`, `cidade`, `senha`, `cep`, `estado`) VALUES (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssss",$email,$endereco,$bairro,$cidade,$senha,$cep,$estado);
        if( $stmt->execute() == TRUE){
            return true ;
        }else{
            return false;
        }

    }
}    
?>   