<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Generate key figure config from template class
 *
 * Based on selected template a key figure configuration is generated
 */
class GenerateKeyFigureConfigFromTemplateClass extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/config/template";
	}


	/**
	 * @param string $keyFigureClass Template class name
	 * @param null|string $externalId Identifier to assign the result
	 */
	public function __construct(
		protected string $keyFigureClass,
		protected ?string $externalId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['keyFigureClass' => $this->keyFigureClass, 'externalId' => $this->externalId]);
	}
}
