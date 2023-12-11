<?php declare(strict_types=1);

namespace Luno\Response;

class GetOrderV2 extends AbstractResponse
{
  /**
   * Amount of base filled, this value is always positive.
   * 
   * Use this field and `side` to determine credit or debit of funds.
   */
  protected $base;

  /**
   * The base account ID used to place the order
   */
  protected $base_account_id;

  /**
   * Client Order ID has the value that was passed in when the Order was posted.
   */
  protected $client_order_id;

  /**
   * Time of order completion (Unix milliseconds)
   * 
   * This value is set at the time of this order leaving the order book,
   * either immediately upon posting or later on due to a trade or cancellation.
   * Whilst the order is still pending/live it will be 0.
   */
  protected $completed_timestamp;

  /**
   * Amount of counter filled, this value is always positive.
   * 
   * Use this field and `side` to determine credit or debit of funds.
   */
  protected $counter;

  /**
   * The counter account ID used to place the order
   */
  protected $counter_account_id;

  /**
   * Time of order creation (Unix milliseconds)
   */
  protected $creation_timestamp;

  /**
   * Time of order expiration (Unix milliseconds)
   * 
   * This value is set at the time of processing a request from you to cancel the order, otherwise it will be 0.
   */
  protected $expiration_timestamp;

  /**
   * Base amount of fees to be charged
   */
  protected $fee_base;

  /**
   * Counter amount of fees to be charged
   */
  protected $fee_counter;

  /**
   * Limit price to transact
   */
  protected $limit_price;

  /**
   * Limit volume to transact
   */
  protected $limit_volume;

  /**
   * The order reference
   */
  protected $order_id;

  /**
   * Specifies the market
   */
  protected $pair;

  /**
   * The intention of the order, whether to buy or sell funds in the market.
   * 
   * You can use this to determine the flow of funds in the order.
   */
  protected $side;

  /**
   * The current state of the order
   * 
   * Status meaning:<br>
   * <code>AWAITING</code> The order is awaiting to enter the order book.<br>
   * <code>PENDING</code> The order is in the order book. Some trades may
   * have taken place but the order is not filled yet.<br>
   * <code>COMPLETE</code> The order is no longer in the order book. It has
   * been settled/filled or has been cancelled.
   */
  protected $status;

  /**
   * Direction to trigger the order
   */
  protected $stop_direction;

  /**
   * Price to trigger the order
   */
  protected $stop_price;

  /**
   * The Time in force option used when the LimitOrder was posted.
   * 
   * Only returned on limit orders.<br>
   * <code>GTC</code> Good 'Til Cancelled. The order remains open until it is filled or cancelled by the user. (default)</br>
   * <code>IOC</code> Immediate Or Cancel. The part of the order that cannot be filled immediately will be cancelled. Cannot be post-only.</br>
   * <code>FOK</code> Fill Or Kill. If the order cannot be filled immediately and completely it will be cancelled before any trade. Cannot be post-only.
   */
  protected $time_in_force;

  /**
   * The order type
   */
  protected $type;
  
  /**
   * @return float
   */
  public function getBase(): float
  {
    if (!isset($this->base)) {
      return 0;
    }
    return $this->base;
  }

  /**
   * @param float $base
   */
  public function setBase(float $base)
  {
    $this->base = $base;
  }

  /**
   * @return int
   */
  public function getBaseAccountId(): int
  {
    if (!isset($this->base_account_id)) {
      return 0;
    }
    return $this->base_account_id;
  }

  /**
   * @param int $baseAccountId
   */
  public function setBaseAccountId(int $baseAccountId)
  {
    $this->base_account_id = $baseAccountId;
  }

  /**
   * @return string
   */
  public function getClientOrderId(): string
  {
    if (!isset($this->client_order_id)) {
      return "";
    }
    return $this->client_order_id;
  }

  /**
   * @param string $clientOrderId
   */
  public function setClientOrderId(string $clientOrderId)
  {
    $this->client_order_id = $clientOrderId;
  }

  /**
   * @return int
   */
  public function getCompletedTimestamp(): int
  {
    if (!isset($this->completed_timestamp)) {
      return 0;
    }
    return $this->completed_timestamp;
  }

  /**
   * @param int $completedTimestamp
   */
  public function setCompletedTimestamp(int $completedTimestamp)
  {
    $this->completed_timestamp = $completedTimestamp;
  }

  /**
   * @return float
   */
  public function getCounter(): float
  {
    if (!isset($this->counter)) {
      return 0;
    }
    return $this->counter;
  }

  /**
   * @param float $counter
   */
  public function setCounter(float $counter)
  {
    $this->counter = $counter;
  }

  /**
   * @return int
   */
  public function getCounterAccountId(): int
  {
    if (!isset($this->counter_account_id)) {
      return 0;
    }
    return $this->counter_account_id;
  }

  /**
   * @param int $counterAccountId
   */
  public function setCounterAccountId(int $counterAccountId)
  {
    $this->counter_account_id = $counterAccountId;
  }

  /**
   * @return int
   */
  public function getCreationTimestamp(): int
  {
    if (!isset($this->creation_timestamp)) {
      return 0;
    }
    return $this->creation_timestamp;
  }

  /**
   * @param int $creationTimestamp
   */
  public function setCreationTimestamp(int $creationTimestamp)
  {
    $this->creation_timestamp = $creationTimestamp;
  }

  /**
   * @return int
   */
  public function getExpirationTimestamp(): int
  {
    if (!isset($this->expiration_timestamp)) {
      return 0;
    }
    return $this->expiration_timestamp;
  }

  /**
   * @param int $expirationTimestamp
   */
  public function setExpirationTimestamp(int $expirationTimestamp)
  {
    $this->expiration_timestamp = $expirationTimestamp;
  }

  /**
   * @return float
   */
  public function getFeeBase(): float
  {
    if (!isset($this->fee_base)) {
      return 0;
    }
    return $this->fee_base;
  }

  /**
   * @param float $feeBase
   */
  public function setFeeBase(float $feeBase)
  {
    $this->fee_base = $feeBase;
  }

  /**
   * @return float
   */
  public function getFeeCounter(): float
  {
    if (!isset($this->fee_counter)) {
      return 0;
    }
    return $this->fee_counter;
  }

  /**
   * @param float $feeCounter
   */
  public function setFeeCounter(float $feeCounter)
  {
    $this->fee_counter = $feeCounter;
  }

  /**
   * @return float
   */
  public function getLimitPrice(): float
  {
    if (!isset($this->limit_price)) {
      return 0;
    }
    return $this->limit_price;
  }

  /**
   * @param float $limitPrice
   */
  public function setLimitPrice(float $limitPrice)
  {
    $this->limit_price = $limitPrice;
  }

  /**
   * @return float
   */
  public function getLimitVolume(): float
  {
    if (!isset($this->limit_volume)) {
      return 0;
    }
    return $this->limit_volume;
  }

  /**
   * @param float $limitVolume
   */
  public function setLimitVolume(float $limitVolume)
  {
    $this->limit_volume = $limitVolume;
  }

  /**
   * @return string
   */
  public function getOrderId(): string
  {
    if (!isset($this->order_id)) {
      return "";
    }
    return $this->order_id;
  }

  /**
   * @param string $orderId
   */
  public function setOrderId(string $orderId)
  {
    $this->order_id = $orderId;
  }

  /**
   * @return string
   */
  public function getPair(): string
  {
    if (!isset($this->pair)) {
      return "";
    }
    return $this->pair;
  }

  /**
   * @param string $pair
   */
  public function setPair(string $pair)
  {
    $this->pair = $pair;
  }

  /**
   * @return string
   */
  public function getSide(): string
  {
    if (!isset($this->side)) {
      return "";
    }
    return $this->side;
  }

  /**
   * @param string $side
   */
  public function setSide(string $side)
  {
    $this->side = $side;
  }

  /**
   * @return string
   */
  public function getStatus(): string
  {
    if (!isset($this->status)) {
      return "";
    }
    return $this->status;
  }

  /**
   * @param string $status
   */
  public function setStatus(string $status)
  {
    $this->status = $status;
  }

  /**
   * @return string
   */
  public function getStopDirection(): string
  {
    if (!isset($this->stop_direction)) {
      return "";
    }
    return $this->stop_direction;
  }

  /**
   * @param string $stopDirection
   */
  public function setStopDirection(string $stopDirection)
  {
    $this->stop_direction = $stopDirection;
  }

  /**
   * @return float
   */
  public function getStopPrice(): float
  {
    if (!isset($this->stop_price)) {
      return 0;
    }
    return $this->stop_price;
  }

  /**
   * @param float $stopPrice
   */
  public function setStopPrice(float $stopPrice)
  {
    $this->stop_price = $stopPrice;
  }

  /**
   * @return string
   */
  public function getTimeInForce(): string
  {
    if (!isset($this->time_in_force)) {
      return "";
    }
    return $this->time_in_force;
  }

  /**
   * @param string $timeInForce
   */
  public function setTimeInForce(string $timeInForce)
  {
    $this->time_in_force = $timeInForce;
  }

  /**
   * @return string
   */
  public function getType(): string
  {
    if (!isset($this->type)) {
      return "";
    }
    return $this->type;
  }

  /**
   * @param string $type
   */
  public function setType(string $type)
  {
    $this->type = $type;
  }
}

// vi: ft=php
