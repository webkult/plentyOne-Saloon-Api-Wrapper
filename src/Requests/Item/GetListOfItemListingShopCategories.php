<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a list of item listing shop categories
 *
 * Gets a list of item listing shop categories for the specified user ID
 */
class GetListOfItemListingShopCategories extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/listings/shop_categories/{$this->ebayAccountId}";
	}


	/**
	 * @param int $ebayAccountId
	 */
	public function __construct(
		protected int $ebayAccountId,
	) {
	}
}
