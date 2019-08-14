// @link https://schemas.bachelornation.com/json-schema/bachelornation/sys/node/flagset/1-0-0.json#
import GdbotsNcrNodeV1Mixin from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Mixin';
import GdbotsNcrNodeV1Trait from '@gdbots/schemas/gdbots/ncr/mixin/node/NodeV1Trait';
import Message from '@gdbots/pbj/Message';
import MessageResolver from '@gdbots/pbj/MessageResolver';
import Schema from '@gdbots/pbj/Schema';
import TrinitiSysFlagsetV1Mixin from '@triniti/schemas/triniti/sys/mixin/flagset/FlagsetV1Mixin';
import TrinitiSysFlagsetV1Trait from '@triniti/schemas/triniti/sys/mixin/flagset/FlagsetV1Trait';

export default class FlagsetV1 extends Message {
  /**
   * @private
   *
   * @returns {Schema}
   */
  static defineSchema() {
    return new Schema('pbj:bachelornation:sys:node:flagset:1-0-0', FlagsetV1,
      [],
      [
        GdbotsNcrNodeV1Mixin.create(),
        TrinitiSysFlagsetV1Mixin.create(),
      ],
    );
  }
}

GdbotsNcrNodeV1Trait(FlagsetV1);
TrinitiSysFlagsetV1Trait(FlagsetV1);
MessageResolver.register('bachelornation:sys:node:flagset', FlagsetV1);
Object.freeze(FlagsetV1);
Object.freeze(FlagsetV1.prototype);
