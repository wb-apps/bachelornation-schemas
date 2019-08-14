<?php
// @link https://schemas.bachelornation.com/json-schema/bachelornation/news/command/unlock-article/1-0-0.json#
namespace BachelorNation\Schemas\News\Command;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Schema;
use Gdbots\Schemas\Ncr\Mixin\UnlockNode\UnlockNodeV1 as GdbotsNcrUnlockNodeV1;
use Gdbots\Schemas\Ncr\Mixin\UnlockNode\UnlockNodeV1Mixin as GdbotsNcrUnlockNodeV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1 as GdbotsPbjxCommandV1;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Mixin as GdbotsPbjxCommandV1Mixin;
use Gdbots\Schemas\Pbjx\Mixin\Command\CommandV1Trait as GdbotsPbjxCommandV1Trait;

final class UnlockArticleV1 extends AbstractMessage implements
    UnlockArticle,
    GdbotsPbjxCommandV1,
    GdbotsNcrUnlockNodeV1
{
    use GdbotsPbjxCommandV1Trait;

    /**
     * @return Schema
     */
    protected static function defineSchema()
    {
        return new Schema('pbj:bachelornation:news:command:unlock-article:1-0-0', __CLASS__,
            [],
            [
                GdbotsPbjxCommandV1Mixin::create(),
                GdbotsNcrUnlockNodeV1Mixin::create(),
            ]
        );
    }
}
