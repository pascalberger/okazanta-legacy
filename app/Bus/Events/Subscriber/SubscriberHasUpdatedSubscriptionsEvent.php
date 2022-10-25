<?php

/*
 * This file is part of Okazanta.
 *
 * (c) Okazanta <hello@okazanta.com>
 *
 * Some code may be inherited from Cachet
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CachetHQ\Cachet\Bus\Events\Subscriber;

use CachetHQ\Cachet\Models\Subscriber;

/**
 * This is the subscriber has updated subscriptions event.
 *
 * @author James Brooks <james@alt-three.com>
 */
final class SubscriberHasUpdatedSubscriptionsEvent implements SubscriberEventInterface
{
    /**
     * The subscriber.
     *
     * @var \CachetHQ\Cachet\Models\Subscriber
     */
    public $subscriber;

    /**
     * Create a new subscriber has updated subscriptions event instance.
     *
     * @param \CachetHQ\Cachet\Models\Subscriber $subscriber
     *
     * @return void
     */
    public function __construct(Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
    }
}
