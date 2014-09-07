<?php
function polariseCode($str) {
    $str = str_replace("{", "{<br>", $str);
    $str = str_replace(";", ";<br>", $str);
    $str = str_replace("}", "}<br>", $str);

    return $str;
}

function colorMeOut($context, $str) {
    if ($context == "C" || $context == "JAVA") {
        $str = str_replace(" int ", "<font color=\"blue\"> int </font>", $str);
        $str = str_replace(" float ", "<font color=\"blue\"> float </font>", $str);
        $str = str_replace(" long ", "<font color=\"blue\"> int </font>", $str);
        $str = str_replace(" double ", "<font color=\"blue\"> double </font>", $str);
        $str = str_replace(" public ", "<font color=\"blue\"> public </font>", $str);
        $str = str_replace(" private ", "<font color=\"blue\"> private </font>", $str);
        $str = str_replace(" package ", "<font color=\"blue\"> package </font>", $str);
        $str = str_replace(" if ", "<font color=\"blue\"> if </font>", $str);
        $str = str_replace("if(", "<font color=\"blue\"> if </font>(", $str);
        $str = str_replace(" for ", "<font color=\"blue\"> for </font>", $str);
        $str = str_replace(" else ", "<font color=\"blue\"> else </font>", $str);
        $str = str_replace(" void ", "<font color=\"blue\"> void </font>", $str);
    }
    return $str;
}

?>