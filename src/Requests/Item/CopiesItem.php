<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Copies an item
 *
 * Copies an item and its variations. The ID of the item must be specified.
 */
class CopiesItem extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}/copy";
	}


	/**
	 * @param int $itemId
	 */
	public function __construct(
		protected int $itemId,
	) {
	}
}
