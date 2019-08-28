<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "builti_book".
 *
 * @property int $id
 * @property int $builti_no
 * @property string $truck_no
 * @property string $date
 * @property string $aaz_batkhela_ta
 * @property string $arsaal_kunninda
 * @property string $wasool_kunninda
 * @property string $nagg_count
 * @property string $maal_tafseel
 * @property string $aamda_buitli_no
 * @property int $batkhela_fair
 * @property int $onloading_mazdori
 * @property int $loading_mazdori
 * @property int $bazar_local_kharcha
 * @property int $panjab_aamad_fair
 * @property int $adda_builti_charges
 * @property string $advance
 * @property int $remaining_fair
 */
class BuiltiBook extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'builti_book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['builti_no', 'truck_no', 'date', 'aaz_batkhela_ta', 'arsaal_kunninda', 'wasool_kunninda', 'nagg_count', 'maal_tafseel', 'aamda_buitli_no', 'batkhela_fair', 'onloading_mazdori', 'loading_mazdori', 'bazar_local_kharcha', 'panjab_aamad_fair', 'adda_builti_charges', 'advance', 'remaining_fair'], 'required'],
            [['builti_no', 'batkhela_fair', 'onloading_mazdori', 'loading_mazdori', 'bazar_local_kharcha', 'panjab_aamad_fair', 'adda_builti_charges', 'remaining_fair'], 'integer'],
            [['date','mazdori','weight'], 'safe'],
            [['maal_tafseel'], 'string'],
            [['truck_no', 'nagg_count', 'aamda_buitli_no'], 'string', 'max' => 255],
            [['aaz_batkhela_ta', 'arsaal_kunninda', 'wasool_kunninda', 'advance'], 'string', 'max' => 555],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'builti_no' => Yii::t('app', 'بلٹی  نمبر  '),
            'truck_no' => Yii::t('app', 'ٹرک   نمبر'),
            'date' => Yii::t('app', 'تاریخ'),
            'aaz_batkhela_ta' => Yii::t('app', 'آز بٹ خيلا تا'),
            'arsaal_kunninda' => Yii::t('app', 'ارسال   کنندھ  '),
            'wasool_kunninda' => Yii::t('app', 'وصول   کنندھ  '),
            'nagg_count' => Yii::t('app', ' تعداد نگ '),
            'maal_tafseel' => Yii::t('app', 'تفصيل مال'),
            'aamda_buitli_no' => Yii::t('app', 'آمدھ بلٹی نمبر '),
            'batkhela_fair' => Yii::t('app', ' بٹ خيلا سی کرایا   '),
            'onloading_mazdori' => Yii::t('app', ' ان لوڈنگ مزدوری '),
            'loading_mazdori' => Yii::t('app', ' لوڈنگ مزدوری '),
            'bazar_local_kharcha' => Yii::t('app', ' بازار سی لوکل خرچا '),
            'panjab_aamad_fair' => Yii::t('app', ' پنجاب سی آمدھ کرايا  '),
            'adda_builti_charges' => Yii::t('app', ' آڈھ بلٹئ چارجز '),
            'advance' => Yii::t('app', ' پیشگی  '),
            'remaining_fair' => Yii::t('app', ' بقایا کرايا  '),
            'mazdori' => Yii::t('app', ' مزدوری '),
            'weight' => Yii::t('app', 'وزن'),
        ];
    }
}
