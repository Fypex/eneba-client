<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use DateTime;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Sales;
use Helis\EnebaClient\Model\Transactions;
use Money\Money;
use Ramsey\Uuid\Uuid;

class TransactionsDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    /**
     * @throws \Exception
     */
    public function denormalize($data, string $class): Transactions
    {

        return new Transactions(
            $data['code'],
            Uuid::fromString($data['keyId']),
            $data['status'],
            $data['direction'],
            $data['orderNumber'],
            $data['referenceName'],
            $this->denormalizer->denormalize($data['money'], Money::class),
            new DateTime($data['createdAt'])
        );

    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === Transactions::class;
    }
}
