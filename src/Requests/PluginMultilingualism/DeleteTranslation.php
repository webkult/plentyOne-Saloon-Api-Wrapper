<?php

namespace PlentyOne\Api\Requests\PluginMultilingualism;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Delete a translation
 *
 * Deletes a translation. The ID of the translation must be specified.
 */
class DeleteTranslation extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/rest/languages/translations/{$this->translationId}";
	}


	/**
	 * @param int $translationId
	 * @param int $translationId The ID of the translation
	 */
	public function __construct(
		protected int $translationId,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['$translationId' => $this->translationId]);
	}
}
