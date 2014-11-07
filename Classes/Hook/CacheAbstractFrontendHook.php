<?php
namespace Snowflake\Varnish\Hook;

/***************************************************************
*  Copyright notice
*
*  (c) 2014 Lorenz Ulrich <lorenz.ulrich@visol.ch>
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
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/
use TYPO3\CMS\Core\Utility\GeneralUtility;


/**
 * This class contains required hooks which are called by TYPO3
 *
 * @author	Lorenz Ulrich <lorenz.ulrich@visol.ch>
 * @package	TYPO3
 * @subpackage	tx_varnish
 */

class CacheAbstractFrontendHook {


	/**
	 * Caching Framework flushByCache hook
	 *
	 * @param array $params
	 * @param \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend $parent
	 */
	public function flushByTag($params, \TYPO3\CMS\Core\Cache\Frontend\VariableFrontend &$parent) {
		if (GeneralUtility::isFirstPartOfStr($params['tag'], 'varnish_')) {
			$cacheTagParts = GeneralUtility::trimExplode('_', $params['tag']);
			if (!empty($cacheTagParts[1])) {
				/** @var \Snowflake\Varnish\Controller\VarnishController $varnishController */
				$varnishController = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('Snowflake\Varnish\Controller\VarnishController');
				$varnishController->flushCacheByTag($cacheTagParts[1]);
			}
		}

	}

}
