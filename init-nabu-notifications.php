<?php
use providers\nabu\notifications\CNabuNotificationsProviderManager;

/*  Copyright 2009-2011 Rafael Gutierrez Martinez
 *  Copyright 2012-2013 Welma WEB MKT LABS, S.L.
 *  Copyright 2014-2016 Where Ideas Simply Come True, S.L.
 *  Copyright 2017 nabu-3 Group
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */

/**
 * @author Rafael Gutierrez <rgutierrez@nabu-3.com>
 * @since 3.0.0
 * @version 3.0.0
 * @package \providers\phpmailer\phpmailer
 */

define ('NABU_NOTIFICATIONS_VENDOR_KEY', 'nabu');
define ('NABU_NOTIFICATIONS_MODULE_KEY', 'notifications');
define ('NABU_NOTIFICATIONS_MANAGER_KEY', 'CNabuNotificationsProviderManager');
define ('NABU_NOTIFICATIONS_PROVIDER_PATH', dirname(__FILE__));

$nb_engine->registerProviderManager(new CNabuNotificationsProviderManager());
