<?php

namespace Google\Site_Kit_Dependencies;

/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */
/**
 * The "otherContacts" collection of methods.
 * Typical usage is:
 *  <code>
 *   $peopleService = new Google_Service_PeopleService(...);
 *   $otherContacts = $peopleService->otherContacts;
 *  </code>
 */
class Google_Service_PeopleService_Resource_OtherContacts extends \Google\Site_Kit_Dependencies\Google_Service_Resource
{
    /**
     * Copies an other contact to a new contact in the user's MY_CONTACTS group
     * (otherContacts.copyOtherContactToMyContactsGroup)
     *
     * @param string $resourceName Required. The resource name of the other contact
     * to copy.
     * @param Google_Service_PeopleService_CopyOtherContactToMyContactsGroupRequest $postBody
     * @param array $optParams Optional parameters.
     * @return Google_Service_PeopleService_Person
     */
    public function copyOtherContactToMyContactsGroup($resourceName, \Google\Site_Kit_Dependencies\Google_Service_PeopleService_CopyOtherContactToMyContactsGroupRequest $postBody, $optParams = array())
    {
        $params = array('resourceName' => $resourceName, 'postBody' => $postBody);
        $params = \array_merge($params, $optParams);
        return $this->call('copyOtherContactToMyContactsGroup', array($params), "Google\Site_Kit_Dependencies\Google_Service_PeopleService_Person");
    }
}
