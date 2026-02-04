<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search the delete log
 *
 * Searches the delete log.
 */
class SearchTheDeleteLog extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/delete_log";
	}


	/**
	 * @param null|int $referenceType The type of deleted record
	 * @param null|int $userId The ID of the user who deleted the record
	 * @param null|string $updatedBetween Filter restricts the list of results to deleteLogs updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../delete_log?updatedBetween=1451606400,1456790400 will list deleteLogs updated between 2016-01-01 and 2016-03-01. .../delete_log?updatedBetween=1451606400 will list deleteLogs updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param null|int $page The page of results to search for
	 * @param null|int $itemsPerPage The number of items to list per page
	 */
	public function __construct(
		protected ?int $referenceType = null,
		protected ?int $userId = null,
		protected ?string $updatedBetween = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'referenceType' => $this->referenceType,
			'userId' => $this->userId,
			'updatedBetween' => $this->updatedBetween,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
