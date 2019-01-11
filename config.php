<?php
$config['dkconfig'] = array(
    "skill_id" => "1078576375050690560",
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
                "supportedValues" => array("水果", "动物"),
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
        "图片" => array("type" => "PlainText", "text" => '小朋友，这是 $pic_name')
        ///todo 输出一张图片，并且继续下一张
    ),
    "skillSuccessOutputText" => array(
        "图片" => array("title" => "", "description" => '$pic_name')
    ),
    "skillFailedOutputSpeech" => array(
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
                "description" => "显示在界面上的提示文字"
            ),
            "backgroundImage" => array(
                "contentDescription" => "string",
                "source" => array(
                    "url" => '$pic_url')
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

