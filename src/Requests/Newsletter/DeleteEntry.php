<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete entry
 *
 * Deletes an entry. The ID of the entry must be specified.
 */
class DeleteEntry extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/{$this->entryId}";
	}


	/**
	 * @param int $entryId The ID of the newsletter entry
	 */
	public function __construct(
		protected int $entryId,
	) {
	}
}
