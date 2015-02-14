<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $id
 * @property string $project_name
 * @property string $project_user
 * @property string $project_type
 * @property string $project_industry
 * @property string $project_business_name
 * @property string $project_details
 * @property string $project_intensity
 * @property string $start_date
 * @property string $end_date
 */
class Project extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('project_name, project_user, project_type, project_industry, project_business_name, project_details, project_intensity, start_date, end_date', 'required'),
			array('project_name, project_user, project_type, project_industry, project_business_name, project_details, project_intensity', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, project_name, project_user, project_type, project_industry, project_business_name, project_details, project_intensity, start_date, end_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'project_name' => 'Project Name',
			'project_user' => 'Project User',
			'project_type' => 'Project Type',
			'project_industry' => 'Project Industry',
			'project_business_name' => 'Project Business Name',
			'project_details' => 'Project Details',
			'project_intensity' => 'Project Intensity',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('project_name',$this->project_name,true);
		$criteria->compare('project_user',$this->project_user,true);
		$criteria->compare('project_type',$this->project_type,true);
		$criteria->compare('project_industry',$this->project_industry,true);
		$criteria->compare('project_business_name',$this->project_business_name,true);
		$criteria->compare('project_details',$this->project_details,true);
		$criteria->compare('project_intensity',$this->project_intensity,true);
		$criteria->compare('start_date',$this->start_date,true);
		$criteria->compare('end_date',$this->end_date,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
