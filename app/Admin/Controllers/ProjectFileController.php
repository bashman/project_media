<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\ProjectMedia;
use App\Project;
use Encore\Admin\Admin;
use Illuminate\Support\Arr;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;


class ProjectFileController extends Controller
{
    public function view($id, Content $content)
    {
        $this->id = $id;
        return $content
            ->title('Archivos')
            ->description('Arvhivos diponibles...')
            //->row('sdfgsdfg')
            ->row(function (Row $row) {

                $row->column(2, function (Column $column) {
                    $column->append('&nbsp;' );
                });

                $row->column(8,  function (Column $column) {
                    $column->append(self::cont($this->id));
                });

                $row->column(2, function (Column $column) {
                    $column->append('&nbsp;');
                });
            });



    }

    public function cont($id)
    {
        $arr = [];

        $project = Project::find($id);

        if($project  == null) {
            $error = new MessageBag([
                'title' => 'ERROR...',
                'message' => 'Proyecto inexistente. ',
            ]);
            return back()->with(compact('error'));
        }

        $fileObject = ProjectMedia::where('project_id', $id)->get();

        if (count($fileObject) > 0 ){

            foreach ($fileObject as $file) {
                if ($file->type == "1")//audio
                    $arr['audio'] = [$file->name, $file->description, $file->path];
                if ($file->type == "2")//image
                    $arr['image'] = [$file->name, $file->description, $file->path];
                if ($file->type == "3") //video
                    $arr['video'] = [$file->name, $file->description, $file->path];
                if ($file->type == "4") //pdf
                    $arr['pdf'] = [$file->name, $file->description, $file->path];
                if ($file->type == "5") //word
                    $arr['word'] = [$file->name, $file->description, $file->path];
                if ($file->type == "6") //word
                    $arr['power'] = [$file->name, $file->description, $file->path];
            }
        }
             // dump($project);

       // dump($fileObject);
        return view('admin::dashboard.files', ['fileObject' => $fileObject, 'project' => $project]);
    }


}
