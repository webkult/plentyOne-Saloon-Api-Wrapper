<?php

namespace PlentyOne\Api\Requests\Log;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search operation
 *
 * Perform a validated search operation.
 */
class SearchOperation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/logs";
	}


	/**
	 * @param null|int $page The page of results to search for.
	 * @param null|int $itemsPerPage The number of items to list per page.
	 * @param null|array $integration Filter that restricts the search result to log
	 *      *   entries with custom integration key(s).
	 * @param null|array $identifier Filter that restricts the search result to log
	 *      *   entries with custom identifier(s).
	 * @param null|string $referenceType Filter that restricts the search result to log
	 *      *   entries with custom reference types.
	 * @param null|string $referenceValue Filter that restricts the search result to log
	 *      *   entries with custom reference values.
	 * @param null|string $additionalInfo Filter that restricts the search result to log
	 *      *   entries that match an additional info.
	 * @param null|int $code Filter that restricts the search result to log
	 *      *   entries with a custom code.
	 * @param null|int $level Filter that restricts the search result to log
	 *      *   entries of a custom level. Available values are: 'debug', 'info', 'notice', 'warning', 'error', 'critical',
	 *      *   'alert', 'emergency'.
	 * @param null|string $fromDate Filter that restricts the search result to log
	 *      *   entries created after this date. The date has to be in the MySQL Datetime format, e.g.
	 *      *   '2016-10-24 13:33:23'.
	 * @param null|string $toDate Filter that restricts the search result to log
	 *      *   entries created before this date. The date has to be in the MySQL Datetime format, e.g.
	 *      *   '2016-10-24 13:33:23'.
	 * @param null|array $with An array with child instances to be loaded.
	 *      *   Valid instances are 'additionalInfo'.
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?array $integration = null,
		protected ?array $identifier = null,
		protected ?string $referenceType = null,
		protected ?string $referenceValue = null,
		protected ?string $additionalInfo = null,
		protected ?int $code = null,
		protected ?int $level = null,
		protected ?string $fromDate = null,
		protected ?string $toDate = null,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'integration' => $this->integration,
			'identifier' => $this->identifier,
			'referenceType' => $this->referenceType,
			'referenceValue' => $this->referenceValue,
			'additionalInfo' => $this->additionalInfo,
			'code' => $this->code,
			'level' => $this->level,
			'fromDate' => $this->fromDate,
			'toDate' => $this->toDate,
			'with' => $this->with,
		]);
	}
}
