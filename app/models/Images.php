<?php

class Images extends DB
{
    protected $table = "cakes";
    private $image;
    private $name;

    public function getImage($item)
    {
        return $this->$item;
    }
    public function setImage($item, $value)
    {
        $this->$item = $value;
    }
    
    public function getAllImages()
    {
        $query = "SELECT * FROM {$this->table}";
        $response = $this->db_query($query,null,true);
        return $response;
    }
    public function addImage()
    {
        $query = "INSERT INTO {$this->table} (image,name) VALUES (?, ?)";
        $data = [
            $this->image,
            $this->name
        ];
        $response = $this->db_query($query, $data);
        return $response;
    }
}