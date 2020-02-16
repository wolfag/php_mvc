<?php
class CategoryModel extends DB
{
    public function ListAll()
    {
        $query = 'select * from category';
        $data = mysqli_query($this->conn, $query);
        $result = [];
        while ($row = mysqli_fetch_object($data)) {
            $result[] = $row;
        }
        return json_encode($result);
    }
}
