<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a layout template
 *
 * Gets a layout template by providing its ID.
 */
class GetLayoutTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/layout_templates/{$this->id}";
	}


	/**
	 * @param int $id The ID of the layout template entry.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
