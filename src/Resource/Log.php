<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Log\CreateLogEntry;
use PlentyOne\Api\Requests\Log\GetIntegrationKeys;
use PlentyOne\Api\Requests\Log\GetLogEntryById;
use PlentyOne\Api\Requests\Log\GetReferenceTypes;
use PlentyOne\Api\Requests\Log\SaveConfig;
use PlentyOne\Api\Requests\Log\SearchOperation;
use PlentyOne\Api\Requests\Log\SearchTheDeleteLog;
use PlentyOne\Api\Requests\Log\ShowConfig;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Log extends BaseResource
{
	/**
	 * @param int $referenceType The type of deleted record
	 * @param int $userId The ID of the user who deleted the record
	 * @param string $updatedBetween Filter restricts the list of results to deleteLogs updated during the specified period. The end date (to) is optional. If no end date is specified, items updated between the start date (from) and the present will be listed. The dates can be specified as unix timestamps or in the ISO 8601 date format. Start date and optional end date are separated by a comma. For example, .../delete_log?updatedBetween=1451606400,1456790400 will list deleteLogs updated between 2016-01-01 and 2016-03-01. .../delete_log?updatedBetween=1451606400 will list deleteLogs updated since 2016-01-01. The PHP function strtotime is also supported.
	 * @param int $page The page of results to search for
	 * @param int $itemsPerPage The number of items to list per page
	 */
	public function searchTheDeleteLog(
		?int $referenceType = null,
		?int $userId = null,
		?string $updatedBetween = null,
		?int $page = null,
		?int $itemsPerPage = null,
	): Response
	{
		return $this->connector->send(new SearchTheDeleteLog($referenceType, $userId, $updatedBetween, $page, $itemsPerPage));
	}


	/**
	 * @param int $page The page of results to search for.
	 * @param int $itemsPerPage The number of items to list per page.
	 * @param array $integration Filter that restricts the search result to log
	 *      *   entries with custom integration key(s).
	 * @param array $identifier Filter that restricts the search result to log
	 *      *   entries with custom identifier(s).
	 * @param string $referenceType Filter that restricts the search result to log
	 *      *   entries with custom reference types.
	 * @param string $referenceValue Filter that restricts the search result to log
	 *      *   entries with custom reference values.
	 * @param string $additionalInfo Filter that restricts the search result to log
	 *      *   entries that match an additional info.
	 * @param int $code Filter that restricts the search result to log
	 *      *   entries with a custom code.
	 * @param int $level Filter that restricts the search result to log
	 *      *   entries of a custom level. Available values are: 'debug', 'info', 'notice', 'warning', 'error', 'critical',
	 *      *   'alert', 'emergency'.
	 * @param string $fromDate Filter that restricts the search result to log
	 *      *   entries created after this date. The date has to be in the MySQL Datetime format, e.g.
	 *      *   '2016-10-24 13:33:23'.
	 * @param string $toDate Filter that restricts the search result to log
	 *      *   entries created before this date. The date has to be in the MySQL Datetime format, e.g.
	 *      *   '2016-10-24 13:33:23'.
	 * @param array $with An array with child instances to be loaded.
	 *      *   Valid instances are 'additionalInfo'.
	 */
	public function searchOperation(
		?int $page = null,
		?int $itemsPerPage = null,
		?array $integration = null,
		?array $identifier = null,
		?string $referenceType = null,
		?string $referenceValue = null,
		?string $additionalInfo = null,
		?int $code = null,
		?int $level = null,
		?string $fromDate = null,
		?string $toDate = null,
		?array $with = null,
	): Response
	{
		return $this->connector->send(new SearchOperation($page, $itemsPerPage, $integration, $identifier, $referenceType, $referenceValue, $additionalInfo, $code, $level, $fromDate, $toDate, $with));
	}


	public function createLogEntry(): Response
	{
		return $this->connector->send(new CreateLogEntry());
	}


	public function getIntegrationKeys(): Response
	{
		return $this->connector->send(new GetIntegrationKeys());
	}


	public function getReferenceTypes(): Response
	{
		return $this->connector->send(new GetReferenceTypes());
	}


	public function showConfig(): Response
	{
		return $this->connector->send(new ShowConfig());
	}


	public function saveConfig(): Response
	{
		return $this->connector->send(new SaveConfig());
	}


	/**
	 * @param int $id
	 */
	public function getLogEntryById(int $id): Response
	{
		return $this->connector->send(new GetLogEntryById($id));
	}
}
