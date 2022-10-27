<?php

namespace App\Http\Controllers;

use App\Page;
use App\Content;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\CompanyInfoRequest;
use App\Http\Requests\CompanySliderRequest;
class QualityController extends Controller
{

    public function content()
    {
        $section1 = Content::where('section_id', 8)->first();
        $section2 = Content::where('section_id', 9)->first();
        $section3s = Content::where('section_id', 10)->orderBy('order', 'ASC')->get();
        $section4s = Content::where('section_id', 11)->orderBy('order', 'ASC')->get();
        return view('administrator.quality.content', compact('section1', 'section2', 'section3s', 'section4s'));
    }
    
    public function updateInfo(Request $request)
    {
        $element = Content::find($request->input('id'));
        $data = $request->all();    
        if($request->hasFile('image')){
            if(Storage::disk('custom')->exists($element->image))
                Storage::disk('custom')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/quality','custom');
        } 
        $element->update($data);
        return back();
    }

    
    public function updateInfoImages(Request $request)
    {
        $element = Content::find($request->input('id'));

        $data = $request->all();    
        if($request->hasFile('image')){
            if(Storage::disk('custom')->exists($element->image))
                Storage::disk('custom')->delete($element->image);
            
            $data['image'] = $request->file('image')->store('images/quality','custom');
        } 
        
        $element->update($data);
        return back();
    }

    public function destroy($id)
    {
        $element = Content::find($id);
        if(Storage::disk('custom')->exists($element->image))
            Storage::disk('custom')->delete($element->image);

        if(Storage::disk('custom')->exists($element->content_1))
            Storage::disk('custom')->delete($element->content_1);

        if(Storage::disk('custom')->exists($element->content_2))
            Storage::disk('custom')->delete($element->content_2);

        if(Storage::disk('custom')->exists($element->content_3))
            Storage::disk('custom')->delete($element->content_3);

        $element->delete();
        return response()->json([], 200);
    }

    public function eliminarImagen($id)
    {
        $element = Content::find($id);

        if(Storage::disk('custom')->exists($element->image))
            Storage::disk('custom')->delete($element->image); 

        $element->image = null;
        $element->save();

        return response()->json([], 200);
    }

    public function sliderGetList()
    {

        $elements = Content::where('section_id', 4)->orderBy('order', 'ASC')->get();
        return DataTables::of($elements)
        ->editColumn('image', function($element){
            return '<img src="'.asset($element->image).'" class="img-fluid" style="max-width:100px">';
        })
        ->addColumn('actions', function($element) {
            return '<button type="button" class="btn btn-sm btn-primary rounded-pill far fa-edit" data-toggle="modal" data-target="#modal-update-element" onclick="findContent('.$element->id.')"></button><button class="btn btn-sm btn-danger rounded-pill" onclick="modalDestroy('.$element->id.')" title="Eliminar slider"><i class="far fa-trash-alt"></i></button>';
        })
        ->rawColumns(['actions', 'image'])
        ->make(true);
    }
}
