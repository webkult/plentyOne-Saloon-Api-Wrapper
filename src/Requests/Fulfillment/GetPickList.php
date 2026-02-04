<?php

namespace PlentyOne\Api\Requests\Fulfillment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a pick list
 *
 * Get a pick list specified by its pick list ID.
 */
class GetPickList extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/fulfillment/picklist/{$this->id}";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
