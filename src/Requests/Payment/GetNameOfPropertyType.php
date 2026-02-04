<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a name of a property type
 *
 * Gets a name of a property type. The ID of the name must be specified.
 */
class GetNameOfPropertyType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payment/properties/types/names/{$this->nameId}";
	}


	/**
	 * @param int $nameId
	 */
	public function __construct(
		protected int $nameId,
	) {
	}
}
