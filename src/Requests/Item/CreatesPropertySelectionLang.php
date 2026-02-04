<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Creates a property selection lang
 *
 * Creates a property selection lang.
 */
class CreatesPropertySelectionLang extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties/{$this->propertyId}/selections/{$this->id}";
	}


	/**
	 * @param int $propertyId
	 * @param int $id
	 */
	public function __construct(
		protected int $propertyId,
		protected int $id,
	) {
	}
}
