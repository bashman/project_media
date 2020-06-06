<?php
namespace App\Custom;

use App\AdminUserProject;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Encore\Admin\Admin;
use Illuminate\Support\Arr;

class GetProjects
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function title()
    {
        return view('admin::dashboard.title');
    }
   /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public static function getProject()
    {
        //$projects = AdminUserProject::where('admin_user_id', \Admin::user()->id)->get();
        $projects = AdminUserProject::where('admin_user_id', \Admin::user()->id)->pluck('project_id');
      //  dump($projects);

        if( count($projects)  > 0 ) {
            $projectObject = Project::whereIn('id', $projects)->get()->all();
            // dump($projectObject);
              return view('admin::dashboard.projects', compact('projectObject', $projectObject));

        }



       //dump($prjectObject);
    }

    public static function getProjectFiles()
    {
        $fileObject = [];
        return view('admin::dashboard.files', compact('fileObject', $fileObject));
    }

    private function getMimeType($filename)
    {
        $mimetype = false;
        if(function_exists('finfo_open')) {
            // open with FileInfo
        } elseif(function_exists('getimagesize')) {
            // open with GD
        } elseif(function_exists('exif_imagetype')) {
           // open with EXIF
        } elseif(function_exists('mime_content_type')) {
           $mimetype = mime_content_type($filename);
        }
        return $mimetype;
    }
}
