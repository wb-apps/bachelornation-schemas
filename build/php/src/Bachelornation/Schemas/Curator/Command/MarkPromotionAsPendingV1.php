<?php
// @link https://schemas.bachelornation.com/json-schema/bachelornation/curator/command/mark-promotion-as-pending/1-0-0.json#
namespace Bachelornation\Schemas\Curator\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1 as GdbotsNcrMarkNodeAsPendingV1;
use Gdbots\Schemas\Ncr\Mixin\MarkNodeAsPending\MarkNodeAsPendingV1Mixin as GdbotsNcrMarkNodeAsPendingV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class MarkPromotionAsPendingV1 extends AbstractMessage implements
    MarkPromotionAsPending,
    GdbotsPbjxCommandV1,
    GdbotsNcrMarkNodeAsPendingV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:bachelornation:curator:command:mark-promotion-as-pending:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrMarkNodeAsPendingV1Mixin::create(),
            ]
        );
    }
}