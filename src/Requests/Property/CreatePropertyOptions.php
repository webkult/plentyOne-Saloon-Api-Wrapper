<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create property options
 *
 * Creates property options.
 */
class CreatePropertyOptions extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/multiple/options";
	}


	/**
	 * @param int $propertyId ID of the property
	 * @param string $typeOptionIdentifier The identifier of the property option type
	 */
	public function __construct(
		protected int $propertyId,
		protected string $typeOptionIdentifier,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['propertyId' => $this->propertyId, 'typeOptionIdentifier' => $this->typeOptionIdentifier]);
	}
}
