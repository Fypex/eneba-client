<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model;

use DateTime;
use Money\Money;
use Ramsey\Uuid\UuidInterface;

class Transactions
{
    private $code;
    private $keyId;
    private $money;
    private $createdAt;
    private $orderNumber;
    private $status;
    private $direction;
    private $referenceName;

    public function __construct(
        string $code,
        UuidInterface $keyId,
        string $status,
        string $direction,
        string $orderNumber,
        string $referenceName,
        Money $money,
        DateTime $createdAt
    ) {
        $this->code = $code;
        $this->status = $status;
        $this->direction = $direction;
        $this->keyId = $keyId;
        $this->orderNumber = $orderNumber;
        $this->referenceName = $referenceName;
        $this->money = $money;
        $this->createdAt = $createdAt;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getKeyId(): UuidInterface
    {
        return $this->keyId;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getDirection(): string
    {
        return $this->direction;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getReferenceName(): string
    {
        return $this->referenceName;
    }

    public function getMoney(): Money
    {
        return $this->money;
    }

    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

}
