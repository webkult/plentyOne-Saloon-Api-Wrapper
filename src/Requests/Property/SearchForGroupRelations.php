<?php

namespace PlentyOne\Api\Requests\Property;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search for group relations
 *
 * Searches for group relations. Filter can be specified.
 */
class SearchForGroupRelations extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/v2/properties/groups/relations";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li>'group' = The related property group.</li><li>'property' = The related property.</li></ul>
	 * @param null|string $orderBy Sorts the results. Append '_asc' or '_desc' to specify the sorting order. '_desc' is the default value if no other is specified.
	 * @param null|int $page The requested page of results. Default value is 1.
	 * @param null|int $itemsPerPage The number of results per page. Maximum value is 250. Default value is 50.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $orderBy = null,
		protected ?int $page = null,
		protected ?int $itemsPerPage = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'orderBy' => $this->orderBy, 'page' => $this->page, 'itemsPerPage' => $this->itemsPerPage]);
	}
}
