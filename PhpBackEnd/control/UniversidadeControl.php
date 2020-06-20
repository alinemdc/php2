<?php
include __DIR__.'/../model/Universidade.php';

class UniversidadeControl{
	function insert($obj){		
		$universidade = new Universidade_Pessoa();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $universidade_pessoa->insert($obj);		
	}

	function update($obj,$id){
		$universidade = new Universidade();
		return $universidade->update($obj,$id);
	}

	function delete($obj,$id){
		$universidade = new Universidade();
		return $universidade->delete($obj,$id);
	}

	function find($id = null){
		$universidade = new Universidade();
		return $universidade->find($id);
	}

	function findAll(){
		$universidade = new Universidade();
		return $universidade->findAll();
	}
}

?>