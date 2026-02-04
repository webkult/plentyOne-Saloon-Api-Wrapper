<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update layout
 *
 * Updates a layout. The ID of the layout must be specified.
 */
class UpdateLayout extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout/{$this->uuid}";
	}


	/**
	 * @param string $uuid The UUID of the layout
	 * @param string $layout The layout array
	 */
	public function __construct(
		protected string $uuid,
		protected string $layout,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['layout' => $this->layout]);
	}
}
