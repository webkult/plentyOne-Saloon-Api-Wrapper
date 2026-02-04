<?php

namespace PlentyOne\Api\Requests\Messenger;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns a paginated result object will list of folders
 *
 * Returns a paginated result object will list of folders
 */
class ReturnsPaginatedResultObjectWillListOfFolders extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/conversations/folders";
	}


	/**
	 * @param null|int $page The page number (defaults to 1).
	 * @param null|int $itemsPerPage The number of results per page (defaults to 50).
	 * @param null|string $sortBy The sorting column (defaults to name). Expected values: any folder model property
	 * @param null|string $sortOrder The sorting direction (defaults to asc).
	 * @param null|int $userId Filter results by user ID (defaults to null, all users).
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $userId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'sortBy' => $this->sortBy,
			'sortOrder' => $this->sortOrder,
			'userId' => $this->userId,
		]);
	}
}
