<?php

namespace Helis\EnebaClient\Factory\SelectionSet;

use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareInterface;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareTrait;
use Fypex\GraphqlQueryBuilder\SelectionSet\Field;
use Fypex\GraphqlQueryBuilder\SelectionSet\SelectionSet;

class TransactionsSelectionSetFactory implements SelectionSetFactoryInterface, SelectionSetFactoryProviderAwareInterface
{

    use SelectionSetFactoryProviderAwareTrait;

    public function get(): SelectionSet
    {
        return new SelectionSet([
            new Field('code'),
            new Field('keyId'),
            new Field('status'),
            new Field('direction'),
            new Field('orderNumber'),
            new Field('referenceName'),
            new Field(
                'money',
                $this->provider->get(SelectionSetFactoryProviderNameEnum::MONEY())->get()
            ),
            new Field('createdAt'),
        ]);
    }

}
