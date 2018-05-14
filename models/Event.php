<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "event".
 *
 * @property int $id_event
 * @property int $id_lokasi
 * @property string $nama_event
 * @property string $nama_lokasi
 * @property string $description
 *
 * @property Lokasi $lokasi
 * @property Tiket $tiket
 */
class Event extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'event';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_lokasi', 'nama_event', 'nama_lokasi', 'description'], 'required'],
            [['id_lokasi'], 'integer'],
            [['nama_event', 'nama_lokasi', 'description'], 'string', 'max' => 255],
            [['id_lokasi'], 'exist', 'skipOnError' => true, 'targetClass' => Lokasi::className(), 'targetAttribute' => ['id_lokasi' => 'id_lokasi']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_event' => 'Id Event',
            'id_lokasi' => 'Id Lokasi',
            'nama_event' => 'Nama Event',
            'nama_lokasi' => 'Nama Lokasi',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLokasi()
    {
        return $this->hasOne(Lokasi::className(), ['id_lokasi' => 'id_lokasi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTiket()
    {
        return $this->hasOne(Tiket::className(), ['id_event' => 'id_event']);
    }
}
