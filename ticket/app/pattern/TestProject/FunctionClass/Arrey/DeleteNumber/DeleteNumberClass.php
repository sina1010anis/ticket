<?php


namespace App\pattern\TestProject\FunctionClass\Arrey\DeleteNumber;


class DeleteNumberClass implements DeleteNumberInterface
{
    public function arr_delete(string $type, array $numbers)
    {
        for ($i = 0; $i < count($numbers); $i++) {
            for ($j = 0; $j < count($numbers); $j++) {
                if ($i != $j) {
                    if ($numbers[$i] === $numbers[$j]) {
                        $numbers[$j] = 'delete';
                    }
                }
            }
        }
    }
}
