<?php
class systemservice{
	private $conexao;
	public function __construct(conexao $conexao){
		$this->conexao=$conexao->conectar();
	}
	public function novousuario($nome,$email,$senha){
		$query="
		INSERT INTO 
		users 
		(nome, email, senha) 
		VALUES ( :nome , :email , :senha );";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$nome);
		$stmt->bindValue(':email',$email);
		$stmt->bindValue(':senha',$senha);
		$stmt->execute();
	}
	public function recuperarusuario($email){
		$query="SELECT
				iduser		
				FROM
				users
				WHERE
				email= :email ;";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':email',$email);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_NUM);	
	}
	public function deletarusuario($id){
		$query="DELETE FROM users WHERE iduser= :id ;";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id',$id);
		$stmt->execute();	
	}
	public function carregarusuario($id){
		$query="SELECT
				nome,
				email
				FROM
				users
				WHERE
				iduser= :id ;";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':id',$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_NUM);	
	}
	public function recuperarusuarios(){
		$query='SELECT
				*		
				FROM
				users;';
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_NUM);	
	}
	public function mudarusuario($nome,$email,$id){
		$query='UPDATE users SET nome= :nome , email= :email WHERE iduser= :iduser '; 
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nome',$nome);
		$stmt->bindValue(':email',$email);
		$stmt->bindValue(':iduser',$id);
		$stmt->execute();
	}
	public function mudarsenha($senha,$id){
		$query='UPDATE users SET senha= :senha WHERE iduser= :iduser '; 
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':senha',$senha);
		$stmt->bindValue(':iduser',$id);
		$stmt->execute();
	}
}
?>