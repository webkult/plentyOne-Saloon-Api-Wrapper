<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a property
 *
 * Gets a property. The ID of the property must be specified.
 */
class GetProperty extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties/{$this->propertyId}";
	}


	/**
	 * @param int $propertyId
	 */
	public function __construct(
		protected int $propertyId,
	) {
	}
}
