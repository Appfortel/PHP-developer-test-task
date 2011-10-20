<?php
/**
 * @author Denis Fakhrtdinov <me@shizz.ru>
 */
interface DataAccessObjectVersionedInterface extends DataAccessObjectInterface {

    /**
     * Returns data gap between $versionNumber and last version number
     */
    public function exportDataGap($versionNumber);

    /**
     * Returns last version number
     */
    public function getLastVersionNumber();
}