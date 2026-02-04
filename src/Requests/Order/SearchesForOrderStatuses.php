<?php

namespace PlentyOne\Api\Requests\Order;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Searches for order statuses
 *
 * Searches for a list of order statuses. The search results are specified by providing filter
 * parameters in the form of order status IDs.
 */
class SearchesForOrderStatuses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/orders/statuses";
	}


	/**
	 * @param null|float|int $statusIdFrom Define an ID as a start value for the filter. Filter that restricts the search for order statuses to IDs from a defined value.
	 * @param null|float|int $statusIdTo Define an ID as an end value for the filter.
	 * @param null|string $language Filter that restricts the search for order statuses to a defined language.
	 */
	public function __construct(
		protected float|int|null $statusIdFrom = null,
		protected float|int|null $statusIdTo = null,
		protected ?string $language = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['statusIdFrom' => $this->statusIdFrom, 'statusIdTo' => $this->statusIdTo, 'language' => $this->language]);
	}
}
