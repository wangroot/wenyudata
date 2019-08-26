<?php
namespace backend\models;

use Yii;

/**
 * This is the model class for table "video_ks".
 *
 * @property integer $id
 * @property integer $ranking
 * @property string $account_name
 * @property string $account_id
 * @property string $platform
 * @property string $gender
 * @property double $integrated_marketing_gain
 * @property double $spread_index
 * @property double $interactive_index
 * @property double $activity_index
 * @property double $growth_index
 * @property double $health_index
 * @property double $business_fitness_index
 * @property string $wechat
 * @property string $weibo
 * @property string $mobile
 * @property string $telephone
 * @property string $contact_status
 * @property string $remark
 * @property string $create_date
 * @property string $update_time
 */
class VideoKs extends \backend\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'video_ks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ranking', 'integrated_marketing_gain', 'spread_index', 'interactive_index', 'activity_index', 'growth_index', 'health_index', 'business_fitness_index'], 'number'],
            [['create_date', 'update_time'], 'safe'],
//            [['ranking'], 'string', 'max' => 5],
            [['account_name', 'account_id', 'platform', 'gender', 'wechat', 'weibo'], 'string', 'max' => 30],
            [['mobile'], 'string', 'max' => 11],
            [['telephone', 'contact_status'], 'string', 'max' => 12],
            [['remark'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ranking' => '排名',
            'account_name' => '账号名称',
            'account_id' => '账号ID',
            'platform' => '平台',
            'gender' => '账号性别',
            'integrated_marketing_gain' => '综合营销价值',
            'spread_index' => '传播指数',
            'interactive_index' => '互动指数',
            'activity_index' => '活跃度指数',
            'growth_index' => '成长指数',
            'health_index' => '健康指数',
            'business_fitness_index' => '商业适应度指数',
            'wechat' => '商务微信',
            'weibo' => '商务微博',
            'mobile' => '商务手机',
            'telephone' => '商务电话',
            'contact_status' => '联络状态',
            'remark' => '备注',
            'create_date' => '创建时间',
            'update_time' => '更新时间',
        ];
    }

  /**
     * 返回数据库字段信息，仅在生成CRUD时使用，如不需要生成CRUD，请注释或删除该getTableColumnInfo()代码
     * COLUMN_COMMENT可用key如下:
     * label - 显示的label
     * inputType 控件类型, 暂时只支持text,hidden  // select,checkbox,radio,file,password,
     * isEdit   是否允许编辑，如果允许编辑将在添加和修改时输入
     * isSearch 是否允许搜索
     * isDisplay 是否在列表中显示
     * isOrder 是否排序
     * udc - udc code，inputtype为select,checkbox,radio三个值时用到。
     * 特别字段：
     * id：主键。必须含有主键，统一都是id
     * create_date: 创建时间。生成的代码自动赋值
     * update_date: 修改时间。生成的代码自动赋值
     */
    public function getTableColumnInfo(){
        return array(
        'id' => array(
                        'name' => 'id',
                        'allowNull' => false,
//                         'autoIncrement' => true,
//                         'comment' => 'ID',
//                         'dbType' => "mediumint(8) unsigned",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => true,
                        'phpType' => 'integer',
                        'precision' => '8',
                        'scale' => '',
                        'size' => '8',
                        'type' => 'integer',
                        'unsigned' => true,
                        'label'=>$this->getAttributeLabel('id'),
                        'inputType' => 'hidden',
                        'isEdit' => true,
                        'isSearch' => true,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'ranking' => array(
                        'name' => 'ranking',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '排名',
//                         'dbType' => "tinyint(5)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'integer',
                        'precision' => '5',
                        'scale' => '',
                        'size' => '5',
                        'type' => 'tinyint',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('ranking'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'account_name' => array(
                        'name' => 'account_name',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '账号名称',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('account_name'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'account_id' => array(
                        'name' => 'account_id',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '账号ID',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('account_id'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'platform' => array(
                        'name' => 'platform',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '平台',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('platform'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'gender' => array(
                        'name' => 'gender',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '账号性别',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('gender'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'integrated_marketing_gain' => array(
                        'name' => 'integrated_marketing_gain',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '综合营销价值',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('integrated_marketing_gain'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'spread_index' => array(
                        'name' => 'spread_index',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '传播指数',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('spread_index'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'interactive_index' => array(
                        'name' => 'interactive_index',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '互动指数',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('interactive_index'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'activity_index' => array(
                        'name' => 'activity_index',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '活跃度指数',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('activity_index'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'growth_index' => array(
                        'name' => 'growth_index',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '成长指数',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('growth_index'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'health_index' => array(
                        'name' => 'health_index',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '健康指数',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('health_index'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'business_fitness_index' => array(
                        'name' => 'business_fitness_index',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '商业适应度指数',
//                         'dbType' => "float(4,2)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'double',
                        'precision' => '4',
                        'scale' => '2',
                        'size' => '4',
                        'type' => 'float',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('business_fitness_index'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'wechat' => array(
                        'name' => 'wechat',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '商务微信',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('wechat'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'weibo' => array(
                        'name' => 'weibo',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '商务微博',
//                         'dbType' => "varchar(30)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '30',
                        'scale' => '',
                        'size' => '30',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('weibo'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'mobile' => array(
                        'name' => 'mobile',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '商务手机',
//                         'dbType' => "char(11)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '11',
                        'scale' => '',
                        'size' => '11',
                        'type' => 'char',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('mobile'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'telephone' => array(
                        'name' => 'telephone',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '商务电话',
//                         'dbType' => "char(12)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '12',
                        'scale' => '',
                        'size' => '12',
                        'type' => 'char',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('telephone'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'contact_status' => array(
                        'name' => 'contact_status',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '联络状态',
//                         'dbType' => "char(12)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '12',
                        'scale' => '',
                        'size' => '12',
                        'type' => 'char',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('contact_status'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'remark' => array(
                        'name' => 'remark',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '备注',
//                         'dbType' => "varchar(100)",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '100',
                        'scale' => '',
                        'size' => '100',
                        'type' => 'string',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('remark'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'create_date' => array(
                        'name' => 'create_date',
                        'allowNull' => false,
//                         'autoIncrement' => false,
//                         'comment' => '创建时间',
//                         'dbType' => "timestamp",
                        'defaultValue' => 'CURRENT_TIMESTAMP',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'timestamp',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('create_date'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		'update_time' => array(
                        'name' => 'update_time',
                        'allowNull' => true,
//                         'autoIncrement' => false,
//                         'comment' => '更新时间',
//                         'dbType' => "timestamp",
                        'defaultValue' => '',
                        'enumValues' => null,
                        'isPrimaryKey' => false,
                        'phpType' => 'string',
                        'precision' => '',
                        'scale' => '',
                        'size' => '',
                        'type' => 'timestamp',
                        'unsigned' => false,
                        'label'=>$this->getAttributeLabel('update_time'),
                        'inputType' => 'text',
                        'isEdit' => true,
                        'isSearch' => false,
                        'isDisplay' => true,
                        'isSort' => true,
//                         'udc'=>'',
                    ),
		        );
        
    }
 
}
