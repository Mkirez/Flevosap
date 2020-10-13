<?php


class ProductModel extends BaseModel
{
    private int $id;
    private string $title, $productCode, $prijs, $hoeveelheid, $ProductOmschrijving;
    private $picture;
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
            $product = new ProductModel();
            $product->load($data);
            return $product;
        }

        throw new Exception("Unknown product id");
    }

    public function all()
    {
        $query = 'SELECT * FROM Products';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = array();
        while($data = $stmt->fetch())
        {
            $product = new ProductModel();
            $product->load($data);
            $result[]=$product;
        }

        return $result;
    }

    public function load($data)
    {
        $this->setId($data['id']);
        $this->setTitle($data['title']);
        $this->setProductCode($data['productCode']);
        $this->setPrijs($data['prijs']);
        $this->setProductOmschrijving($data['ProductOmschrijving']);
        $this->setHoeveelheid($data['hoeveelheid']);
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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getProductCode(): string
    {
        return $this->productCode;
    }

    /**
     * @param string $productCode
     */
    public function setProductCode(string $productCode): void
    {
        $this->productCode = $productCode;
    }

    /**
     * @return string
     */
    public function getPrijs(): string
    {
        return $this->prijs;
    }

    /**
     * @param string $prijs
     */
    public function setPrijs(string $prijs): void
    {
        $this->prijs = $prijs;
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

    /**
     * @return string
     */
    public function getProductOmschrijving(): string
    {
        return $this->ProductOmschrijving;
    }

    /**
     * @param string $ProductOmschrijving
     */
    public function setProductOmschrijving(string $ProductOmschrijving): void
    {
        $this->ProductOmschrijving = $ProductOmschrijving;
    }



}



