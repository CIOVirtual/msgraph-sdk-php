<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateForBusinessConfiguration File
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
* WindowsUpdateForBusinessConfiguration class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsUpdateForBusinessConfiguration extends DeviceConfiguration
{
    /**
    * Gets the deliveryOptimizationMode
    *
    * @return WindowsDeliveryOptimizationMode The deliveryOptimizationMode
    */
    public function getDeliveryOptimizationMode()
    {
        if (array_key_exists("deliveryOptimizationMode", $this->_propDict)) {
            if (is_a($this->_propDict["deliveryOptimizationMode"], "Microsoft\Graph\Beta\Model\WindowsDeliveryOptimizationMode")) {
                return $this->_propDict["deliveryOptimizationMode"];
            } else {
                $this->_propDict["deliveryOptimizationMode"] = new WindowsDeliveryOptimizationMode($this->_propDict["deliveryOptimizationMode"]);
                return $this->_propDict["deliveryOptimizationMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deliveryOptimizationMode
    *
    * @param WindowsDeliveryOptimizationMode $val The deliveryOptimizationMode
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setDeliveryOptimizationMode($val)
    {
        $this->_propDict["deliveryOptimizationMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the prereleaseFeatures
    *
    * @return PrereleaseFeatures The prereleaseFeatures
    */
    public function getPrereleaseFeatures()
    {
        if (array_key_exists("prereleaseFeatures", $this->_propDict)) {
            if (is_a($this->_propDict["prereleaseFeatures"], "Microsoft\Graph\Beta\Model\PrereleaseFeatures")) {
                return $this->_propDict["prereleaseFeatures"];
            } else {
                $this->_propDict["prereleaseFeatures"] = new PrereleaseFeatures($this->_propDict["prereleaseFeatures"]);
                return $this->_propDict["prereleaseFeatures"];
            }
        }
        return null;
    }
    
    /**
    * Sets the prereleaseFeatures
    *
    * @param PrereleaseFeatures $val The prereleaseFeatures
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setPrereleaseFeatures($val)
    {
        $this->_propDict["prereleaseFeatures"] = $val;
        return $this;
    }
    
    /**
    * Gets the automaticUpdateMode
    *
    * @return AutomaticUpdateMode The automaticUpdateMode
    */
    public function getAutomaticUpdateMode()
    {
        if (array_key_exists("automaticUpdateMode", $this->_propDict)) {
            if (is_a($this->_propDict["automaticUpdateMode"], "Microsoft\Graph\Beta\Model\AutomaticUpdateMode")) {
                return $this->_propDict["automaticUpdateMode"];
            } else {
                $this->_propDict["automaticUpdateMode"] = new AutomaticUpdateMode($this->_propDict["automaticUpdateMode"]);
                return $this->_propDict["automaticUpdateMode"];
            }
        }
        return null;
    }
    
    /**
    * Sets the automaticUpdateMode
    *
    * @param AutomaticUpdateMode $val The automaticUpdateMode
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setAutomaticUpdateMode($val)
    {
        $this->_propDict["automaticUpdateMode"] = $val;
        return $this;
    }
    
    /**
    * Gets the microsoftUpdateServiceAllowed
    *
    * @return bool The microsoftUpdateServiceAllowed
    */
    public function getMicrosoftUpdateServiceAllowed()
    {
        if (array_key_exists("microsoftUpdateServiceAllowed", $this->_propDict)) {
            return $this->_propDict["microsoftUpdateServiceAllowed"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the microsoftUpdateServiceAllowed
    *
    * @param bool $val The microsoftUpdateServiceAllowed
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setMicrosoftUpdateServiceAllowed($val)
    {
        $this->_propDict["microsoftUpdateServiceAllowed"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the driversExcluded
    *
    * @return bool The driversExcluded
    */
    public function getDriversExcluded()
    {
        if (array_key_exists("driversExcluded", $this->_propDict)) {
            return $this->_propDict["driversExcluded"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the driversExcluded
    *
    * @param bool $val The driversExcluded
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setDriversExcluded($val)
    {
        $this->_propDict["driversExcluded"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the installationSchedule
    *
    * @return WindowsUpdateInstallScheduleType The installationSchedule
    */
    public function getInstallationSchedule()
    {
        if (array_key_exists("installationSchedule", $this->_propDict)) {
            if (is_a($this->_propDict["installationSchedule"], "Microsoft\Graph\Beta\Model\WindowsUpdateInstallScheduleType")) {
                return $this->_propDict["installationSchedule"];
            } else {
                $this->_propDict["installationSchedule"] = new WindowsUpdateInstallScheduleType($this->_propDict["installationSchedule"]);
                return $this->_propDict["installationSchedule"];
            }
        }
        return null;
    }
    
    /**
    * Sets the installationSchedule
    *
    * @param WindowsUpdateInstallScheduleType $val The installationSchedule
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setInstallationSchedule($val)
    {
        $this->_propDict["installationSchedule"] = $val;
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesDeferralPeriodInDays
    *
    * @return int The qualityUpdatesDeferralPeriodInDays
    */
    public function getQualityUpdatesDeferralPeriodInDays()
    {
        if (array_key_exists("qualityUpdatesDeferralPeriodInDays", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesDeferralPeriodInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesDeferralPeriodInDays
    *
    * @param int $val The qualityUpdatesDeferralPeriodInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesDeferralPeriodInDays($val)
    {
        $this->_propDict["qualityUpdatesDeferralPeriodInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesDeferralPeriodInDays
    *
    * @return int The featureUpdatesDeferralPeriodInDays
    */
    public function getFeatureUpdatesDeferralPeriodInDays()
    {
        if (array_key_exists("featureUpdatesDeferralPeriodInDays", $this->_propDict)) {
            return $this->_propDict["featureUpdatesDeferralPeriodInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesDeferralPeriodInDays
    *
    * @param int $val The featureUpdatesDeferralPeriodInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesDeferralPeriodInDays($val)
    {
        $this->_propDict["featureUpdatesDeferralPeriodInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPaused
    *
    * @return bool The qualityUpdatesPaused
    */
    public function getQualityUpdatesPaused()
    {
        if (array_key_exists("qualityUpdatesPaused", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesPaused"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesPaused
    *
    * @param bool $val The qualityUpdatesPaused
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPaused($val)
    {
        $this->_propDict["qualityUpdatesPaused"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPaused
    *
    * @return bool The featureUpdatesPaused
    */
    public function getFeatureUpdatesPaused()
    {
        if (array_key_exists("featureUpdatesPaused", $this->_propDict)) {
            return $this->_propDict["featureUpdatesPaused"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesPaused
    *
    * @param bool $val The featureUpdatesPaused
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPaused($val)
    {
        $this->_propDict["featureUpdatesPaused"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPauseExpiryDateTime
    *
    * @return \DateTime The qualityUpdatesPauseExpiryDateTime
    */
    public function getQualityUpdatesPauseExpiryDateTime()
    {
        if (array_key_exists("qualityUpdatesPauseExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdatesPauseExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["qualityUpdatesPauseExpiryDateTime"];
            } else {
                $this->_propDict["qualityUpdatesPauseExpiryDateTime"] = new \DateTime($this->_propDict["qualityUpdatesPauseExpiryDateTime"]);
                return $this->_propDict["qualityUpdatesPauseExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qualityUpdatesPauseExpiryDateTime
    *
    * @param \DateTime $val The qualityUpdatesPauseExpiryDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPauseExpiryDateTime($val)
    {
        $this->_propDict["qualityUpdatesPauseExpiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPauseExpiryDateTime
    *
    * @return \DateTime The featureUpdatesPauseExpiryDateTime
    */
    public function getFeatureUpdatesPauseExpiryDateTime()
    {
        if (array_key_exists("featureUpdatesPauseExpiryDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["featureUpdatesPauseExpiryDateTime"], "\DateTime")) {
                return $this->_propDict["featureUpdatesPauseExpiryDateTime"];
            } else {
                $this->_propDict["featureUpdatesPauseExpiryDateTime"] = new \DateTime($this->_propDict["featureUpdatesPauseExpiryDateTime"]);
                return $this->_propDict["featureUpdatesPauseExpiryDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureUpdatesPauseExpiryDateTime
    *
    * @param \DateTime $val The featureUpdatesPauseExpiryDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPauseExpiryDateTime($val)
    {
        $this->_propDict["featureUpdatesPauseExpiryDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the businessReadyUpdatesOnly
    *
    * @return WindowsUpdateType The businessReadyUpdatesOnly
    */
    public function getBusinessReadyUpdatesOnly()
    {
        if (array_key_exists("businessReadyUpdatesOnly", $this->_propDict)) {
            if (is_a($this->_propDict["businessReadyUpdatesOnly"], "Microsoft\Graph\Beta\Model\WindowsUpdateType")) {
                return $this->_propDict["businessReadyUpdatesOnly"];
            } else {
                $this->_propDict["businessReadyUpdatesOnly"] = new WindowsUpdateType($this->_propDict["businessReadyUpdatesOnly"]);
                return $this->_propDict["businessReadyUpdatesOnly"];
            }
        }
        return null;
    }
    
    /**
    * Sets the businessReadyUpdatesOnly
    *
    * @param WindowsUpdateType $val The businessReadyUpdatesOnly
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setBusinessReadyUpdatesOnly($val)
    {
        $this->_propDict["businessReadyUpdatesOnly"] = $val;
        return $this;
    }
    
    /**
    * Gets the skipChecksBeforeRestart
    *
    * @return bool The skipChecksBeforeRestart
    */
    public function getSkipChecksBeforeRestart()
    {
        if (array_key_exists("skipChecksBeforeRestart", $this->_propDict)) {
            return $this->_propDict["skipChecksBeforeRestart"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the skipChecksBeforeRestart
    *
    * @param bool $val The skipChecksBeforeRestart
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setSkipChecksBeforeRestart($val)
    {
        $this->_propDict["skipChecksBeforeRestart"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the updateWeeks
    *
    * @return WindowsUpdateForBusinessUpdateWeeks The updateWeeks
    */
    public function getUpdateWeeks()
    {
        if (array_key_exists("updateWeeks", $this->_propDict)) {
            if (is_a($this->_propDict["updateWeeks"], "Microsoft\Graph\Beta\Model\WindowsUpdateForBusinessUpdateWeeks")) {
                return $this->_propDict["updateWeeks"];
            } else {
                $this->_propDict["updateWeeks"] = new WindowsUpdateForBusinessUpdateWeeks($this->_propDict["updateWeeks"]);
                return $this->_propDict["updateWeeks"];
            }
        }
        return null;
    }
    
    /**
    * Sets the updateWeeks
    *
    * @param WindowsUpdateForBusinessUpdateWeeks $val The updateWeeks
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setUpdateWeeks($val)
    {
        $this->_propDict["updateWeeks"] = $val;
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesPauseStartDateTime
    *
    * @return string The qualityUpdatesPauseStartDateTime
    */
    public function getQualityUpdatesPauseStartDateTime()
    {
        if (array_key_exists("qualityUpdatesPauseStartDateTime", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesPauseStartDateTime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesPauseStartDateTime
    *
    * @param string $val The qualityUpdatesPauseStartDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesPauseStartDateTime($val)
    {
        $this->_propDict["qualityUpdatesPauseStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesPauseStartDateTime
    *
    * @return string The featureUpdatesPauseStartDateTime
    */
    public function getFeatureUpdatesPauseStartDateTime()
    {
        if (array_key_exists("featureUpdatesPauseStartDateTime", $this->_propDict)) {
            return $this->_propDict["featureUpdatesPauseStartDateTime"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesPauseStartDateTime
    *
    * @param string $val The featureUpdatesPauseStartDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesPauseStartDateTime($val)
    {
        $this->_propDict["featureUpdatesPauseStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesRollbackWindowInDays
    *
    * @return int The featureUpdatesRollbackWindowInDays
    */
    public function getFeatureUpdatesRollbackWindowInDays()
    {
        if (array_key_exists("featureUpdatesRollbackWindowInDays", $this->_propDict)) {
            return $this->_propDict["featureUpdatesRollbackWindowInDays"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesRollbackWindowInDays
    *
    * @param int $val The featureUpdatesRollbackWindowInDays
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesRollbackWindowInDays($val)
    {
        $this->_propDict["featureUpdatesRollbackWindowInDays"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesWillBeRolledBack
    *
    * @return bool The qualityUpdatesWillBeRolledBack
    */
    public function getQualityUpdatesWillBeRolledBack()
    {
        if (array_key_exists("qualityUpdatesWillBeRolledBack", $this->_propDict)) {
            return $this->_propDict["qualityUpdatesWillBeRolledBack"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the qualityUpdatesWillBeRolledBack
    *
    * @param bool $val The qualityUpdatesWillBeRolledBack
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesWillBeRolledBack($val)
    {
        $this->_propDict["qualityUpdatesWillBeRolledBack"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the featureUpdatesWillBeRolledBack
    *
    * @return bool The featureUpdatesWillBeRolledBack
    */
    public function getFeatureUpdatesWillBeRolledBack()
    {
        if (array_key_exists("featureUpdatesWillBeRolledBack", $this->_propDict)) {
            return $this->_propDict["featureUpdatesWillBeRolledBack"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the featureUpdatesWillBeRolledBack
    *
    * @param bool $val The featureUpdatesWillBeRolledBack
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesWillBeRolledBack($val)
    {
        $this->_propDict["featureUpdatesWillBeRolledBack"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the qualityUpdatesRollbackStartDateTime
    *
    * @return \DateTime The qualityUpdatesRollbackStartDateTime
    */
    public function getQualityUpdatesRollbackStartDateTime()
    {
        if (array_key_exists("qualityUpdatesRollbackStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["qualityUpdatesRollbackStartDateTime"], "\DateTime")) {
                return $this->_propDict["qualityUpdatesRollbackStartDateTime"];
            } else {
                $this->_propDict["qualityUpdatesRollbackStartDateTime"] = new \DateTime($this->_propDict["qualityUpdatesRollbackStartDateTime"]);
                return $this->_propDict["qualityUpdatesRollbackStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the qualityUpdatesRollbackStartDateTime
    *
    * @param \DateTime $val The qualityUpdatesRollbackStartDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setQualityUpdatesRollbackStartDateTime($val)
    {
        $this->_propDict["qualityUpdatesRollbackStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the featureUpdatesRollbackStartDateTime
    *
    * @return \DateTime The featureUpdatesRollbackStartDateTime
    */
    public function getFeatureUpdatesRollbackStartDateTime()
    {
        if (array_key_exists("featureUpdatesRollbackStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["featureUpdatesRollbackStartDateTime"], "\DateTime")) {
                return $this->_propDict["featureUpdatesRollbackStartDateTime"];
            } else {
                $this->_propDict["featureUpdatesRollbackStartDateTime"] = new \DateTime($this->_propDict["featureUpdatesRollbackStartDateTime"]);
                return $this->_propDict["featureUpdatesRollbackStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the featureUpdatesRollbackStartDateTime
    *
    * @param \DateTime $val The featureUpdatesRollbackStartDateTime
    *
    * @return WindowsUpdateForBusinessConfiguration
    */
    public function setFeatureUpdatesRollbackStartDateTime($val)
    {
        $this->_propDict["featureUpdatesRollbackStartDateTime"] = $val;
        return $this;
    }
    
}