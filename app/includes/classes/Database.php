<?php

/**
 * Class Database
 */
class Database
{


    private $connection;
    private $dbhost;
    private $dbname;
    private $username;
    private $password;

    /**
     * Database constructor.
     * @param $dbhost
     * @param $dbname
     * @param $username
     * @param $password
     * @throws Exception
     */

    // this function is called everytime this class is instantiated
    public function __construct( $dbhost, $dbname, $username, $password){

        try{

            $this->connection = new PDO("mysql:host={$dbhost};dbname={$dbname};", $username, $password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }

    }

    /**
     * // Insert a row/s in a Database Table
     * @param $statement
     * @param $parameters
     * @return
     * @throws Exception
     */


    public function Insert( $statement = "" , $parameters = [] ){
            try{
                $this->executeStatement( $statement , $parameters );
                return $this->connection->lastInsertId();
            }catch(Exception $e)
            {
                throw new Exception($e->getMessage());
            }
    }


    /**
     * Select a row/s in a Database Table
     * @param string $statement
     * @param array $parameters
     * @return
     * @throws Exception
     */

    public function Select( $statement = "" , $parameters = [] ){
        try{

            $stmt = $this->executeStatement( $statement , $parameters );
            return $stmt->fetchAll();

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Update a row/s in a Database Table
     * @param string $statement
     * @param array $parameters
     * @throws Exception
     */
    public function Update( $statement = "" , $parameters = [] ){
        try{

            $this->executeStatement( $statement , $parameters );

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

    /**
     * Remove a row/s in a Database Table
     * @param string $statement
     * @param array $parameters
     * @throws Exception
     */
    public function Remove( $statement = "" , $parameters = [] ){
        try{

            $this->executeStatement( $statement , $parameters );

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }


    /**
     * Execute statement
     * @param string $statement
     * @param array $parameters
     * @return
     * @throws Exception
     */
    private function executeStatement( $statement = "" , $parameters = [] ){
        try{

            $stmt = $this->connection->prepare($statement);
            $stmt->execute($parameters);
            return $stmt;

        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }

}