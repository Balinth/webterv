<?php

class Todo
{
    private $name;
    private $tags;
    private $description;
    private $due;
    private $state;

    public function __construct($name, $tags, $description, $due, $state)
    {
        $this->name = $name;
        $this->tags = $tags;
        $this->due = $due;
        $this->state = $state;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setTags($tags): void
    {
        $this->tags = $tags;
    }

    public function getDesc()
    {
        return $this->description;
    }

    public function setDesc($desc): void
    {
        $this->description = $desc;
    }

    /**
     * @return mixed
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * @param mixed $due
     */
    public function setDue($due): void
    {
        $this->due = $due;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     */
    public function setState($state): void
    {
        $this->state = $state;
    }
}
?>