<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get contents of all shopBuilder.json files from all frontend plugins.
 *
 * Get contents of all shopBuilder.json files from all frontend plugins.
 */
class GetContentsOfAllShopBuilderJsonFilesFromAllFrontendPlugins extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/frontend";
	}


	/**
	 * @param null|int $pluginSetId Id of the plugin set to read frontend configurations for.
	 */
	public function __construct(
		protected ?int $pluginSetId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['pluginSetId' => $this->pluginSetId]);
	}
}
