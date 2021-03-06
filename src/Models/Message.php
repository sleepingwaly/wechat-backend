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

class Message extends Model
{
    protected $table = 'we_messages';
    protected $guarded = ['id'];

    /**
     * 用于表单验证时的字段名称提示.
     *
     * @var array
     */
    public static $aliases = [
        'account_id' => '公众号ID',
        'fans_id' => '粉丝id',
        'resource_id' => '消息资源id',
        'reply_id' => '回复id',
        'content' => '内容',
        'msg_id' => '消息id',
    ];
}
