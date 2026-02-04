<?php

namespace PlentyOne\Api\Requests\Pim;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Search attribute value names
 *
 * Searches attribute value names. Returns a paginated result.
 */
class SearchAttributeValueNames extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/pim/attributes/values/names";
	}


	/**
	 * @param null|string $with Includes the specified information in the results. More than one parameter should be separated by commas. The following parameters are available:<ul><li> 'attributeValue' = The attribute value to the attribute value name.</li></ub>
	 * @param null|string $valueId Filter restricts the result to attribute value names with the specified value ID. More than one parameter should be separated by commas. Allowed comparators: 'eq', 'in', 'between', 'gte', 'lte', 'gt' and 'lt'
	 * @param null|string $lang Filter restricts the result to attribute value names with the specified language. More than one parameter should be separated by commas. Allowed comparators: 'eq' and 'in'.
	 * @param null|string $name Filter restricts the result to attribute value names with the specified name. More than one parameter should be separated by commas. Allowed comparators: 'eq'.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $valueId = null,
		protected ?string $lang = null,
		protected ?string $name = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'valueId' => $this->valueId, 'lang' => $this->lang, 'name' => $this->name]);
	}
}
