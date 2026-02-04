<?php

namespace PlentyOne\Api\Requests\Market;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List credentials
 *
 * Lists credentials by filter options.
 */
class ListCredentials extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/markets/credentials";
	}


	/**
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The items per page to search for
	 */
	public function __construct(
		protected int $page,
		protected int $itemsPerPage,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
