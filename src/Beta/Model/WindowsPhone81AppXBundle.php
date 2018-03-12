<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsPhone81AppXBundle File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* WindowsPhone81AppXBundle class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsPhone81AppXBundle extends WindowsPhone81AppX
{

     /** 
     * Gets the appXPackageInformationList
     *
     * @return array The appXPackageInformationList
     */
    public function getAppXPackageInformationList()
    {
        if (array_key_exists("appXPackageInformationList", $this->_propDict)) {
           return $this->_propDict["appXPackageInformationList"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the appXPackageInformationList
    *
    * @param WindowsPackageInformation $val The appXPackageInformationList
    *
    * @return WindowsPhone81AppXBundle
    */
    public function setAppXPackageInformationList($val)
    {
		$this->_propDict["appXPackageInformationList"] = $val;
        return $this;
    }
    
}