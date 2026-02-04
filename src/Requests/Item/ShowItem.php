<?php

namespace PlentyOne\Api\Requests\Item;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Show an item
 *
 * Show an item by itemId
 */
class ShowItem extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/items/{$this->itemId}";
	}


	/**
	 * @param int $itemId
	 * @param null|string $lang The <a href='https://developers.plentymarkets.com/rest-doc/introduction#countries' target='_blank'>language</a> of the variation information.
	 */
	public function __construct(
		protected int $itemId,
		protected ?string $lang = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['lang' => $this->lang]);
	}
}
