<?php

namespace PlentyOne\Api\Requests\PluginMultilingualism;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update a translation
 *
 * Updates a translation. The ID of the translation must be specified
 */
class UpdateTranslation extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/languages/translations/{$this->translationId}";
	}


	/**
	 * @param int $translationId
	 * @param int $id The ID of the translation
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $pluginName The name of the plugin
	 * @param string $languageCode The language code for the translation
	 * @param string $key The translation key
	 * @param string $value The value of the translation
	 * @param string $fileName The value of the translation
	 */
	public function __construct(
		protected int $translationId,
		protected int $id,
		protected int $pluginSetId,
		protected string $pluginName,
		protected string $languageCode,
		protected string $key,
		protected string $value,
		protected string $fileName,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'$id' => $this->id,
			'$pluginSetId' => $this->pluginSetId,
			'$pluginName' => $this->pluginName,
			'$languageCode' => $this->languageCode,
			'$key' => $this->key,
			'$value' => $this->value,
			'$fileName' => $this->fileName,
		]);
	}
}
