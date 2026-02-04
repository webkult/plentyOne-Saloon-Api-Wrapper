<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get the preview hash for a set
 *
 * Get the hash required to preview a plugin set. Response content will be in the form ['previewHash'
 * => 'adf245o9nwu90sdfjw409u4'].
 */
class GetThePreviewHashForSet extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/preview_hash";
	}


	public function __construct()
	{
	}
}
