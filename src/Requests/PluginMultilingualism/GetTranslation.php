<?php

namespace PlentyOne\Api\Requests\PluginMultilingualism;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get a translation
 *
 * Gets a translation. The ID of the translation must be specified.
 */
class GetTranslation extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/languages/translations/{$this->translationId}";
	}


	/**
	 * @param int $translationId
	 * @param int $id The ID of the translation
	 */
	public function __construct(
		protected int $translationId,
		protected int $id,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$id' => $this->id]);
	}
}
