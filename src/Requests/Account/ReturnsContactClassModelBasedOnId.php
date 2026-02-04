<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Returns contact class model based on ID
 *
 * Returns contact class model based on ID
 */
class ReturnsContactClassModelBasedOnId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/contacts/classes/{$this->contactClassId}";
	}


	/**
	 * @param int $contactClassId
	 */
	public function __construct(
		protected int $contactClassId,
	) {
	}
}
