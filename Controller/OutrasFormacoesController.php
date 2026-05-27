<?php
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class OutrasFormacoesController{
    
    public function inserir($inicio, $fim, $descricao,$idusuario) {
        require_once '../Model/OutrasFormacoes.php';
        $formacao = new OutrasFormacoesController();
        $formacao->setInicio($inicio);
        $formacao->setFim($fim);
        $formacao->setDescricao($descricao); 
        $formacao->setIdUsuario($idusuario);    
        $r = $formacao->inserirBD();
   
        return $r;     
    }
    public function remover($id) {
        require_once '../Model/OutrasFormacoes.php';
        $formacao = new OutrasFormacoesController();
        $r = $formacao->excluirBD($id);
        return $r;     
    }
    public function gerarLista($idusuario)
    {
        require_once '../Model/OutrasFormacoes.php';
        $formacao = new OutrasFormacoesController();
        
        return $results = $formacao->listaFormacoes($idusuario);
       
        
        
    }


}

?>