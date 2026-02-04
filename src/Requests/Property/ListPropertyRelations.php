<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List property relations
 *
 * Lists property relations.
 */
class ListPropertyRelations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/properties/relations";
	}


	/**
	 * @param null|int $page Current page of the response
	 * @param null|int $itemsPerPage The requested amount of items per result page
	 * @param null|int $paginate The condition that determines if the pagination should be used (default value is set to 0)
	 * @param null|string $relationTypeIdentifier The parameter that decides the type of relation
	 * @param null|int $relationTargetId The ID of the target of the relation
	 * @param null|string $sortBy Filter sorts the result of property relations. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'propertyId'</li><li>'groupId'</li><li>'relationType'</li></ul>
	 */
	public function __construct(
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
		protected ?int $paginate = null,
		protected ?string $relationTypeIdentifier = null,
		protected ?int $relationTargetId = null,
		protected ?string $sortBy = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'page' => $this->page,
			'itemsPerPage' => $this->itemsPerPage,
			'paginate' => $this->paginate,
			'relationTypeIdentifier' => $this->relationTypeIdentifier,
			'relationTargetId' => $this->relationTargetId,
			'sortBy' => $this->sortBy,
		]);
	}
}
