<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Edge\SalesEdge;
use Helis\EnebaClient\Model\Relay\Edge\TransactionsEdge;
use Helis\EnebaClient\Model\Sales;
use Helis\EnebaClient\Model\Transactions;

class TransactionsEdgeDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;

    public function denormalize($data, string $class): TransactionsEdge
    {
        return new TransactionsEdge(
            $data['cursor'],
            $this->denormalizer->denormalize($data['node'], Transactions::class)
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === TransactionsEdge::class;
    }
}
