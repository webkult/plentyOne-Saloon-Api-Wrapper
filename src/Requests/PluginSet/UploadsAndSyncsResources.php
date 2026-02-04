<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Uploads and syncs resources
 *
 * Uploads to S3 and synchronizes language resources
 */
class UploadsAndSyncsResources extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/languages/upload_translations";
	}


	/**
	 * @param int $pluginSetId
	 */
	public function __construct(
		protected int $pluginSetId,
	) {
	}
}
