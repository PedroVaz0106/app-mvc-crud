<?php 

    class Manager extends Conexao{

        public function insert_usuario($data){
            
            $pdo = parent::get_instance();

            $sql = "INSERT INTO usuario VALUES(null, :nome, :email, :cpf, :data, :telefone, :endereco)";

            $statement = $pdo->prepare($sql);

            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
                var_dump($key,$value);
            }

            var_dump($statement);

        $statement->execute();
        }

        public function list_client(){
            $pdo = parent::get_instance();
            $sql = 'SELECT * FROM usuario order by id desc';
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();

        }

        public function list_client_by_id(){
            $pdo = parent::get_instance();
            $sql = 'SELECT * FROM usuario order by id desc';
            $statement = $pdo->query($sql);
            $statement->execute();

            return $statement->fetchAll();

        }

        public function delete_usuario($id){
            $pdo = parent::get_instance();
            $sql = "DELETE FROM usuario WHERE id = :id";
            $statement = $pdo->prepare($sql);
            $statement->bindValue(":id",$id);
            $statement->execute();
        }

        public function update_usuario($data){
            $pdo = parent::get_instance();
            $sql = "UPDATE usuario SET nome=:nome, email = :email, cpf = :cpf, data = :data, telefone = :telefone, endereco = :endereco WHERE id =:id";
            
            var_dump($sql);
            $statement = $pdo->prepare($sql);
            foreach($data as $key => $value){
                $statement->bindValue(":$key", $value);
            }
            $statement->execute();
            
        }
        
    }

?>