<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a property market
 *
 * Updates a property market. The ID of the property market must be specified.
 */
class UpdatePropertyMarket extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/markets/{$this->propertiesMarketId}";
	}


	/**
	 * @param int $propertiesMarketId
	 */
	public function __construct(
		protected int $propertiesMarketId,
	) {
	}
}
