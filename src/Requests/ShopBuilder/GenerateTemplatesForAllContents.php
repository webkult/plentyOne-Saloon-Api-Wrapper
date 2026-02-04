<?php

namespace PlentyOne\Api\Requests\ShopBuilder;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Generate templates for all contents.
 *
 * Mark contents to be regenerated. Active contents will be regenerated on next frontend
 * request.
 * Inactive contents will be regenerated when opening them in the editor or after activating.
 */
class GenerateTemplatesForAllContents extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/shop_builder/contents";
	}


	/**
	 * @param null|string $containerName The ID of the plugin set to rebuild contents for.
	 * @param null|int $pluginSetId Layout container to regenerate contents for.
	 */
	public function __construct(
		protected ?string $containerName = null,
		protected ?int $pluginSetId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['containerName' => $this->containerName, 'pluginSetId' => $this->pluginSetId]);
	}
}
