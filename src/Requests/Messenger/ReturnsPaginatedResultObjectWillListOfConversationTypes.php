<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a paginated result object will list of conversation types
 *
 * Returns a paginated result object will list of conversation types
 */
class ReturnsPaginatedResultObjectWillListOfConversationTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/types";
	}


	/**
	 * @param null|int $page The page number (defaults to 1).
	 * @param null|int $itemsPerPage The number of results per page (defaults to 50).
	 * @param null|string $sortBy The sorting column (defaults to id). Expected values: id/position
	 * @param null|string $sortOrder The sorting direction (defaults to asc).
	 * @param null|bool $isDeleted Filter results by deleted flag.
	 * @param null|string $name Filter results by type name.
	 * @param null|int $id Filter results by type ID.
	 * @param null|array $with Appends relations to types. Expected values: ['allStatuses'] / ['activeStatuses']
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?bool $isDeleted = null,
		protected ?string $name = null,
		protected ?int $id = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'isDeleted' => $this->isDeleted,
			'name' => $this->name,
			'id' => $this->id,
			'with' => $this->with,
		]);
	}
}
