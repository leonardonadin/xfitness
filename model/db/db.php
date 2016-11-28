<?php
class DB{

	private $conexao = null;

	private $table_name = '';

	public function __construct($table_name){
		try {
			$this->conexao = new PDO(
		'pgsql:host=localhost;dbname=xfitness',
					// usuario, senha
					'postgres','postgres');
			$this->table_name = $table_name;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function select($fields,$where = ''){
		$sql = "SELECT ".$fields." FROM ".$this->table_name;
		if(!empty($where)){
			$sql .= " WHERE ".$where;
		}
		$results = $this->conexao->query($sql);
		return $results;
	}

	public function insert($data = array()){
		$columns_values = "";
		$columns_name = "";
		$values = [];
		$i = 1;
		foreach ($data as $key => $value) {
			$columns_name .= $key;
			$columns_values .= "?";
			$values[] = $value;
			if(count($data) !== $i++){
				$columns_name .= ",";
				$columns_values .= ",";
			}
		}
		var_dump($columns_name);
		var_dump($columns_values);
		var_dump($values);
		$comando = $this->conexao->prepare("INSERT INTO ".$this->table_name." ($columns_name) VALUES ($columns_values)");
		$return = $comando->execute($values);
		if($return){
			echo "INSERÇÃO REALIZADA COM SUCESSO!";
		}else{
			echo "Inserção não foi realizada com sucesso";
			print_r($comando->errorInfo());
			var_dump($comando);
			var_dump($return);
		}
	}

	public function update($column_name = array(), $values = array()){
		$columns = "";
		$i = 1;
		foreach ($values as $key => $value) {
			$columns .= "?";
			if(count($values) !== $i++){
				$columns .= ",";
			}
		}
		$comando = $this->conexao->prepare("INSERT INTO $this->table_name ($column_name) VALUES ($columns)");
		$return = $comando->execute($values);
		if($return){
			echo "INSERÇÃO REALIZADA COM SUCESSO!";
		}else{
			echo "Inserção não foi realizada com sucesso";
			print_r($comando->errorInfo());
			var_dump($operacao);
		}
	}

	public function delete($value, $column_where){
		$comando = $this->conexao->prepare("DELETE FROM $this->table_name WHERE $column_where = ?");
		$comando->execute ( array($value));
		var_dump($operacao);
		echo "EXCLUSÃO REALIZADA COM SUCESSO!";
	}


}
?>
