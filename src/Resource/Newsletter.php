<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Newsletter\CreateEntry;
use PlentyOne\Api\Requests\Newsletter\CreateFolder;
use PlentyOne\Api\Requests\Newsletter\CreateRecipient;
use PlentyOne\Api\Requests\Newsletter\DeleteEntries;
use PlentyOne\Api\Requests\Newsletter\DeleteEntry;
use PlentyOne\Api\Requests\Newsletter\DeleteFolder;
use PlentyOne\Api\Requests\Newsletter\DeleteFolders;
use PlentyOne\Api\Requests\Newsletter\DeleteRecipient;
use PlentyOne\Api\Requests\Newsletter\DeleteRecipients;
use PlentyOne\Api\Requests\Newsletter\ListAllRecipientsOfFolder;
use PlentyOne\Api\Requests\Newsletter\ListDetailsOfEntry;
use PlentyOne\Api\Requests\Newsletter\ListDetailsOfFolder;
use PlentyOne\Api\Requests\Newsletter\ListNewsletterEntries;
use PlentyOne\Api\Requests\Newsletter\ListNewsletterFolders;
use PlentyOne\Api\Requests\Newsletter\ListRecipient;
use PlentyOne\Api\Requests\Newsletter\ListRecipients;
use PlentyOne\Api\Requests\Newsletter\ListRecipientsOfFolder;
use PlentyOne\Api\Requests\Newsletter\SendDoubleOptInMail;
use PlentyOne\Api\Requests\Newsletter\UpdateEntry;
use PlentyOne\Api\Requests\Newsletter\UpdateFolder;
use PlentyOne\Api\Requests\Newsletter\UpdateRecipient;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Newsletter extends BaseResource
{
	public function listNewsletterEntries(): Response
	{
		return $this->connector->send(new ListNewsletterEntries());
	}


	/**
	 * @param string $subject The subject of the newsletter entry
	 * @param string $body The body of the newsletter entry
	 * @param string $kind The type of the entry. The content can be saved as plain text or in HTML format. Possible values: ['plain', 'html'].
	 */
	public function createEntry(string $subject, ?string $body = null, ?string $kind = null): Response
	{
		return $this->connector->send(new CreateEntry($subject, $body, $kind));
	}


	public function deleteEntries(): Response
	{
		return $this->connector->send(new DeleteEntries());
	}


	/**
	 * @param int $contactId The ID of the costumer contact
	 */
	public function sendDoubleOptInMail(int $contactId): Response
	{
		return $this->connector->send(new SendDoubleOptInMail($contactId));
	}


	/**
	 * @param int $folderId The ID of the newsletter folder
	 */
	public function listNewsletterFolders(int $folderId): Response
	{
		return $this->connector->send(new ListNewsletterFolders($folderId));
	}


	/**
	 * @param int $id The ID of the newsletter folder
	 * @param string $name The name of the newsletter folder
	 * @param int $position The position of the newsletter folder
	 * @param bool $isDeletable Flag that indicates if the newsletter folder can be deleted. Default value of is deletable is 1. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
	 * @param bool $isSelectable Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.
	 */
	public function createFolder(
		?int $id = null,
		string $name,
		?int $position = null,
		?bool $isDeletable = null,
		?bool $isSelectable = null,
	): Response
	{
		return $this->connector->send(new CreateFolder($id, $name, $position, $isDeletable, $isSelectable));
	}


	public function deleteFolders(): Response
	{
		return $this->connector->send(new DeleteFolders());
	}


	/**
	 * @param int $folderId The ID of the newsletter folder.
	 */
	public function listDetailsOfFolder(int $folderId): Response
	{
		return $this->connector->send(new ListDetailsOfFolder($folderId));
	}


	/**
	 * @param int $folderId The ID of the newsletter folder
	 * @param string $name The name of the newsletter folder
	 * @param int $position The position of the newsletter folder
	 * @param array $clientIds The IDs of the clients (stores). It is possible to determine which clients (stores) the newsletter folder is visible for.
	 * @param bool $isDeletable Flag that indicates if the newsletter folder can be deleted. The folders 'Customers' and 'Interested parties' are available by default and cannot be deleted.
	 * @param bool $isSelectable Flag that indicates if the newsletter folder can be selected by customers in the online store. If it is allowed, the folder will be displayed in the My account area of the online store. Customers will then be able to subscribe to the newsletters that are included in this folder.
	 */
	public function updateFolder(
		int $folderId,
		?string $name = null,
		?int $position = null,
		?array $clientIds = null,
		?bool $isDeletable = null,
		?bool $isSelectable = null,
	): Response
	{
		return $this->connector->send(new UpdateFolder($folderId, $name, $position, $clientIds, $isDeletable, $isSelectable));
	}


	/**
	 * @param int $folderId The ID of the newsletter folder
	 */
	public function deleteFolder(int $folderId): Response
	{
		return $this->connector->send(new DeleteFolder($folderId));
	}


	/**
	 * @param int $folderId The ID of the newsletter folder.
	 */
	public function listAllRecipientsOfFolder(int $folderId): Response
	{
		return $this->connector->send(new ListAllRecipientsOfFolder($folderId));
	}


	/**
	 * @param array $columns Filter that restricts the search result to specific columns
	 * @param int $page The page to get. The default page that will be returned is page 1.
	 * @param int $itemsPerPage The number of orders to be displayed per page. The default number of orders per page is 50.
	 * @param int $folderId Filter that restricts the search result to a specific folderId.
	 * @param bool $isConfirmed Filter that restricts the search result to confirmed recipients.
	 * @param array $with Load additional relations for a Recipient. CURRENTLY NOT AVAILABLE
	 * @param int $recipientId The ID of the recipient
	 */
	public function listRecipients(
		?array $columns = null,
		?int $page = null,
		?int $itemsPerPage = null,
		?int $folderId = null,
		?bool $isConfirmed = null,
		?array $with = null,
		int $recipientId,
	): Response
	{
		return $this->connector->send(new ListRecipients($columns, $page, $itemsPerPage, $folderId, $isConfirmed, $with, $recipientId));
	}


	/**
	 * @param string $email Filter that restricts the search result to the email address of the recipient
	 * @param int $folderId Filter that restricts the search result to the folder ID
	 * @param int $recipientId Filter that restricts the search result to the recipient ID
	 */
	public function listRecipientsOfFolder(
		?string $email = null,
		?int $folderId = null,
		?int $recipientId = null,
	): Response
	{
		return $this->connector->send(new ListRecipientsOfFolder($email, $folderId, $recipientId));
	}


	/**
	 * @param string $email The email address of the recipient
	 * @param string $firstName The first name of the recipient
	 * @param string $lastName The last name of the recipient
	 * @param array $folderIds The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders.
	 * @param bool $isFrontend Value that indicates if the REST call was retrieved from the front end. Possible values are: 'true' or 'false'. True = The REST call was retrieved from the front end. False = The REST call was not retrieved from the front end.
	 * @param bool $ignoreVisibility Value that indicates if the REST call considers folders without visibility. Possible value: 'true'. If the value 'true' is set, the folder visibility will be ignored. This means that both visible and invisible folders will be listed depending on the folder IDs entered in the REST call.
	 * @param string $ipAddress The IP address from where the customer has confirmed the newsletter
	 */
	public function createRecipient(
		?string $email = null,
		?string $firstName = null,
		?string $lastName = null,
		?array $folderIds = null,
		?bool $isFrontend = null,
		?bool $ignoreVisibility = null,
		?string $ipAddress = null,
	): Response
	{
		return $this->connector->send(new CreateRecipient($email, $firstName, $lastName, $folderIds, $isFrontend, $ignoreVisibility, $ipAddress));
	}


	public function deleteRecipients(): Response
	{
		return $this->connector->send(new DeleteRecipients());
	}


	/**
	 * @param int $recipientId The ID of the newsletter folder.
	 */
	public function listRecipient(int $recipientId): Response
	{
		return $this->connector->send(new ListRecipient($recipientId));
	}


	/**
	 * @param int $recipientId The ID of the recipient
	 * @param string $email The email address of the newsletter recipient
	 * @param string $firstName The first name of the newsletter recipient
	 * @param string $lastName The last name of the newsletter recipient
	 * @param array $folderIds DEPRECATED: The IDs of the newsletter folders. These folders were selected by the customer in the online store in order to receive newsletters included in these folders.
	 * @param int $folderId The ID of the newsletter folder.
	 * @param string $ipAddress The IP address from where the customer has confirmed the newsletter
	 * @param string $birthday The customer birthday as Date string (e.g. '1982-11-24', '1982/11/24' or '24.11.1982')
	 * @param string $gender The gender of the customer, one of the following values: 'm','f','d'.
	 */
	public function updateRecipient(
		int $recipientId,
		?string $email = null,
		?string $firstName = null,
		?string $lastName = null,
		?array $folderIds = null,
		?int $folderId = null,
		?string $ipAddress = null,
		?string $birthday = null,
		?string $gender = null,
	): Response
	{
		return $this->connector->send(new UpdateRecipient($recipientId, $email, $firstName, $lastName, $folderIds, $folderId, $ipAddress, $birthday, $gender));
	}


	/**
	 * @param int $recipientId The ID of the recipient
	 */
	public function deleteRecipient(int $recipientId): Response
	{
		return $this->connector->send(new DeleteRecipient($recipientId));
	}


	/**
	 * @param int $entryId The ID of the newsletter entry.
	 */
	public function listDetailsOfEntry(int $entryId): Response
	{
		return $this->connector->send(new ListDetailsOfEntry($entryId));
	}


	/**
	 * @param int $entryId The ID of the entry
	 * @param string $subject The subject of the entry
	 * @param string $body The body of the entry
	 * @param string $kind The type of the entry. The content can be saved as plain text or in HTML format. Possible values: ['plain', 'html'].
	 * @param int $folderId The ID of the newsletter folder
	 */
	public function updateEntry(
		int $entryId,
		?string $subject = null,
		?string $body = null,
		?string $kind = null,
		int $folderId,
	): Response
	{
		return $this->connector->send(new UpdateEntry($entryId, $subject, $body, $kind, $folderId));
	}


	/**
	 * @param int $entryId The ID of the newsletter entry
	 */
	public function deleteEntry(int $entryId): Response
	{
		return $this->connector->send(new DeleteEntry($entryId));
	}
}
