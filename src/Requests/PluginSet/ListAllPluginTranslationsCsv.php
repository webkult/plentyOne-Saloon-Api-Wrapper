<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * List all plugin translations csv.
 *
 * Lists all plugin translations as a CSV file.
 */
class ListAllPluginTranslationsCsv extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/languages/csv/{$this->languageCode}";
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
