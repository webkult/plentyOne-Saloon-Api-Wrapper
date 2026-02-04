<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update fitment.
 *
 * Updates a fitment. Items that do not occur anymore will be replaced.
 */
class UpdateFitment extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/parts-fitments/{$this->fitmentId}";
	}


	/**
	 * @param int $fitmentId
	 * @param int $id The ID of the fitment list.
	 */
	public function __construct(
		protected int $fitmentId,
		protected int $id,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['id' => $this->id]);
	}
}
