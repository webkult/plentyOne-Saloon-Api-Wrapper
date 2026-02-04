<?php

namespace PlentyOne\Api\Requests\PluginMultilingualism;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a new translation
 *
 * Creates a new translation.
 */
class CreateNewTranslation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/languages/translations";
	}


	/**
	 * @param int $pluginSetId The ID of the plugin set
	 * @param string $pluginName The name of the plugin
	 * @param string $languageCode The language code for the translation
	 * @param string $key The translation key
	 * @param string $value The value of the translation
	 * @param string $fileName The of the file
	 */
	public function __construct(
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
			'$pluginSetId' => $this->pluginSetId,
			'$pluginName' => $this->pluginName,
			'$languageCode' => $this->languageCode,
			'$key' => $this->key,
			'$value' => $this->value,
			'$fileName' => $this->fileName,
		]);
	}
}
