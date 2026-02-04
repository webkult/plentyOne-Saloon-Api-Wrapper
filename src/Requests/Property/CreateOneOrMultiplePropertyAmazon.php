<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create one or multiple property amazon
 *
 * Creates one or multiple property amazon.
 */
class CreateOneOrMultiplePropertyAmazon extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/amazons";
	}


	/**
	 * @param int $propertyId The ID of the property
	 * @param string $platform The platform of the property amazon
	 * @param string $category The category of the property amazon
	 * @param string $field The field of the property amazon
	 */
	public function __construct(
		protected int $propertyId,
		protected string $platform,
		protected string $category,
		protected string $field,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'propertyId' => $this->propertyId,
			'platform' => $this->platform,
			'category' => $this->category,
			'field' => $this->field,
		]);
	}
}
