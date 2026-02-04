<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a listing stock dependence type
 *
 * Gets a listing stock dependence type by given ID.
 */
class GetListingStockDependenceType extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/stock_dependence_types/{$this->id}";
	}


	/**
	 * @param int $id The ID of the listing stock dependence type entry.
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
