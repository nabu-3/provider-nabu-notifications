<?php

/*  Copyright 2009-2011 Rafael Gutierrez Martinez
 *  Copyright 2012-2013 Welma WEB MKT LABS, S.L.
 *  Copyright 2014-2016 Where Ideas Simply Come True, S.L.
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

namespace providers\nabu\notifications\services;
use nabu\core\CNabuObject;
use nabu\data\messaging\CNabuMessagingService;
use nabu\messaging\interfaces\INabuMessagingServiceInterface;
use providers\nabu\notifications\CNabuNotificationsProviderManager;

/**
 * Notifications Service Interface for Messaging.
 * @author Rafael Gutierrez <rgutierrez@nabu-3.com>
 * @since 3.0.0
 * @version 3.0.0
 * @package \providers\nabu\notifications\services
 */
class CNabuNotificationServiceInterface extends CNabuObject implements INabuMessagingServiceInterface
{
    /**
     * @var CNabuNotificationsProviderManager $nb_notifications_manager Manager instance associated with this interface.
     */
    private $nb_notifications_manager = null;

    /**
     * Default constructor.
     * @param CNabuNotificationsProviderManager $nb_notifications_manager Manager instance associated with this interface.
     */
    public function __construct(CNabuNotificationsProviderManager $nb_notifications_manager)
    {
        parent::__construct();

        $this->nb_notifications_manager = $nb_notifications_manager;
    }

    public function init()
    {
        return true;
    }

    public function connect(CNabuMessagingService $nb_messaging_service)
    {
        return true;
    }

    public function send($to, $cc, $bcc, $subject, $body_html, $body_text, $attachments): int
    {
        return 0;
    }

    public function post($to, $cc, $bcc, $subject, $body_html, $body_text, $attachments): int
    {
        return 0;
    }

    public function disconnect()
    {
    }

    public function finish()
    {
    }
}
