# CHANGELOG


## v2.0.2
* Use `gdbots/schemas` v2.1.1
* Use `triniti/schemas` v2.0.3
* __Add Schemas:__
  * `bachelornation:iam:node:twitter-app`
  * `bachelornation:notify:node:twitter-notification`
* Remove all use of `gdbots:ncr:mixin:indexed:v1` as it is deprecated.


## v2.0.1
* Use `triniti/schemas` v2.0.2.


## v2.0.0
* Use `gdbots/schemas` v2.1.0.
* Use `triniti/schemas` v2.0.1.
* __Add Schemas:__
  * `bachelornation:canvas:block:eme-form-block`


## v1.0.3
* Use `triniti/schemas` v1.1.12.


## v1.0.2
* Use `gdbots/schemas` v1.6.6.
* Use `triniti/schemas` v1.1.11.
* __Modify Schemas:__
  * `bachelornation:curator:node:gallery` patch revision `1-0-1`
    * Add mixin `gdbots:common:mixin:labelable:v1`
  * `bachelornation:news:node:article` patch revision `1-0-1`
    * Add mixin `gdbots:common:mixin:labelable:v1`
  * `bachelornation:ovp:node:video` patch revision `1-0-1`
    * Add mixin `gdbots:common:mixin:labelable:v1`


## v1.0.1
* __Modify Schemas:__
  * `bachelornation:curator:node:timeline` patch revision `1-0-1`
    * Add mixin `triniti:common:mixin:custom-code:v1`


## v1.0.0
* Use `triniti/schemas` v1.1.9.


## v0.2.6
* Use `gdbots/schemas` v1.6.5.
* Use `triniti/schemas` v1.1.8.
* __Add Schemas:__
  * `bachelornation:canvas:block:tumblr-post-block`


## v0.2.5
* Use `gdbots/schemas` v1.6.4.
* Use `triniti/schemas` v1.1.7.


## v0.2.4
* Use `triniti/schemas` v1.1.6.
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `bachelornation:ovp:node:video`
    * Remove mixin `triniti:ovp.medialive:mixin:has-channel:v1`


## v0.2.3
* Use `gdbots/schemas` v1.6.3.
* Use `triniti/schemas` v1.1.5.


## v0.2.2
* Use `gdbots/schemas` v1.6.2.
* Use `triniti/schemas` v1.1.3.
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `bachelornation:ovp:node:video`
    * Add mixin `triniti:ovp.medialive:mixin:has-channel:v1`


## v0.2.1
* Use `triniti/schemas` v1.1.2.
* __Add Schemas:__
  * `bachelornation:canvas:block:spotify-embed-block`
  * `bachelornation:canvas:block:tiktok-embed-block`


## v0.2.0
* Use `gdbots/schemas` v1.6.0.
* Use `triniti/schemas` v1.1.0.


## v0.1.3
* Use `triniti/schemas` v1.0.7.
* __Add Schemas:__
  * `bachelornation:canvas:block:divider-block`
  * `bachelornation:curator:command:remove-teaser-slotting`
  * `bachelornation:curator:event:teaser-slotting-removed`
  * `bachelornation:curator:node:asset-teaser`
* __Modify Schemas:__ _(no version changes as there is no production use yet)_
  * `bachelornation:canvas:node:page`
    * Add mixin `triniti:curator:mixin:has-related-teasers:v1`
  * `bachelornation:news:node:article`
    * Add mixin `triniti:curator:mixin:has-related-teasers:v1`
  * `bachelornation:ovp:node:video`
    * Add mixin `triniti:curator:mixin:has-related-teasers:v1`


## v0.1.2
* Use `triniti/schemas` v1.0.5.


## v0.1.1
* Use `triniti/schemas` v1.0.4.


## v0.1.0
* __Add Schemas:__
  * __bachelornation:apollo__
    * `bachelornation:apollo::poll-answer`
    * `bachelornation:apollo:command:cast-vote`
    * `bachelornation:apollo:command:create-poll`
    * `bachelornation:apollo:command:delete-poll`
    * `bachelornation:apollo:command:expire-poll`
    * `bachelornation:apollo:command:mark-poll-as-draft`
    * `bachelornation:apollo:command:mark-poll-as-pending`
    * `bachelornation:apollo:command:publish-poll`
    * `bachelornation:apollo:command:unpublish-poll`
    * `bachelornation:apollo:command:update-poll`
    * `bachelornation:apollo:event:poll-created`
    * `bachelornation:apollo:event:poll-deleted`
    * `bachelornation:apollo:event:poll-expired`
    * `bachelornation:apollo:event:poll-marked-as-draft`
    * `bachelornation:apollo:event:poll-marked-as-pending`
    * `bachelornation:apollo:event:poll-published`
    * `bachelornation:apollo:event:poll-scheduled`
    * `bachelornation:apollo:event:poll-unpublished`
    * `bachelornation:apollo:event:poll-updated`
    * `bachelornation:apollo:event:vote-casted`
    * `bachelornation:apollo:node:poll`
    * `bachelornation:apollo:request:get-poll-history-request`
    * `bachelornation:apollo:request:get-poll-history-response`
    * `bachelornation:apollo:request:get-poll-request`
    * `bachelornation:apollo:request:get-poll-response`
    * `bachelornation:apollo:request:search-polls-request`
    * `bachelornation:apollo:request:search-polls-response`
  * __bachelornation:boost__
    * `bachelornation:boost:command:create-sponsor`
    * `bachelornation:boost:command:delete-sponsor`
    * `bachelornation:boost:command:expire-sponsor`
    * `bachelornation:boost:command:mark-sponsor-as-draft`
    * `bachelornation:boost:command:mark-sponsor-as-pending`
    * `bachelornation:boost:command:publish-sponsor`
    * `bachelornation:boost:command:rename-sponsor`
    * `bachelornation:boost:command:unpublish-sponsor`
    * `bachelornation:boost:command:update-sponsor`
    * `bachelornation:boost:event:sponsor-created`
    * `bachelornation:boost:event:sponsor-deleted`
    * `bachelornation:boost:event:sponsor-expired`
    * `bachelornation:boost:event:sponsor-marked-as-draft`
    * `bachelornation:boost:event:sponsor-marked-as-pending`
    * `bachelornation:boost:event:sponsor-published`
    * `bachelornation:boost:event:sponsor-renamed`
    * `bachelornation:boost:event:sponsor-scheduled`
    * `bachelornation:boost:event:sponsor-unpublished`
    * `bachelornation:boost:event:sponsor-updated`
    * `bachelornation:boost:node:sponsor`
    * `bachelornation:boost:request:get-sponsor-history-request`
    * `bachelornation:boost:request:get-sponsor-history-response`
    * `bachelornation:boost:request:get-sponsor-request`
    * `bachelornation:boost:request:get-sponsor-response`
    * `bachelornation:boost:request:search-sponsors-request`
    * `bachelornation:boost:request:search-sponsors-response`
  * __bachelornation:canvas__
    * `bachelornation:canvas:block:article-block`
    * `bachelornation:canvas:block:audio-block`
    * `bachelornation:canvas:block:code-block`
    * `bachelornation:canvas:block:document-block`
    * `bachelornation:canvas:block:facebook-post-block`
    * `bachelornation:canvas:block:facebook-video-block`
    * `bachelornation:canvas:block:gallery-block`
    * `bachelornation:canvas:block:google-map-block`
    * `bachelornation:canvas:block:heading-block`
    * `bachelornation:canvas:block:iframe-block`
    * `bachelornation:canvas:block:image-block`
    * `bachelornation:canvas:block:imgur-post-block`
    * `bachelornation:canvas:block:instagram-media-block`
    * `bachelornation:canvas:block:page-break-block`
    * `bachelornation:canvas:block:pinterest-board-block`
    * `bachelornation:canvas:block:pinterest-pin-block`
    * `bachelornation:canvas:block:pinterest-profile-block`
    * `bachelornation:canvas:block:poll-block`
    * `bachelornation:canvas:block:poll-grid-block`
    * `bachelornation:canvas:block:quote-block`
    * `bachelornation:canvas:block:soundcloud-audio-block`
    * `bachelornation:canvas:block:text-block`
    * `bachelornation:canvas:block:twitter-collection-timeline-block`
    * `bachelornation:canvas:block:twitter-follow-button-block`
    * `bachelornation:canvas:block:twitter-hashtag-button-block`
    * `bachelornation:canvas:block:twitter-likes-timeline-block`
    * `bachelornation:canvas:block:twitter-list-timeline-block`
    * `bachelornation:canvas:block:twitter-mention-button-block`
    * `bachelornation:canvas:block:twitter-moment-block`
    * `bachelornation:canvas:block:twitter-search-timeline-block`
    * `bachelornation:canvas:block:twitter-tweet-block`
    * `bachelornation:canvas:block:twitter-user-timeline-block`
    * `bachelornation:canvas:block:twitter-video-block`
    * `bachelornation:canvas:block:vevo-video-block`
    * `bachelornation:canvas:block:video-block`
    * `bachelornation:canvas:block:vimeo-video-block`
    * `bachelornation:canvas:block:youtube-playlist-block`
    * `bachelornation:canvas:block:youtube-video-block`
    * `bachelornation:canvas:command:create-page`
    * `bachelornation:canvas:command:delete-page`
    * `bachelornation:canvas:command:expire-page`
    * `bachelornation:canvas:command:mark-page-as-draft`
    * `bachelornation:canvas:command:mark-page-as-pending`
    * `bachelornation:canvas:command:publish-page`
    * `bachelornation:canvas:command:rename-page`
    * `bachelornation:canvas:command:unpublish-page`
    * `bachelornation:canvas:command:update-page`
    * `bachelornation:canvas:event:page-created`
    * `bachelornation:canvas:event:page-deleted`
    * `bachelornation:canvas:event:page-expired`
    * `bachelornation:canvas:event:page-marked-as-draft`
    * `bachelornation:canvas:event:page-marked-as-pending`
    * `bachelornation:canvas:event:page-published`
    * `bachelornation:canvas:event:page-renamed`
    * `bachelornation:canvas:event:page-scheduled`
    * `bachelornation:canvas:event:page-unpublished`
    * `bachelornation:canvas:event:page-updated`
    * `bachelornation:canvas:node:page`
    * `bachelornation:canvas:request:get-page-history-request`
    * `bachelornation:canvas:request:get-page-history-response`
    * `bachelornation:canvas:request:get-page-request`
    * `bachelornation:canvas:request:get-page-response`
    * `bachelornation:canvas:request:search-pages-request`
    * `bachelornation:canvas:request:search-pages-response`
  * __bachelornation:curator__
    * `bachelornation:curator:command:create-gallery`
    * `bachelornation:curator:command:create-promotion`
    * `bachelornation:curator:command:create-teaser`
    * `bachelornation:curator:command:create-timeline`
    * `bachelornation:curator:command:create-widget`
    * `bachelornation:curator:command:delete-gallery`
    * `bachelornation:curator:command:delete-promotion`
    * `bachelornation:curator:command:delete-teaser`
    * `bachelornation:curator:command:delete-timeline`
    * `bachelornation:curator:command:delete-widget`
    * `bachelornation:curator:command:expire-gallery`
    * `bachelornation:curator:command:expire-promotion`
    * `bachelornation:curator:command:expire-teaser`
    * `bachelornation:curator:command:expire-timeline`
    * `bachelornation:curator:command:mark-gallery-as-draft`
    * `bachelornation:curator:command:mark-gallery-as-pending`
    * `bachelornation:curator:command:mark-promotion-as-draft`
    * `bachelornation:curator:command:mark-promotion-as-pending`
    * `bachelornation:curator:command:mark-teaser-as-draft`
    * `bachelornation:curator:command:mark-teaser-as-pending`
    * `bachelornation:curator:command:mark-timeline-as-draft`
    * `bachelornation:curator:command:mark-timeline-as-pending`
    * `bachelornation:curator:command:publish-gallery`
    * `bachelornation:curator:command:publish-promotion`
    * `bachelornation:curator:command:publish-teaser`
    * `bachelornation:curator:command:publish-timeline`
    * `bachelornation:curator:command:rename-gallery`
    * `bachelornation:curator:command:rename-timeline`
    * `bachelornation:curator:command:unpublish-gallery`
    * `bachelornation:curator:command:unpublish-promotion`
    * `bachelornation:curator:command:unpublish-teaser`
    * `bachelornation:curator:command:unpublish-timeline`
    * `bachelornation:curator:command:update-gallery`
    * `bachelornation:curator:command:update-promotion`
    * `bachelornation:curator:command:update-teaser`
    * `bachelornation:curator:command:update-timeline`
    * `bachelornation:curator:command:update-widget`
    * `bachelornation:curator:event:gallery-created`
    * `bachelornation:curator:event:gallery-deleted`
    * `bachelornation:curator:event:gallery-expired`
    * `bachelornation:curator:event:gallery-marked-as-draft`
    * `bachelornation:curator:event:gallery-marked-as-pending`
    * `bachelornation:curator:event:gallery-published`
    * `bachelornation:curator:event:gallery-renamed`
    * `bachelornation:curator:event:gallery-scheduled`
    * `bachelornation:curator:event:gallery-unpublished`
    * `bachelornation:curator:event:gallery-updated`
    * `bachelornation:curator:event:promotion-created`
    * `bachelornation:curator:event:promotion-deleted`
    * `bachelornation:curator:event:promotion-expired`
    * `bachelornation:curator:event:promotion-marked-as-draft`
    * `bachelornation:curator:event:promotion-marked-as-pending`
    * `bachelornation:curator:event:promotion-published`
    * `bachelornation:curator:event:promotion-scheduled`
    * `bachelornation:curator:event:promotion-unpublished`
    * `bachelornation:curator:event:promotion-updated`
    * `bachelornation:curator:event:teaser-created`
    * `bachelornation:curator:event:teaser-deleted`
    * `bachelornation:curator:event:teaser-expired`
    * `bachelornation:curator:event:teaser-marked-as-draft`
    * `bachelornation:curator:event:teaser-marked-as-pending`
    * `bachelornation:curator:event:teaser-published`
    * `bachelornation:curator:event:teaser-scheduled`
    * `bachelornation:curator:event:teaser-unpublished`
    * `bachelornation:curator:event:teaser-updated`
    * `bachelornation:curator:event:timeline-created`
    * `bachelornation:curator:event:timeline-deleted`
    * `bachelornation:curator:event:timeline-expired`
    * `bachelornation:curator:event:timeline-marked-as-draft`
    * `bachelornation:curator:event:timeline-marked-as-pending`
    * `bachelornation:curator:event:timeline-published`
    * `bachelornation:curator:event:timeline-renamed`
    * `bachelornation:curator:event:timeline-scheduled`
    * `bachelornation:curator:event:timeline-unpublished`
    * `bachelornation:curator:event:timeline-updated`
    * `bachelornation:curator:event:widget-created`
    * `bachelornation:curator:event:widget-deleted`
    * `bachelornation:curator:event:widget-updated`
    * `bachelornation:curator:node:article-teaser`
    * `bachelornation:curator:node:blogroll-widget`
    * `bachelornation:curator:node:carousel-widget`
    * `bachelornation:curator:node:category-teaser`
    * `bachelornation:curator:node:channel-teaser`
    * `bachelornation:curator:node:gallery`
    * `bachelornation:curator:node:gallery-teaser`
    * `bachelornation:curator:node:link-teaser`
    * `bachelornation:curator:node:page-teaser`
    * `bachelornation:curator:node:person-teaser`
    * `bachelornation:curator:node:poll-teaser`
    * `bachelornation:curator:node:promotion`
    * `bachelornation:curator:node:timeline`
    * `bachelornation:curator:node:timeline-teaser`
    * `bachelornation:curator:node:video-teaser`
    * `bachelornation:curator:node:youtube-video-teaser`
    * `bachelornation:curator:request:get-gallery-history-request`
    * `bachelornation:curator:request:get-gallery-history-response`
    * `bachelornation:curator:request:get-gallery-request`
    * `bachelornation:curator:request:get-gallery-response`
    * `bachelornation:curator:request:get-promotion-history-request`
    * `bachelornation:curator:request:get-promotion-history-response`
    * `bachelornation:curator:request:get-promotion-request`
    * `bachelornation:curator:request:get-promotion-response`
    * `bachelornation:curator:request:get-teaser-history-request`
    * `bachelornation:curator:request:get-teaser-history-response`
    * `bachelornation:curator:request:get-teaser-request`
    * `bachelornation:curator:request:get-teaser-response`
    * `bachelornation:curator:request:get-timeline-history-request`
    * `bachelornation:curator:request:get-timeline-history-response`
    * `bachelornation:curator:request:get-timeline-request`
    * `bachelornation:curator:request:get-timeline-response`
    * `bachelornation:curator:request:get-widget-history-request`
    * `bachelornation:curator:request:get-widget-history-response`
    * `bachelornation:curator:request:get-widget-request`
    * `bachelornation:curator:request:get-widget-response`
    * `bachelornation:curator:request:search-galleries-request`
    * `bachelornation:curator:request:search-galleries-response`
    * `bachelornation:curator:request:search-promotions-request`
    * `bachelornation:curator:request:search-promotions-response`
    * `bachelornation:curator:request:search-teasers-request`
    * `bachelornation:curator:request:search-teasers-response`
    * `bachelornation:curator:request:search-timelines-request`
    * `bachelornation:curator:request:search-timelines-response`
    * `bachelornation:curator:request:search-widgets-request`
    * `bachelornation:curator:request:search-widgets-response`
  * __bachelornation:dam__
    * `bachelornation:dam:command:create-asset`
    * `bachelornation:dam:command:delete-asset`
    * `bachelornation:dam:command:expire-asset`
    * `bachelornation:dam:command:link-assets`
    * `bachelornation:dam:command:patch-assets`
    * `bachelornation:dam:command:reorder-gallery-assets`
    * `bachelornation:dam:command:unlink-assets`
    * `bachelornation:dam:command:update-asset`
    * `bachelornation:dam:event:asset-created`
    * `bachelornation:dam:event:asset-deleted`
    * `bachelornation:dam:event:asset-expired`
    * `bachelornation:dam:event:asset-linked`
    * `bachelornation:dam:event:asset-patched`
    * `bachelornation:dam:event:asset-unlinked`
    * `bachelornation:dam:event:asset-updated`
    * `bachelornation:dam:event:gallery-asset-reordered`
    * `bachelornation:dam:node:archive-asset`
    * `bachelornation:dam:node:audio-asset`
    * `bachelornation:dam:node:code-asset`
    * `bachelornation:dam:node:document-asset`
    * `bachelornation:dam:node:image-asset`
    * `bachelornation:dam:node:unknown-asset`
    * `bachelornation:dam:node:video-asset`
    * `bachelornation:dam:request:get-asset-history-request`
    * `bachelornation:dam:request:get-asset-history-response`
    * `bachelornation:dam:request:get-asset-request`
    * `bachelornation:dam:request:get-asset-response`
    * `bachelornation:dam:request:get-upload-urls-request`
    * `bachelornation:dam:request:get-upload-urls-response`
    * `bachelornation:dam:request:search-assets-request`
    * `bachelornation:dam:request:search-assets-response`
  * __bachelornation:iam__
    * `bachelornation:iam:command:create-app`
    * `bachelornation:iam:command:create-role`
    * `bachelornation:iam:command:create-user`
    * `bachelornation:iam:command:delete-app`
    * `bachelornation:iam:command:delete-role`
    * `bachelornation:iam:command:delete-user`
    * `bachelornation:iam:command:grant-roles-to-app`
    * `bachelornation:iam:command:grant-roles-to-user`
    * `bachelornation:iam:command:revoke-roles-from-app`
    * `bachelornation:iam:command:revoke-roles-from-user`
    * `bachelornation:iam:command:update-app`
    * `bachelornation:iam:command:update-role`
    * `bachelornation:iam:command:update-user`
    * `bachelornation:iam:event:app-created`
    * `bachelornation:iam:event:app-deleted`
    * `bachelornation:iam:event:app-roles-granted`
    * `bachelornation:iam:event:app-roles-revoked`
    * `bachelornation:iam:event:app-updated`
    * `bachelornation:iam:event:role-created`
    * `bachelornation:iam:event:role-deleted`
    * `bachelornation:iam:event:role-updated`
    * `bachelornation:iam:event:user-created`
    * `bachelornation:iam:event:user-deleted`
    * `bachelornation:iam:event:user-roles-granted`
    * `bachelornation:iam:event:user-roles-revoked`
    * `bachelornation:iam:event:user-updated`
    * `bachelornation:iam:node:alexa-app`
    * `bachelornation:iam:node:android-app`
    * `bachelornation:iam:node:apple-news-app`
    * `bachelornation:iam:node:browser-app`
    * `bachelornation:iam:node:email-app`
    * `bachelornation:iam:node:ios-app`
    * `bachelornation:iam:node:role`
    * `bachelornation:iam:node:slack-app`
    * `bachelornation:iam:node:sms-app`
    * `bachelornation:iam:node:user`
    * `bachelornation:iam:request:get-all-apps-request`
    * `bachelornation:iam:request:get-all-apps-response`
    * `bachelornation:iam:request:get-app-history-request`
    * `bachelornation:iam:request:get-app-history-response`
    * `bachelornation:iam:request:get-app-request`
    * `bachelornation:iam:request:get-app-response`
    * `bachelornation:iam:request:get-role-history-request`
    * `bachelornation:iam:request:get-role-history-response`
    * `bachelornation:iam:request:get-role-request`
    * `bachelornation:iam:request:get-role-response`
    * `bachelornation:iam:request:get-user-history-request`
    * `bachelornation:iam:request:get-user-history-response`
    * `bachelornation:iam:request:get-user-request`
    * `bachelornation:iam:request:get-user-response`
    * `bachelornation:iam:request:list-all-roles-request`
    * `bachelornation:iam:request:list-all-roles-response`
    * `bachelornation:iam:request:search-users-request`
    * `bachelornation:iam:request:search-users-response`
  * __bachelornation:news__
    * `bachelornation:news:command:create-article`
    * `bachelornation:news:command:delete-article`
    * `bachelornation:news:command:expire-article`
    * `bachelornation:news:command:lock-article`
    * `bachelornation:news:command:mark-article-as-draft`
    * `bachelornation:news:command:mark-article-as-pending`
    * `bachelornation:news:command:publish-article`
    * `bachelornation:news:command:rename-article`
    * `bachelornation:news:command:unlock-article`
    * `bachelornation:news:command:unpublish-article`
    * `bachelornation:news:command:update-article`
    * `bachelornation:news:event:article-created`
    * `bachelornation:news:event:article-deleted`
    * `bachelornation:news:event:article-expired`
    * `bachelornation:news:event:article-locked`
    * `bachelornation:news:event:article-marked-as-draft`
    * `bachelornation:news:event:article-marked-as-pending`
    * `bachelornation:news:event:article-published`
    * `bachelornation:news:event:article-renamed`
    * `bachelornation:news:event:article-scheduled`
    * `bachelornation:news:event:article-unpublished`
    * `bachelornation:news:event:article-unlocked`
    * `bachelornation:news:event:article-updated`
    * `bachelornation:news:node:article`
    * `bachelornation:news:request:get-article-history-request`
    * `bachelornation:news:request:get-article-history-response`
    * `bachelornation:news:request:get-article-request`
    * `bachelornation:news:request:get-article-response`
    * `bachelornation:news:request:search-articles-request`
    * `bachelornation:news:request:search-articles-response`
  * __bachelornation:notify__
    * `bachelornation:notify:command:create-notification`
    * `bachelornation:notify:command:delete-notification`
    * `bachelornation:notify:command:update-notification`
    * `bachelornation:notify:event:notification-created`
    * `bachelornation:notify:event:notification-deleted`
    * `bachelornation:notify:event:notification-failed`
    * `bachelornation:notify:event:notification-sent`
    * `bachelornation:notify:event:notification-updated`
    * `bachelornation:notify:node:alexa-notification`
    * `bachelornation:notify:node:android-notification`
    * `bachelornation:notify:node:apple-news-notification`
    * `bachelornation:notify:node:browser-notification`
    * `bachelornation:notify:node:email-notification`
    * `bachelornation:notify:node:ios-notification`
    * `bachelornation:notify:node:slack-notification`
    * `bachelornation:notify:node:sms-notification`
    * `bachelornation:notify:request:get-notification-history-request`
    * `bachelornation:notify:request:get-notification-history-response`
    * `bachelornation:notify:request:get-notification-request`
    * `bachelornation:notify:request:get-notification-response`
    * `bachelornation:notify:request:search-notifications-request`
    * `bachelornation:notify:request:search-notifications-response`
  * __bachelornation:ovp__
    * `bachelornation:ovp:command:create-video`
    * `bachelornation:ovp:command:delete-video`
    * `bachelornation:ovp:command:expire-video`
    * `bachelornation:ovp:command:mark-video-as-draft`
    * `bachelornation:ovp:command:mark-video-as-pending`
    * `bachelornation:ovp:command:publish-video`
    * `bachelornation:ovp:command:rename-video`
    * `bachelornation:ovp:command:unpublish-video`
    * `bachelornation:ovp:command:update-video`
    * `bachelornation:ovp:event:video-created`
    * `bachelornation:ovp:event:video-deleted`
    * `bachelornation:ovp:event:video-expired`
    * `bachelornation:ovp:event:video-marked-as-draft`
    * `bachelornation:ovp:event:video-marked-as-pending`
    * `bachelornation:ovp:event:video-published`
    * `bachelornation:ovp:event:video-renamed`
    * `bachelornation:ovp:event:video-scheduled`
    * `bachelornation:ovp:event:video-unpublished`
    * `bachelornation:ovp:event:video-updated`
    * `bachelornation:ovp:node:video`
    * `bachelornation:ovp:request:get-video-history-request`
    * `bachelornation:ovp:request:get-video-history-response`
    * `bachelornation:ovp:request:get-video-request`
    * `bachelornation:ovp:request:get-video-response`
    * `bachelornation:ovp:request:search-videos-request`
    * `bachelornation:ovp:request:search-videos-response`
  * __bachelornation:people__
    * `bachelornation:people:command:create-person`
    * `bachelornation:people:command:delete-person`
    * `bachelornation:people:command:rename-person`
    * `bachelornation:people:command:update-person`
    * `bachelornation:people:event:person-created`
    * `bachelornation:people:event:person-deleted`
    * `bachelornation:people:event:person-renamed`
    * `bachelornation:people:event:person-updated`
    * `bachelornation:people:node:person`
    * `bachelornation:people:request:get-person-history-request`
    * `bachelornation:people:request:get-person-history-response`
    * `bachelornation:people:request:get-person-request`
    * `bachelornation:people:request:get-person-response`
    * `bachelornation:people:request:search-people-request`
    * `bachelornation:people:request:search-people-response`
  * __bachelornation:sys__
    * `bachelornation:sys:command:create-picklist`
    * `bachelornation:sys:command:create-redirect`
    * `bachelornation:sys:command:delete-picklist`
    * `bachelornation:sys:command:delete-redirect`
    * `bachelornation:sys:command:update-picklist`
    * `bachelornation:sys:command:update-redirect`
    * `bachelornation:sys:event:picklist-created`
    * `bachelornation:sys:event:picklist-deleted`
    * `bachelornation:sys:event:picklist-updated`
    * `bachelornation:sys:event:redirect-created`
    * `bachelornation:sys:event:redirect-deleted`
    * `bachelornation:sys:event:redirect-updated`
    * `bachelornation:sys:node:picklist`
    * `bachelornation:sys:node:redirect`
    * `bachelornation:sys:request:get-picklist-history-request`
    * `bachelornation:sys:request:get-picklist-history-response`
    * `bachelornation:sys:request:get-picklist-request`
    * `bachelornation:sys:request:get-picklist-response`
    * `bachelornation:sys:request:get-redirect-history-request`
    * `bachelornation:sys:request:get-redirect-history-response`
    * `bachelornation:sys:request:get-redirect-request`
    * `bachelornation:sys:request:get-redirect-response`
    * `bachelornation:sys:request:list-all-picklists-request`
    * `bachelornation:sys:request:list-all-picklists-response`
    * `bachelornation:sys:request:search-redirects-request`
    * `bachelornation:sys:request:search-redirects-response`
  * __bachelornation:taxonomy__
    * `bachelornation:taxonomy:command:create-category`
    * `bachelornation:taxonomy:command:create-channel`
    * `bachelornation:taxonomy:command:delete-category`
    * `bachelornation:taxonomy:command:delete-channel`
    * `bachelornation:taxonomy:command:rename-category`
    * `bachelornation:taxonomy:command:rename-channel`
    * `bachelornation:taxonomy:command:update-category`
    * `bachelornation:taxonomy:command:update-channel`
    * `bachelornation:taxonomy:event:category-created`
    * `bachelornation:taxonomy:event:category-deleted`
    * `bachelornation:taxonomy:event:category-renamed`
    * `bachelornation:taxonomy:event:category-updated`
    * `bachelornation:taxonomy:event:channel-created`
    * `bachelornation:taxonomy:event:channel-deleted`
    * `bachelornation:taxonomy:event:channel-renamed`
    * `bachelornation:taxonomy:event:channel-updated`
    * `bachelornation:taxonomy:node:category`
    * `bachelornation:taxonomy:node:channel`
    * `bachelornation:taxonomy:request:get-all-channels-request`
    * `bachelornation:taxonomy:request:get-all-channels-response`
    * `bachelornation:taxonomy:request:get-category-history-request`
    * `bachelornation:taxonomy:request:get-category-history-response`
    * `bachelornation:taxonomy:request:get-category-request`
    * `bachelornation:taxonomy:request:get-category-response`
    * `bachelornation:taxonomy:request:get-channel-history-request`
    * `bachelornation:taxonomy:request:get-channel-history-response`
    * `bachelornation:taxonomy:request:get-channel-request`
    * `bachelornation:taxonomy:request:get-channel-response`
    * `bachelornation:taxonomy:request:search-categories-request`
    * `bachelornation:taxonomy:request:search-categories-response`
    * `bachelornation:taxonomy:request:suggest-hashtags-request`
    * `bachelornation:taxonomy:request:suggest-hashtags-response`
