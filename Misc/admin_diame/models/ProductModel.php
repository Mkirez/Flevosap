<?php


class ProductModel extends BaseModel
{
    private int $id;
    private string $title, $productCode, $prijs, $hoeveelheid, $productOmschrijving;
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
        else{ throw new Exception("Unknown product id");
        }
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
    public function selectproduct()
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

    public function selectall()
    {
        echo "sahs";
    }



    private function load($data)
    {
        $this->setId($data['id']);
        $this->setTitle($data['title']);
        $this->setProductCode($data['productCode']);
        $this->setPrijs($data['prijs']);
        $this->setProductOmschrijving($data['productOmschrijving']);
        $this->setHoeveelheid($data['hoeveelheid']);
        $this->setCreatedAt($data['createdAt']);
        $this->setUpdatedAt($data['updatedAt']);
    }

    public function delete($id)
    {
        if ($id != null) {
            $stmt = $this->pdo->prepare('SELECT * FROM Products WHERE id = ?');
            $stmt->execute([$id]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$user) {
                return "0";
            }
            $stmt = $this->pdo->prepare('DELETE FROM Products WHERE id = ?');
            $stmt->execute([$id]);
            return "1";
        } else {
            return "0";
        }
    }

    public function updateProduct(ProductModel $product)
    {
        $query = "UPDATE products SET 
                    title = :title, 
                    productCode = :productCode, 
                    productOmschrijving = :productOmschrijving,
                    prijs = :prijs,
                    hoeveelheid = :hoeveelheid
                    WHERE id = :id";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':id', $product->getId(), PDO::PARAM_INT);
            $stmt->bindValue(':title', $product->getTitle());
            if($product->getPicture() != null){
                $stmt->bindValue(':picture',$product->getPicture() );
            }
            $stmt->bindValue(':productCode', $product->getProductCode());
            $stmt->bindValue(':productOmschrijving', $product->getProductOmschrijving());
            $stmt->bindValue(':prijs', $product->getPrijs());
            $stmt->bindValue(':hoeveelheid', $product->getHoeveelheid());


            return $stmt->execute();
        endif;
        return false;
    }

    public function store(ProductModel $product)
    {
        $query = "INSERT INTO Products (title, productCode, productOmschrijving, prijs, hoeveelheid) VALUES (:title, :productCode, :productOmschrijving, :prijs, :hoeveelheid)";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':title', $product->getTitle());
            $stmt->bindValue(':productCode', $product->getProductCode());
            $stmt->bindValue(':productOmschrijving', $product->getProductOmschrijving());
            $stmt->bindValue(':prijs', $product->getPrijs());
            $stmt->bindValue(':hoeveelheid', $product->getHoeveelheid());
            return $stmt->execute();
        endif;
        return false;
    }

    public function checkExistingTitle(string $title) : bool
    {
        $query = "SELECT * FROM Products WHERE title = :title";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->rowCount() == 0;
        endif;
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
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     * @return ProductModel
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;
        return $this;
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
        return $this->productOmschrijving;
    }

    /**
     * @param string $productOmschrijving
     */
    public function setProductOmschrijving(string $productOmschrijving): void
    {
        $this->productOmschrijving = $productOmschrijving;
    }



}



