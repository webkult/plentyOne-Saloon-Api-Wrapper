<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update option template
 *
 * Updates an option template by ID.
 */
class UpdateOptionTemplate extends Request
{
	protected Method $method = Method::PUT;


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
