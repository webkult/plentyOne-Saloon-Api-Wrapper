<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update property type
 *
 * Updates a property type and its names. The ID of the property type must be specified. If names that
 * do not yet exist for a language are provided, they will be created. Property type IDs lower than
 * 1,000 cannot be updated because they are system defaults.
 */
class UpdatePropertyType extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/properties/types/{$this->typeId}";
	}


	/**
	 * @param int $typeId
	 */
	public function __construct(
		protected int $typeId,
	) {
	}
}
