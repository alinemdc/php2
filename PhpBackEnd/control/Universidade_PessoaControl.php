<?php
include __DIR__.'/../model/Universidade_Pessoa.php';

class Universidade_PessoaControl{
	function insert($obj){		
		$universidade_pessoa = new Universidade_Pessoa();	
		/* CHANCE DE MANIPULAR A REQUISIÇÃO ANTES DE ACESSAR O MODEL */			
		return $universidade_pessoa->insert($obj);		
	}

	function update($obj,$id_pessoa){
		$universidade_pessoa = new Universidade_Pessoa();
		return $universidade_pessoa->update($obj,$id_pessoa);
	}

	function delete($obj,$id_pessoa){
		$universidade_pessoa = new Universidade_Pessoa();
		return $universidade_pessoa->delete($obj,$id_pessoa);
	}

	function find($id_universidade = null){
		$universidade_pessoa = new Universidade_Pessoa();
		return $universidade_pessoa->find($id_universidade);
	}

}

?>