<?php
class Produto implements JsonSerializable{
	private $Descricao;
	public $Preco;
	
	function __construct($d,$p){
		$this->Descricao=$d;
		$this->Preco=$p;
	}
	
	function setDescricao($d){
		$this->Descricao=$d;
	}
	
	function getDescricao(){
		return $this->Descricao;
	}

	function setPreco($p){
		$this->Preco=$p;
	}
	
	function getPreco(){
		return $this->Preco;
	}
		
	function getDados(){
		return $this->Descricao." ".$this->Preco;
	}

	public function converte(){
		$json = array(
			'Descrição' => $this->getDescricao(),
			'Preço' => number_format((float)$this->getPreco(), 2, '.', ''),
		);
		return json_encode($json,JSON_UNESCAPED_UNICODE) ;
	}	

	public function jsonSerialize():mixed{
		$json = array(
			'Descrição' => $this->getDescricao(),
			'Preço' => number_format((float)$this->getPreco(), 2, '.', ''),
		);
		return $json ;
	}

}