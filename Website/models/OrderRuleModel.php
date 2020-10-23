<?php
/**
 * Created by: Jake 2020
 */

class OrderRuleModel extends BaseModel
{
    private int $id,$order_id,$product_id,$total;
    private float $price;

    public function __construct()
    {
        parent::__construct();
    }

    public function store(OrderRuleModel $order_rule)
    {
        $query = "INSERT INTO order_rule (order_id,product_id,price,total) VALUES (:order_id, :product_id,:price, :total)";
        if ($stmt = $this->pdo->prepare($query)) :
            $stmt->bindValue(':order_id', $order_rule->getOrderId());
            $stmt->bindValue(':product_id', $order_rule->getProductId());
            $stmt->bindValue(':price', $order_rule->getPrice());
            $stmt->bindValue(':total', $order_rule->getTotal());
            $stmt->execute();
            return $this->pdo->lastInsertId();
        endif;
        return false;
    }

    public function fetchByOrderId(int $orderId)
    {
        $query = "SELECT * FROM order_rule WHERE order_id = :order_id ";
        $stmt = $this->pdo->prepare($query);
        $stmt->bindValue(':order_id',$orderId);
        $stmt->execute();
        $result = array();
        $data = $stmt->fetchAll();
        foreach($data as $item)
        {
            $OrderRule = new OrderRuleModel();
            $OrderRule->load($item);
            $result[]=$OrderRule;
        }
        return $result;
    }


    private function load($data)
    {
        $this->setId($data['id']);
        $this->setPrice($data['price']);
        $this->setTotal($data['total']);
        $this->setProductId($data['product_id']);
        $this->setPrice($data['price']);
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
     * @return OrderRuleModel
     */
    public function setId(int $id): OrderRuleModel
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->order_id;
    }

    /**
     * @param int $order_id
     * @return OrderRuleModel
     */
    public function setOrderId(int $order_id): OrderRuleModel
    {
        $this->order_id = $order_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getProductId(): int
    {
        return $this->product_id;
    }

    /**
     * @param int $product_id
     * @return OrderRuleModel
     */
    public function setProductId(int $product_id): OrderRuleModel
    {
        $this->product_id = $product_id;
        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @param int $total
     * @return OrderRuleModel
     */
    public function setTotal(int $total): OrderRuleModel
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return OrderRuleModel
     */
    public function setPrice(float $price): OrderRuleModel
    {
        $this->price = $price;
        return $this;
    }
}