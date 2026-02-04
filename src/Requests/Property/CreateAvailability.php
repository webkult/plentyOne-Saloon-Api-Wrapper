<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create an availability
 *
 * Creates an availability.
 */
class CreateAvailability extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/availabilities";
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param int $type The type of the availability
	 * @param int $value The value of the availability
	 */
	public function __construct(
		protected int $propertyId,
		protected int $type,
		protected int $value,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['propertyId' => $this->propertyId, 'type' => $this->type, 'value' => $this->value]);
	}
}
