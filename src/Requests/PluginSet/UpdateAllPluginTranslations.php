<?php

namespace PlentyOne\Api\Requests\PluginSet;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Update all plugin translations
 *
 * Update all plugin translations from a csv file
 */
class UpdateAllPluginTranslations extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/plugin_sets/{$this->pluginSetId}/languages/{$this->targetLanguage}";
	}


	/**
	 * @param int $pluginSetId
	 * @param int $targetLanguage
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $targetLanguage The code of the language
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
