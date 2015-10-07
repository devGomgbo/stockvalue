<?php

namespace Extend\Entity;

abstract class EX_OroEmailBundle_Email implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface, \Oro\Bundle\ActivityBundle\Model\ActivityInterface
{
    protected $user_d41b1c4b;

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
        return false;
    }

    public function setUserD41b1c4b($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_d41b1c4b instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_d41b1c4b = $value;
            return $this;
        }
        foreach ($this->user_d41b1c4b as $item) {
            $this->removeUserD41b1c4b($item);
        }
        foreach ($value as $item) {
            $this->addUserD41b1c4b($item);
        }
        return $this;
    }

    public function removeUserD41b1c4b($value)
    {
        if ($this->user_d41b1c4b && $this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->removeElement($value);
        }
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->removeElement($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Checks is the given entity is associated with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return bool
     */
    public function hasActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b->contains($target); }
        return false;
    }

    public function getUserD41b1c4b()
    {
        return $this->user_d41b1c4b;
    }

    /**
     * Gets entities of the given type associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityTargets($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_d41b1c4b; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getActivityTargetEntities()
    {
        $associationEntities = [];
        $entities = $this->user_d41b1c4b->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function addUserD41b1c4b($value)
    {
        if (!$this->user_d41b1c4b->contains($value)) {
            $this->user_d41b1c4b->add($value);
        }
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_d41b1c4b->contains($target)) { $this->user_d41b1c4b->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function __construct()
    {
        $this->user_d41b1c4b = new \Doctrine\Common\Collections\ArrayCollection();
    }
}