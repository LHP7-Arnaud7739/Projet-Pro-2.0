<?php

class Categories extends DataBase
{
    // Fonction qui reupere l affichage des categories
    public function catName(): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `cat_id`,`cat_name` FROM `mp_category`;";
        $resultQuery = $db->query($sql);
        return $resultQuery->fetchAll();
    }
};


class Contraindication extends DataBase
{
    // Fonction qui reupere l affichage des contres indications
    public function allContraindication(): array
    {
        $dB = $this->connectDb();
        $sql = "SELECT `cont_id`, `cont_name` FROM `mp_contraindication`;";
        $resultsQuery = $dB->query($sql);
        return $resultsQuery->fetchAll();
    }

      // Fonction qui permet de lier l'ID des contres indications aux services
    public function addContraindicationToService(int $serId, int $contId): void
    {
        $dB = $this->connectDb();
        $sql = "INSERT INTO `mp_servicesCi` Value (:ser_id, :cont_id);";
        $query = $dB->prepare($sql);
        $query->bindValue(":ser_id", $serId, PDO::PARAM_STR);
        $query->bindValue(":cont_id", $contId, PDO::PARAM_STR);
        $query->execute();
    }

    // Fonction qui permet d'afficher l'ID des contres indications aux services
    public function getServiceContraindication(int $idServiceContraindication): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `mp_contraindication`.`cont_id`, `mp_contraindication`.`cont_name`  FROM `mp_services`
        INNER JOIN `mp_servicesCi` ON `mp_servicesCi`.`ser_id` = `mp_services`.`ser_id`
        INNER JOIN `mp_contraindication` ON `mp_contraindication`.`cont_id` = `mp_servicesCi`.`cont_id`
        WHERE `mp_services`.`ser_id` = :ser_id;";
        $query = $db->prepare($sql);
        $query->bindValue(":ser_id", $idServiceContraindication,  PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
};

class Benefits extends DataBase
{
    // fonction qui permet d afficher les benefices
    public function allBenefits(): array
    {
        $dB = $this->connectDb();
        $sql = "SELECT `ben_id`, `ben_names` FROM `projet_pro_Arnaud3`.`mp_benefits`;";
        $resultsQuery = $dB->query($sql);
        return $resultsQuery->fetchAll();
    }

    // fonction qui permet d afficher les benefices lier aux categories
    public function getBenefitsByCategory(int $id_cat): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `cat_name`, `ben_names` FROM `mp_category`
        INNER JOIN `mp_benefits` ON `mp_benefits`.`cat_id` = `mp_category`.`cat_id`
        WHERE `mp_category`.`cat_id` = :cat_id;";
        $query = $db->prepare($sql);
        $query->bindValue(":id_cat", $id_cat, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }

    // Fonction qui permet d'afficher l'ID des benefices aux services
    public function getServiceBenefits(int $idService): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `mp_benefits`.`ben_id`, `mp_benefits`.`ben_names`  FROM `mp_services`
        INNER JOIN `mp_servicesBEN` ON `mp_servicesBEN`.`ser_id` = `mp_services`.`ser_id`
        INNER JOIN `mp_benefits` ON  `mp_benefits`.`ben_id` = `mp_servicesBEN`.`ben_id`
        WHERE `mp_services`.`ser_id` = :ser_id";
        $query = $db->prepare($sql);
        $query->bindValue(":ser_id", $idService,  PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
};

class Services extends DataBase
{
    // fonction qui permet d'ajouter un services
    public function addService(string $name, string $intro, string $description, string $price, string $time, string $picture, string $miniature, int $catId): int
    {
        $dB = $this->connectDb();
        $sql = "INSERT INTO mp_services (ser_name,ser_intro, ser_description, ser_price, ser_time, ser_picture, ser_miniature, cat_id ) VALUES (:ser_name, :ser_intro, :ser_description, :ser_price, :ser_time, :ser_picture, :ser_miniature, :cat_id) ";
        $query = $dB->prepare($sql);
        $query->bindValue(":ser_name", $name, PDO::PARAM_STR);
        $query->bindValue(":ser_description", $description, PDO::PARAM_STR);
        $query->bindValue(":ser_price", $price, PDO::PARAM_STR);
        $query->bindValue(":ser_time", $time, PDO::PARAM_STR);
        $query->bindValue(":ser_picture", $picture, PDO::PARAM_STR);
        $query->bindValue(":ser_miniature", $miniature, PDO::PARAM_STR);
        $query->bindValue(":cat_id", $catId, PDO::PARAM_STR);
        $query->bindValue(":ser_intro", $intro, PDO::PARAM_STR);
        $query->execute();
        return $dB->lastInsertId();
    }

    // fonction qui permet d'ajouter l'ID aux sercices
    public function addBenefitsToService(int $benId, int $serId): void
    {
        $dB = $this->connectDb();
        $sql = "INSERT INTO `mp_servicesBEN` Value (:ben_id, :ser_id); ";
        $query = $dB->prepare($sql);
        $query->bindValue(":ben_id", $benId, PDO::PARAM_STR);
        $query->bindValue(":ser_id", $serId, PDO::PARAM_STR);
        $query->execute();
    }
};

class Prestation extends DataBase
{
    public function allPresta(): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `mp_category`.`cat_id`, `cat_name`, `ser_name`, `ser_intro`, `ser_description`, `ser_price`, `ser_time`, `ser_picture`, `ser_miniature` FROM mp_services
        INNER JOIN `mp_category` ON `mp_category`.`cat_id` = `mp_services`.`cat_id`";
        $resultQuery = $db->query($sql);
        return $resultQuery->fetchAll();
    }

    public function getPrestaByCategory(int $id_cat): array
    {
        $db = $this->connectDb();
        $sql = "SELECT `ser_id`, `mp_category`.`cat_id`, `cat_name`, `ser_name`, `ser_intro`, `ser_description`, `ser_price`, `ser_time`, `ser_picture`, `ser_miniature` FROM mp_services
        INNER JOIN `mp_category` ON `mp_category`.`cat_id` = `mp_services`.`cat_id`
    WHERE `mp_category`.`cat_id` = :id_cat;";
        $query = $db->prepare($sql);
        $query->bindValue(":id_cat", $id_cat, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll();
    }
};
