<?php
//namespace \mysql;

class SelectFromDB
{

    static public function create($dbConnectionName, array $parameters)
    {
        switch($dbConnectionName) {
            case 'Mysql':
            default:
                $dbConnectionClass = '\Connection';
                $parameters = [
                    'dsn' => 'localhost',
                    'username' => 'liubov',
                    'password' => 'Sheyda_1984',
                ];                
                $options = (!empty($parameters['options'])) ? $parameters['options'] : [];
                $dbConnection = new $dbConnectionClass($parameters['dsn'], $parameters['username'], $parameters['password'], $options);
                break;
        }       
        return $dbConnection;
    }

 
}