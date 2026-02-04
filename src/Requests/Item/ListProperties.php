<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List properties
 *
 * Lists all properties.
 */
class ListProperties extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/properties";
	}


	/**
	 * @param null|string $with Includes the specified property information in the results. The following parameters are available: <ul><li>names</b> = The names of the property</li><li>group</b> = The property group assigned to the property</li><li>marketComponents</b> = Lists the markets where the property is available </li><li>selections</b> = Lists the selections of the property</li></ul> More than one parameter should be separated by commas.
	 * @param null|string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 * @param null|string $groupId Filter restricts the list of results to items linked to a specified property group
	 * @param null|string $ids Filter restricts the list of results to items with the specified id criteria. Allowed comparators are 'eq' and 'in'.
	 * @param null|int $page Limits the results to a specific page. The page number must be specified.
	 * @param null|int $itemsPerPage Limits the number of results listed per page to a specific number. The number of properties to be listed per page must be specified.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $updatedAt = null,
		protected ?string $groupId = null,
		protected ?string $ids = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'updatedAt' => $this->updatedAt,
			'groupId' => $this->groupId,
			'ids' => $this->ids,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
		]);
	}
}
