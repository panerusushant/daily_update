<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)

    {

        $this->pdo = $pdo;
    }



    public function SelectAll($table)
    {
            $email = $_POST['email'];

        try {


            $statement = $this->pdo->prepare("select * from {$table} where email = ?");

            $statement->execute([$email]);

            return $statement->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (Exception $e) {

            die("Query Error ".$e -> getMessage());
        }
    }



    public function createUser($table, $parameters)
    {
        try {

            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(',', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
            );

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {

            die("Query Error ".$e->getMessage());
        }
    }



    public function updateDailyUpdate($table)
    {

        try {
            $id = $_REQUEST['id'];
            $title = $_POST['title'];
            $content = $_POST['content'];


            $sql = "UPDATE $table SET title = '$title', content = '$content' WHERE id = $id";

            $statement = $this->pdo->prepare($sql);

            $statement->execute();
            
        } catch (Exception $e) {

            die("Query Error " . $e->getMessage());
        }
    }

    public function login($table){

     

        try{

        $sql = "SELECT * FROM $table WHERE email = ? AND password = ? ";

        $statement = $this->pdo->prepare($sql);

        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);

        }catch(Exception $e){
            die('Query error ' .$e -> getMessage());
        }
    }


    public function searchUserEmail ($table){

    try{
        $email = $_POST['email'];

        $sql = " SELECT * FROM $table WHERE email = ? AND role = ?";

        $statement = $this->pdo->prepare($sql);

        $statement->execute([$email,'user']);
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);


    }catch(Exception $e){

    die('query error '.$e->getMessage());

    }

}

public function searchAdminEmail($table){

    try{
        $email = $_POST['email'];

        $sql = " SELECT * FROM $table WHERE email = ? AND role = ?";

        $statement = $this->pdo->prepare($sql);

        $statement->execute([$email,'admin']);
        
        return $statement->fetchAll(PDO::FETCH_ASSOC);


    }catch(Exception $e){

    die('query error '.$e->getMessage());

    }

}


public function createPost($table, $parameters)
    {
        try {

            $sql = sprintf(
                'insert into %s (%s) values (%s)',
                $table,
                implode(',', array_keys($parameters)),
                ':' . implode(', :', array_keys($parameters))
            );

            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (Exception $e) {

            die("Query Error ".$e->getMessage());
        }
    }


    public function selectPost($table, $user_id)
    {
            

        try {


            $statement = $this->pdo->prepare("select * from {$table} where user_id = $user_id");

            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
            
        } catch (Exception $e) {

            die("Query Error ".$e -> getMessage());
        }
    }
    
}
