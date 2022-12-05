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

namespace CachetHQ\Tests\Cachet\Bus\Events\ComponentGroup;

use CachetHQ\Cachet\Bus\Events\ComponentGroup\ComponentGroupWasRemovedEvent;
use CachetHQ\Cachet\Models\ComponentGroup;

class ComponentGroupWasRemovedEventTest extends AbstractComponentGroupEventTestCase
{
    protected function objectHasHandlers()
    {
        return false;
    }

    protected function getObjectAndParams()
    {
        $params = ['group' => new ComponentGroup()];
        $object = new ComponentGroupWasRemovedEvent($params['group']);

        return compact('params', 'object');
    }
}
