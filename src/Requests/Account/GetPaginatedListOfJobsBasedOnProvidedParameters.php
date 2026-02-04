<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get paginated list of jobs based on provided parameters
 *
 * Get paginated list of jobs based on provided parameters
 */
class GetPaginatedListOfJobsBasedOnProvidedParameters extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/jobs";
	}


	/**
	 * @param null|int $page The page number (defaults to 1).
	 * @param null|int $itemsPerPage The number of results per page (defaults to 50).
	 * @param null|string $sortBy The sorting column (defaults to createdAt).
	 * @param null|string $sortOrder The sorting direction (defaults to desc).
	 * @param null|int $id Filter results by job id.
	 * @param null|string $name Filter results by job name.
	 * @param null|array $with Job relations, array or string (comma separated)
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $sortBy = null,
		protected ?string $sortOrder = null,
		protected ?int $id = null,
		protected ?string $name = null,
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
			'id' => $this->id,
			'name' => $this->name,
			'with' => $this->with,
		]);
	}
}
