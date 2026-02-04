<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create item sets
 *
 * Creates new item Sets.
 */
class CreateItemSets extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/item_sets";
	}


	/**
	 * @param null|array $params includes the item sets that have to be created
	 */
	public function __construct(
		protected ?array $params = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['params' => $this->params]);
	}
}
