<?php

namespace PlentyOne\Api\Requests\Tag;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a tag
 *
 * Creates a tag. The fields tagName and names must be specified.
 */
class CreateTag extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/tags";
	}


	/**
	 * @param string $tagName The name of the tag
	 * @param string $tagLang tagLang is used in names. The names field contains multiple languages.
	 */
	public function __construct(
		protected string $tagName,
		protected string $tagLang,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['tagName' => $this->tagName, 'tagLang' => $this->tagLang]);
	}
}
