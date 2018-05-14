<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiket".
 *
 * @property int $id_tiket
 * @property int $id_event
 *
 * @property Event $event
 */
class Tiket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tiket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_event'], 'required'],
            [['id_event'], 'integer'],
            [['id_event'], 'unique'],
            [['id_event'], 'exist', 'skipOnError' => true, 'targetClass' => Event::className(), 'targetAttribute' => ['id_event' => 'id_event']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_tiket' => 'Id Tiket',
            'id_event' => 'Id Event',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvent()
    {
        return $this->hasOne(Event::className(), ['id_event' => 'id_event']);
    }
}
