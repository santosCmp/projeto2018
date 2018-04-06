<?php 

class Sql extends PDO{

	private $conn;

	//carrega automaticamente a coenxão com o banco de dados(metodo construct)

	public function __construct(){

		//após instanciar vira um objeto 	
		 $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
	}

	//metodo bindParam liga o parametro com a variavel especificada

	public function setParams($statement, $key, $value){

		$statement->bindParam($key, $value);	
	}
	

    // percorre todo o array de forma dinamica e chama o metodo setParam que  tem o  bindParam
	public function setParam($statement, $parameters = array()){

		foreach ($parameters as $key => $value) {

			$this->setParams($key, $value);
			
		}
	}

	//recebe as instruções query e os dados e prapara para executar os mesmos
	public function query($rawQuery, $param = array()){

		
		$stmt = $this->conn->prepare($rawQuery);

		$this->setParam($stmt, $param);

		$stmt->execute();
		//$stmt e um objeto 
		return $stmt;

	}


	public function select($rawQuery, $param = array()){

		// Chamando a função query
		$stmt = $this->query($rawQuery, $param);

		//retorna obtendo as linhas um conjunto de  resultado como uma
		// matriz associativa
		return $stmt->fetchall(PDO::FETCH_ASSOC);



	}	


}

 ?>