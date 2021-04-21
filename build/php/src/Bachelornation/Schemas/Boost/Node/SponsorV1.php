<?php
declare(strict_types=1);

// @link https://schemas.bachelornation.com/json-schema/bachelornation/boost/node/sponsor/1-0-0.json#
namespace Bachelornation\Schemas\Boost\Node;

use Gdbots\Pbj\AbstractMessage;
use Gdbots\Pbj\Enum\Format;
use Gdbots\Pbj\FieldBuilder as Fb;
use Gdbots\Pbj\Schema;
use Gdbots\Pbj\Type as T;
use Gdbots\Pbj\WellKnown\UuidIdentifier;
use Gdbots\Schemas\Ncr\Enum\NodeStatus;
use Gdbots\Schemas\Ncr\Mixin\Node\NodeV1Mixin as GdbotsNcrNodeV1Mixin;
use Triniti\Schemas\Boost\Enum\SponsorType;
use Triniti\Schemas\Boost\Mixin\Sponsor\SponsorV1Mixin as TrinitiBoostSponsorV1Mixin;

final class SponsorV1 extends AbstractMessage
{
    const SCHEMA_ID = 'pbj:bachelornation:boost:node:sponsor:1-0-0';
    const SCHEMA_CURIE = 'bachelornation:boost:node:sponsor';
    const SCHEMA_CURIE_MAJOR = 'bachelornation:boost:node:sponsor:v1';
    const MIXINS = [
      'gdbots:ncr:mixin:node:v1',
      'gdbots:ncr:mixin:node',
      'triniti:boost:mixin:sponsor:v1',
      'triniti:boost:mixin:sponsor',
      'gdbots:common:mixin:taggable:v1',
      'gdbots:common:mixin:taggable',
      'gdbots:ncr:mixin:expirable:v1',
      'gdbots:ncr:mixin:expirable',
      'gdbots:ncr:mixin:indexed:v1',
      'gdbots:ncr:mixin:indexed',
      'gdbots:ncr:mixin:publishable:v1',
      'gdbots:ncr:mixin:publishable',
      'gdbots:ncr:mixin:sluggable:v1',
      'gdbots:ncr:mixin:sluggable',
    ];

    use GdbotsNcrNodeV1Mixin;

    use TrinitiBoostSponsorV1Mixin;

    protected static function defineSchema(): Schema
    {
        return new Schema(self::SCHEMA_ID, __CLASS__,
            [
                /*
                 * The "_id" value:
                 * - MUST NOT change for the life of the node.
                 * - SHOULD be globally unique
                 * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
                 */
                Fb::create('_id', T\IdentifierType::create())
                    ->required()
                    ->withDefault(function() { return UuidIdentifier::generate(); })
                    ->className(UuidIdentifier::class)
                    ->overridable(true)
                    ->build(),
                Fb::create('status', T\StringEnumType::create())
                    ->withDefault("draft")
                    ->className(NodeStatus::class)
                    ->build(),
                Fb::create('etag', T\StringType::create())
                    ->maxLength(100)
                    ->pattern('^[\w\.:-]+$')
                    ->build(),
                Fb::create('created_at', T\MicrotimeType::create())
                    ->build(),
                /*
                 * A fully qualified reference to what created this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that creates nodes, not a user.
                 */
                Fb::create('creator_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('updated_at', T\MicrotimeType::create())
                    ->useTypeDefault(false)
                    ->build(),
                /*
                 * A fully qualified reference to what updated this node. This is intentionally a message-ref
                 * and not a user id because it is often a program that updates nodes, not a user.
                 * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('updater_ref', T\MessageRefType::create())
                    ->build(),
                /*
                 * A reference to the last event that changed the state of this node.
                 * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
                 */
                Fb::create('last_event_ref', T\MessageRefType::create())
                    ->build(),
                Fb::create('title', T\StringType::create())
                    ->build(),
                Fb::create('type', T\StringEnumType::create())
                    ->withDefault("external")
                    ->className(SponsorType::class)
                    ->build(),
                /*
                 * A string containing code that is injected into the application's html head tag.
                 */
                Fb::create('permalink_html_head', T\TextType::create())
                    ->build(),
                /*
                 * A string containing code that is injected into the application typically
                 * next to/near the title of the content. It will be wrapped in a div with
                 * the id and slug of the sponsor.
                 */
                Fb::create('permalink_badge', T\TextType::create())
                    ->build(),
                /*
                 * See description for "permalink_badge". This is very similar but in this
                 * case the page is rendering many pieces of content, e.g. blogroll.
                 */
                Fb::create('timeline_badge', T\TextType::create())
                    ->build(),
                /*
                 * Tags is a map that categorizes data or tracks references in
                 * external systems. The tags names should be consistent and descriptive,
                 * e.g. fb_user_id:123, salesforce_customer_id:456.
                 */
                Fb::create('tags', T\StringType::create())
                    ->asAMap()
                    ->pattern('^[\w\/\.:-]+$')
                    ->build(),
                Fb::create('expires_at', T\DateTimeType::create())
                    ->build(),
                Fb::create('published_at', T\DateTimeType::create())
                    ->build(),
                /*
                 * The "slug" is a secondary identifier, typically used in a url:
                 * - MUST be url friendly
                 * - SHOULD NOT be case sensitive
                 * - SHOULD be unique within the message curie namespace
                 * - CAN be changed, but in practice once nodes are published you should avoid it if possible
                 */
                Fb::create('slug', T\StringType::create())
                    ->format(Format::SLUG())
                    ->build(),
            ],
            self::MIXINS
        );
    }
}
