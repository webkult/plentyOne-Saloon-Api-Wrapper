<?php

namespace PlentyOne\Api\Requests\Newsletter;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Send doubleOptIn mail
 *
 * Sends a mail with a doubleOptIn. The ID of the costumer must be specified.
 */
class SendDoubleOptInMail extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/newsletters/double_opt_in/{$this->contactId}";
	}


	/**
	 * @param int $contactId The ID of the costumer contact
	 */
	public function __construct(
		protected int $contactId,
	) {
	}
}
