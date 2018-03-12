<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsAutopilotDeviceIdentity File
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
* WindowsAutopilotDeviceIdentity class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class WindowsAutopilotDeviceIdentity extends Entity
{
    /**
    * Gets the deploymentProfileAssignmentStatus
    *
    * @return WindowsAutopilotProfileAssignmentStatus The deploymentProfileAssignmentStatus
    */
    public function getDeploymentProfileAssignmentStatus()
    {
        if (array_key_exists("deploymentProfileAssignmentStatus", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentProfileAssignmentStatus"], "Microsoft\Graph\Model\WindowsAutopilotProfileAssignmentStatus")) {
                return $this->_propDict["deploymentProfileAssignmentStatus"];
            } else {
                $this->_propDict["deploymentProfileAssignmentStatus"] = new WindowsAutopilotProfileAssignmentStatus($this->_propDict["deploymentProfileAssignmentStatus"]);
                return $this->_propDict["deploymentProfileAssignmentStatus"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentProfileAssignmentStatus
    *
    * @param WindowsAutopilotProfileAssignmentStatus $val The deploymentProfileAssignmentStatus
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setDeploymentProfileAssignmentStatus($val)
    {
        $this->_propDict["deploymentProfileAssignmentStatus"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentProfileAssignedDateTime
    *
    * @return \DateTime The deploymentProfileAssignedDateTime
    */
    public function getDeploymentProfileAssignedDateTime()
    {
        if (array_key_exists("deploymentProfileAssignedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentProfileAssignedDateTime"], "\DateTime")) {
                return $this->_propDict["deploymentProfileAssignedDateTime"];
            } else {
                $this->_propDict["deploymentProfileAssignedDateTime"] = new \DateTime($this->_propDict["deploymentProfileAssignedDateTime"]);
                return $this->_propDict["deploymentProfileAssignedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentProfileAssignedDateTime
    *
    * @param \DateTime $val The deploymentProfileAssignedDateTime
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setDeploymentProfileAssignedDateTime($val)
    {
        $this->_propDict["deploymentProfileAssignedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the orderIdentifier
    *
    * @return string The orderIdentifier
    */
    public function getOrderIdentifier()
    {
        if (array_key_exists("orderIdentifier", $this->_propDict)) {
            return $this->_propDict["orderIdentifier"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the orderIdentifier
    *
    * @param string $val The orderIdentifier
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setOrderIdentifier($val)
    {
        $this->_propDict["orderIdentifier"] = $val;
        return $this;
    }
    
    /**
    * Gets the serialNumber
    *
    * @return string The serialNumber
    */
    public function getSerialNumber()
    {
        if (array_key_exists("serialNumber", $this->_propDict)) {
            return $this->_propDict["serialNumber"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the serialNumber
    *
    * @param string $val The serialNumber
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setSerialNumber($val)
    {
        $this->_propDict["serialNumber"] = $val;
        return $this;
    }
    
    /**
    * Gets the productKey
    *
    * @return string The productKey
    */
    public function getProductKey()
    {
        if (array_key_exists("productKey", $this->_propDict)) {
            return $this->_propDict["productKey"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the productKey
    *
    * @param string $val The productKey
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setProductKey($val)
    {
        $this->_propDict["productKey"] = $val;
        return $this;
    }
    
    /**
    * Gets the manufacturer
    *
    * @return string The manufacturer
    */
    public function getManufacturer()
    {
        if (array_key_exists("manufacturer", $this->_propDict)) {
            return $this->_propDict["manufacturer"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the manufacturer
    *
    * @param string $val The manufacturer
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setManufacturer($val)
    {
        $this->_propDict["manufacturer"] = $val;
        return $this;
    }
    
    /**
    * Gets the model
    *
    * @return string The model
    */
    public function getModel()
    {
        if (array_key_exists("model", $this->_propDict)) {
            return $this->_propDict["model"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the model
    *
    * @param string $val The model
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setModel($val)
    {
        $this->_propDict["model"] = $val;
        return $this;
    }
    
    /**
    * Gets the enrollmentState
    *
    * @return EnrollmentState The enrollmentState
    */
    public function getEnrollmentState()
    {
        if (array_key_exists("enrollmentState", $this->_propDict)) {
            if (is_a($this->_propDict["enrollmentState"], "Microsoft\Graph\Model\EnrollmentState")) {
                return $this->_propDict["enrollmentState"];
            } else {
                $this->_propDict["enrollmentState"] = new EnrollmentState($this->_propDict["enrollmentState"]);
                return $this->_propDict["enrollmentState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the enrollmentState
    *
    * @param EnrollmentState $val The enrollmentState
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setEnrollmentState($val)
    {
        $this->_propDict["enrollmentState"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastContactedDateTime
    *
    * @return \DateTime The lastContactedDateTime
    */
    public function getLastContactedDateTime()
    {
        if (array_key_exists("lastContactedDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["lastContactedDateTime"], "\DateTime")) {
                return $this->_propDict["lastContactedDateTime"];
            } else {
                $this->_propDict["lastContactedDateTime"] = new \DateTime($this->_propDict["lastContactedDateTime"]);
                return $this->_propDict["lastContactedDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastContactedDateTime
    *
    * @param \DateTime $val The lastContactedDateTime
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setLastContactedDateTime($val)
    {
        $this->_propDict["lastContactedDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the deploymentProfile
    *
    * @return WindowsAutopilotDeploymentProfile The deploymentProfile
    */
    public function getDeploymentProfile()
    {
        if (array_key_exists("deploymentProfile", $this->_propDict)) {
            if (is_a($this->_propDict["deploymentProfile"], "Microsoft\Graph\Model\WindowsAutopilotDeploymentProfile")) {
                return $this->_propDict["deploymentProfile"];
            } else {
                $this->_propDict["deploymentProfile"] = new WindowsAutopilotDeploymentProfile($this->_propDict["deploymentProfile"]);
                return $this->_propDict["deploymentProfile"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deploymentProfile
    *
    * @param WindowsAutopilotDeploymentProfile $val The deploymentProfile
    *
    * @return WindowsAutopilotDeviceIdentity
    */
    public function setDeploymentProfile($val)
    {
        $this->_propDict["deploymentProfile"] = $val;
        return $this;
    }
    
}