<?php

class Generals extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $armies_id;

    /**
     *
     * @var integer
     */
    public $battle_id;

    /**
     *
     * @var integer
     */
    public $theater_id;

    /**
     *
     * @var string
     */
    public $general_name;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'generals';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Generals[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Generals
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
