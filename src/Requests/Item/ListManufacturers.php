<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List manufacturers
 *
 * Lists all manufacturers in the system.
 *
 * Display a listing of the resource.
 */
class ListManufacturers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/manufacturers";
	}


	/**
	 * @param null|string $with Includes the specified manufacturer information in the results. The following parameters are available: commissions, externals
	 * @param null|string $updatedAt Filter restricts the list of results to records updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 * @param null|string $name Filter restricts the list of results to records with specified name.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $updatedAt = null,
		protected ?string $name = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'updatedAt' => $this->updatedAt, 'name' => $this->name]);
	}
}
