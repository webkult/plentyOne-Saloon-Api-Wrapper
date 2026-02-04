<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update global settings by calling registered settings handler for each frontend plugin.
 *
 * Update global settings by calling registered settings handler for each frontend plugin.
 */
class UpdateGlobalSettingsByCallingRegisteredSettingsHandlerForEachFrontendPlugin extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/global_settings";
	}


	public function __construct()
	{
	}
}
