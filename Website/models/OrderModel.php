<?php
/**
 * Created by: Jake 2020
 */

class OrderModel extends BaseModel
{
    private int $id, $user_id,$status;
    private string $street, $house_nr, $zipcode, $city, $createdAt;

    public function __construct()
    {
        parent::__construct();
    }

    public function fetchAll()
    {
        $query = 'SELECT * FROM flevo_order';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = array();
        while($data = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $user = new OrderModel();
            $user->load($data);
            $result[]=$user;
        }
        return $result;
    }

    public function fetchById(int $id)
    {
        $query = "SELECT * FROM flevo_order WHERE id = :id";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch();
            if($data !== false) {
                return $this->load($data);
            }
        endif;
    }

    public function updateOrder(OrderModel $order){
        $query = "UPDATE flevo_order SET 
                    status = :status 
                    WHERE id = :id";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':id', $order->getId(), PDO::PARAM_INT);
            $stmt->bindValue(':status', $order->getStatus(), PDO::PARAM_INT);
            return $stmt->execute();
        endif;
        return false;
    }


    public function fetchByUserId(int $user_id)
    {
        $query = "SELECT * FROM flevo_order WHERE user_id = :user_id";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
            $stmt->execute();
            $result = array();
            while($data = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $user = new OrderModel();
                $user->load($data);
                $result[]=$user;
            }
            return $result;
        endif;
    }

    private function load($data)
    {
        $this->setId($data['id']);
        $this->setCity($data['city']);
        $this->setHouseNr($data['house_nr']);
        $this->setStreet($data['street']);
        $this->setZipcode($data['zipcode']);
        $this->setUserId($data['user_id']);
        $this->setStatus($data['status']);
        $this->setCreatedAt($data['created_at']);
        return $this;
    }

    public function store(OrderModel $order)
    {
        $query = "INSERT INTO flevo_order (user_id, street,house_nr, zipcode, city) VALUES (:user_id, :street,:house_nr, :zipcode, :city)";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':user_id', $order->getUserId());
            $stmt->bindValue(':street', $order->getStreet());
            $stmt->bindValue(':house_nr', $order->getHouseNr());
            $stmt->bindValue(':zipcode', $order->getZipcode());
            $stmt->bindValue(':city', $order->getCity());
            $stmt->execute();
            return $this->pdo->lastInsertId();
        endif;
        return false;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return OrderModel
     */
    public function setId(int $id): OrderModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     * @return OrderModel
     */
    public function setUserId(int $user_id): OrderModel
    {
        $this->user_id = $user_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     * @return OrderModel
     */
    public function setStatus(int $status): OrderModel
    {
        $this->status = $status;
        return $this;
    }

    /**
     * @return string
     */
    public function getStreet(): string
    {
        return $this->street;
    }

    /**
     * @param string $street
     * @return OrderModel
     */
    public function setStreet(string $street): OrderModel
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getHouseNr(): string
    {
        return $this->house_nr;
    }

    /**
     * @param string $house_nr
     * @return OrderModel
     */
    public function setHouseNr(string $house_nr): OrderModel
    {
        $this->house_nr = $house_nr;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipcode(): string
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     * @return OrderModel
     */
    public function setZipcode(string $zipcode): OrderModel
    {
        $this->zipcode = $zipcode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return OrderModel
     */
    public function setCity(string $city): OrderModel
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     * @return OrderModel
     */
    public function setCreatedAt(string $createdAt): OrderModel
    {
        $this->createdAt = $createdAt;
        return $this;
    }
}