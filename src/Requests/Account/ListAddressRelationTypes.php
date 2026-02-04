<?php

namespace PlentyOne\Api\Requests\Account;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List address relation types
 *
 * Lists address relation types. The application and the language must be specified.
 *
 * <br>Possible
 * applications:
 * <ul>
 * <li>contact</li>
 * <li>order</li>
 * <li>warehouse</li>
 * <li>pos</li>
 * </ul>
 */
class ListAddressRelationTypes extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/accounts/addresses/relations/types/applications/{$this->application}/{$this->lang}";
	}


	/**
	 * @param string $application The application type
	 * @param string $lang The language as ISO 639-1 code (e.g. `en` for English)
	 */
	public function __construct(
		protected string $application,
		protected string $lang,
	) {
	}
}
