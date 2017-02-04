<?php

class Battles extends \Phalcon\Mvc\Model
{

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
    public $battle_name;

    /**
     *
     * @var string
     */
    public $battle_location;

    /**
     *
     * @var integer
     */
    public $general_id;

    /**
     *
     * @var string
     */
    public $general_name;

    /**
     *
     * @var integer
     */
    public $army_id;

    /**
     *
     * @var string
     */
    public $army_name;

    /**
     *
     * @var string
     */
    public $armourments;

    /**
     *
     * @var integer
     */
    public $casaulties;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'battles';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Battles[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Battles
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
