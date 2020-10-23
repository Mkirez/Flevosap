<?php


class ppzakelijkmodel extends basemodel
{
    private int $id;
    private string $productnaam, $productcode, $productprijs, $hoeveelheid, $voorraad;
    private $productfoto;
    private $createdAt, $updatedAt;

    public function __construct()
    {
        parent::__construct();
    }

    public function getProductPictureByProductId($id)
    {
        $query = 'SELECT picture FROM Products WHERE id = :id';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if($data = $stmt->fetch())
        {
            return $data['picture'];
        }

        throw new Exception("Unknown product id");
    }

    public function find($id)
    {
        $query = 'SELECT * FROM Products WHERE id = :id';
        $stmt = $this->pdo->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        if($data = $stmt->fetch())
        {
            $product = new ppzakelijkmodel();
            $product->load($data);
            return $product;
        }

        throw new Exception("Unknown product id");
    }

    public function all()
    {
        $query = 'SELECT * FROM FsZakelijkeProducts';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = array();
        while($data = $stmt->fetch())
        {
            $product = new ppzakelijkmodel();
            $product->load($data);
            $result[]=$product;
        }

        return $result;
    }

    private function load($data)
    {
        $this->setId($data['id']);
        $this->setProductnaam($data['productnaam']);
        $this->setProductcode($data['productcode']);
        $this->setProductprijs($data['productprijs']);
        $this->setHoeveelheid($data['voorraad']);
        $this->setProductfoto($data['productfoto']);
        $this->setCreatedAt($data['createdAt']);
        $this->setUpdatedAt($data['updatedAt']);
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
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getProductnaam(): string
    {
        return $this->productnaam;
    }

    /**
     * @param string $productnaam
     */
    public function setProductnaam(string $productnaam): void
    {
        $this->productnaam = $productnaam;
    }

    /**
     * @return string
     */
    public function getProductcode(): string
    {
        return $this->productcode;
    }

    /**
     * @param string $productcode
     */
    public function setProductcode(string $productcode): void
    {
        $this->productcode = $productcode;
    }

    /**
     * @return string
     */
    public function getProductprijs(): string
    {
        return $this->productprijs;
    }

    /**
     * @param string $productprijs
     */
    public function setProductprijs(string $productprijs): void
    {
        $this->productprijs = $productprijs;
    }

    /**
     * @return string
     */
    public function getHoeveelheid(): string
    {
        return $this->hoeveelheid;
    }

    /**
     * @param string $hoeveelheid
     */
    public function setHoeveelheid(string $hoeveelheid): void
    {
        $this->hoeveelheid = $hoeveelheid;
    }

    /**
     * @return string
     */
    public function getVoorraad(): string
    {
        return $this->voorraad;
    }

    /**
     * @param string $voorraad
     */
    public function setVoorraad(string $voorraad): void
    {
        $this->voorraad = $voorraad;
    }

    /**
     * @return mixed
     */
    public function getProductfoto()
    {
        return $this->productfoto;
    }

    /**
     * @param mixed $productfoto
     */
    public function setProductfoto($productfoto): void
    {
        $this->productfoto = $productfoto;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param mixed $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }



}