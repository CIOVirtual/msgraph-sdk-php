<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* IosHomeScreenApp File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* IosHomeScreenApp class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class IosHomeScreenApp extends IosHomeScreenItem
{
    /**
    * Gets the bundleID
    *
    * @return string The bundleID
    */
    public function getBundleID()
    {
        if (array_key_exists("bundleID", $this->_propDict)) {
            return $this->_propDict["bundleID"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleID
    *
    * @param string $val The value of the bundleID
    *
    * @return IosHomeScreenApp
    */
    public function setBundleID($val)
    {
        $this->_propDict["bundleID"] = $val;
        return $this;
    }
}
