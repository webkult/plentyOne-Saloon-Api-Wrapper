<?php

namespace PlentyOne\Api\Requests\MailTemplates;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * Generates a render preview of a specific template (including attachments)
 *
 * Generates a render preview of a specific template (including attachments)
 */
class GeneratesRenderPreviewOfSpecificTemplateIncludingAttachments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/rest/mail_templates/email_service/loadPreview/{$this->templateId}";
	}


	/**
	 * @param int $templateId Template id that will be previewed
	 * @param string $accountType Values: webstore OR messenger_inbox.
	 * @param null|string $conversationId Conversation id
	 * @param null|bool $whisperMode Whisper mode
	 * @param null|int $categoryId Conversation category id
	 * @param null|bool $loadAttachments Load the attachments in the response
	 * @param null|int $inboxId Conversation inbox id
	 * @param null|string $contacts List of contacts ids separated by comma
	 * @param null|string $orders List of orders ids separated by comma
	 * @param null|string $emails List of emails separated by comma
	 * @param null|string $lang Language of template
	 * @param null|int $receiver Reveceiver for email: DEFAULT = 0, CONTACT = 1,
	 *      *     INVOICE_ADDRESS = 2, DELIVERY_ADDRESS = 3, WAREHOUSE = 4, CONTACT_EMAIL_PRIVATE = 5, CONTACT_EMAIL_WORK = 6,
	 *      *     CONTACT_EMAIL_PAYPAL = 7,
	 */
	public function __construct(
		protected int $templateId,
		protected string $accountType,
		protected ?string $conversationId = null,
		protected ?bool $whisperMode = null,
		protected ?int $categoryId = null,
		protected ?bool $loadAttachments = null,
		protected ?int $inboxId = null,
		protected ?string $contacts = null,
		protected ?string $orders = null,
		protected ?string $emails = null,
		protected ?string $lang = null,
		protected ?int $receiver = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter([
			'accountType' => $this->accountType,
			'conversationId' => $this->conversationId,
			'whisperMode' => $this->whisperMode,
			'categoryId' => $this->categoryId,
			'loadAttachments' => $this->loadAttachments,
			'inboxId' => $this->inboxId,
			'contacts' => $this->contacts,
			'orders' => $this->orders,
			'emails' => $this->emails,
			'lang' => $this->lang,
			'receiver' => $this->receiver,
		]);
	}
}
