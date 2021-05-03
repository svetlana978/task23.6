<?php
/**

 * @return PDO

 */

function get_connection()
{
    echo " get_connection  ";
    return new PDO('mysql:host=localhost;port=3307;dbname=testtable', 'root', 'root');
}

function insert(array $data)
{
    echo ' insert  ';
    $query = 'INSERT INTO users (name, email, password, created_at) VALUES(?, ?, ?, ?)';
    $db = get_connection();
    $stmt = $db->prepare($query);
    return $stmt->execute($data);
}

function getUserByEmail(string $email)
{echo " getUserByEmail  ";
    $query = 'SELECT * FROM users WHERE email = ?';
    $db = get_connection();
    $stmt = $db->prepare($query);
    $stmt->execute([$email]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result) {
        return $result;
    }
    return false;
}

function getUsersList()
{echo " getUsersList  ";
    $query = 'SELECT * FROM users ORDER BY id DESC';
    $db = get_connection();
    return $db->query($query,PDO::FETCH_ASSOC);

}