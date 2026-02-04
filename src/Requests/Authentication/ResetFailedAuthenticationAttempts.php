<?php

namespace PlentyOne\Api\Requests\Authentication;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Reset failed authentication attempts
 *
 * Reset the failed authentication attempts of a user using the UserID
 */
class ResetFailedAuthenticationAttempts extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/users/{$this->id}/reset_failed_attempts";
	}


	/**
	 * @param int $id
	 */
	public function __construct(
		protected int $id,
	) {
	}
}
