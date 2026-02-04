<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an attribute value
 *
 * Get an attribute value. The ID of the attribute value must be specified.
 */
class GetAttributeValue extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->attributeId}/values/{$this->id}";
	}


	/**
	 * @param int $attributeId
	 * @param int $id
	 * @param null|string $with Includes the specified attribute value information in the results. The following parameters are available:<ul><li>attribute = The attribute of the value</li><li>names = The attribute value names in all languages</li><li>marketNames = The market attribute value links (amazon only)</li><li>valueMaps = The market attribute links (amazon excluded)</li></ul>
	 */
	public function __construct(
		protected int $attributeId,
		protected int $id,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
