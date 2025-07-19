
<?php

// simulate the keyboard 'ENTER' button * 2 times
function add_line_space($linesNumber=1)
{
    for ($i = 0; $i < $linesNumber; $i++) {
        echo "<br>";
    }
}

// draw a separation line
function draw_break_line()
{
    echo "<br>";
    echo "----------------------------------------------";
    echo "<br>";
}
