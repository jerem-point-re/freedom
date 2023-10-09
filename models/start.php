<?php
function createStatus($id_user, $title, $content) {
    global $PDO;
    $query = $PDO->prepare("INSERT INTO status (id_user, content, creation_date) VALUES (:id_user, :content, :creation_date)");
    $query->execute([
        "id_user" => $id_user,
        "content" => $content,
        "creation_date" => date("Y-m-d H:i:s") 

    ]);
    return true;
}
function getStatuses()
{
    global $PDO;

        $query = $PDO->prepare("SELECT * FROM status");
        $query->execute();
        $status = $query->fetchAll();
        return $status;
}