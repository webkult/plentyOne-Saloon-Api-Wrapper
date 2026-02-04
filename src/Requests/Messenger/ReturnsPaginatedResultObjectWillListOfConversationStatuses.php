<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a paginated result object will list of conversation statuses
 *
 * Returns a paginated result object will list of conversation statuses
 */
class ReturnsPaginatedResultObjectWillListOfConversationStatuses extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/statuses";
	}


	/**
	 * @param null|int $page The page number (defaults to 1).
	 * @param null|int $itemsPerPage The number of results per page (defaults to 50).
	 * @param null|string $sortBy The sorting column (defaults to id). Expected values: id/position
	 * @param null|string $sortOrder The sorting direction (defaults to asc).
	 * @param null|bool $isDeleted Filter results by deleted flag.
	 * @param null|string $name Filter results by status name.
	 * @param null|int $id Filter results by status ID.
	 * @param null|int $typeId Filter results by status type ID.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?bool $isDeleted = null,
		protected ?string $name = null,
		protected ?int $id = null,
		protected ?int $typeId = null,
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
			'typeId' => $this->typeId,
		]);
	}
}
