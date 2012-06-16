<?php
/*
 * Copyright 2011-2012 Ning, Inc.
 *
 * Ning licenses this file to you under the Apache License, version 2.0
 * (the "License"); you may not use this file except in compliance with the
 * License.  You may obtain a copy of the License at:
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.  See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

class Killbill_Account extends Killbill_Resource {
    protected $accountId;
    protected $name;
    protected $externalKey;
    protected $email;
    protected $currency;
    protected $paymentMethodId;
    protected $address1;
    protected $address2;
    protected $company;
    protected $state;
    protected $country;
    protected $phone;
    protected $length;
    protected $billCycleDay;
    protected $timeZone;

    public function get() {
        $response = $this->_get(Killbill_Client::PATH_ACCOUNTS . '/' . $this->accountId);
        return $this->_getFromBody(Killbill_Account, $response);
    }

    public function create($user, $reason, $comment) {
        $response = $this->_create(Killbill_Client::PATH_ACCOUNTS, $user, $reason, $comment);
        return $this->_getFromResponse(Killbill_Account, $response);
    }
}