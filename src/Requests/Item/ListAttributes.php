<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List attributes
 *
 * Lists all attributes.
 */
class ListAttributes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/attributes";
	}


	/**
	 * @param null|string $with Includes the specified attribute information in the results. The following parameters are available: <ul><li>names</b> = The names of the attribute</li><li>values</b> = The values of the attribute</li><li>maps</b> = The market maps of the attribute</li></ul> More than one parameter should be separated by commas.
	 * @param null|string $updatedAt Filter restricts the list of results to items updated after the specified date. The date can be specified as unix timestamps or in the ISO 8601 date format. The PHP function strtotime is also supported.
	 */
	public function __construct(
		protected ?string $with = null,
		protected ?string $updatedAt = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'updatedAt' => $this->updatedAt]);
	}
}
