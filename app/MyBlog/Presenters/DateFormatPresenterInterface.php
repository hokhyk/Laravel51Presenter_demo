<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author oomusou
 * @date 12/22/15
 * @since 12/22/15 description
 */
namespace MyBlog\Presenters;

use Carbon\Carbon;

interface DateFormatPresenterInterface
{
    /**
     * 顯示日期格式
     *
     * @param Carbon $date
     * @return string
     */
    public function showDateFormat(Carbon $date) : string;
}