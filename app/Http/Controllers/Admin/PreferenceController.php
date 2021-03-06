<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Preference;
use Illuminate\Http\Request;
use App\Http\Requests\PreferenceRequest;
use App\Http\Controllers\Controller;
use App\Contracts\PreferenceRepositoryInterface;

class PreferenceController extends Controller
{
    protected $preferenceRepositoryInterface;

    public function __construct(PreferenceRepositoryInterface $preferenceRepositoryInterface)
    {
        $this->preferenceRepositoryInterface = $preferenceRepositoryInterface;
        $this->authorizeResource(Preference::class, 'preference');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.preference.index', $this->preferenceRepositoryInterface->indexPreference());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.preference.create', $this->preferenceRepositoryInterface->createPreference());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\PreferenceRequestt  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PreferenceRequest $request)
    {
        $this->preferenceRepositoryInterface->storePreference($request);
        return redirect(adminRedirectRoute('preference'))->withSuccess('Preference Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function show(Preference $preference)
    {
        return view('admin.preference.show', $this->preferenceRepositoryInterface->showPreference($preference));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        return view('admin.preference.edit', $this->preferenceRepositoryInterface->editPreference($preference));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\PreferenceRequest  $request
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(PreferenceRequest $request, Preference $preference)
    {
        $this->preferenceRepositoryInterface->updatePreference($request, $preference);
        return redirect(adminRedirectRoute('preference'))->withInfo('Preference Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        $this->preferenceRepositoryInterface->destroyPreference($preference);
        return redirect(adminRedirectRoute('preference'))->withFail('Preference Deleted Successfully.');
    }
}
