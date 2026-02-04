<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List attribute values
 *
 * Lists the attribute values for an attribute. The attribute ID must be specified.
 */
class ListAttributeValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/values";
	}


	/**
	 * @param int $attributeId
	 * @param null|string $with Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute value links (amazon excluded)</li></ul>
	 * @param null|string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function __construct(
		protected int $attributeId,
		protected ?string $with = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'updatedAt' => $this->updatedAt]);
	}
}
