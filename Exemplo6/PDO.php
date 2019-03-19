<?php  

class usePDO {

	//Algumas variáveis com dados sobre o Banco. 
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname="meubanco";
	private $instance; // instância de conexão, usada no Singleton

	// método que retorna a instância de conexão
	function getInstance(){
		if(empty($instance)){
			$instance = $this->connection();
		}
		return $instance;
	}

	//método que cria a instância de conexão. 
	private function connection(){
		try {
			$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname",$this->username,$this->password); //Criando um objeto PDO
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //atribuindo modo de erro do PDO.
			return $conn;
		}
		catch(PDOException $e)
		{
			echo "Connection failed: " . $e->getMessage() . "<br>";
			die("Connection failed: " . $cnx->connect_error) . "<br>";
		}
	}

	//Métodos do CRUD
	function createDB(){
		try{
			$cnx = $this->getInstance();

			$sql = "CREATE DATABASE IF NOT EXISTS $this->dbname";
			$cnx->exec($sql);
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	function createTable(){
		try{
			$cnx = $this->getInstance();
			$sql = "CREATE TABLE IF NOT EXISTS pessoa (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
				nome VARCHAR(50) NOT NULL,
				idade INTEGER(3) NOT NULL,
				sexo VARCHAR(1) NOT NULL,
				estado_civil VARCHAR(100),
				endereco VARCHAR(50),
				usuario VARCHAR(50),
				senha VARCHAR(100)
			)";

			$cnx->exec($sql);
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	function insert($sql){
		try{
			$cnx = $this->getInstance();
			$error = $cnx->prepare($sql);

			$error->execute();
			echo 'Error occurred:'.implode(":",$error->errorInfo());
			if($error->errorCode() == 0) {
				return;
			}
			else{
				return "Falha ao Inserir dados no Banco";
			}
		}
		catch(PDOException $e)
		{
			return "Falha ao Inserir dados";
		}
	}

	function select($sql){

		try{
			$cnx = $this->getInstance();
			$result = $cnx->query($sql);

			return $result;
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	function update($sql){

		try{
			$cnx = $this->getInstance();
			$result = $cnx->query($sql);

			return $result;
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}

	function delete($sql){

		try{
			$cnx = $this->getInstance();
			$result = $cnx->query($sql);

			return $result;
		}
		catch(PDOException $e)
		{
			echo $sql . "<br>" . $e->getMessage();
		}
	}
}
?>