<?php
namespace TYPO3\CMS\Core\Locking\Locker;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Daniel Hürtgen <huertgen@rheinschafe.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
/**
 * This locker type used simple file lockings (is_file).
 *
 * @author Daniel Hürtgen <huertgen@rheinschafe.de>
 */
abstract class AbstractFileLocker extends AbstractLocker implements LockerInterface {

	/**
	 * File resource pointer.
	 *
	 * @var resource
	 */
	protected $fileResource;

	/**
	 * Constructs locker.
	 *
	 * @param string $context String sets a scope/context for current locking.
	 * @param string $id      String sets an unique lock identifier.
	 * @param array  $options Array with locker options.
	 * @return \TYPO3\CMS\Core\Locking\Locker\AbstractFileLocker
	 */
	public function __construct($context, $id, array $options = array()) {
		$options = array_merge(
			array(
			     'path' => PATH_site . 'typo3temp/locks/',
			     //'format' => 'dsaadasda%sdasdasdsa'
			),
			$options
		);

		parent::__construct($context, $id, $options);
	}

	/**
	 * Sets locking file path.
	 *
	 * @param string $path
	 * @throws \RuntimeException
	 * @throws \InvalidArgumentException
	 * @return void
	 */
	public function setPath($path) {
		if (\TYPO3\CMS\Core\Utility\GeneralUtility::isAllowedAbsPath($path)) {
			// TODO
			throw new \InvalidArgumentException();
		}
		if ($this->isAcquired()) {
			// TODO
			throw new \RuntimeException();
		}
		$this->options['path'] = (string) $path;
	}

	/**
	 * Gets locking file path.
	 *
	 * @return string
	 */
	public function getPath() {
		return $this->options['path'];
	}

	/**
	 * Gets file lock name.
	 *
	 * @return string
	 */
	public function getFileName() {
		return $this->getIdHash();
	}

	/**
	 * Gets full file path.
	 *
	 * @return string
	 */
	public function getFilePath() {
		return $this->getPath() . $this->getIdHash();
	}

	/**
	 * Creates lock path (mkdir).
	 *
	 * @return void
	 */
	protected function createLockPath() {
		\TYPO3\CMS\Core\Utility\GeneralUtility::mkdir_deep($this->getPath());
	}

	/**
	 * Creates/open file-lock file on filesystem (fopen).
	 *
	 * @param string $mode
	 * @return boolean
	 */
	protected function createLockFile($mode) {
		$this->createLockPath();
		$fp = @fopen($this->getFilePath(), $mode);
		if ($fp !== FALSE) {
			$this->fixPermissions($this->getFilePath());
			$this->fileResource = $fp;
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * Fix file/folder permissions for path.
	 *
	 * @param string $path
	 * @return boolean
	 */
	protected function fixPermissions($path) {
		return \TYPO3\CMS\Core\Utility\GeneralUtility::fixPermissions($path);
	}

	/**
	 * Deletes file-lock file from filesystem (unlink).
	 *
	 * @return boolean
	 */
	protected function deleteLockFile() {
		return @unlink($this->getFilePath());
	}

	protected function getAllLockFiles() {

	}

}

?>