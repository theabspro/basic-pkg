<?php

namespace Abs\BasicPkg;
use App\Filter;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class FilterController extends Controller {

	public function saveFilterPreset(Request $r) {

		if (!$r->id) {
			$filter = new Filter;
			$filter->created_by_id = Auth::id();
		} else {
			$filter = Filter::find($r->id);
			if (!$filter) {
				return response()->json([
					'success' => false,
					'error' => 'Filter not found',
				]);
			}
			$filter->updated_by_id = Auth::id();
		}

		if ($r->is_default) {
			Filter::
				where([
				'page_id' => $r->page_id,
				'user_id' => Auth::id(),
			])
				->update([
					'is_default' => 0,
				])
			;
		}

		$filter->fill($r->all());
		$filter->save();

		return response()->json([
			'success' => true,
			'message' => 'Filter Preset saved successfully!',
		]);
	}

}
