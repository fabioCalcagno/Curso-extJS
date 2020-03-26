<?php 


class Usuario 
{

	private $mysql;
   

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }
	
  public function exibirTodos(){
        $resultado = $this->mysql->query('SELECT * FROM usuarios');
        $resultado->fetch_all(MYSQLI_ASSOC);
        return $resultado;

    }

	
}

?>