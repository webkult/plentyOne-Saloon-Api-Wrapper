<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property type
 *
 * Gets a property type. The ID of the type must be specified.
 */
class GetPropertyType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties/types/{$this->typeId}";
	}


	/**
	 * @param int $typeId
	 */
	public function __construct(
		protected int $typeId,
	) {
	}
}
