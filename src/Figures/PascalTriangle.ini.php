<?php

namespace Figures;

class PascalTriangle
{
    private $rowsLimit;
    
    public function __construct($rowsLimit)
    {
        $this->rowsLimit = $rowsLimit;
    }
    
    protected function getRowsLimit()
    {
        return $this->rowsLimit;
    }
    
    public function drawFigure()
    {
        $cols  = array();

        for($row = 0; $row < $this->getRowsLimit(); $row++)
        {
            $cols[$row] = array();

            for($n = 0; $n <= $row; $n++)
            {     
                if ($n == 0 || $n == (count($cols) - 1)) {
                    $cols[$row][] = 1;
                } else {
                    $cols[$row][] = ($cols[$row - 1][abs($n-1)] + $cols[$row - 1][$n]);
                }  
            }

            echo '<div class="cell-wrap">';

            foreach($cols[$row] as $col)
            {
                echo '<span class="cell center"><strong>'.$col.'</strong></span>';
            }
            
            echo '</div>';
        }
    }
}