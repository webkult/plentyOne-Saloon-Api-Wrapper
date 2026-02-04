<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get an attribute
 *
 * Gets an attribute. The ID of the attribute must be specified.
 */
class GetAttribute extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes/{$this->id}";
	}


	/**
	 * @param int $id
	 * @param null|string $with Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.
	 */
	public function __construct(
		protected int $id,
		protected ?string $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
