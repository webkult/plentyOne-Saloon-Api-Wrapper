<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Update the visibility of multiple feedbacks
 *
 * Updates the visibility of multiple feedbacks. A list with IDs of feedbacks must be specified.
 */
class UpdateTheVisibilityOfMultipleFeedbacks extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/feedbacks_visibility";
	}


	/**
	 * @param string $feedbackIds The list of feedback IDs, separated by commas
	 * @param bool $isVisible The visibility value
	 */
	public function __construct(
		protected string $feedbackIds,
		protected bool $isVisible,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['feedbackIds' => $this->feedbackIds, 'isVisible' => $this->isVisible]);
	}
}
