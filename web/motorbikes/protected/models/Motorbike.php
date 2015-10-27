<?php

/**
 * This is the model class for table "tbl_motorbike".
 *
 * The followings are the available columns in table 'tbl_motorbike':
 * @property integer $id
 * @property string $created
 * @property string $make
 * @property string $model
 * @property integer $cc
 * @property string $color
 * @property integer $weight
 * @property integer $price
 * @property string $image
 * @property string $comment
 */
class Motorbike extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	
	public $oldImage;

	public function tableName()
	{
		return 'tbl_motorbike';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('make, model, cc, color, weight, price, image, comment', 'required'),
			array('cc, weight, price', 'numerical', 'integerOnly'=>true),
			array('make, model, color, comment', 'length', 'max'=>128),
			array('image', 'file','allowEmpty'=>true, 'types'=>'jpg, gif, png', 'safe' => true, 'maxSize' => (1024 * 300),),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, created, make, model, cc, color, weight, price, comment', 'safe', 'on'=>'search'),
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
			'created' => 'Created',
			'make' => 'Make',
			'model' => 'Model',
			'cc' => 'Cc',
			'color' => 'Color',
			'weight' => 'Weight',
			'price' => 'Price',
			'image' => 'Image',
			'comment' => 'Comment',
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
		$criteria->compare('created',$this->created,true);
		$criteria->compare('make',$this->make,true);
		$criteria->compare('model',$this->model,true);
		$criteria->compare('cc',$this->cc);
		$criteria->compare('color',$this->color,true);
		$criteria->compare('weight',$this->weight);
		$criteria->compare('price',$this->price);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Motorbike the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    // public function afterFind() {
    //     parent::afterFind();
    //     $this->oldImage = $this->image;
    // }

    // public function afterDelete() {
    //     $this->deleteImagem();
    //     return parent::afterDelete();
    // }

    // public function beforeSave() {
    //     $uploadPath = Yii::app()->params['uploadPath'];
    //     Yii::log($uploadPath, 'error');
    //     if(is_object($this->image)) {
    //         $this->image->setPath($uploadPath);
    //         $this->image->saveAs();
    //         if(!empty($this->oldImage)) {
    //             $delete = Yii::app()->params['uploadPath'].'/'.$this->oldImage;
    //             if(file_exists($delete)) unlink($delete);
    //         }
    //     }
    //     if(empty($this->image) && !empty($this->oldImage)) $this->image = $this->oldImage;
    //     return parent::beforeSave();
    // }

    // public function deleteImagem() {
    //     $imagem = $this->image;
    //     return unlink(Yii::app()->params['uploadPath'].'/'.$imagem);
    // }

}
