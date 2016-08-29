<?php

/**
 * https://www.sitepoint.com/managing-class-dependencies-1/
 */
class Serializer implements Serializable
{
    public function serialize($data)
    {

        return $data;
    }

    public function unserialize($serialized)
    {
        echo "unserialize ";
    }
}
