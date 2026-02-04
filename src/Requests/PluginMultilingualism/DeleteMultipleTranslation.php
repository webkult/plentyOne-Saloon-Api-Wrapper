<?php

namespace PlentyOne\Api\Requests\PluginMultilingualism;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete multiple translation
 *
 * Deletes multiple translation. The pluginSetId and languageCode must be specified.
 */
class DeleteMultipleTranslation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/languages/{$this->languageCode}";
	}


	/**
	 * @param int $pluginSetId
	 * @param int $languageCode
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $languageCode The code of the language
	 */
	public function __construct(
		protected int $pluginSetId,
		protected string $languageCode,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$pluginSetId' => $this->pluginSetId, '$languageCode' => $this->languageCode]);
	}
}
