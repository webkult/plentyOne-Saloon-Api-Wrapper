<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for property relations
 *
 * Searches for properties relations. Filters can be specified.
 */
class SearchForPropertyRelations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/uuid/relations";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'property' = The property of the property relation.</li><li>'group' = The property group of the property relation.</li><li>'values' = The values of the property relation.</li><li>'selectionValues' = The selection values of the property relation.</li></ul>
	 * @param null|string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param null|int $page The requested page of results. Default value is 1.
	 * @param null|int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 * @param null|int $id Filter restricts the list of results to property relations which have have a matching ID. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param null|string $propertyId Filter restricts the list of results to property relations which have have a matching propertyId. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param null|int $targetId Filter restricts the list of results to property relations which have have a matching target id. Possible search operators are: 'eq', 'in', 'gte', 'gt', 'lte', 'lt', 'between'
	 * @param null|string $propertyCast Filter restricts the list of results to property relations which have have a matching proeprty cast. Possible search operators are: 'eq', 'in'
	 * @param null|string $type Filter restricts the list of results to property relations which have have a matching type. Possible search operators are: 'eq', 'in'
	 * @param null|string $updatedAt Filter restricts the list of results to property relations which have a matching updatedAt. Possible search operators are: 'between', 'gte', 'lte', 'gt', 'lt'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $orderBy = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $id = null,
		protected ?string $propertyId = null,
		protected ?int $targetId = null,
		protected ?string $propertyCast = null,
		protected ?string $type = null,
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
			'propertyId' => $this->propertyId,
			'targetId' => $this->targetId,
			'property.cast' => $this->propertyCast,
			'type' => $this->type,
			'updatedAt' => $this->updatedAt,
		]);
	}
}
