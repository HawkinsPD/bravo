<?php
class ImagesDatabaseService
{
    public function createImage()
    {
        $con = new Connection();
        $pdo = $con->connect();
        $images = "CREATE TABLE IF NOT EXISTS images (
            id SERIAL,
            url VARCHAR (2048)
            )";
        $pdo->exec($images);
    }
    public function insertData($url)
    {
        $con = new Connection();
        $pdo = $con->connect();
        $insert = "INSERT INTO images (url) VALUES (?)";
        $stmt = $pdo->prepare($insert);
        $stmt->execute([$url]);
    }
    public function selectData($id)
    {
        $con = new Connection();
        $pdo = $con->connect();
        $select = "SELECT url FROM images WHERE id = $id";
        $stmt = $pdo->query($select);
        $res = $stmt->fetchAll();
        return $res;
    }
}