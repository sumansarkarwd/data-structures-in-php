<?php

use App\Stack\Cars;

require "./vendor/autoload.php";

$expression = "{(a+b)*(5)}";

function checkExpression($expression)
{
    $valid = true;
    $stack = new SplStack;

    for ($i=0; $i<strlen($expression); $i++) {
        $char = substr($expression, $i, 1);

        if ($char === "(" || $char === "{" || $char === "[") {
            $stack->push($char);
        }

        if ($char === ")" || $char === "}" || $char === "]") {
            if ($stack->isEmpty()) {
                $valid = false;
            } else {
                $top = $stack->pop();
                if (($char === "(" && $top === ")")
                || ($char === "{" && $top === "}")
                || ($char === "[" && $top === "]")) {
                    $valid = false;
                }
            }
        }

        if ($valid === false) {
            break;
        }
    }
    if (!$stack->isEmpty()) {
        $valid = false;
    }
    return $valid;
}

var_dump(checkExpression($expression));
