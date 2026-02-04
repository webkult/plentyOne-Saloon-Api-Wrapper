<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get property selections by property ID
 *
 * Gets property selections for the specified property ID.
 */
class GetPropertySelectionsByPropertyId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/{$this->propertyId}/selections";
	}


	/**
	 * @param int $propertyId
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property selection.</li><li>'names' = The names of the property selection.</li></ul>
	 * @param null|string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param null|int $page The requested page of results. Default value is 1.
	 * @param null|int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param null|string $id Filter restricts the list of results to property selections which have have a matching id. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param null|string $name Filter restricts the list of results to property selections which have have a matching name. Possible search operators are: 'eq', 'like'
	 * @param null|string $updatedAt Filter restricts the list of results to property selections which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 */
	public function __construct(
		protected int $propertyId,
		protected ?string $with = null,
		protected ?string $orderBy = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?string $id = null,
		protected ?string $name = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'with' => $this->with,
			'orderBy' => $this->orderBy,
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'id' => $this->id,
			'name' => $this->name,
			'updatedAt' => $this->updatedAt,
		]);
	}
}
