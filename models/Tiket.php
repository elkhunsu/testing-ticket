<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiket".
 *
 * @property integer $id_tiket
 * @property integer $id_event
 * @property string $jenis_tiket
 * @property integer $harga_tiket
 *
 * @property Event $idEvent
 */
class Tiket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_event', 'jenis_tiket', 'harga_tiket'], 'required'],
            [['id_event', 'harga_tiket'], 'integer'],
            [['jenis_tiket'], 'string', 'max' => 255],
            [['id_event'], 'unique'],
            [['id_event'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['id_event' => 'id_event']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tiket' => 'Id Tiket',
            'id_event' => 'Id Event',
            'jenis_tiket' => 'Jenis Tiket',
            'harga_tiket' => 'Harga Tiket',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdEvent()
    {
        return $this->hasOne(Event::className(), ['id_event' => 'id_event']);
    }
}
