<?php

namespace PlentyOne\Api\Resource;

use PlentyOne\Api\Requests\Cloud\CommitPluginChanges;
use PlentyOne\Api\Requests\Cloud\DeleteFilesFromFrontendStorage;
use PlentyOne\Api\Requests\Cloud\DeleteFilesFromTheInbox;
use PlentyOne\Api\Requests\Cloud\DeleteLayoutDocuments;
use PlentyOne\Api\Requests\Cloud\DeleteObjectFromFrontendStorage;
use PlentyOne\Api\Requests\Cloud\GetCloudMetrics;
use PlentyOne\Api\Requests\Cloud\GetFileInformation;
use PlentyOne\Api\Requests\Cloud\GetMetadataForStorageObject;
use PlentyOne\Api\Requests\Cloud\GetSystemMetrics;
use PlentyOne\Api\Requests\Cloud\GetTheContentOfFileFromTheInbox;
use PlentyOne\Api\Requests\Cloud\GetTheUrlForLayoutDocument;
use PlentyOne\Api\Requests\Cloud\GetTheUrlForOrderPropertyFile;
use PlentyOne\Api\Requests\Cloud\ListFilesFromTheInbox;
use PlentyOne\Api\Requests\Cloud\ListFrontendStorageFiles;
use PlentyOne\Api\Requests\Cloud\ListLayoutDocuments;
use PlentyOne\Api\Requests\Cloud\UpdateMetadataOfStorageObject;
use PlentyOne\Api\Requests\Cloud\UploadFileToTheInbox;
use PlentyOne\Api\Requests\Cloud\UploadLayoutDocument;
use PlentyOne\Api\Requests\Cloud\UploadSingleFileToFrontendStorage;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;

class Cloud extends BaseResource
{
	/**
	 * @param string $key The key of the object to get information about.
	 */
	public function getFileInformation(string $key): Response
	{
		return $this->connector->send(new GetFileInformation($key));
	}


	/**
	 * @param string $sourceKey The key of the object to rename.
	 * @param string $targetKey The new key to store the object at.
	 */
	public function uploadSingleFileToFrontendStorage(string $sourceKey, string $targetKey): Response
	{
		return $this->connector->send(new UploadSingleFileToFrontendStorage($sourceKey, $targetKey));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $key The key for the uploaded object.
	 * @param int $maxAge Number of seconds until the content of the file expires.
	 */
	public function uploadSingleFileToFrontendStorageDuplicate1(string $key, ?int $maxAge = null): Response
	{
		return $this->connector->send(new UploadSingleFileToFrontendStorage($key, $maxAge));
	}


	/**
	 * @param string $key The key of the object to delete.
	 */
	public function deleteObjectFromFrontendStorage(string $key): Response
	{
		return $this->connector->send(new DeleteObjectFromFrontendStorage($key));
	}


	/**
	 * @param string $key The key of the object to get metadata for.
	 */
	public function getMetadataForStorageObject(string $key): Response
	{
		return $this->connector->send(new GetMetadataForStorageObject($key));
	}


	/**
	 * @param string $key The key of the object to update metadata for.
	 * @param array $metadata The metadata to assign to storage object
	 */
	public function updateMetadataOfStorageObject(string $key, array $metadata): Response
	{
		return $this->connector->send(new UpdateMetadataOfStorageObject($key, $metadata));
	}


	/**
	 * @param string $continuationToken The <code>continuationToken</code> of a previous request to continue listing objects with.
	 */
	public function listFrontendStorageFiles(?string $continuationToken = null): Response
	{
		return $this->connector->send(new ListFrontendStorageFiles($continuationToken));
	}


	/**
	 * @param array $keyList List of storage keys for the files to be deleted.
	 */
	public function deleteFilesFromFrontendStorage(array $keyList): Response
	{
		return $this->connector->send(new DeleteFilesFromFrontendStorage($keyList));
	}


	/**
	 * @param string $key The storage key for the frontend document to retrieve the URL for. Include the storage key in the request in a <code>key</code> field.
	 */
	public function getTheUrlForLayoutDocument(string $key): Response
	{
		return $this->connector->send(new GetTheUrlForLayoutDocument($key));
	}


	/**
	 * @param string $key The storage key for the layout document to upload. Include the storage key (i.e. file path) in the request in a <code>key</code> field.
	 */
	public function uploadLayoutDocument(string $key): Response
	{
		return $this->connector->send(new UploadLayoutDocument($key));
	}


	/**
	 * @param array $keyList List of storage keys for the files to be deleted.
	 */
	public function deleteLayoutDocuments(array $keyList): Response
	{
		return $this->connector->send(new DeleteLayoutDocuments($keyList));
	}


	/**
	 * @param string $continuationToken Token for listing the next (up to) 1000 layout documents.
	 */
	public function listLayoutDocuments(?string $continuationToken = null): Response
	{
		return $this->connector->send(new ListLayoutDocuments($continuationToken));
	}


	/**
	 * @todo Fix duplicated method name
	 * @param string $key The storage key for the layout document to retrieve the URL for. Include the storage key in the request in a <code>key</code> field.
	 */
	public function getTheUrlForLayoutDocumentDuplicate2(string $key): Response
	{
		return $this->connector->send(new GetTheUrlForLayoutDocument($key));
	}


	/**
	 * @param string $key The storage key for the order property
	 *      *                        file to retrieve the URL for. Include the storage key in the request in a
	 *      *                        <code>key</code> field.
	 */
	public function getTheUrlForOrderPropertyFile(string $key): Response
	{
		return $this->connector->send(new GetTheUrlForOrderPropertyFile($key));
	}


	/**
	 * @param string $key The storage key for the file to upload. Include the storage key in the request in a <code>key</code> field.
	 */
	public function uploadFileToTheInbox(string $key): Response
	{
		return $this->connector->send(new UploadFileToTheInbox($key));
	}


	/**
	 * @param array $keyList List of storage keys for the files to be deleted.
	 */
	public function deleteFilesFromTheInbox(array $keyList): Response
	{
		return $this->connector->send(new DeleteFilesFromTheInbox($keyList));
	}


	public function commitPluginChanges(): Response
	{
		return $this->connector->send(new CommitPluginChanges());
	}


	/**
	 * @param string $prefix Prefix to list all files of a specific plugin folder only. The prefix also means the plugin path. The <code>prefix</code> key with the value <code>PluginA/src/</code> will only return files in the <b>src</b> folder of <b>PluginA</b>.
	 */
	public function listFilesFromTheInbox(?string $prefix = null): Response
	{
		return $this->connector->send(new ListFilesFromTheInbox($prefix));
	}


	/**
	 * @param string $key The storage key for the file to retrieve. Include the storage key in the request in a <code>key</code> field.
	 */
	public function getTheContentOfFileFromTheInbox(?string $key = null): Response
	{
		return $this->connector->send(new GetTheContentOfFileFromTheInbox($key));
	}


	public function getCloudMetrics(): Response
	{
		return $this->connector->send(new GetCloudMetrics());
	}


	/**
	 * @param int $plentyId
	 * @param int $date
	 */
	public function getSystemMetrics(int $plentyId, int $date): Response
	{
		return $this->connector->send(new GetSystemMetrics($plentyId, $date));
	}
}
