<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Portfolio;
use App\Models\PortfolioImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Http\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

class PortfolioController extends Controller
{
    public function index(Portfolio $Portfolio)
    {
        return Inertia::render(
            'Portfolio/Portfolio', 
            [
                'data' => $Portfolio->latest()->with('images')->get()
            ]
        );
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
            'description' => ['required'],
        ])->validate();
        $portfolio = Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);
        foreach ($request->loopImage as $file) {
            $fileData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $file));
            // save it to temporary dir first.
            $tmpFilePath = sys_get_temp_dir() . '/' . Str::uuid()->toString();
            file_put_contents($tmpFilePath, $fileData);

            // this just to help us get file info.
            $tmpFile = new File($tmpFilePath);

            $file = new UploadedFile(
                $tmpFile->getPathname(),
                $tmpFile->getFilename(),
                $tmpFile->getMimeType(),
                0,
                true // Mark it as test, since the file isn't from real HTTP POST.
            );
            $image_path = $file->store('image','public');
            PortfolioImages::create([
                'portfolio_id' => $portfolio->id,
                'file_path' => $image_path
            ]);
        }
  
        return redirect()->back()->with('flash', [
            'message' => 'Portfolio Created Successfully.',
        ]);
    }

    public function update(Request $request)
    {
        Validator::make($request->all(), [
            'title' => ['required'],
        ])->validate();
  
        if ($request->has('id')) {
            Portfolio::find($request->input('id'))->update($request->all());
            return redirect()->back()->with('flash', [
                'message' => 'Post Updated Successfully.',
            ]);
        }
    }

    public function delete(Request $request)
    {
        $portfolio = Portfolio::findOrFail($request->input('id'));
        foreach ($portfolio->images as $image) {
            if (file_exists('storage/'.$image->file_path)) {
               unlink('storage/'.$image->file_path);
               $image->delete();
            }
        }
        $request->has('id') ? 
                Portfolio::find($request->input('id'))->delete() :
                redirect()->back()->with('flash', [
                    'errors' => 'Somethings goes wrong.',
                ]);
        
        return redirect()->back()->with('flash', [
            'message' => 'Post deleted Successfully.',
        ]);
    }
}
