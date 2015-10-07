<?php

namespace Extend\Entity;

abstract class EX_OroActivityListBundle_ActivityList implements \Oro\Bundle\EntityExtendBundle\Entity\ExtendEntityInterface
{
    protected $user_10c9f691;

    /**
     * Checks if an entity of the given type can be associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return bool
     */
    public function supportActivityListTarget($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return true; }
        return false;
    }

    public function setUser10c9f691($value)
    {
        if ((!$value instanceof \Traversable && !is_array($value) && !$value instanceof \ArrayAccess) ||
            !$this->user_10c9f691 instanceof \Doctrine\Common\Collections\Collection) {
            $this->user_10c9f691 = $value;
            return $this;
        }
        foreach ($this->user_10c9f691 as $item) {
            $this->removeUser10c9f691($item);
        }
        foreach ($value as $item) {
            $this->addUser10c9f691($item);
        }
        return $this;
    }

    public function removeUser10c9f691($value)
    {
        if ($this->user_10c9f691 && $this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->removeElement($value);
        }
    }

    /**
     * Removes the association of the given entity and this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function removeActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if ($this->user_10c9f691->contains($target)) { $this->user_10c9f691->removeElement($target); }
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
    public function hasActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691->contains($target); }
        return false;
    }

    public function getUser10c9f691()
    {
        return $this->user_10c9f691;
    }

    /**
     * Gets entities of the given type associated with this entity
     *
     * @param string $targetClass The class name of the target entity
     * @return object[]
     */
    public function getActivityListTargets($targetClass)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getRealClass($targetClass);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') { return $this->user_10c9f691; }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    /**
     * Returns array with all associated entities
     *
     * @return array
     */
    public function getActivityListTargetEntities()
    {
        $associationEntities = [];
        $entities = $this->user_10c9f691->toArray();
        if (!empty($entities)) {
            $associationEntities = array_merge($associationEntities, $entities);
        }
        return $associationEntities;
    }

    public function addUser10c9f691($value)
    {
        if (!$this->user_10c9f691->contains($value)) {
            $this->user_10c9f691->add($value);
        }
    }

    /**
     * Associates the given entity with this entity
     *
     * @param object $target Any configurable entity that can be associated with this type of entity
     * @return object This object
     */
    public function addActivityListTarget($target)
    {
        $className = \Doctrine\Common\Util\ClassUtils::getClass($target);
        if ($className === 'Oro\Bundle\UserBundle\Entity\User') {
            if (!$this->user_10c9f691->contains($target)) { $this->user_10c9f691->add($target); }
            return $this;
        }
        throw new \RuntimeException(sprintf('The association with "%s" entity was not configured.', $className));
    }

    public function __construct()
    {
        $this->user_10c9f691 = new \Doctrine\Common\Collections\ArrayCollection();
    }
}