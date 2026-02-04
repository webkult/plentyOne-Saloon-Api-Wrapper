<?php

namespace PlentyOne\Api\Requests\Bi;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Return key figure dimensions and dimension values
 *
 * Returns the list of dimensions and dimensions values for a specific key figure
 */
class ReturnKeyFigureDimensionsAndDimensionValues extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/bi/key-figures/dimensions/{$this->keyFigure}";
	}


	/**
	 * @param int $keyFigure
	 * @param null|array $with Load additional relations for a key figure. The following relations are available:
	 *      * <ul>
	 *     <li>'dimensions' = Available dimensions of this key figure.</li>
	 *     <li>'dimensionValues' = Available dimension values of this key figure.</li>
	 *     </ul>
	 *     Example: <code>?with[]=dimension&with[]=dimensionValues</code>
	 * @param null|string $dimension The specification of a dimension enables the return of the appropriate dimension values.
	 */
	public function __construct(
		protected int $keyFigure,
		protected ?array $with = null,
		protected ?string $dimension = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['with' => $this->with, 'dimension' => $this->dimension]);
	}
}
