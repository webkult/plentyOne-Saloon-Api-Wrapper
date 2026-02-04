<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing
 *
 * Gets a listing by given ID.
 */
class GetListing extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing entry.
	 * @param null|array $with An array with child instances to be loaded. One of 'stockDependenceType', 'type', 'markets', 'properties'.
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
