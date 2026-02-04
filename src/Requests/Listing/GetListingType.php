<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing type
 *
 * Gets a listing type by given ID.
 */
class GetListingType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/types/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing type entry.
	 * @param null|array $with An array with child instances to be loaded. Available values: 'names'.
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
