<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing market history
 *
 * Gets a listing market history by given ID.
 */
class GetListingMarketHistory extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/histories/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market history entry.
	 * @param null|array $with An array with child instances to be loaded. One of 'listingMarket', 'texts', 'properties', 'dates', 'variations'.
	 */
	public function __construct(
		protected int $id,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
