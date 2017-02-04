<?php

class Theater extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $theater_id;

    /**
     *
     * @var string
     */
    public $theater_name;

    /**
     *
     * @var string
     */
    public $theater_region;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'theater';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Theater[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Theater
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
