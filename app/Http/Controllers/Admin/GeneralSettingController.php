<?php
/** @noinspection JsonEncodingApiUsageInspection */

namespace App\Http\Controllers\Admin;

use App\Helpers\DataHelper;
use App\Http\Controllers\Controller;
use App\Models\GeneralSetting;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class GeneralSettingController extends Controller
{
    private $dataHelper;
    private $resourceName = 'general-settings';
    private $category = 'admin'; // "admin" or "app"

    final public function __construct()
    {
        $this->dataHelper = new DataHelper();
    }

    final public function index(): View
    {
        $content = GeneralSetting::all()->groupBy('key')->map(static function ($content) {
            $content = $content[0];
            $content->value = json_decode($content->value) ?? $content->value;
            return $content;
        });

        return view($this->category . '.' . $this->resourceName . '.index', compact('content'));
    }

    final public function updateContent(Request $request): RedirectResponse
    {
        $data = $this->dataHelper->prepareDataForUpsertion($request->except('_token'), $this->category . '/' . $this->resourceName);
        GeneralSetting::upsert($data, ['key'], ['value']);
        return redirect()->route($this->category . '.' . $this->resourceName . '.index');
    }
}
