<?php

namespace App\Admin\Controllers;

use App\ProjectCategory;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use \App\Project;

class ProjectController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Project';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Project());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('name', __('Name'));
        $grid->column('category_id', __('Category id'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Project::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('name', __('Name'));
        $show->field('category_id', __('Category id'));
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
        $form = new Form(new Project());

        //$form->number('user_id', __('User id'));
        $form->text('name', __('Nombre del Proyecto'))->setWidth(3,2);
        $form->select('category_id', __('Categoría'))->options(
            ProjectCategory::all()->pluck('name', 'id')
        )->setWidth(3,2);
        $form->hasMany('projectMediaFiles', 'Archivos', function (Form\NestedForm $form) {
            $form->text('name', 'Nombre');
            $form->textarea('description', 'Descripción del archivo');
            $form->file('path', 'Archivo')->uniqueName();
        });
        return $form;
    }
}
