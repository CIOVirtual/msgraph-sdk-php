<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Subscription File
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
* Subscription class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Subscription extends Entity
{
    /**
    * Gets the resource
    *
    * @return string The resource
    */
    public function getResource()
    {
        if (array_key_exists("resource", $this->_propDict)) {
            return $this->_propDict["resource"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the resource
    *
    * @param string $val The resource
    *
    * @return Subscription
    */
    public function setResource($val)
    {
        $this->_propDict["resource"] = $val;
        return $this;
    }
    
    /**
    * Gets the changeType
    *
    * @return string The changeType
    */
    public function getChangeType()
    {
        if (array_key_exists("changeType", $this->_propDict)) {
            return $this->_propDict["changeType"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the changeType
    *
    * @param string $val The changeType
    *
    * @return Subscription
    */
    public function setChangeType($val)
    {
        $this->_propDict["changeType"] = $val;
        return $this;
    }
    
    /**
    * Gets the clientState
    *
    * @return string The clientState
    */
    public function getClientState()
    {
        if (array_key_exists("clientState", $this->_propDict)) {
            return $this->_propDict["clientState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the clientState
    *
    * @param string $val The clientState
    *
    * @return Subscription
    */
    public function setClientState($val)
    {
        $this->_propDict["clientState"] = $val;
        return $this;
    }
    
    /**
    * Gets the notificationUrl
    *
    * @return string The notificationUrl
    */
    public function getNotificationUrl()
    {
        if (array_key_exists("notificationUrl", $this->_propDict)) {
            return $this->_propDict["notificationUrl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the notificationUrl
    *
    * @param string $val The notificationUrl
    *
    * @return Subscription
    */
    public function setNotificationUrl($val)
    {
        $this->_propDict["notificationUrl"] = $val;
        return $this;
    }
    
    /**
    * Gets the expirationDateTime
    * Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to.  See the table below for maximum supported subscription length of time.
    *
    * @return \DateTime The expirationDateTime
    */
    public function getExpirationDateTime()
    {
        if (array_key_exists("expirationDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["expirationDateTime"], "\DateTime")) {
                return $this->_propDict["expirationDateTime"];
            } else {
                $this->_propDict["expirationDateTime"] = new \DateTime($this->_propDict["expirationDateTime"]);
                return $this->_propDict["expirationDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the expirationDateTime
    * Specifies the date and time when the webhook subscription expires. The time is in UTC, and can be an amount of time from subscription creation that varies for the resource subscribed to.  See the table below for maximum supported subscription length of time.
    *
    * @param \DateTime $val The expirationDateTime
    *
    * @return Subscription
    */
    public function setExpirationDateTime($val)
    {
        $this->_propDict["expirationDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the applicationId
    *
    * @return string The applicationId
    */
    public function getApplicationId()
    {
        if (array_key_exists("applicationId", $this->_propDict)) {
            return $this->_propDict["applicationId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the applicationId
    *
    * @param string $val The applicationId
    *
    * @return Subscription
    */
    public function setApplicationId($val)
    {
        $this->_propDict["applicationId"] = $val;
        return $this;
    }
    
    /**
    * Gets the creatorUserId
    *
    * @return string The creatorUserId
    */
    public function getCreatorUserId()
    {
        if (array_key_exists("creatorUserId", $this->_propDict)) {
            return $this->_propDict["creatorUserId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the creatorUserId
    *
    * @param string $val The creatorUserId
    *
    * @return Subscription
    */
    public function setCreatorUserId($val)
    {
        $this->_propDict["creatorUserId"] = $val;
        return $this;
    }
    
}