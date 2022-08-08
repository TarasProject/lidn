<?php

namespace App\Http\Controllers;

use App\Models\Attribute;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
          $projects = Project::get();
          $attributes = Attribute::get();
          return view('portfolio/portfolio', compact('projects','attributes'));
    }
    public function likeProject(Request $request) {
        $request->flash();
        $id=$request->input('projectID');
        $project = Project::find($id);
        $like = Project::find($id)->like;

        $project->like = $like + 1;
        $project->update();
        return response()
            ->json(['project' => $project, 'success' => true]);
    }

    public function showPortfolio($id) {
        $objPortfolio = Project::find($id);
        $projects = Project::get();
        if (!$objPortfolio) {
            return abort(404);
        }
        return view('/portfolio/portfolio-details',['project'=>$objPortfolio], ['projects'=>$projects]);
    }

    public function nextPrev(Request $request) {

        $request->flash();
        $id=$request->input('projectID');
        $projectEvent=$request->input('projectEvent');

        if ($projectEvent === 'next') {
            do {
                $id++;
                if ($id > Project::all()->last()->id) {
                    $id = 1;
                }
            } while (Project::find($id)===null);

        } else if ($projectEvent === 'prev') {
            do {
                $id--;
                if ($id < Project::all()->first()->id){
                    $id = Project::all()->last()->id;
                }
            } while (Project::find($id)===null);
        }

        $objPortfolio = Project::find($id);
        $collectionID = $objPortfolio->img;
        foreach ($collectionID as $imageID) {
            $name_imgs[] = $imageID->name_img;
        }
        if (empty($name_imgs)) {
            return response()
                ->json(['project' => $objPortfolio]);
        } else {
            return response()
                ->json(['project' => $objPortfolio, 'img' => $name_imgs]);
        }
    }
}
