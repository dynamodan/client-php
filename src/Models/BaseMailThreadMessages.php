<?php
/*
 * Pipedrive
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace Pipedrive\Models;

use JsonSerializable;
use Pipedrive\Utils\DateTimeHelper;

/**
 * @todo Write general description for this model
 */
class BaseMailThreadMessages implements JsonSerializable
{
    /**
     * ID of the mail thread
     * @var integer|null $id public property
     */
    public $id;

    /**
     * The connection account ID
     * @maps account_id
     * @var string|null $accountId public property
     */
    public $accountId;

    /**
     * ID of the user whom mail message will be assigned to
     * @maps user_id
     * @var integer|null $userId public property
     */
    public $userId;

    /**
     * The subject
     * @var string|null $subject public property
     */
    public $subject;

    /**
     * A snippet
     * @var string|null $snippet public property
     */
    public $snippet;

    /**
     * Whether the mail thread is read
     * @maps read_flag
     * @var int|null $readFlag public property
     */
    public $readFlag;

    /**
     * Mail tracking status
     * @maps mail_tracking_status
     * @var string|null $mailTrackingStatus public property
     */
    public $mailTrackingStatus;

    /**
     * Whether the mail thread has an attachment
     * @maps has_attachments_flag
     * @var int|null $hasAttachmentsFlag public property
     */
    public $hasAttachmentsFlag;

    /**
     * Whether the mail thread has inline attachments
     * @maps has_inline_attachments_flag
     * @var int|null $hasInlineAttachmentsFlag public property
     */
    public $hasInlineAttachmentsFlag;

    /**
     * Whether the mail thread has real attachments (which are not inline)
     * @maps has_real_attachments_flag
     * @var int|null $hasRealAttachmentsFlag public property
     */
    public $hasRealAttachmentsFlag;

    /**
     * Whether the mail thread is deleted
     * @maps deleted_flag
     * @var int|null $deletedFlag public property
     */
    public $deletedFlag;

    /**
     * Whether the mail thread is synced
     * @maps synced_flag
     * @var int|null $syncedFlag public property
     */
    public $syncedFlag;

    /**
     * Whether one of the parties of the mail thread is Bcc
     * @maps smart_bcc_flag
     * @var int|null $smartBccFlag public property
     */
    public $smartBccFlag;

    /**
     * Whether the link tracking of the mail thread is enabled
     * @maps mail_link_tracking_enabled_flag
     * @var int|null $mailLinkTrackingEnabledFlag public property
     */
    public $mailLinkTrackingEnabledFlag;

    /**
     * We strongly advise you to avoid the use of this property. We will soon deprecate this property
     * @maps write_flag
     * @var bool|null $writeFlag public property
     */
    public $writeFlag;

    /**
     * Senders of the mail thread
     * @var \Pipedrive\Models\MailThreadParticipant[]|null $from public property
     */
    public $from;

    /**
     * Recipients of the mail thread
     * @var \Pipedrive\Models\MailThreadParticipant[]|null $to public property
     */
    public $to;

    /**
     * Participants of the Cc
     * @var \Pipedrive\Models\MailThreadParticipant[]|null $cc public property
     */
    public $cc;

    /**
     * Participants of the Bcc
     * @var \Pipedrive\Models\MailThreadParticipant[]|null $bcc public property
     */
    public $bcc;

    /**
     * A link to the mail thread message
     * @maps body_url
     * @var string|null $bodyUrl public property
     */
    public $bodyUrl;

    /**
     * ID of the mail thread
     * @maps mail_thread_id
     * @var integer|null $mailThreadId public property
     */
    public $mailThreadId;

    /**
     * If the mail message has a draft status then the value is the mail message object as JSON formatted
     * string, otherwise null.
     * @var string|null $draft public property
     */
    public $draft;

    /**
     * Whether the mail thread message has a body
     * @maps has_body_flag
     * @var int|null $hasBodyFlag public property
     */
    public $hasBodyFlag;

    /**
     * Whether the mail thread message is sent
     * @maps sent_flag
     * @var int|null $sentFlag public property
     */
    public $sentFlag;

    /**
     * Whether the mail thread message is sent from Pipedrive
     * @maps sent_from_pipedrive_flag
     * @var int|null $sentFromPipedriveFlag public property
     */
    public $sentFromPipedriveFlag;

    /**
     * The time when the mail message was received or created
     * @maps message_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $messageTime public property
     */
    public $messageTime;

    /**
     * The time when the mail message was inserted to database
     * @maps add_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $addTime public property
     */
    public $addTime;

    /**
     * The time when the mail message was updated in database received
     * @maps update_time
     * @factory \Pipedrive\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $updateTime public property
     */
    public $updateTime;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer   $id                          Initialization value for $this->id
     * @param string    $accountId                   Initialization value for $this->accountId
     * @param integer   $userId                      Initialization value for $this->userId
     * @param string    $subject                     Initialization value for $this->subject
     * @param string    $snippet                     Initialization value for $this->snippet
     * @param int       $readFlag                    Initialization value for $this->readFlag
     * @param string    $mailTrackingStatus          Initialization value for $this->mailTrackingStatus
     * @param int       $hasAttachmentsFlag          Initialization value for $this->hasAttachmentsFlag
     * @param int       $hasInlineAttachmentsFlag    Initialization value for $this->hasInlineAttachmentsFlag
     * @param int       $hasRealAttachmentsFlag      Initialization value for $this->hasRealAttachmentsFlag
     * @param int       $deletedFlag                 Initialization value for $this->deletedFlag
     * @param int       $syncedFlag                  Initialization value for $this->syncedFlag
     * @param int       $smartBccFlag                Initialization value for $this->smartBccFlag
     * @param int       $mailLinkTrackingEnabledFlag Initialization value for $this->mailLinkTrackingEnabledFlag
     * @param bool      $writeFlag                   Initialization value for $this->writeFlag
     * @param array     $from                        Initialization value for $this->from
     * @param array     $to                          Initialization value for $this->to
     * @param array     $cc                          Initialization value for $this->cc
     * @param array     $bcc                         Initialization value for $this->bcc
     * @param string    $bodyUrl                     Initialization value for $this->bodyUrl
     * @param integer   $mailThreadId                Initialization value for $this->mailThreadId
     * @param string    $draft                       Initialization value for $this->draft
     * @param int       $hasBodyFlag                 Initialization value for $this->hasBodyFlag
     * @param int       $sentFlag                    Initialization value for $this->sentFlag
     * @param int       $sentFromPipedriveFlag       Initialization value for $this->sentFromPipedriveFlag
     * @param \DateTime $messageTime                 Initialization value for $this->messageTime
     * @param \DateTime $addTime                     Initialization value for $this->addTime
     * @param \DateTime $updateTime                  Initialization value for $this->updateTime
     */
    public function __construct()
    {
        if (28 == func_num_args()) {
            $this->id                          = func_get_arg(0);
            $this->accountId                   = func_get_arg(1);
            $this->userId                      = func_get_arg(2);
            $this->subject                     = func_get_arg(3);
            $this->snippet                     = func_get_arg(4);
            $this->readFlag                    = func_get_arg(5);
            $this->mailTrackingStatus          = func_get_arg(6);
            $this->hasAttachmentsFlag          = func_get_arg(7);
            $this->hasInlineAttachmentsFlag    = func_get_arg(8);
            $this->hasRealAttachmentsFlag      = func_get_arg(9);
            $this->deletedFlag                 = func_get_arg(10);
            $this->syncedFlag                  = func_get_arg(11);
            $this->smartBccFlag                = func_get_arg(12);
            $this->mailLinkTrackingEnabledFlag = func_get_arg(13);
            $this->writeFlag                   = func_get_arg(14);
            $this->from                        = func_get_arg(15);
            $this->to                          = func_get_arg(16);
            $this->cc                          = func_get_arg(17);
            $this->bcc                         = func_get_arg(18);
            $this->bodyUrl                     = func_get_arg(19);
            $this->mailThreadId                = func_get_arg(20);
            $this->draft                       = func_get_arg(21);
            $this->hasBodyFlag                 = func_get_arg(22);
            $this->sentFlag                    = func_get_arg(23);
            $this->sentFromPipedriveFlag       = func_get_arg(24);
            $this->messageTime                 = func_get_arg(25);
            $this->addTime                     = func_get_arg(26);
            $this->updateTime                  = func_get_arg(27);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']                              = $this->id;
        $json['account_id']                      = $this->accountId;
        $json['user_id']                         = $this->userId;
        $json['subject']                         = $this->subject;
        $json['snippet']                         = $this->snippet;
        $json['read_flag']                       = $this->readFlag;
        $json['mail_tracking_status']            = $this->mailTrackingStatus;
        $json['has_attachments_flag']            = $this->hasAttachmentsFlag;
        $json['has_inline_attachments_flag']     = $this->hasInlineAttachmentsFlag;
        $json['has_real_attachments_flag']       = $this->hasRealAttachmentsFlag;
        $json['deleted_flag']                    = $this->deletedFlag;
        $json['synced_flag']                     = $this->syncedFlag;
        $json['smart_bcc_flag']                  = $this->smartBccFlag;
        $json['mail_link_tracking_enabled_flag'] = $this->mailLinkTrackingEnabledFlag;
        $json['write_flag']                      = $this->writeFlag;
        $json['from']                            = $this->from;
        $json['to']                              = $this->to;
        $json['cc']                              = $this->cc;
        $json['bcc']                             = $this->bcc;
        $json['body_url']                        = $this->bodyUrl;
        $json['mail_thread_id']                  = $this->mailThreadId;
        $json['draft']                           = $this->draft;
        $json['has_body_flag']                   = $this->hasBodyFlag;
        $json['sent_flag']                       = $this->sentFlag;
        $json['sent_from_pipedrive_flag']        = $this->sentFromPipedriveFlag;
        $json['message_time']                    = isset($this->messageTime) ?
            DateTimeHelper::toRfc3339DateTime($this->messageTime) : null;
        $json['add_time']                        = isset($this->addTime) ?
            DateTimeHelper::toRfc3339DateTime($this->addTime) : null;
        $json['update_time']                     = isset($this->updateTime) ?
            DateTimeHelper::toRfc3339DateTime($this->updateTime) : null;

        return $json;
    }
}