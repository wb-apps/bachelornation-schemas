// @link https://schemas.bachelornation.com/json-schema/bachelornation/iam/node/apple-news-app/1-0-0.json#
import Fb from '@gdbots/pbj/FieldBuilder';
import GdbotsIamAppleNewsAppV1Mixin from '@gdbots/schemas/gdbots/iam/mixin/apple-news-app/AppleNewsAppV1Mixin';
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import Message from '@gdbots/pbj/Message';
import NodeStatus from '@gdbots/schemas/gdbots/ncr/enums/NodeStatus';
import Schema from '@gdbots/pbj/Schema';
import T from '@gdbots/pbj/types';
import UuidIdentifier from '@gdbots/pbj/well-known/UuidIdentifier';

export default class AppleNewsAppV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema(this.SCHEMA_ID, this,
      [
        /*
         * The "_id" value:
         * - MUST NOT change for the life of the node.
         * - SHOULD be globally unique
         * - SHOULD be generated by the app (ideally in default value closure... e.g. UuidIdentifier::generate())
         */
        Fb.create('_id', T.IdentifierType.create())
          .required()
          .withDefault(() => UuidIdentifier.generate())
          .classProto(UuidIdentifier)
          .overridable(true)
          .build(),
        Fb.create('status', T.StringEnumType.create())
          .withDefault("draft")
          .classProto(NodeStatus)
          .build(),
        Fb.create('etag', T.StringType.create())
          .maxLength(100)
          .pattern('^[\\w\\.:-]+$')
          .build(),
        Fb.create('created_at', T.MicrotimeType.create())
          .build(),
        /*
         * A fully qualified reference to what created this node. This is intentionally a message-ref
         * and not a user id because it is often a program that creates nodes, not a user.
         */
        Fb.create('creator_ref', T.MessageRefType.create())
          .build(),
        Fb.create('updated_at', T.MicrotimeType.create())
          .useTypeDefault(false)
          .build(),
        /*
         * A fully qualified reference to what updated this node. This is intentionally a message-ref
         * and not a user id because it is often a program that updates nodes, not a user.
         * E.g. "acme:iam:node:app:cli-scheduler" or "acme:iam:node:user:60c71df0-fda8-11e5-bfb9-30342d363854"
         */
        Fb.create('updater_ref', T.MessageRefType.create())
          .build(),
        /*
         * A reference to the last event that changed the state of this node.
         * E.g. "acme:blog:event:article-published:60c71df0-fda8-11e5-bfb9-30342d363854"
         */
        Fb.create('last_event_ref', T.MessageRefType.create())
          .build(),
        Fb.create('title', T.StringType.create())
          .build(),
        /*
         * The roles determine what permissions this app will have when using the system.
         * The role itself is a node which has a set of "allow" and "deny" rules.
         */
        Fb.create('roles', T.NodeRefType.create())
          .asASet()
          .build(),
        /*
         * The "channel_id" comes from Apple News and is not a secret so it does
         * not require encryption. It is usually a version 4 uuid.
         * @link https://developer.apple.com/documentation/apple_news/apple_news_api/about_the_news_security_model
         */
        Fb.create('channel_id', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        /*
         * The "api_key" comes from Apple News and is not a secret so it does
         * not require encryption. It is usually a version 4 uuid (similar to channel_id).
         */
        Fb.create('api_key', T.StringType.create())
          .pattern('^[\\w-]+$')
          .build(),
        /*
         * The "api_secret" should be encrypted and never stored in plain text.
         */
        Fb.create('api_secret', T.TextType.create())
          .build(),
      ],
      this.MIXINS,
    );
  }
}

const M = AppleNewsAppV1;
M.prototype.SCHEMA_ID = M.SCHEMA_ID = 'pbj:bachelornation:iam:node:apple-news-app:1-0-0';
M.prototype.SCHEMA_CURIE = M.SCHEMA_CURIE = 'bachelornation:iam:node:apple-news-app';
M.prototype.SCHEMA_CURIE_MAJOR = M.SCHEMA_CURIE_MAJOR = 'bachelornation:iam:node:apple-news-app:v1';
M.prototype.MIXINS = M.MIXINS = [
  'gdbots:ncr:mixin:node:v1',
  'gdbots:ncr:mixin:node',
  'gdbots:iam:mixin:app:v1',
  'gdbots:iam:mixin:app',
  'gdbots:iam:mixin:apple-news-app:v1',
  'gdbots:iam:mixin:apple-news-app',
];

GdbotsNcrNodeV1Mixin(M);

GdbotsIamAppleNewsAppV1Mixin(M);

Object.freeze(M);
Object.freeze(M.prototype);
