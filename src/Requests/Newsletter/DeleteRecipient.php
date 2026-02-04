<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete recipient
 *
 * Deletes a recipient. The ID of the recipient must be specified.
 */
class DeleteRecipient extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/recipients/{$this->recipientId}";
	}


	/**
	 * @param int $recipientId The ID of the recipient
	 */
	public function __construct(
		protected int $recipientId,
	) {
	}
}
