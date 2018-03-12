<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Windows10EasEmailProfileConfiguration File
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
* Windows10EasEmailProfileConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class Windows10EasEmailProfileConfiguration extends DeviceConfiguration
{
    /**
    * Gets the accountName
    *
    * @return string The accountName
    */
    public function getAccountName()
    {
        if (array_key_exists("accountName", $this->_propDict)) {
            return $this->_propDict["accountName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the accountName
    *
    * @param string $val The accountName
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setAccountName($val)
    {
        $this->_propDict["accountName"] = $val;
        return $this;
    }
    
    /**
    * Gets the syncCalendar
    *
    * @return bool The syncCalendar
    */
    public function getSyncCalendar()
    {
        if (array_key_exists("syncCalendar", $this->_propDict)) {
            return $this->_propDict["syncCalendar"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncCalendar
    *
    * @param bool $val The syncCalendar
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setSyncCalendar($val)
    {
        $this->_propDict["syncCalendar"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncContacts
    *
    * @return bool The syncContacts
    */
    public function getSyncContacts()
    {
        if (array_key_exists("syncContacts", $this->_propDict)) {
            return $this->_propDict["syncContacts"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncContacts
    *
    * @param bool $val The syncContacts
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setSyncContacts($val)
    {
        $this->_propDict["syncContacts"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the syncTasks
    *
    * @return bool The syncTasks
    */
    public function getSyncTasks()
    {
        if (array_key_exists("syncTasks", $this->_propDict)) {
            return $this->_propDict["syncTasks"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the syncTasks
    *
    * @param bool $val The syncTasks
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setSyncTasks($val)
    {
        $this->_propDict["syncTasks"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the durationOfEmailToSync
    *
    * @return EmailSyncDuration The durationOfEmailToSync
    */
    public function getDurationOfEmailToSync()
    {
        if (array_key_exists("durationOfEmailToSync", $this->_propDict)) {
            if (is_a($this->_propDict["durationOfEmailToSync"], "Microsoft\Graph\Model\EmailSyncDuration")) {
                return $this->_propDict["durationOfEmailToSync"];
            } else {
                $this->_propDict["durationOfEmailToSync"] = new EmailSyncDuration($this->_propDict["durationOfEmailToSync"]);
                return $this->_propDict["durationOfEmailToSync"];
            }
        }
        return null;
    }
    
    /**
    * Sets the durationOfEmailToSync
    *
    * @param EmailSyncDuration $val The durationOfEmailToSync
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setDurationOfEmailToSync($val)
    {
        $this->_propDict["durationOfEmailToSync"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailAddressSource
    *
    * @return UserEmailSource The emailAddressSource
    */
    public function getEmailAddressSource()
    {
        if (array_key_exists("emailAddressSource", $this->_propDict)) {
            if (is_a($this->_propDict["emailAddressSource"], "Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["emailAddressSource"];
            } else {
                $this->_propDict["emailAddressSource"] = new UserEmailSource($this->_propDict["emailAddressSource"]);
                return $this->_propDict["emailAddressSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailAddressSource
    *
    * @param UserEmailSource $val The emailAddressSource
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setEmailAddressSource($val)
    {
        $this->_propDict["emailAddressSource"] = $val;
        return $this;
    }
    
    /**
    * Gets the emailSyncSchedule
    *
    * @return EmailSyncSchedule The emailSyncSchedule
    */
    public function getEmailSyncSchedule()
    {
        if (array_key_exists("emailSyncSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["emailSyncSchedule"], "Microsoft\Graph\Model\EmailSyncSchedule")) {
                return $this->_propDict["emailSyncSchedule"];
            } else {
                $this->_propDict["emailSyncSchedule"] = new EmailSyncSchedule($this->_propDict["emailSyncSchedule"]);
                return $this->_propDict["emailSyncSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the emailSyncSchedule
    *
    * @param EmailSyncSchedule $val The emailSyncSchedule
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setEmailSyncSchedule($val)
    {
        $this->_propDict["emailSyncSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the hostName
    *
    * @return string The hostName
    */
    public function getHostName()
    {
        if (array_key_exists("hostName", $this->_propDict)) {
            return $this->_propDict["hostName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the hostName
    *
    * @param string $val The hostName
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setHostName($val)
    {
        $this->_propDict["hostName"] = $val;
        return $this;
    }
    
    /**
    * Gets the requireSsl
    *
    * @return bool The requireSsl
    */
    public function getRequireSsl()
    {
        if (array_key_exists("requireSsl", $this->_propDict)) {
            return $this->_propDict["requireSsl"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the requireSsl
    *
    * @param bool $val The requireSsl
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setRequireSsl($val)
    {
        $this->_propDict["requireSsl"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usernameSource
    *
    * @return UserEmailSource The usernameSource
    */
    public function getUsernameSource()
    {
        if (array_key_exists("usernameSource", $this->_propDict)) {
            if (is_a($this->_propDict["usernameSource"], "Microsoft\Graph\Model\UserEmailSource")) {
                return $this->_propDict["usernameSource"];
            } else {
                $this->_propDict["usernameSource"] = new UserEmailSource($this->_propDict["usernameSource"]);
                return $this->_propDict["usernameSource"];
            }
        }
        return null;
    }
    
    /**
    * Sets the usernameSource
    *
    * @param UserEmailSource $val The usernameSource
    *
    * @return Windows10EasEmailProfileConfiguration
    */
    public function setUsernameSource($val)
    {
        $this->_propDict["usernameSource"] = $val;
        return $this;
    }
    
}