<?php


namespace App\Model;

use PDO;

class AuthorModel //CRUD with Database
{
    private $dbConnect;
    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    //Lấy ra toàn bộ Author
    public function getAll(): array
    {
        try {
            $sql = "SELECT * FROM `authors`";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $this->convertToObject($data);
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }

    }

    //Lấy ra Author theo id
    public function getById($id)
    {

    }

    //Tạo Author
    public function create($request)
    {

    }

    //Cập nhật thông tin Author
    public function update($author)
    {

    }

    //Xoá Author theo id
    public function delete($id)
    {

    }

    public function convertToObject($data): array
    {
        $authors = [];
        foreach ($data as $item) {
            $author = new Author($item->first_name, $item->last_name, $item->email, $item->birthdate);
            $author->setId($item->id);
            array_push($authors, $author);
        }
        return $authors;
    }
}