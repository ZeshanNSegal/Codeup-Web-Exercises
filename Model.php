<?php
require_once 'Input.php';
require_once 'Log.php';
require_once 'config.php';

class Model 
{
    protected static $dbc;
    protected static $table;

    public $attributes = array();

    public function __construct()
    {
        self::dbConnect();
    }

    private static function dbConnect()
    {
        if (!self::$dbc)
        {
            self::$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        	self::$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->attributes)){
        	return $this->attributes[$name];
        }
        
        return null;	
    }

    public static function getTableName()
    {
    	return self::table;
    }

    public function save()
    {
		if(!empty($this->attributes))
		{
			if(isset($this->attributes['id']))
			{
				$this->update($this->attributes['id']);
			}
			else 
			{
				$this->insert();
			}
		}
	}	

	protected function insert()
	{
	    $query = "INSERT INTO " . static::$table . " (first_name, last_name, email, phone, address, city, state, zip) 
	    VALUES (
	    		:first_name, :last_name, :email, :phone, :address, :city, :state, :zip)";

	    $stmt = self::$dbc->prepare($query);

	    $stmt->bindValue(':first_name', $this->first_name, PDO::PARAM_STR);
		$stmt->bindValue(':last_name', $this->last_name, PDO::PARAM_STR);
		$stmt->bindValue(':email', $this->email, PDO::PARAM_STR);
		$stmt->bindValue(':phone', $this->phone, PDO::PARAM_STR);
		$stmt->bindValue(':address', $this->address, PDO::PARAM_STR);
		$stmt->bindValue(':city', $this->city, PDO::PARAM_STR);
		$stmt->bindValue(':state', $this->state, PDO::PARAM_STR);
		$stmt->bindValue(':zip', $this->zip, PDO::PARAM_STR);
		
		$stmt->execute();

    	// echo "Inserted ID: " . self::$dbc->lastInsertId() . PHP_EOL;
	}	
 
	protected function update($id)
	{

		$query = "UPDATE" . static::$table . " SET ";
		$first_value = true;

		foreach ($this->attributes as $key => $value)
		{
			if ($key == 'id')
			{
				continue;
			}
			if($first_value)
			{
				$first_value = false;
				$query .= $key . ' = :' . $key;
			}
			else
			{
				$query .= ', ' . $key . ' = :' . $key;
			}
		} 

		$query .= 'WHERE id = ' . $id;

		$stmt = self::$dbc->prepare($query);

		foreach ($this->attributes as $key => $value)
		{
			if ($key == 'id')
			{
				continue;
			}		
			$stmt->bindValue(':' . $key, $value, PDO::PARAM_STR);
		}

		$stmt->execute();
	}
        
    public static function find($id)
    {
        self::dbConnect();

        $query = "SELECT * FROM " . static::$table . " WHERE id = :id";

        $stmt = self::$dbc->prepare($query);
       	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
       	$stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($result)
        {
            $instance = new static;
            $instance->attributes = $result;
        }
        return $instance;
    }

    public static function all()
    {
        self::dbConnect();
        $query = "SELECT * FROM " . static::$table;

        $stmt = self::$dbc->prepare($query);
       	$stmt->execute();

       	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results)
        {
            $instance = new static;
            $instance->attributes = $results;
        }
        return $instance;
    }

    public static function delete($id)
	{
		self::dbConnect();
		$query = "DELETE FROM " . static::$table . " WHERE id = :id";

		$stmt = self::$dbc->prepare($query);
       	$stmt->bindValue(':id', $id, PDO::PARAM_INT);
       	$stmt->execute();

	}	
}
