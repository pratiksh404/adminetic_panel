<?php

namespace App\Repositories;

use App\Models\Admin\Setting;
use Illuminate\Support\Facades\Cache;
use App\Contracts\SettingRepositoryInterface;
use App\Http\Requests\SettingRequest;

class SettingRepository implements SettingRepositoryInterface
{
    // Setting Index
    public function indexSetting()
    {
        $settings = config('coderz.caching', true)
            ? (Cache::has('settings') ? Cache::get('settings') : Cache::rememberForever('settings', function () {
                return Setting::latest()->get();
            }))
            : Setting::latest()->get();

        $setting_groups = Setting::all()->groupBy('setting_group');
        return compact('settings', 'setting_groups');
    }

    // Setting Create
    public function createSetting()
    {
        $setting_groups = Setting::all()->pluck('setting_group')->toArray();
        return compact('setting_groups');
    }

    // Setting Store
    public function storeSetting(SettingRequest $request)
    {
        Setting::create($request->validated());
    }

    // Setting Show
    public function showSetting(Setting $setting)
    {
        return compact('setting');
    }

    // Setting Edit
    public function editSetting(Setting $setting)
    {
        $setting_groups = Setting::all()->pluck('setting_group')->toArray();
        return compact('setting', 'setting_groups');
    }

    // Setting Update
    public function updateSetting(SettingRequest $request, Setting $setting)
    {
        $setting->update($request->validated());
    }

    // Setting Destroy
    public function destroySetting(Setting $setting)
    {
        $setting->delete();
    }
}
