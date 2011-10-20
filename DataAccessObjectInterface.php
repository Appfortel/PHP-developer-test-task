<?php
/**
 * @author Denis Fakhrtdinov <me@shizz.ru>
 */
interface DataAccessObjectInterface {

    /**
     * Returns value by key
     */
    public function get($key);

    /**
     * Returns existence status by key
     */
    public function has($key);

    /**@abstract
     * @return void
     * Sets value by key
     */
    public function set($key, $value);

    /**
     * Imports array of data, overrides existent values
     */
    public function mergeFrom(array $data);

    /**
     * Imports array of data, does not override existent values
     */
    public function importFrom(array $data);

    /**
     * Returns array representation of encapsulated data
     */
    public function export();

    /**
     * Loads data from storage by identifier
     */
    public function loadById($id);

    /**
     * Saves data into storage
     */
    public function save();
}