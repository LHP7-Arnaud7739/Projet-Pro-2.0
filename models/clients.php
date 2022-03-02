<?php

class Clients extends DataBase
{
    public function addClient(string $lastname, string $firstname, string $phone, string $mail): void
    {
        $db = $this->connectDb();
        $sql = "INSERT INTO `mp_users` (`lastName`, `firstName`, `phone`, `mail`) VALUES 
        ( :lastName, :firstName, :phone, :mail)";
        $query = $db->prepare($sql);
        $query->bindValue(':lastName', $lastname, PDO::PARAM_STR);
        $query->bindValue(':firstName', $firstname, PDO::PARAM_STR);
        $query->bindValue(':phone', $phone, PDO::PARAM_STR);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);

        $query->execute();
    }

    // fonction pour voir si le mail est deja existant
    public function checkFreeMail(string $mail): bool
    {
        $db = $this->connectDb();
        $sql = "SELECT `mail`FROM `mp_users` WHERE `mail` = :mail";
        $query = $db->prepare($sql);
        $query->bindValue(':mail', $mail, PDO::PARAM_STR);
        $query->execute();
        $result = $query->fetchAll();

        if (count($result) == 0) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllClient(): array
    {
        $base = $this->connectDb();
        $sql = "SELECT `user_id`, `lastName`, `firstName`, `phone`, `mail` FROM `mp_users` ORDER BY `user_id` DESC";

        $resultQuery = $base->query($sql);
        return $resultQuery->fetchAll();
    }

    public function getOneClient($user_id): array
    {
        $base = $this->connectDb();
        $sql = "SELECT `user_id`,`lastName`, `firstName`, `phone`, `mail` FROM `mp_users` WHERE `user_id`= :user_id";
        $resultQuery = $base->prepare($sql);
        $resultQuery->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $resultQuery->execute();

        return $resultQuery->fetchAll();
    }
 //this = réfere a l'objet actuel
 public function modifyClients ($user_id, $lastName, $firstName, $phone, $mail)
{
    $base = $this->connectDb();
    $sql = "UPDATE `mp_users` SET lastName=:lastName, firstName=:firstName, phone=:phone, mail=:mail
    WHERE user_id=:user_id ;";
    $resultQuery = $base->prepare($sql);
    $resultQuery->bindValue(':lastName', $lastName, PDO::PARAM_STR);
    $resultQuery->bindValue(':firstName', $firstName, PDO::PARAM_STR);
    $resultQuery->bindValue(':mail', $mail, PDO::PARAM_STR);
    $resultQuery->bindValue(':phone', $phone, PDO::PARAM_STR);
    $resultQuery->bindValue(':user_id', $user_id, PDO::PARAM_STR);

    $resultQuery->execute();
 }

    public function deleteClient($user_id): void
    {
        $base = $this->connectDb();
        $sql = "DELETE FROM `mp_users`WHERE `user_id`= :user_id";
        $resultQuery = $base->prepare($sql);
        $resultQuery->bindValue(':user_id', $user_id, PDO::PARAM_INT);
        $resultQuery->execute();

        
    }
}
