<?php

namespace App;

class Grilles
{
    public $grillesCount;

    /**
     * @param array|false $file
     */
    public function __construct(array $file)
    {
        $this->grillesCount = 0;
        $this->countGrilles($file);
    }

    /*
     * @return void
     */
    private function countGrilles($file)
    {
        $lineGrilleCounter = 0;
        for ($i = 2; $i < count($file); $i++) {

            if ($file[$i] !== "\n") {
                $lineGrilleCounter++;

                if ($lineGrilleCounter === 5){
                    $this->grillesCount++;
                    $lineGrilleCounter = 0;
                }

            }

        }
    }
}
