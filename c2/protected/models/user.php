<?php
// /models/User.php
class User extends CActiveRecord
{

    public function tableName()
    {
        return "user";
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function behaviors()
    {
        return array(
            'RestModelBehavior' => array(
                'class' => 'WRestModelBehavior',
            )
        );
    }

    public function rules(){
        return array(
            array('username, password', 'required'),
            array('email', 'safe'),
        );
    }

}