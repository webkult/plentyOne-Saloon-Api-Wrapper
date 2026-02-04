<?php

namespace PlentyOne\Api\Requests\Todo;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for todos
 *
 * Searches todos. Returns a paginated result.
 */
class SearchForTodos extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/todo";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 */
	public function __construct(
		protected ?int $page = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['page' => $this->page]);
	}
}
