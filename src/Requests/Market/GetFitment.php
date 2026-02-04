<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a fitment
 *
 * Gets a fitment. The id of the fitment must be specified.
 */
class GetFitment extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/ebay/parts-fitments/{$this->fitmentId}";
	}


	/**
	 * @param int $fitmentId
	 * @param int $id The fitment ID.
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
