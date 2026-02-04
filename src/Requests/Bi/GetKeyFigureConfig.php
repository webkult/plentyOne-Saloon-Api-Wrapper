<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Get key figure config
 *
 * Get key figure configuration including filters, targets, dimensions, dimensionsValues
 */
class GetKeyFigureConfig extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/config/{$this->keyFigureConfigId}";
	}


	/**
	 * @param int $keyFigureConfigId
	 * @param null|array $with Load additional relations for a key figure. The following relations are available:
	 *      * <ul>
	 *     <li>'dimensions' = Available dimensions of this key figure.</li>
	 *     <li>'dimensionValues' = Available dimension values of this key figure.</li>
	 *     </ul>
	 *     Example: <code>?with[]=dimension&with[]=dimensionValues</code>
	 */
	public function __construct(
		protected int $keyFigureConfigId,
		protected ?array $with = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with]);
	}
}
