<?php 

Trait Model
{
    use Database;

    public function getAll()
    {
        $query = "SELECT * FROM $this->table";
        $result = $this->query($query);
        
        return $result;
    }

    public function insert($data)
	{
		$keys = array_keys($data);

		$query = "insert into $this->table (".implode(",", $keys).") values (:".implode(",:", $keys).")";
		$this->query($query, $data);

		return false;
	}

	public function update($id, $data, $id_column = 'id')
	{
        $currentDateTime = date('Y-m-d H:i:s', time());
        $data['updated_at'] = $currentDateTime;
		$keys = array_keys($data);
		$query = "update $this->table set ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . ", ";
		}
    
		$query = trim($query,", ");
		

		$query .= " where $id_column = :$id_column ";

		$data[$id_column] = $id;

		$this->query($query, $data);
		return false;

	}

	public function delete($id, $id_column = 'id')
	{

		$data[$id_column] = $id;
		$query = "delete from $this->table where $id_column = :$id_column ";
		$this->query($query, $data);

		return false;

	}
}
