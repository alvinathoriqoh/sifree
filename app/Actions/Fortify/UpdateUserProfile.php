<?php

namespace App\Actions\Fortify;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfile;

class UpdateUserProfile implements UpdatesUserProfile
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $perusahaan
     * @param  array  $input
     * @return void
     */
    public function update($perusahaan, array $input)
    {
        Validator::make($input, [
            'nama' => ['required', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string', 'max:255'],
            'history' => ['required', 'string', 'max:255'],
        ])->validateWithBag('updateProfileInformation');

            $perusahaan->forceFill([
                'nama' => $input['nama'],
                'alamat' => $input['alamat'],
                'detail' => $input['detail'],
                'history' => $input['history'],
            ])->save();
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($perusahaan, array $input)
    {
        $perusahaan->forceFill([
                'nama' => $input['nama'],
                'alamat' => $input['alamat'],
                'detail' => $input['detail'],
                'history' => $input['history'],
        ])->save();

    }
}
