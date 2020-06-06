<?php

namespace App\Admin\Controllers;

use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\ProjectMedia;

class ProjectMediaController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProjectMedia';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProjectMedia());

//        $grid->column('id', __('Id'));
        $grid->column('projects.name', __('Proyeco'));
        $grid->column('name', __('Nombre del archivo'));
        $grid->column('description', __('Descripción'));
        $grid->column('path', __('Path'));
        $grid->column('ective', __('Ective'));
        $grid->column('created_at', __('Created at'))->hide();
        $grid->column('updated_at', __('Updated at'))->hide();
        $grid->column('deleted_at', __('Deleted at'))->hide();

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(ProjectMedia::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('project_id', __('Project id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('path', __('Path'));
        $show->field('ective', __('Ective'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ProjectMedia());

        //$form->number('project_id', __('Project id'));
        $form->text('name', __('Nombre'))->setWidth(3,2);

        $form->select('type', __('Tipo'))->options([
            '1' => 'Audio',
            '2' => 'Fotos',
            '3' => 'Video',
            '4' => 'pdf',
            '5' => 'word',
            '6' => 'power',
        ])->setWidth(3,2);

        $form->textarea('description', __('Descripción'));
       // $form->image('path', 'path');
        $form->file('path', 'Archivo')->uniqueName()->setWidth(3,2);
        //$form->text('path', __('Path'));
        $form->switch('active', __('Activo'))->default(1);

        return $form;
    }
}
