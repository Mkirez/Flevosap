<?php


class ProductInfoModel extends BaseModel
{
    private int $id;
    private string $title, $description, $product_code, $afbeelding;


    public function __construct(){
        parent::__construct();
    }

    public function fetchAll(){
        $query = 'SELECT * FROM product';
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = array();
        while($data = $stmt->fetch())
        {
            $product = new ProductInfoModel();
            $product->load($data);
            $result[]=$product;
        }
        return $result;
    }

    private function load($data)
    {
        $this->setId($data['id']);
        $this->setTitle($data['title']);
        $this->setProductCode($data['product_code']);
        $this->setDescription($data['description']);
        $this->setAfbeelding($data['afbeelding']);
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
        return $this->product_code;
    }

    /**
     * @param string $product_code
     */
    public function setProductCode(string $product_code): void
    {
        $this->product_code = $product_code;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getAfbeelding(): string
    {
        return $this->afbeelding;
    }

    /**
     * @param string $afbeelding
     */
    public function setAfbeelding(string $afbeelding): void
    {
        $this->afbeelding = $afbeelding;
    }


}