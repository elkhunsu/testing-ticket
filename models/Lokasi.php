<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lokasi".
 *
 * @property integer $id_lokasi
 * @property string $nama_lokasi
 * @property integer $description
 * @property string $foto_lokasi
 *
 * @property Event[] $events
 */
class Lokasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lokasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_lokasi', 'description', 'foto_lokasi'], 'required'],
            [['nama_lokasi', 'foto_lokasi', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama_lokasi' => 'Nama Lokasi',
            'description' => 'Description',
            'foto_lokasi' => 'Foto Lokasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEvents()
    {
        return $this->hasMany(Event::className(), ['id_lokasi' => 'id_lokasi']);
    }
}
