<?php

interface TextWrapExerciseInterface {

    public static function textWrap(string $text, int $length): array;
}

class Text implements TextWrapExerciseInterface {

    public static function textWrap(string $text, int $length): array {

        $textContent = explode(' ', $text);
        $result[] = "";
        $actualLength = 0;
        $index = 0;

        foreach ($textContent as $word) {

            $wordLength = strlen($word) + 1;

            if (($actualLength + $wordLength) <= $length) {
                $result[$index] .= $word . ' ';

                $actualLength += $wordLength;
            } else {
                $index += 1;

                $actualLength = $wordLength;

                $result[$index] = $word;
            }
        }

        for ($i = 0; $i < sizeof($result); $i++) {
            echo($result[$i]);
            echo "<br>";
        }

        return $result;
    }

}

?>