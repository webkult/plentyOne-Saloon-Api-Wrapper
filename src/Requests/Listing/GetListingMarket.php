<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing market
 *
 * Gets a listing market by given ID.
 */
class GetListingMarket extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/markets/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing market entry.
	 * @param null|array $with An array with child instances to be loaded. One of 'listing', 'texts', 'properties', 'itemSpecifics', 'prices', 'dates', 'infos'.
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
