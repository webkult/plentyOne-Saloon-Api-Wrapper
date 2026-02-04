<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get one sales price by ID
 *
 * Gets one sales price. The ID must be specified.
 */
class GetOneSalesPriceById extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/sales_prices/{$this->id}";
	}


	/**
	 * @param int $id
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>accounts</li><li>clients</li><li>countries</li><li>currencies</li><li>customerClasses</li><li>names</li><li>referrers</li></ub>
	 */
	public function __construct(
		protected int $id,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
