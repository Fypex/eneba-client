<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Model\Input;

use Helis\EnebaClient\Enum\KeyStateEnum;

class KeysFilter extends PaginationFilter
{
    /**
     * @var KeyStateEnum|null
     */
    protected $state;
    protected $orderNumber = '';
    protected $orderNumbers = [];
    protected $ids = [];


    public function getState(): ?KeyStateEnum
    {
        return $this->state;
    }

    public function getIds()
    {
        return $this->ids;
    }

    public function getOrderNumber(): string
    {
        return $this->orderNumber;
    }

    public function getOrderNumbers(): array
    {
        return $this->orderNumbers;
    }

    public function setState(?KeyStateEnum $state): void
    {
        $this->state = $state;
    }

    public function setIds(array $ids)
    {
        $this->ids = $ids;
    }

    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    }

    public function setOrderNumbers(array $orderNumbers)
    {
        $this->orderNumbers = $orderNumbers;
    }

}
