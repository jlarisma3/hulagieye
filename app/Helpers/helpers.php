<?php

/**
 * @return mixed
 */
function getConfig(string $configFile)
{
    return json_decode(
        file_get_contents(
            storage_path($configFile)),
        true
    );
}