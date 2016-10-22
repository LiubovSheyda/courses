<?php
function connect_db ($dsn, $username, $password) {
	try {
		$db = new PDO ($dsn, $username, $password);
		$row = $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$result_r[] = var_export($row, true);
		return implode('<br>', $result_r);		
	} catch (PDOException $exception) {
				
	}
		
}

$result = connect_db ('mysql:host=localhost;dbname=myproject', 'liubov', 'Sheyda_1984');
echo $result;

function select_db () {
	try {
	$db 
	$sql = <<<SQL
		SELECT *
		FROM classics
SQL;
	$rows = $db -> query ($sql);
	$row = $rows -> fetchAll(PDO::FETCH_ASSOC);
	//var_dump($row);
	return $result_r[] = var_export($row, true);
	} catch (PDOException $exception) {
		echo 'Error! Message: '.$exception -> getMessage(). 'Code: '. $exception -> getCode();
	}
	
}


$description = 'Simple example 2 with mysql';
$inputData = 'dbname=myproject, username=liubov, password=Sheyda_1984';

$result = 0;


class Connection 
{
 
    private $dsn; 
    private $username;
    private $password;
    private $pdo = null;
 
    public function __construct($dsn, $username, $password, $database)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;        
    }
 
    protected function createConnection()
    {
        try {
            $pdo = new PDO($this->dsn, $this->username, $this->password);
        } catch (PDOException $exception) {
                   
        }
        return $pdo;
    }
 
    public function getConnection()
    {
        if ($this->pdo == null) {
            $this->pdo = $this->createConnection();
        }
        return $this->pdo;
    }
}