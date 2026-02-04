<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create item set components
 *
 * Creates item set components. The id of the set must be specified
 */
class CreateItemSetComponents extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets/{$this->setId}/components";
	}


	/**
	 * @param int $setId
	 */
	public function __construct(
		protected int $setId,
	) {
	}
}
