<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DeviceManagement File
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
* DeviceManagement class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class DeviceManagement extends Entity
{
    /**
    * Gets the subscriptionState
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    *
    * @return DeviceManagementSubscriptionState The subscriptionState
    */
    public function getSubscriptionState()
    {
        if (array_key_exists("subscriptionState", $this->_propDict)) {
            if (is_a($this->_propDict["subscriptionState"], "Microsoft\Graph\Beta\Model\DeviceManagementSubscriptionState")) {
                return $this->_propDict["subscriptionState"];
            } else {
                $this->_propDict["subscriptionState"] = new DeviceManagementSubscriptionState($this->_propDict["subscriptionState"]);
                return $this->_propDict["subscriptionState"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subscriptionState
    * Tenant mobile device management subscription state. Possible values are: pending, active, warning, disabled, deleted, blocked, lockedOut.
    *
    * @param DeviceManagementSubscriptionState $val The subscriptionState
    *
    * @return DeviceManagement
    */
    public function setSubscriptionState($val)
    {
        $this->_propDict["subscriptionState"] = $val;
        return $this;
    }
    
    /**
    * Gets the subscriptions
    *
    * @return DeviceManagementSubscriptions The subscriptions
    */
    public function getSubscriptions()
    {
        if (array_key_exists("subscriptions", $this->_propDict)) {
            if (is_a($this->_propDict["subscriptions"], "Microsoft\Graph\Beta\Model\DeviceManagementSubscriptions")) {
                return $this->_propDict["subscriptions"];
            } else {
                $this->_propDict["subscriptions"] = new DeviceManagementSubscriptions($this->_propDict["subscriptions"]);
                return $this->_propDict["subscriptions"];
            }
        }
        return null;
    }
    
    /**
    * Sets the subscriptions
    *
    * @param DeviceManagementSubscriptions $val The subscriptions
    *
    * @return DeviceManagement
    */
    public function setSubscriptions($val)
    {
        $this->_propDict["subscriptions"] = $val;
        return $this;
    }
    
    /**
    * Gets the adminConsent
    *
    * @return AdminConsent The adminConsent
    */
    public function getAdminConsent()
    {
        if (array_key_exists("adminConsent", $this->_propDict)) {
            if (is_a($this->_propDict["adminConsent"], "Microsoft\Graph\Beta\Model\AdminConsent")) {
                return $this->_propDict["adminConsent"];
            } else {
                $this->_propDict["adminConsent"] = new AdminConsent($this->_propDict["adminConsent"]);
                return $this->_propDict["adminConsent"];
            }
        }
        return null;
    }
    
    /**
    * Sets the adminConsent
    *
    * @param AdminConsent $val The adminConsent
    *
    * @return DeviceManagement
    */
    public function setAdminConsent($val)
    {
        $this->_propDict["adminConsent"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceProtectionOverview
    *
    * @return DeviceProtectionOverview The deviceProtectionOverview
    */
    public function getDeviceProtectionOverview()
    {
        if (array_key_exists("deviceProtectionOverview", $this->_propDict)) {
            if (is_a($this->_propDict["deviceProtectionOverview"], "Microsoft\Graph\Beta\Model\DeviceProtectionOverview")) {
                return $this->_propDict["deviceProtectionOverview"];
            } else {
                $this->_propDict["deviceProtectionOverview"] = new DeviceProtectionOverview($this->_propDict["deviceProtectionOverview"]);
                return $this->_propDict["deviceProtectionOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceProtectionOverview
    *
    * @param DeviceProtectionOverview $val The deviceProtectionOverview
    *
    * @return DeviceManagement
    */
    public function setDeviceProtectionOverview($val)
    {
        $this->_propDict["deviceProtectionOverview"] = $val;
        return $this;
    }
    
    /**
    * Gets the settings
    * Account level settings.
    *
    * @return DeviceManagementSettings The settings
    */
    public function getSettings()
    {
        if (array_key_exists("settings", $this->_propDict)) {
            if (is_a($this->_propDict["settings"], "Microsoft\Graph\Beta\Model\DeviceManagementSettings")) {
                return $this->_propDict["settings"];
            } else {
                $this->_propDict["settings"] = new DeviceManagementSettings($this->_propDict["settings"]);
                return $this->_propDict["settings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the settings
    * Account level settings.
    *
    * @param DeviceManagementSettings $val The settings
    *
    * @return DeviceManagement
    */
    public function setSettings($val)
    {
        $this->_propDict["settings"] = $val;
        return $this;
    }
    
    /**
    * Gets the maximumDepTokens
    *
    * @return int The maximumDepTokens
    */
    public function getMaximumDepTokens()
    {
        if (array_key_exists("maximumDepTokens", $this->_propDict)) {
            return $this->_propDict["maximumDepTokens"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the maximumDepTokens
    *
    * @param int $val The maximumDepTokens
    *
    * @return DeviceManagement
    */
    public function setMaximumDepTokens($val)
    {
        $this->_propDict["maximumDepTokens"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the intuneAccountId
    *
    * @return string The intuneAccountId
    */
    public function getIntuneAccountId()
    {
        if (array_key_exists("intuneAccountId", $this->_propDict)) {
            return $this->_propDict["intuneAccountId"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the intuneAccountId
    *
    * @param string $val The intuneAccountId
    *
    * @return DeviceManagement
    */
    public function setIntuneAccountId($val)
    {
        $this->_propDict["intuneAccountId"] = $val;
        return $this;
    }
    
    /**
    * Gets the intuneBrand
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
    *
    * @return IntuneBrand The intuneBrand
    */
    public function getIntuneBrand()
    {
        if (array_key_exists("intuneBrand", $this->_propDict)) {
            if (is_a($this->_propDict["intuneBrand"], "Microsoft\Graph\Beta\Model\IntuneBrand")) {
                return $this->_propDict["intuneBrand"];
            } else {
                $this->_propDict["intuneBrand"] = new IntuneBrand($this->_propDict["intuneBrand"]);
                return $this->_propDict["intuneBrand"];
            }
        }
        return null;
    }
    
    /**
    * Sets the intuneBrand
    * intuneBrand contains data which is used in customizing the appearance of the Company Portal applications as well as the end user web portal.
    *
    * @param IntuneBrand $val The intuneBrand
    *
    * @return DeviceManagement
    */
    public function setIntuneBrand($val)
    {
        $this->_propDict["intuneBrand"] = $val;
        return $this;
    }
    

     /** 
     * Gets the termsAndConditions
    * The terms and conditions associated with device management of the company.
     *
     * @return array The termsAndConditions
     */
    public function getTermsAndConditions()
    {
        if (array_key_exists("termsAndConditions", $this->_propDict)) {
           return $this->_propDict["termsAndConditions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the termsAndConditions
    * The terms and conditions associated with device management of the company.
    *
    * @param TermsAndConditions $val The termsAndConditions
    *
    * @return DeviceManagement
    */
    public function setTermsAndConditions($val)
    {
		$this->_propDict["termsAndConditions"] = $val;
        return $this;
    }
    
    /**
    * Gets the androidForWorkSettings
    * The singleton Android for Work settings entity.
    *
    * @return AndroidForWorkSettings The androidForWorkSettings
    */
    public function getAndroidForWorkSettings()
    {
        if (array_key_exists("androidForWorkSettings", $this->_propDict)) {
            if (is_a($this->_propDict["androidForWorkSettings"], "Microsoft\Graph\Beta\Model\AndroidForWorkSettings")) {
                return $this->_propDict["androidForWorkSettings"];
            } else {
                $this->_propDict["androidForWorkSettings"] = new AndroidForWorkSettings($this->_propDict["androidForWorkSettings"]);
                return $this->_propDict["androidForWorkSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the androidForWorkSettings
    * The singleton Android for Work settings entity.
    *
    * @param AndroidForWorkSettings $val The androidForWorkSettings
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkSettings($val)
    {
        $this->_propDict["androidForWorkSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidForWorkAppConfigurationSchemas
    * Android for Work app configuration schema entities.
     *
     * @return array The androidForWorkAppConfigurationSchemas
     */
    public function getAndroidForWorkAppConfigurationSchemas()
    {
        if (array_key_exists("androidForWorkAppConfigurationSchemas", $this->_propDict)) {
           return $this->_propDict["androidForWorkAppConfigurationSchemas"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidForWorkAppConfigurationSchemas
    * Android for Work app configuration schema entities.
    *
    * @param AndroidForWorkAppConfigurationSchema $val The androidForWorkAppConfigurationSchemas
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkAppConfigurationSchemas($val)
    {
		$this->_propDict["androidForWorkAppConfigurationSchemas"] = $val;
        return $this;
    }
    

     /** 
     * Gets the androidForWorkEnrollmentProfiles
    * Android for Work enrollment profile entities.
     *
     * @return array The androidForWorkEnrollmentProfiles
     */
    public function getAndroidForWorkEnrollmentProfiles()
    {
        if (array_key_exists("androidForWorkEnrollmentProfiles", $this->_propDict)) {
           return $this->_propDict["androidForWorkEnrollmentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the androidForWorkEnrollmentProfiles
    * Android for Work enrollment profile entities.
    *
    * @param AndroidForWorkEnrollmentProfile $val The androidForWorkEnrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setAndroidForWorkEnrollmentProfiles($val)
    {
		$this->_propDict["androidForWorkEnrollmentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the enrollmentProfiles
     *
     * @return array The enrollmentProfiles
     */
    public function getEnrollmentProfiles()
    {
        if (array_key_exists("enrollmentProfiles", $this->_propDict)) {
           return $this->_propDict["enrollmentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the enrollmentProfiles
    *
    * @param EnrollmentProfile $val The enrollmentProfiles
    *
    * @return DeviceManagement
    */
    public function setEnrollmentProfiles($val)
    {
		$this->_propDict["enrollmentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedDeviceIdentities
     *
     * @return array The importedDeviceIdentities
     */
    public function getImportedDeviceIdentities()
    {
        if (array_key_exists("importedDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedDeviceIdentities
    *
    * @param ImportedDeviceIdentity $val The importedDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedDeviceIdentities($val)
    {
		$this->_propDict["importedDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedAppleDeviceIdentities
     *
     * @return array The importedAppleDeviceIdentities
     */
    public function getImportedAppleDeviceIdentities()
    {
        if (array_key_exists("importedAppleDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedAppleDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedAppleDeviceIdentities
    *
    * @param ImportedAppleDeviceIdentity $val The importedAppleDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedAppleDeviceIdentities($val)
    {
		$this->_propDict["importedAppleDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remoteActionAudits
     *
     * @return array The remoteActionAudits
     */
    public function getRemoteActionAudits()
    {
        if (array_key_exists("remoteActionAudits", $this->_propDict)) {
           return $this->_propDict["remoteActionAudits"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the remoteActionAudits
    *
    * @param RemoteActionAudit $val The remoteActionAudits
    *
    * @return DeviceManagement
    */
    public function setRemoteActionAudits($val)
    {
		$this->_propDict["remoteActionAudits"] = $val;
        return $this;
    }
    
    /**
    * Gets the applePushNotificationCertificate
    * Apple push notification certificate.
    *
    * @return ApplePushNotificationCertificate The applePushNotificationCertificate
    */
    public function getApplePushNotificationCertificate()
    {
        if (array_key_exists("applePushNotificationCertificate", $this->_propDict)) {
            if (is_a($this->_propDict["applePushNotificationCertificate"], "Microsoft\Graph\Beta\Model\ApplePushNotificationCertificate")) {
                return $this->_propDict["applePushNotificationCertificate"];
            } else {
                $this->_propDict["applePushNotificationCertificate"] = new ApplePushNotificationCertificate($this->_propDict["applePushNotificationCertificate"]);
                return $this->_propDict["applePushNotificationCertificate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the applePushNotificationCertificate
    * Apple push notification certificate.
    *
    * @param ApplePushNotificationCertificate $val The applePushNotificationCertificate
    *
    * @return DeviceManagement
    */
    public function setApplePushNotificationCertificate($val)
    {
        $this->_propDict["applePushNotificationCertificate"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementScripts
     *
     * @return array The deviceManagementScripts
     */
    public function getDeviceManagementScripts()
    {
        if (array_key_exists("deviceManagementScripts", $this->_propDict)) {
           return $this->_propDict["deviceManagementScripts"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceManagementScripts
    *
    * @param DeviceManagementScript $val The deviceManagementScripts
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementScripts($val)
    {
		$this->_propDict["deviceManagementScripts"] = $val;
        return $this;
    }
    
    /**
    * Gets the managedDeviceOverview
    * Device overview
    *
    * @return ManagedDeviceOverview The managedDeviceOverview
    */
    public function getManagedDeviceOverview()
    {
        if (array_key_exists("managedDeviceOverview", $this->_propDict)) {
            if (is_a($this->_propDict["managedDeviceOverview"], "Microsoft\Graph\Beta\Model\ManagedDeviceOverview")) {
                return $this->_propDict["managedDeviceOverview"];
            } else {
                $this->_propDict["managedDeviceOverview"] = new ManagedDeviceOverview($this->_propDict["managedDeviceOverview"]);
                return $this->_propDict["managedDeviceOverview"];
            }
        }
        return null;
    }
    
    /**
    * Sets the managedDeviceOverview
    * Device overview
    *
    * @param ManagedDeviceOverview $val The managedDeviceOverview
    *
    * @return DeviceManagement
    */
    public function setManagedDeviceOverview($val)
    {
        $this->_propDict["managedDeviceOverview"] = $val;
        return $this;
    }
    

     /** 
     * Gets the detectedApps
    * The list of detected apps associated with a device.
     *
     * @return array The detectedApps
     */
    public function getDetectedApps()
    {
        if (array_key_exists("detectedApps", $this->_propDict)) {
           return $this->_propDict["detectedApps"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the detectedApps
    * The list of detected apps associated with a device.
    *
    * @param DetectedApp $val The detectedApps
    *
    * @return DeviceManagement
    */
    public function setDetectedApps($val)
    {
		$this->_propDict["detectedApps"] = $val;
        return $this;
    }
    

     /** 
     * Gets the managedDevices
    * The list of managed devices.
     *
     * @return array The managedDevices
     */
    public function getManagedDevices()
    {
        if (array_key_exists("managedDevices", $this->_propDict)) {
           return $this->_propDict["managedDevices"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the managedDevices
    * The list of managed devices.
    *
    * @param ManagedDevice $val The managedDevices
    *
    * @return DeviceManagement
    */
    public function setManagedDevices($val)
    {
		$this->_propDict["managedDevices"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsMalwareInformation
     *
     * @return array The windowsMalwareInformation
     */
    public function getWindowsMalwareInformation()
    {
        if (array_key_exists("windowsMalwareInformation", $this->_propDict)) {
           return $this->_propDict["windowsMalwareInformation"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsMalwareInformation
    *
    * @param WindowsMalwareInformation $val The windowsMalwareInformation
    *
    * @return DeviceManagement
    */
    public function setWindowsMalwareInformation($val)
    {
		$this->_propDict["windowsMalwareInformation"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceConfigurations
    * The device configurations.
     *
     * @return array The deviceConfigurations
     */
    public function getDeviceConfigurations()
    {
        if (array_key_exists("deviceConfigurations", $this->_propDict)) {
           return $this->_propDict["deviceConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceConfigurations
    * The device configurations.
    *
    * @param DeviceConfiguration $val The deviceConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurations($val)
    {
		$this->_propDict["deviceConfigurations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicies
    * The device compliance policies.
     *
     * @return array The deviceCompliancePolicies
     */
    public function getDeviceCompliancePolicies()
    {
        if (array_key_exists("deviceCompliancePolicies", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCompliancePolicies
    * The device compliance policies.
    *
    * @param DeviceCompliancePolicy $val The deviceCompliancePolicies
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicies($val)
    {
		$this->_propDict["deviceCompliancePolicies"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceSetupConfigurations
     *
     * @return array The deviceSetupConfigurations
     */
    public function getDeviceSetupConfigurations()
    {
        if (array_key_exists("deviceSetupConfigurations", $this->_propDict)) {
           return $this->_propDict["deviceSetupConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceSetupConfigurations
    *
    * @param DeviceSetupConfiguration $val The deviceSetupConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceSetupConfigurations($val)
    {
		$this->_propDict["deviceSetupConfigurations"] = $val;
        return $this;
    }
    
    /**
    * Gets the softwareUpdateStatusSummary
    * The software update status summary.
    *
    * @return SoftwareUpdateStatusSummary The softwareUpdateStatusSummary
    */
    public function getSoftwareUpdateStatusSummary()
    {
        if (array_key_exists("softwareUpdateStatusSummary", $this->_propDict)) {
            if (is_a($this->_propDict["softwareUpdateStatusSummary"], "Microsoft\Graph\Beta\Model\SoftwareUpdateStatusSummary")) {
                return $this->_propDict["softwareUpdateStatusSummary"];
            } else {
                $this->_propDict["softwareUpdateStatusSummary"] = new SoftwareUpdateStatusSummary($this->_propDict["softwareUpdateStatusSummary"]);
                return $this->_propDict["softwareUpdateStatusSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the softwareUpdateStatusSummary
    * The software update status summary.
    *
    * @param SoftwareUpdateStatusSummary $val The softwareUpdateStatusSummary
    *
    * @return DeviceManagement
    */
    public function setSoftwareUpdateStatusSummary($val)
    {
        $this->_propDict["softwareUpdateStatusSummary"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceCompliancePolicyDeviceStateSummary
    * The device compliance state summary for this account.
    *
    * @return DeviceCompliancePolicyDeviceStateSummary The deviceCompliancePolicyDeviceStateSummary
    */
    public function getDeviceCompliancePolicyDeviceStateSummary()
    {
        if (array_key_exists("deviceCompliancePolicyDeviceStateSummary", $this->_propDict)) {
            if (is_a($this->_propDict["deviceCompliancePolicyDeviceStateSummary"], "Microsoft\Graph\Beta\Model\DeviceCompliancePolicyDeviceStateSummary")) {
                return $this->_propDict["deviceCompliancePolicyDeviceStateSummary"];
            } else {
                $this->_propDict["deviceCompliancePolicyDeviceStateSummary"] = new DeviceCompliancePolicyDeviceStateSummary($this->_propDict["deviceCompliancePolicyDeviceStateSummary"]);
                return $this->_propDict["deviceCompliancePolicyDeviceStateSummary"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceCompliancePolicyDeviceStateSummary
    * The device compliance state summary for this account.
    *
    * @param DeviceCompliancePolicyDeviceStateSummary $val The deviceCompliancePolicyDeviceStateSummary
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicyDeviceStateSummary($val)
    {
        $this->_propDict["deviceCompliancePolicyDeviceStateSummary"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCompliancePolicySettingStateSummaries
    * The summary states of compliance policy settings for this account.
     *
     * @return array The deviceCompliancePolicySettingStateSummaries
     */
    public function getDeviceCompliancePolicySettingStateSummaries()
    {
        if (array_key_exists("deviceCompliancePolicySettingStateSummaries", $this->_propDict)) {
           return $this->_propDict["deviceCompliancePolicySettingStateSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCompliancePolicySettingStateSummaries
    * The summary states of compliance policy settings for this account.
    *
    * @param DeviceCompliancePolicySettingStateSummary $val The deviceCompliancePolicySettingStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceCompliancePolicySettingStateSummaries($val)
    {
		$this->_propDict["deviceCompliancePolicySettingStateSummaries"] = $val;
        return $this;
    }
    
    /**
    * Gets the deviceConfigurationDeviceStateSummaries
    * The device configuration device state summary for this account.
    *
    * @return DeviceConfigurationDeviceStateSummary The deviceConfigurationDeviceStateSummaries
    */
    public function getDeviceConfigurationDeviceStateSummaries()
    {
        if (array_key_exists("deviceConfigurationDeviceStateSummaries", $this->_propDict)) {
            if (is_a($this->_propDict["deviceConfigurationDeviceStateSummaries"], "Microsoft\Graph\Beta\Model\DeviceConfigurationDeviceStateSummary")) {
                return $this->_propDict["deviceConfigurationDeviceStateSummaries"];
            } else {
                $this->_propDict["deviceConfigurationDeviceStateSummaries"] = new DeviceConfigurationDeviceStateSummary($this->_propDict["deviceConfigurationDeviceStateSummaries"]);
                return $this->_propDict["deviceConfigurationDeviceStateSummaries"];
            }
        }
        return null;
    }
    
    /**
    * Sets the deviceConfigurationDeviceStateSummaries
    * The device configuration device state summary for this account.
    *
    * @param DeviceConfigurationDeviceStateSummary $val The deviceConfigurationDeviceStateSummaries
    *
    * @return DeviceManagement
    */
    public function setDeviceConfigurationDeviceStateSummaries($val)
    {
        $this->_propDict["deviceConfigurationDeviceStateSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the cartToClassAssociations
     *
     * @return array The cartToClassAssociations
     */
    public function getCartToClassAssociations()
    {
        if (array_key_exists("cartToClassAssociations", $this->_propDict)) {
           return $this->_propDict["cartToClassAssociations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the cartToClassAssociations
    *
    * @param CartToClassAssociation $val The cartToClassAssociations
    *
    * @return DeviceManagement
    */
    public function setCartToClassAssociations($val)
    {
		$this->_propDict["cartToClassAssociations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the iosUpdateStatuses
    * The IOS software update installation statuses for this account.
     *
     * @return array The iosUpdateStatuses
     */
    public function getIosUpdateStatuses()
    {
        if (array_key_exists("iosUpdateStatuses", $this->_propDict)) {
           return $this->_propDict["iosUpdateStatuses"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the iosUpdateStatuses
    * The IOS software update installation statuses for this account.
    *
    * @param IosUpdateDeviceStatus $val The iosUpdateStatuses
    *
    * @return DeviceManagement
    */
    public function setIosUpdateStatuses($val)
    {
		$this->_propDict["iosUpdateStatuses"] = $val;
        return $this;
    }
    

     /** 
     * Gets the ndesConnectors
     *
     * @return array The ndesConnectors
     */
    public function getNdesConnectors()
    {
        if (array_key_exists("ndesConnectors", $this->_propDict)) {
           return $this->_propDict["ndesConnectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the ndesConnectors
    *
    * @param NdesConnector $val The ndesConnectors
    *
    * @return DeviceManagement
    */
    public function setNdesConnectors($val)
    {
		$this->_propDict["ndesConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceCategories
    * The list of device categories with the tenant.
     *
     * @return array The deviceCategories
     */
    public function getDeviceCategories()
    {
        if (array_key_exists("deviceCategories", $this->_propDict)) {
           return $this->_propDict["deviceCategories"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceCategories
    * The list of device categories with the tenant.
    *
    * @param DeviceCategory $val The deviceCategories
    *
    * @return DeviceManagement
    */
    public function setDeviceCategories($val)
    {
		$this->_propDict["deviceCategories"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exchangeConnectors
    * The list of Exchange Connectors configured by the tenant.
     *
     * @return array The exchangeConnectors
     */
    public function getExchangeConnectors()
    {
        if (array_key_exists("exchangeConnectors", $this->_propDict)) {
           return $this->_propDict["exchangeConnectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exchangeConnectors
    * The list of Exchange Connectors configured by the tenant.
    *
    * @param DeviceManagementExchangeConnector $val The exchangeConnectors
    *
    * @return DeviceManagement
    */
    public function setExchangeConnectors($val)
    {
		$this->_propDict["exchangeConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceEnrollmentConfigurations
    * The list of device enrollment configurations
     *
     * @return array The deviceEnrollmentConfigurations
     */
    public function getDeviceEnrollmentConfigurations()
    {
        if (array_key_exists("deviceEnrollmentConfigurations", $this->_propDict)) {
           return $this->_propDict["deviceEnrollmentConfigurations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceEnrollmentConfigurations
    * The list of device enrollment configurations
    *
    * @param DeviceEnrollmentConfiguration $val The deviceEnrollmentConfigurations
    *
    * @return DeviceManagement
    */
    public function setDeviceEnrollmentConfigurations($val)
    {
		$this->_propDict["deviceEnrollmentConfigurations"] = $val;
        return $this;
    }
    
    /**
    * Gets the exchangeOnPremisesPolicy
    *
    * @return DeviceManagementExchangeOnPremisesPolicy The exchangeOnPremisesPolicy
    */
    public function getExchangeOnPremisesPolicy()
    {
        if (array_key_exists("exchangeOnPremisesPolicy", $this->_propDict)) {
            if (is_a($this->_propDict["exchangeOnPremisesPolicy"], "Microsoft\Graph\Beta\Model\DeviceManagementExchangeOnPremisesPolicy")) {
                return $this->_propDict["exchangeOnPremisesPolicy"];
            } else {
                $this->_propDict["exchangeOnPremisesPolicy"] = new DeviceManagementExchangeOnPremisesPolicy($this->_propDict["exchangeOnPremisesPolicy"]);
                return $this->_propDict["exchangeOnPremisesPolicy"];
            }
        }
        return null;
    }
    
    /**
    * Sets the exchangeOnPremisesPolicy
    *
    * @param DeviceManagementExchangeOnPremisesPolicy $val The exchangeOnPremisesPolicy
    *
    * @return DeviceManagement
    */
    public function setExchangeOnPremisesPolicy($val)
    {
        $this->_propDict["exchangeOnPremisesPolicy"] = $val;
        return $this;
    }
    

     /** 
     * Gets the exchangeOnPremisesPolicies
     *
     * @return array The exchangeOnPremisesPolicies
     */
    public function getExchangeOnPremisesPolicies()
    {
        if (array_key_exists("exchangeOnPremisesPolicies", $this->_propDict)) {
           return $this->_propDict["exchangeOnPremisesPolicies"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the exchangeOnPremisesPolicies
    *
    * @param DeviceManagementExchangeOnPremisesPolicy $val The exchangeOnPremisesPolicies
    *
    * @return DeviceManagement
    */
    public function setExchangeOnPremisesPolicies($val)
    {
		$this->_propDict["exchangeOnPremisesPolicies"] = $val;
        return $this;
    }
    
    /**
    * Gets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @return OnPremisesConditionalAccessSettings The conditionalAccessSettings
    */
    public function getConditionalAccessSettings()
    {
        if (array_key_exists("conditionalAccessSettings", $this->_propDict)) {
            if (is_a($this->_propDict["conditionalAccessSettings"], "Microsoft\Graph\Beta\Model\OnPremisesConditionalAccessSettings")) {
                return $this->_propDict["conditionalAccessSettings"];
            } else {
                $this->_propDict["conditionalAccessSettings"] = new OnPremisesConditionalAccessSettings($this->_propDict["conditionalAccessSettings"]);
                return $this->_propDict["conditionalAccessSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the conditionalAccessSettings
    * The Exchange on premises conditional access settings. On premises conditional access will require devices to be both enrolled and compliant for mail access
    *
    * @param OnPremisesConditionalAccessSettings $val The conditionalAccessSettings
    *
    * @return DeviceManagement
    */
    public function setConditionalAccessSettings($val)
    {
        $this->_propDict["conditionalAccessSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the mobileThreatDefenseConnectors
    * The list of Mobile threat Defense connectors configured by the tenant.
     *
     * @return array The mobileThreatDefenseConnectors
     */
    public function getMobileThreatDefenseConnectors()
    {
        if (array_key_exists("mobileThreatDefenseConnectors", $this->_propDict)) {
           return $this->_propDict["mobileThreatDefenseConnectors"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the mobileThreatDefenseConnectors
    * The list of Mobile threat Defense connectors configured by the tenant.
    *
    * @param MobileThreatDefenseConnector $val The mobileThreatDefenseConnectors
    *
    * @return DeviceManagement
    */
    public function setMobileThreatDefenseConnectors($val)
    {
		$this->_propDict["mobileThreatDefenseConnectors"] = $val;
        return $this;
    }
    

     /** 
     * Gets the deviceManagementPartners
    * The list of Device Management Partners configured by the tenant.
     *
     * @return array The deviceManagementPartners
     */
    public function getDeviceManagementPartners()
    {
        if (array_key_exists("deviceManagementPartners", $this->_propDict)) {
           return $this->_propDict["deviceManagementPartners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the deviceManagementPartners
    * The list of Device Management Partners configured by the tenant.
    *
    * @param DeviceManagementPartner $val The deviceManagementPartners
    *
    * @return DeviceManagement
    */
    public function setDeviceManagementPartners($val)
    {
		$this->_propDict["deviceManagementPartners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the depOnboardingSettings
     *
     * @return array The depOnboardingSettings
     */
    public function getDepOnboardingSettings()
    {
        if (array_key_exists("depOnboardingSettings", $this->_propDict)) {
           return $this->_propDict["depOnboardingSettings"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the depOnboardingSettings
    *
    * @param DepOnboardingSetting $val The depOnboardingSettings
    *
    * @return DeviceManagement
    */
    public function setDepOnboardingSettings($val)
    {
		$this->_propDict["depOnboardingSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the notificationMessageTemplates
    * The Notification Message Templates.
     *
     * @return array The notificationMessageTemplates
     */
    public function getNotificationMessageTemplates()
    {
        if (array_key_exists("notificationMessageTemplates", $this->_propDict)) {
           return $this->_propDict["notificationMessageTemplates"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the notificationMessageTemplates
    * The Notification Message Templates.
    *
    * @param NotificationMessageTemplate $val The notificationMessageTemplates
    *
    * @return DeviceManagement
    */
    public function setNotificationMessageTemplates($val)
    {
		$this->_propDict["notificationMessageTemplates"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleDefinitions
    * The Role Definitions.
     *
     * @return array The roleDefinitions
     */
    public function getRoleDefinitions()
    {
        if (array_key_exists("roleDefinitions", $this->_propDict)) {
           return $this->_propDict["roleDefinitions"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleDefinitions
    * The Role Definitions.
    *
    * @param RoleDefinition $val The roleDefinitions
    *
    * @return DeviceManagement
    */
    public function setRoleDefinitions($val)
    {
		$this->_propDict["roleDefinitions"] = $val;
        return $this;
    }
    

     /** 
     * Gets the roleAssignments
    * The Role Assignments.
     *
     * @return array The roleAssignments
     */
    public function getRoleAssignments()
    {
        if (array_key_exists("roleAssignments", $this->_propDict)) {
           return $this->_propDict["roleAssignments"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the roleAssignments
    * The Role Assignments.
    *
    * @param DeviceAndAppManagementRoleAssignment $val The roleAssignments
    *
    * @return DeviceManagement
    */
    public function setRoleAssignments($val)
    {
		$this->_propDict["roleAssignments"] = $val;
        return $this;
    }
    

     /** 
     * Gets the resourceOperations
    * The Resource Operations.
     *
     * @return array The resourceOperations
     */
    public function getResourceOperations()
    {
        if (array_key_exists("resourceOperations", $this->_propDict)) {
           return $this->_propDict["resourceOperations"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the resourceOperations
    * The Resource Operations.
    *
    * @param ResourceOperation $val The resourceOperations
    *
    * @return DeviceManagement
    */
    public function setResourceOperations($val)
    {
		$this->_propDict["resourceOperations"] = $val;
        return $this;
    }
    

     /** 
     * Gets the telecomExpenseManagementPartners
    * The telecom expense management partners.
     *
     * @return array The telecomExpenseManagementPartners
     */
    public function getTelecomExpenseManagementPartners()
    {
        if (array_key_exists("telecomExpenseManagementPartners", $this->_propDict)) {
           return $this->_propDict["telecomExpenseManagementPartners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the telecomExpenseManagementPartners
    * The telecom expense management partners.
    *
    * @param TelecomExpenseManagementPartner $val The telecomExpenseManagementPartners
    *
    * @return DeviceManagement
    */
    public function setTelecomExpenseManagementPartners($val)
    {
		$this->_propDict["telecomExpenseManagementPartners"] = $val;
        return $this;
    }
    
    /**
    * Gets the windowsAutopilotSettings
    *
    * @return WindowsAutopilotSettings The windowsAutopilotSettings
    */
    public function getWindowsAutopilotSettings()
    {
        if (array_key_exists("windowsAutopilotSettings", $this->_propDict)) {
            if (is_a($this->_propDict["windowsAutopilotSettings"], "Microsoft\Graph\Beta\Model\WindowsAutopilotSettings")) {
                return $this->_propDict["windowsAutopilotSettings"];
            } else {
                $this->_propDict["windowsAutopilotSettings"] = new WindowsAutopilotSettings($this->_propDict["windowsAutopilotSettings"]);
                return $this->_propDict["windowsAutopilotSettings"];
            }
        }
        return null;
    }
    
    /**
    * Sets the windowsAutopilotSettings
    *
    * @param WindowsAutopilotSettings $val The windowsAutopilotSettings
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotSettings($val)
    {
        $this->_propDict["windowsAutopilotSettings"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsAutopilotDeviceIdentities
     *
     * @return array The windowsAutopilotDeviceIdentities
     */
    public function getWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists("windowsAutopilotDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["windowsAutopilotDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsAutopilotDeviceIdentities
    *
    * @param WindowsAutopilotDeviceIdentity $val The windowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeviceIdentities($val)
    {
		$this->_propDict["windowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsAutopilotDeploymentProfiles
     *
     * @return array The windowsAutopilotDeploymentProfiles
     */
    public function getWindowsAutopilotDeploymentProfiles()
    {
        if (array_key_exists("windowsAutopilotDeploymentProfiles", $this->_propDict)) {
           return $this->_propDict["windowsAutopilotDeploymentProfiles"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsAutopilotDeploymentProfiles
    *
    * @param WindowsAutopilotDeploymentProfile $val The windowsAutopilotDeploymentProfiles
    *
    * @return DeviceManagement
    */
    public function setWindowsAutopilotDeploymentProfiles($val)
    {
		$this->_propDict["windowsAutopilotDeploymentProfiles"] = $val;
        return $this;
    }
    

     /** 
     * Gets the importedWindowsAutopilotDeviceIdentities
     *
     * @return array The importedWindowsAutopilotDeviceIdentities
     */
    public function getImportedWindowsAutopilotDeviceIdentities()
    {
        if (array_key_exists("importedWindowsAutopilotDeviceIdentities", $this->_propDict)) {
           return $this->_propDict["importedWindowsAutopilotDeviceIdentities"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the importedWindowsAutopilotDeviceIdentities
    *
    * @param ImportedWindowsAutopilotDeviceIdentity $val The importedWindowsAutopilotDeviceIdentities
    *
    * @return DeviceManagement
    */
    public function setImportedWindowsAutopilotDeviceIdentities($val)
    {
		$this->_propDict["importedWindowsAutopilotDeviceIdentities"] = $val;
        return $this;
    }
    

     /** 
     * Gets the remoteAssistancePartners
    * The remote assist partners.
     *
     * @return array The remoteAssistancePartners
     */
    public function getRemoteAssistancePartners()
    {
        if (array_key_exists("remoteAssistancePartners", $this->_propDict)) {
           return $this->_propDict["remoteAssistancePartners"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the remoteAssistancePartners
    * The remote assist partners.
    *
    * @param RemoteAssistancePartner $val The remoteAssistancePartners
    *
    * @return DeviceManagement
    */
    public function setRemoteAssistancePartners($val)
    {
		$this->_propDict["remoteAssistancePartners"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionAppLearningSummaries
    * The windows information protection app learning summaries.
     *
     * @return array The windowsInformationProtectionAppLearningSummaries
     */
    public function getWindowsInformationProtectionAppLearningSummaries()
    {
        if (array_key_exists("windowsInformationProtectionAppLearningSummaries", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionAppLearningSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionAppLearningSummaries
    * The windows information protection app learning summaries.
    *
    * @param WindowsInformationProtectionAppLearningSummary $val The windowsInformationProtectionAppLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionAppLearningSummaries($val)
    {
		$this->_propDict["windowsInformationProtectionAppLearningSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the windowsInformationProtectionNetworkLearningSummaries
    * The windows information protection network learning summaries.
     *
     * @return array The windowsInformationProtectionNetworkLearningSummaries
     */
    public function getWindowsInformationProtectionNetworkLearningSummaries()
    {
        if (array_key_exists("windowsInformationProtectionNetworkLearningSummaries", $this->_propDict)) {
           return $this->_propDict["windowsInformationProtectionNetworkLearningSummaries"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the windowsInformationProtectionNetworkLearningSummaries
    * The windows information protection network learning summaries.
    *
    * @param WindowsInformationProtectionNetworkLearningSummary $val The windowsInformationProtectionNetworkLearningSummaries
    *
    * @return DeviceManagement
    */
    public function setWindowsInformationProtectionNetworkLearningSummaries($val)
    {
		$this->_propDict["windowsInformationProtectionNetworkLearningSummaries"] = $val;
        return $this;
    }
    

     /** 
     * Gets the auditEvents
    * The Audit Events
     *
     * @return array The auditEvents
     */
    public function getAuditEvents()
    {
        if (array_key_exists("auditEvents", $this->_propDict)) {
           return $this->_propDict["auditEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the auditEvents
    * The Audit Events
    *
    * @param AuditEvent $val The auditEvents
    *
    * @return DeviceManagement
    */
    public function setAuditEvents($val)
    {
		$this->_propDict["auditEvents"] = $val;
        return $this;
    }
    

     /** 
     * Gets the troubleshootingEvents
    * The list of troubleshooting events for the tenant.
     *
     * @return array The troubleshootingEvents
     */
    public function getTroubleshootingEvents()
    {
        if (array_key_exists("troubleshootingEvents", $this->_propDict)) {
           return $this->_propDict["troubleshootingEvents"];
        } else {
            return null;
        }
    }
    
    /** 
    * Sets the troubleshootingEvents
    * The list of troubleshooting events for the tenant.
    *
    * @param DeviceManagementTroubleshootingEvent $val The troubleshootingEvents
    *
    * @return DeviceManagement
    */
    public function setTroubleshootingEvents($val)
    {
		$this->_propDict["troubleshootingEvents"] = $val;
        return $this;
    }
    
}