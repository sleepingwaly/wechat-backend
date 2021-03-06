<?php

/*
 * This file is part of ibrand/wechat-backend.
 *
 * (c) iBrand <https://www.ibrand.cc>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace iBrand\Wechat\Backend\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fan extends Model
{
    // use SoftDeletes;

    protected $table = 'we_fans';
    protected $guarded = ['id'];

    /**
     * 用于表单验证时的字段名称提示.
     *
     * @var array
     */
    public static $aliases = [
        'account_id' => '公众号ID',
        'group_id' => '粉丝组ID',
        'openid' => 'OPENID',
        'nickname' => '昵称',
        'signature' => '签名',
        'remark' => '备注',
        'sex' => '性别',
        'language' => '语言',
        'city' => '城市',
        'province' => '省份',
        'country' => '国家',
        'avatar' => '头像',
        'unionid' => 'unionid',
        'liveness' => '活跃度',
        'subscribed_at' => '关注时间',
        'last_online_at' => '最后上线时间',
                         ];

    protected $appends = ['location'];

    public function getLocationAttribute()
    {
        return $this->province.' '.$this->city;
    }

//    public function FansGroup()
//    {
//        return $this->hasMany('iBrand\Wechat\Backend\Models\FanGroup', 'group_id','group_id');
//    }

    public function User()
    {
        return $this->hasOne('iBrand\Component\User\Models\User', 'id', 'user_id');
    }
}
