<?php

namespace PlentyOne\Api\Requests\Listing;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get option template
 *
 * Gets an option template by ID.
 */
class GetOptionTemplate extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/listings/option_templates/{$this->id}";
	}


	/**
	 * @param int $id The ID of the option template entry.
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
