<?php
class DB{

	private $conexao = null;

	private $table_name = '';

	public function __construct($table_name){
		try {
			$this->conexao = new PDO(
		'pgsql:host=localhost;dbname=xfitness',
					'postgres','postgres');
			$this->table_name = $table_name;
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function select($fields,$where = ''){
		$sql = "SELECT ".$fields." FROM ".$this->table_name;
		var_dump($where);
		if(!empty($where)){
			$sql .= " WHERE ".$where;
		}
		$results = $this->conexao->query($sql);
		return $results;
	}

	public function selectProcedure($procedure){
		$sql = "SELECT ".$procedure.";";
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

	public function update($column_name = array(), $values = array(), $condition = ''){
		$columns = "";
		$i = 1;
		foreach ($column_name as $value) {
			$columns .= $value."=:".$value;
			if(count($values) !== $i++){
				$columns .= ",";
			}
		}
		//UPDATE table SET column1 = value1,column2 = value2 ,...WHERE condition;
		$sql = "UPDATE TABLE $this->table_name SET $columns";
		if($condition != ''){
			$sql .= " WHERE ".$condition;
		}
		$sql .= ";";
		var_dump($sql);
		$comando = $this->conexao->prepare($sql);
		$return = $comando->execute($values);
		if($return){
			return true;
		}else{
			echo "Atualização não foi realizada com sucesso";
			return ['error'=>$comando->errorInfo()];
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
