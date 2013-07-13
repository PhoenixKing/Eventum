<?php

/**
 * This is the model class for table "events".
 *
 * The followings are the available columns in table 'events':
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $poster
 * @property integer $type_id
 * @property string $place
 * @property string $datetime_create
 * @property string $datetime_event
 */
class Events extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Events the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'events';
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
			'title' => 'Title',
			'description' => 'Description',
			'poster' => 'Poster',
			'type_id' => 'Type',
			'place' => 'Place',
			'datetime_create' => 'Datetime Create',
			'datetime_event' => 'Datetime Event',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('poster',$this->poster,true);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('place',$this->place,true);
		$criteria->compare('datetime_create',$this->datetime_create,true);
		$criteria->compare('datetime_event',$this->datetime_event,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}