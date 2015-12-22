<?php


namespace MyBlog\Presenters;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;

class DateFormatPresenter
{
    /**
     * @param Carbon $date
     * @return string
     */
    public function showDateFormat(Carbon $date) : string
    {
        $locale = App::getLocale();

        if ($locale === 'uk') {
            return $date->format('d, M, Y');
        } else if ($locale == 'tw') {
            return $date->format('Y, m, d');
        } else {
            return $date->format('M, d, Y');
        }
    }

}