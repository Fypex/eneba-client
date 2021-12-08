<?php

namespace Helis\EnebaClient\Model\Input;

use DateTime;

class TransactionsFilter extends PaginationFilter
{

    protected $createdFrom;
    protected $createdTo;
    protected $direction;
    protected $type;

    public function getCreatedFrom(): ?DateTime
    {
        return $this->createdFrom;
    }

    public function getCreatedTo(): ?DateTime
    {
        return $this->createdTo;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDirection()
    {
        return $this->direction;
    }

    public function setCreatedFrom(?DateTime $createdFrom): void
    {
        $this->createdFrom = $createdFrom;
    }

    public function setCreatedTo(?DateTime $createdTo): void
    {
        $this->createdTo = $createdTo;
    }

    public function setType($type): void
    {
        $this->type = $type;
    }

    public function setDirection($direction): void
    {
        $this->direction = $direction;
    }

}
