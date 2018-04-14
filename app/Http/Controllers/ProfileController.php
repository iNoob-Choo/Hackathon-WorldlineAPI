<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\Http\Resources\ProfileResource;

class ProfileController extends Controller
{
    public function createAccountHolderProfile(Request $profileData){
    	$profile = new Profile();

    	$profile->fill($profileData->all());

    	if($profile->save())
    		return new ProfileResource($profile);
    }

    public function getAccountHolderProfile($profile_id){
    	$profile = Profile::findOrFail($profile_id);

    	return new ProfileResource($profile);
    }

    public function updateAccountHolderProfile($profile_id, Request $profileData){
    	$profile = Profile::findOrFail($profile_id);

    	$profile->fill($profileData->all());

    	if($profile->save())
    		return new ProfileResource($profile);
    }
}
