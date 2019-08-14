<?php
// @link https://schemas.bachelornation.com/json-schema/bachelornation/notify/command/update-notification/1-0-0.json#
namespace Bachelornation\Schemas\Notify\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1 as GdbotsNcrUpdateNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UpdateNode\UpdateNodeV1Mixin as GdbotsNcrUpdateNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class UpdateNotificationV1 extends AbstractMessage implements
    UpdateNotification,
    GdbotsPbjxCommandV1,
    GdbotsNcrUpdateNodeV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:bachelornation:notify:command:update-notification:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUpdateNodeV1Mixin::create(),
            ]
        );
    }
}
