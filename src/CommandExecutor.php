<?php

namespace luis2307\Composer;

use Exception;

class CommandExecutor
{
    public function executeShellCmd(string $cmd): mixed
    {
        printf(" executeShellCmd:  ");             
        var_dump($cmd);
        $output = [];
        $return_var = -1;
        $result = exec($cmd, $output, $return_var);
        printf(" result:  ");   
        var_dump($result);

        if ($return_var !== 0) {
            printf(" CommandExecutor error:  ");             
            var_dump($output);
            throw new Exception(implode("\n", $output));
        }

        return json_decode(join("", $output));
    }
}
