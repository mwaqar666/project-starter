<?php
/** @noinspection JsonEncodingApiUsageInspection */

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Http\UploadedFile;

class DataHelper
{
    private $now;

    final public function __construct()
    {
        $this->now = Carbon::now()->toDateTimeString();
    }

    /*
     * Converts the multidimensional form data into JSON format. This function
     * also stores the file in provided path
     *
     * Example:
     * ========
     * $data = [
     *      'key1' => 'value1',
     *      'key2' => [
     *          'somevalue1', 'somevalue2'
     *      ],
     *      'key3' => [
     *          [
     *              'anotherkey1' => 'anothervalue1',
     *              'anotherkey2' => 'anothervalue2',
     *              'anotherkey3' => [
     *                  'somedata1', 'somedata2'
     *              ],
     *          ],
     *      ],
     * ];
     *
     * The above data will be converted to:
     *
     * $data = [
     *      [ 'key' => 'key1', 'value' => 'value1', 'created_at' => CURRENT_TIMESTAMP, 'updated_at' => CURRENT_TIMESTAMP ],
     *      [ 'key' => 'key2', 'value' => '["somevalue1", "somevalue2"]', 'created_at' => CURRENT_TIMESTAMP, 'updated_at' => CURRENT_TIMESTAMP ],
     *      [ 'key' => 'key3', 'value' => '[{"anotherkey1": "anothervalue1","anotherkey2": "anothervalue2","anotherkey3": ["somedata1", "somedata2"]}]', 'created_at' => CURRENT_TIMESTAMP, 'updated_at' => CURRENT_TIMESTAMP ]
     * ];
     */
    final public function prepareDataForUpsertion(array $data, string $storagePathForPossibleImageUpload = '', string $storageLinkAccessPathForPossibleImageUpload = 'assets/uploads/'): array
    {
        $storagePathForPossibleImageUpload = trim($storagePathForPossibleImageUpload, '/');
        $storageLinkAccessPathForPossibleImageUpload = trim($storageLinkAccessPathForPossibleImageUpload, '/') . '/';

        return array_map(function ($key, $value) use ($storageLinkAccessPathForPossibleImageUpload, $storagePathForPossibleImageUpload) {
            if ($value instanceof UploadedFile) {
                $value = $storageLinkAccessPathForPossibleImageUpload . $value->store($storagePathForPossibleImageUpload);
            }

            if (is_array($value)) {
                $value = json_encode($this->handleArrayData($value));
            }

            return compact('key', 'value') + ['created_at' => $this->now, 'updated_at' => $this->now];
        }, array_keys($data), array_values($data));
    }

    private function handleArrayData(array $data, string $storagePathForPossibleImageUpload = '', string $storageLinkAccessPathForPossibleImageUpload = 'assets/uploads/'): array
    {
        return array_map(function ($value) use ($storageLinkAccessPathForPossibleImageUpload, $storagePathForPossibleImageUpload) {
            if ($value instanceof UploadedFile) {
                $value = $storageLinkAccessPathForPossibleImageUpload . $value->store($storagePathForPossibleImageUpload);
            }

            if (is_array($value)) {
                $value = $this->handleArrayData($value);
            }

            return $value;
        }, $data);
    }
}
