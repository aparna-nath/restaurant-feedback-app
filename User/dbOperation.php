<?php
class dbOperation
{
	public $con,$res;

	function connect()
	{
		$this->con=mysqli_connect("localhost","root",'',"mealprep");
	}
	public function sql_query($sql)
	{
		$this->connect();
		$this->res=mysqli_query($this->con,$sql);
		return $this->res;
	}
}


?>