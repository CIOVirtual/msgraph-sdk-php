<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MobileAppProvisioningConfigGroupAssignment File
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
* MobileAppProvisioningConfigGroupAssignment class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MobileAppProvisioningConfigGroupAssignment extends Entity
{
    /**
    * Gets the targetGroupId
    *
    * @return string The targetGroupId
    */
    public function getTargetGroupId()
    {
        if (array_key_exists("targetGroupId", $this->_propDict)) {
            return $this->_propDict["targetGroupId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the targetGroupId
    *
    * @param string $val The targetGroupId
    *
    * @return MobileAppProvisioningConfigGroupAssignment
    */
    public function setTargetGroupId($val)
    {
        $this->_propDict["targetGroupId"] = $val;
        return $this;
    }
    
}