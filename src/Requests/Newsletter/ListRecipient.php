<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List recipient
 *
 * Lists a recipient. The ID of the recipient must be specified.
 */
class ListRecipient extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/recipients/{$this->recipientId}";
	}


	/**
	 * @param int $recipientId The ID of the newsletter folder.
	 */
	public function __construct(
		protected int $recipientId,
	) {
	}
}
