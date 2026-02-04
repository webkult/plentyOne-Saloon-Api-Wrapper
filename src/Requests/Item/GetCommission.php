<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a commission
 *
 * Gets a commission for a manufacturer. The ID of the commission must be specified.
 */
class GetCommission extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/manufacturers/{$this->id}/commissions/{$this->manufacturerId}";
	}


	/**
	 * @param int $id
	 * @param int $manufacturerId
	 */
	public function __construct(
		protected int $id,
		protected int $manufacturerId,
	) {
	}
}
