<?php

namespace PlentyOne\Api\Requests\Authorization;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get authorized user with UiConfig
 *
 * Gets an authorized user with UiConfig. This call returns a JSON object with information about
 * the
 * user after login. This information is used for correctly displaying the plentymarkets back end.
 */
class GetAuthorizedUserWithUiConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/user/authorized_user_with_ui_config";
	}


	public function __construct()
	{
	}
}
