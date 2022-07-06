<?php


namespace Holyrisk\ComposerTest;


class StringHandle
{

    /**
     * @description 再次处理
     * @author Holyrisk
     * @date 2021/5/6 17:58
     * @param $string
     * @param $index
     * @return string
     */
    public static function run($string,$index)
    {
        switch ($index){
            case 1:
                //全部小写
                $string = strtolower($string);
                break;
            case 2:
                //全部大写
                $string = strtoupper($string);
                break;
            case 3:
                //整个字符串 第一个首字母大写
                $string = ucfirst($string);
                break;
            case 4:
                //首字母大写
                $string = ucwords($string);
                break;
        }
        return $string;
    }


    /**
     * 思路:
     *
     * step1.原字符串转小写,原字符串中的分隔符用空格替换,在字符串开头加上分隔符
     *
     * step2.将字符串中每个单词的首字母转换为大写,再去空格,去字符串首部附加的分隔符.
     *
     * step3 首字母 大写
     *
     * @description 下划线转驼峰 |且 首字母 大写
     * @author Holyrisk
     * @date 2021/5/6 17:57
     * @param $uncamelized_words
     * @param string $separator
     * @return string
     */
    public static function underlineToCapitalization($uncamelized_words,$separator='_')
    {
        $uncamelized_words = $separator. str_replace($separator, " ", strtolower($uncamelized_words));
        $restult = ltrim(str_replace(" ", "", ucwords($uncamelized_words)), $separator );
        return self::run($restult,4);
    }

}