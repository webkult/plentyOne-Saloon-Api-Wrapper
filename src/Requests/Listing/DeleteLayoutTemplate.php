<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a layout template
 *
 * Deletes a layout template by ID.
 */
class DeleteLayoutTemplate extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/layout_templates/{$this->id}";
	}


	/**
	 * @param int $id The layout template ID.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
