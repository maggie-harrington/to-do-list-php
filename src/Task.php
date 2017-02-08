<?php
    class Task
    {
        private $description;

        function __contruct($description)
        {
            $this->description = $description;
        }

        function setDescription($new_description)
        {
            $this->description = (string) $new_description;
        }

        function getDescription()
        {
            return $this->description;
        }
    }
?>
