<?php
if(!isset($_SESSION))
{
session_start();
}
class UsuarioController{
        //===============================================INSERIR=====================================//
public function inserir($nome, $cpf, $email,$senha) {
require_once '../Model/Usuario.php';
$usuario = new Usuario();
$usuario->setNome($nome);
$usuario->setCPF($cpf);
$usuario->setEmail($email);
$usuario->setSenha($senha);
$r = $usuario->inserirBD();
$_SESSION['Usuario'] = serialize($usuario);
return $r;
}
        //===============================================ATUALIZAR=================================//
public function atualizar($id, $nome, $cpf, $email, $dataNascimento) {
require_once '../Model/Usuario.php';
$usuario = new Usuario();
$usuario->setId($id);
$usuario->setNome($nome);
$usuario->setCPF($cpf);
$usuario->setEmail($email);
$usuario->setDataNascimento($dataNascimento);
$r = $usuario->atualizarBD();
$_SESSION['Usuario'] = serialize($usuario);
return $r;
}
        //==========================================LOGIN========================================//
public function login($cpf, $senha)
{
require_once '../Model/Usuario.php';
$usuario = new Usuario();
$usuario->carregarUsuario($cpf);
$verSenha=$usuario->getSenha();
if($senha==$verSenha)
{
$_SESSION['Usuario'] = serialize($usuario);
return true;
}
else
{
return false;
}
}

//==============================================GERAR LISTA=========================================//
public function gerarLista()
{
require_once '../Model/Administrador.php';
$u = new Administrador();
return $results = $u->listaCadastrados();
}



//==============================================VISUALIZAR CADASTRO=======================================//
public function visualizarCadastro($id)
{
    require_once '../Model/Usuario.php';

    $usuario = new Usuario();

    $usuario->carregarPorID($id);

    return $usuario;
}
}