<?php
declare(strict_types=1);

namespace Helis\EnebaClient\Enum;

use MyCLabs\Enum\Enum;

/**
 * @method static static ACTION_RESPONSE()
 * @method static static ACTION()
 * @method static static AUCTION()
 * @method static static AUCTION_CONNECTION()
 * @method static static AUCTION_WITH_AUCTION_CONNECTION()
 * @method static static PRODUCT_CONNECTION()
 * @method static static SALES_CONNECTION()
 * @method static static STOCK_CONNECTION()
 * @method static static TRANSACTION_CONNECTION()
 * @method static static MONEY()
 * @method static static PRODUCT_WITH_AUCTION()
 * @method static static PRODUCT()
 * @method static static SALES()
 * @method static static STOCK()
 * @method static static TRANSACTIONS()
 * @method static static TRANSACTIONS_FRAGMENT()
 * @method static static KEY_CONNECTION()
 * @method static static KEY()
 * @method static static COUNT_FEE()
 * @method static static PRICE_UPDATE_QUOTA()
 */
class SelectionSetFactoryProviderNameEnum extends Enum
{
    public const ACTION_RESPONSE = 'actionResponse';
    public const ACTION = 'action';
    public const AUCTION = 'auction';
    public const AUCTION_CONNECTION = 'auctionConnection';
    public const PRODUCT_CONNECTION = 'productConnection';
    public const SALES_CONNECTION = 'salesConnection';
    public const STOCK_CONNECTION = 'stockConnection';
    public const TRANSACTION_CONNECTION = 'transactionConnection';
    public const MONEY = 'money';
    public const PRODUCT_WITH_AUCTION = 'productWithAuction';
    public const PRODUCT = 'product';
    public const SALES = 'sales';
    public const STOCK = 'stock';
    public const TRANSACTIONS = 'transactions';
    public const KEY_CONNECTION = 'keyConnection';
    public const KEY = 'key';
    public const COUNT_FEE = 'countFee';
    public const PRICE_UPDATE_QUOTA = 'priceUpdateQuota';

    public const TRANSACTIONS_FRAGMENT = '...saleTransaction';
}
