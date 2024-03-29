<?php

/**
 * This is the model class for table "Page".
 *
 * The followings are the available columns in table 'Page':
 * @property integer $id
 * @property string $shirtDesc
 * @property string $fullDesc
 * @property string $name
 */
class PageModel extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Page';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('shirtDesc, fullDesc, name', 'required'),
			array('shirtDesc', 'length', 'max'=>150),
			array('name', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, shirtDesc, fullDesc, name', 'safe', 'on'=>'search'),
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
			'shirtDesc' => 'Shirt Desc',
			'fullDesc' => 'Full Desc',
			'name' => 'Name',
		);
	}
        
        /**
         * Get shirt description about custom page
         * @param type $route
         * @return boolean
         */
        public static function getShirtDesc($route){
            $model = PageModel::model()->findByAttributes(array('name' => $route));
            if(!empty($model)){
                return $model->shirtDesc;
            }
            else {
                return false;
            }
        }
        
        /**
         * Get full description about custom page
         * @param type $route
         * @return boolean
         */
        public static function getFullDesc($route){
            $model = PageModel::model()->findByAttributes(array('name' => $route));
            if(!empty($model)){
                return $model->fullDesc;
            }
            else {
                return false;
            }
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
		$criteria->compare('shirtDesc',$this->shirtDesc,true);
		$criteria->compare('fullDesc',$this->fullDesc,true);
		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return PageModel the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
