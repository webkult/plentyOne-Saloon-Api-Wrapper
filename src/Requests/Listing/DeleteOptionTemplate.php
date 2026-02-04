<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete option template
 *
 * Deletes an option template by ID.
 */
class DeleteOptionTemplate extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/option_templates/{$this->id}";
	}


	/**
	 * @param int $id The option template ID.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
