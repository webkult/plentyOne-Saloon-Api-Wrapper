<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all plugin translations merged.
 *
 * Lists all plugin translations that have been merged.
 */
class ListAllPluginTranslationsMerged extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/languages/{$this->targetLanguage}";
	}


	/**
	 * @param int $pluginSetId
	 * @param int $targetLanguage
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $targetLanguage The code of the language we target
	 */
	public function __construct(
		protected int $pluginSetId,
		protected string $targetLanguage,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$pluginSetId' => $this->pluginSetId, '$targetLanguage' => $this->targetLanguage]);
	}
}
