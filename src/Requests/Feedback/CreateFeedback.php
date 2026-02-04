<?php

namespace PlentyOne\Api\Requests\Feedback;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * Create a feedback
 *
 * Creates a new feedback.
 */
class CreateFeedback extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/rest/feedbacks/feedback";
	}


	/**
	 * @param null|string $title Feedback title
	 * @param null|string $feedbackRelationTargetId The ID of the feedback's target
	 * @param null|string $feedbackRelationTargetTypeId The type ID of the feedback's target
	 * @param null|string $feedbackRelationSourceTypeId The type ID of the feedback's source
	 */
	public function __construct(
		protected ?string $title = null,
		protected ?string $feedbackRelationTargetId = null,
		protected ?string $feedbackRelationTargetTypeId = null,
		protected ?string $feedbackRelationSourceTypeId = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'title' => $this->title,
			'feedbackRelationTargetId' => $this->feedbackRelationTargetId,
			'feedbackRelationTargetTypeId' => $this->feedbackRelationTargetTypeId,
			'feedbackRelationSourceTypeId' => $this->feedbackRelationSourceTypeId,
		]);
	}
}
