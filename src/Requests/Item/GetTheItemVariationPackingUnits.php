<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the item variation packing units
 *
 * Returns the packing units for the item variations based on the language wanted
 */
class GetTheItemVariationPackingUnits extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/packing_units";
	}


	/**
	 * @param null|string $language The language to return the unit name for. If no language is provided, all the languages will be returned
	 */
	public function __construct(
		protected ?string $language = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['language' => $this->language]);
	}
}
