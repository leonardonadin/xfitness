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
		} catch (PDOException $e) {
			echo $e->getMessage();
		}
	}

	public function insert($column_name = array(), $values = array()){
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

	public function select(){

	}


}
?>
