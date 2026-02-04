<?php

namespace PlentyOne\Api\Requests\AddressDesign;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete layout
 *
 * Deletes a layout. The ID of the layout must be specified.
 */
class DeleteLayout extends Request
{
	protected Method $method = Method::DELETE;


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
