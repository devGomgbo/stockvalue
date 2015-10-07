<?php

namespace Extend\Entity;

abstract class EX_OroCommentBundle_Comment extends \Oro\Bundle\CommentBundle\Entity\BaseComment implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $note_c0db526d;
    protected $email_bb212599;
    protected $calendar_event_78fb52b8;
    protected $attachment;

    /**
     * Checks if this entity can be associated with the given target entity type
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { return true; }
        if ($className === 'Oro\Bundle\CalendarBundle\Entity\CalendarEvent') { return true; }
        if ($className === 'Oro\Bundle\NoteBundle\Entity\Note') { return true; }
        return false;
    }

    /**
     * Sets the entity this entity is associated with
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function setTarget($target)
    {
        if (null === $target) { $this->resetTargets(); return $this; }
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        // This entity can be associated with only one another entity
        if ($className === 'Oro\Bundle\EmailBundle\Entity\Email') { $this->resetTargets(); $this->email_bb212599 = $target; return $this; }
        if ($className === 'Oro\Bundle\CalendarBundle\Entity\CalendarEvent') { $this->resetTargets(); $this->calendar_event_78fb52b8 = $target; return $this; }
        if ($className === 'Oro\Bundle\NoteBundle\Entity\Note') { $this->resetTargets(); $this->note_c0db526d = $target; return $this; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function setNoteC0db526d($value)
    {
        $this->note_c0db526d = $value; return $this;
    }

    public function setEmailBb212599($value)
    {
        $this->email_bb212599 = $value; return $this;
    }

    public function setCalendarEvent78fb52b8($value)
    {
        $this->calendar_event_78fb52b8 = $value; return $this;
    }

    public function setAttachment($value)
    {
        $this->attachment = $value; return $this;
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getTargetEntities()
    {
        $associationEntities = [];
        $entity = $this->email_bb212599;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->calendar_event_78fb52b8;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        $entity = $this->note_c0db526d;
        if ($entity) {
            $associationEntities[] = $entity;
        }
        return $associationEntities;
    }

    /**
     * Gets the entity this entity is associated with
     *
     * @return object|null Any configurable entity
     */
    public function getTarget()
    {
        if (null !== $this->email_bb212599) { return $this->email_bb212599; }
        if (null !== $this->calendar_event_78fb52b8) { return $this->calendar_event_78fb52b8; }
        if (null !== $this->note_c0db526d) { return $this->note_c0db526d; }
        return null;
    }

    public function getNoteC0db526d()
    {
        return $this->note_c0db526d;
    }

    public function getEmailBb212599()
    {
        return $this->email_bb212599;
    }

    public function getCalendarEvent78fb52b8()
    {
        return $this->calendar_event_78fb52b8;
    }

    public function getAttachment()
    {
        return $this->attachment;
    }

    public function __construct()
    {
    }

    private function resetTargets()
    {
        $this->email_bb212599 = null;
        $this->calendar_event_78fb52b8 = null;
        $this->note_c0db526d = null;
    }
}