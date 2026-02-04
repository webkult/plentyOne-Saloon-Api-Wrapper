<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a name
 *
 * Creates a name. The Property id , language, name must be provided.
 */
class CreateName extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/names";
	}


	/**
	 * @param int $propertyId The id of the property name
	 * @param string $lang The lang of the property name
	 * @param string $name The name of the property name
	 * @param null|string $description The description of the property name
	 */
	public function __construct(
		protected int $propertyId,
		protected string $lang,
		protected string $name,
		protected ?string $description = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['propertyId' => $this->propertyId, 'lang' => $this->lang, 'name' => $this->name, 'description' => $this->description]);
	}
}
