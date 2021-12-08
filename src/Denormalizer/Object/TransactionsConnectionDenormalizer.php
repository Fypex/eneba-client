<?php

namespace Helis\EnebaClient\Denormalizer\Object;

use Helis\EnebaClient\Denormalizer\DenormalizerAwareInterface;
use Helis\EnebaClient\Denormalizer\DenormalizerAwareTrait;
use Helis\EnebaClient\Denormalizer\DenormalizerInterface;
use Helis\EnebaClient\Model\Relay\Connection\PageInfo;
use Helis\EnebaClient\Model\Relay\Connection\ProductConnection;
use Helis\EnebaClient\Model\Relay\Connection\SalesConnection;
use Helis\EnebaClient\Model\Relay\Connection\TransactionsConnection;
use Helis\EnebaClient\Model\Relay\Edge\SalesEdge;
use Helis\EnebaClient\Model\Relay\Edge\TransactionsEdge;

class TransactionsConnectionDenormalizer implements DenormalizerInterface, DenormalizerAwareInterface
{
    use DenormalizerAwareTrait;


    public function denormalize($data, string $class): TransactionsConnection
    {
        return new TransactionsConnection(
            $this->denormalizer->denormalize($data['edges'], TransactionsEdge::class . '[]'),
            $this->denormalizer->denormalize($data['pageInfo'], PageInfo::class),
            $data['totalCount']
        );
    }

    public function supportsDenormalization(string $class): bool
    {
        return $class === TransactionsConnection::class;
    }
}

