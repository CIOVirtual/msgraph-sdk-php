<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MacOSFirewallApplication File
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
* MacOSFirewallApplication class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MacOSFirewallApplication extends Entity
{
    /**
    * Gets the bundleId
    *
    * @return string The bundleId
    */
    public function getBundleId()
    {
        if (array_key_exists("bundleId", $this->_propDict)) {
            return $this->_propDict["bundleId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the bundleId
    *
    * @param string $val The value of the bundleId
    *
    * @return MacOSFirewallApplication
    */
    public function setBundleId($val)
    {
        $this->_propDict["bundleId"] = $val;
        return $this;
    }
    /**
    * Gets the allowsIncomingConnections
    *
    * @return bool The allowsIncomingConnections
    */
    public function getAllowsIncomingConnections()
    {
        if (array_key_exists("allowsIncomingConnections", $this->_propDict)) {
            return $this->_propDict["allowsIncomingConnections"];
        } else {
            return null;
        }
    }

    /**
    * Sets the allowsIncomingConnections
    *
    * @param bool $val The value of the allowsIncomingConnections
    *
    * @return MacOSFirewallApplication
    */
    public function setAllowsIncomingConnections($val)
    {
        $this->_propDict["allowsIncomingConnections"] = $val;
        return $this;
    }
}
