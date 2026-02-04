<?php

namespace PlentyOne\Api\Requests\Payment;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property types
 *
 * Lists all property types. The language must be specified.
 */
class ListPropertyTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/payments/properties/types";
	}


	/**
	 * @param null|int $itemsPerPage The number of items to list per page
	 * @param null|int $page The page of results to search for
	 */
	public function __construct(
		protected ?int $itemsPerPage = null,
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['itemsPerPage' => $this->itemsPerPage, 'page' => $this->page]);
	}
}
