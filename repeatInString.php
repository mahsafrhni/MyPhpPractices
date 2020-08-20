<?php
function repeatInString($input1, $input2)
{
    if ($input1 == null || $input2 == null || $input1 == '' || $input2 == '') {
        return 0;
    } else {
        return preg_match_all("/(?=$input2)/", $input1, $matches);
    }
}

echo repeatInString('sasasas', 'sas');