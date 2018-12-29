<?php
$config['dkconfig'] = array(
    "skill_id" => "1072050614428925952",
    "intent" => array(
        "name" => "look_pictures_guess_words",
        "confirmationStatus" => "",
        "slots" => array(
            "pic_class" => array(
                "name" => "pic_class",
                "confirmationStatus" => "",
                "values" => array(
                    array(
                        "type" => "text"
                    )
                )
            )
        )
    ),
    "intent_cfg" => array(
        "name" => "look_pictures_guess_words",
        "confirmationStatus" => "",
        "slots" => array(
            "pic_class" => array(
                "name" => "pic_class",
                "confirmationStatus" => "",
                "needed" => "1", //是否必填
                "values" => array(
                    array(
                        "type" => "usr.picClass",
                        "value" => "水果"
                    )
                ),
                "failedOutputSpeech" => array(
                    "type" => "PlainText",
                    "text" => "小朋友，你是要看水果，还是要看动物？"
                ),
                "failedOutputText" => array(
                    "title" => "",
                    "description" => "看水果，还是看动物？"
                )
            ),
        )
    ),
    "skillSuccessOutputSpeech" => array(
//        "等额本金" => array("type" => "PlainText", "text" => '首月的还款金额是 $first_hk 元，此后每月递减。'),
//        "等额本息" => array("type" => "PlainText", "text" => '每月的还款金额是 $first_hk 元。')
        "恭喜" => array("type" => "PlainText", "text" => '每月的还款金额是 $first_hk 元。')
        ///todo 输出一张图片，并且继续下一张
    ),
    "skillSuccessOutputText" => array(
//        "等额本金" => array("title" => "", "description" => '首月还款： $first_hk 元，每月递减。'),
//        "等额本息" => array("title" => "", "description" => '每月还款： $first_hk 元。'),
        "恭喜" => array("title" => "", "description" => '每月还款： $first_hk 元。')
    ),
    "skillFailedOutputSpeech" => array(
//        "等额本金" => array("type" => "PlainText", "text" => "对不起，我不是很理解你说的。"),
//        "等额本息" => array("type" => "PlainText", "text" => "对不起，我不是很理解你说的。"),
        "抱歉" => array("type" => "PlainText", "text" => "对不起，我不是很理解你说的。"),
    ),
    "errorSpeechMap" => array(
        "signInvalid" => array("type" => "PlainText", "text" => "对不起，我不是很理解你说的。你可以试试这样问？我要看图"),
        "skillIdInvalid" => array("type" => "PlainText", "text" => "对不起，我不是很理解你说的。你可以试试这样问？我要看图"),
        "exception" => array("type" => "PlainText", "text" => "对不起，我不是很理解你说的。")
    ),
    "header" => array('Content-Type' => "application/json;charset=UTF-8"),
    "successDirective" => array(
        "type" => "Display.RenderTemplate",
        "template" => array(
            "type" => "NewsBodyTemplate1",
            "textContent" => array(
                "title" => "",
                "description" => "商业贷款，基准利率+10%，结果仅供参考"
            ),
            "backgroundImage" => array(
                "contentDescription" => "string",
                "source" => array(
                    "url" => '$second_hk')
            ),
            "backgroundAudio" => array(
                "source" => array(
                    "url" => "string"
                )
            ),
            "url" => "string"
        )
    ),
    "failedDirective" => array(
        "type" => "Dialog.ElicitSlot",
        "slotToElicit" => "string",
        "updatedIntent" => array()
    )
);
?>

