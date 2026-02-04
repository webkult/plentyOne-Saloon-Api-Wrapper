<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get global settings defined by frontend plugins in shopBuilder.json files.
 *
 * Get global settings defined by frontend plugins in shopBuilder.json files.
 */
class GetGlobalSettingsDefinedByFrontendPluginsInShopBuilderJsonFiles extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/global_settings";
	}


	public function __construct()
	{
	}
}
