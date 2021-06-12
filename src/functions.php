<?php declare(strict_types = 1);
define('__MEDUSA_DEV_ALIAS_FILE__', __FILE__);
function dd($v, int $exitCode = 0) {
    \Medusa\DevTools\dd(...func_get_args());
}

function d($v) {
    \Medusa\DevTools\d(...func_get_args());
}

/**
 * Debug log
 * @param             $data
 * @param string|null $logfileName
 *
 * #######################
 *
 * Format:
 *
 * REQUEST IDENT        RUNTIME SINCE FIRST     RUNTIME BETWEEN LAST            DEBUGMESSAGE
 *                                              AND CURRENT debugLog call
 *                      debugLog call
 * 2e1df6eb         -> [0,000000ms              +0,000000ms: ]                  Application init
 *
 * BASH_RC
 * function debuglog() {
 *      local _file=~/app_debug_logs/$(date +"log_%Y-%m-%d.log")
 *      [ -f "$_file" ] || touch $_file
 *      tail -f $_file
 * }
 * #######################
 *
 * Examples:
 * integrated counter:  debugLog('get config call: >>$i++<<');
 * result:
 * 3bdf1d7a -> [0,000000ms +0,000000ms: ] Get config 1
 * 3bdf1d7a -> [0,595947ms +0,595947ms: ] Get config 2
 * ....
 * 3bdf1d7a -> [78,260010ms +0,089844ms: ] Get config 69
 * 3bdf1d7a -> [78,322998ms +0,062988ms: ] Get config 70
 * 3bdf1d7a -> [78,387939ms +0,064941ms: ] Get config 71
 *
 */
function debugLog($data, string $logfileName = null) {
    \Medusa\DevTools\debugLog(...func_get_args());
}
