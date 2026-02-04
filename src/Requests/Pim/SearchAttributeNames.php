<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search attribute names
 *
 * Searches attribute names. Returns a paginated result.
 */
class SearchAttributeNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/names";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attribute' = The attribute to the attribute name.</li></ub>
	 * @param null|string $attributeId Filter restricts the result to attributes with the specified attribute ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'
	 * @param null|string $lang Filter restricts the result to attributes with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param null|string $name Filter restricts the result to attributes with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $attributeId = null,
		protected ?string $lang = null,
		protected ?string $name = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'attributeId' => $this->attributeId, 'lang' => $this->lang, 'name' => $this->name]);
	}
}
