<?php

namespace luis2307\Composer;

use Exception;

class CommandExecutor
{
    public function executeShellCmd(string $cmd): mixed
    {
        $output = [];
        $return_var = -1;
        $result = exec($cmd, $output, $return_var);

        if ($return_var !== 0) {
            printf(" CommandExecutor error:  ");             
            echo($output);
            throw new Exception(implode("\n", $output));
        }

        return json_decode(join("", $output));
    }
}
