<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property market
 *
 * Gets a property market. The ID of the property market must be specified.
 */
class GetPropertyMarket extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/markets/{$this->propertiesMarketId}";
	}


	/**
	 * @param int $propertiesMarketId
	 * @param int $propertyMarketId The ID of the property market
	 */
	public function __construct(
		protected int $propertiesMarketId,
		protected int $propertyMarketId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['propertyMarketId' => $this->propertyMarketId]);
	}
}
