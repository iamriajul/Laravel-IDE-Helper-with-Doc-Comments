<?php
namespace App;

require 'vendor/autoload.php';

use zpt\anno\Annotations;

include_once 'Source/Model.php';

$rc = new \ReflectionClass('Model');


$methods = $rc->getMethods();
//var_dump($rc->getMethod('simplePaginate')->getDocComment());exit();

$modelDoc = "/**\n";
foreach ($methods as $method) {
    $ann = new Annotations($method);
    $ann = $ann->asArray();
    $doc = " * @method";
    if ($ann['static']) $doc .= " static";

    $return = $ann['return'];
    $return = str_replace("\Illuminate\Database\Eloquent\Model", '$this', $return);
    $doc .= " ". $return;

    $doc .= " ". $method->getName();

    $params = "";
    $ps = $method->getParameters();
    $paramsDefault = array();
    foreach ($ps as $p) {
        if ($p->isOptional()) {
            $pName = $p->getName();
            $dfv = $p->getDefaultValue();
            $paramDefault = [];
            $paramDefault[] = $pName;
            if (is_array($dfv)) {
                $paramDefault[] = "array()";
            } elseif (is_null($dfv)) {
                $paramDefault[] = "null";
            } else {
                $paramDefault[] = "'$dfv'";
            }
            array_push($paramsDefault, $paramDefault);
        }
    }

    if (is_array(@$ann['param'])) $params = implode(", ", @$ann['param']);
    else $params = @$ann['param'] ?: "";
    $params = str_replace("|static", "", $params);
    $params = "($params)";

//    var_dump($method->getName());
//    var_dump($paramsDefault);
    //if ($method->getName() == 'simplePaginate') var_dump($paramsDefault); exit();

    // place default value
    foreach ($paramsDefault as $pdefault) {
        $name = '$'. $pdefault[0];
        $value = $pdefault[1];
        $params = str_replace("$name,", "$name = $value,", $params);
        $params = str_replace("$name)", "$name = $value)", $params);
    }

    $doc .= $params;

    // Extract Doc Comment
    $docStr = $rc->getMethod('find')->getDocComment();
    $doc .= " ". substr($docStr, 12, strpos($docStr, "*", 12) + 1 - 12 - 8);

    $modelDoc .= $doc . "\n";
}
$modelDoc .= " */\n";

// Write result in a file
$file = "<?php

namespace App;

$modelDoc
abstract class Model extends \Illuminate\Database\Eloquent\Model
{

}";
file_put_contents('Result\Model.php', $file);


// Examples
/**
 * @method static \ArrayObject create(array $array, $int)
 * @method static \ArrayObject make(array $array, $int = 0)
 * @property mixed riajul
 */
class TestClass {

}
$tc = new TestClass();
//$tc->riajul;
//TestClass::create(array(), 2342);
//TestClass::make(array());