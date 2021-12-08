<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Factory\SelectionSet;

use Fypex\GraphqlQueryBuilder\SelectionSet\SelectionSet;
use Helis\EnebaClient\Enum\SelectionSetFactoryProviderNameEnum;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareInterface;
use Helis\EnebaClient\Provider\SelectionSetFactoryProviderAwareTrait;
use Fypex\GraphqlQueryBuilder\Argument\VariableValue;
use Fypex\GraphqlQueryBuilder\SelectionSet\Field;

class ProductSelectionSetFactory implements SelectionSetFactoryInterface, SelectionSetFactoryProviderAwareInterface
{
    use SelectionSetFactoryProviderAwareTrait;

    private $includeAuctions;

    public function __construct(bool $includeAuctions)
    {
        $this->includeAuctions = $includeAuctions;
    }

    public function get(): SelectionSet
    {
        $set = new SelectionSet([
            new Field('id'),
            new Field('name'),
            new Field('slug'),
            new Field('platform', new SelectionSet([
                new Field('label'),
                new Field('value'),
            ])),
            new Field('regions', new SelectionSet([
                new Field('name'),
                new Field('code'),
            ])),
            new Field('releasedAt'),
        ]);

        if ($this->includeAuctions) {
            $set->add(
                new Field(
                    'auctions',
                    $this->provider->get(SelectionSetFactoryProviderNameEnum::AUCTION_CONNECTION())->get(),
                    ['first' => new VariableValue('$auctionsLimit')]
                )
            );
        }

        return $set;
    }
}
