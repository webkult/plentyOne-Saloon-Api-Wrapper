<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get layout
 *
 * Gets a layout. The ID of the layout must be specified.
 */
class GetLayout extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/address_layout/{$this->uuid}";
	}


	/**
	 * @param string $uuid The UUID of the layout
	 */
	public function __construct(
		protected string $uuid,
	) {
	}
}
