<?php

namespace App\Admin\Controllers;

use App\Models\Galerie;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Auth;

class GalerieController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Galerie';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Galerie());

        $grid->column('id', __('Id'));
        $grid->column('titre', __('Titre'));
        $grid->column('fichier', __('Fichier'));
        $grid->column('type', __('Type'));
        $grid->column('description', __('Description'));
        $grid->column('est_visible', __('Est visible'));
        $grid->column('created_at', __('Created at'))->display(function ($date) {
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    });

        // $grid->column('created_by', __('Created by'));
        // $grid->column('updated_at', __('Updated at'));
        // $grid->column('updated_by', __('Updated by'));
        // $grid->column('deleted_at', __('Deleted at'));
        // $grid->column('deleted_by', __('Deleted by'));

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
        $show = new Show(Galerie::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titre', __('Titre'));
        $show->field('fichier', __('Fichier'));
        $show->field('type', __('Type'));
        $show->field('description', __('Description'));
        $show->field('est_visible', __('Est visible'));
        $show->field('created_at', __('Created at'));
        $show->field('created_by', __('Created by'));
        $show->field('updated_at', __('Updated at'));
        $show->field('updated_by', __('Updated by'));
        $show->field('deleted_at', __('Deleted at'));
        $show->field('deleted_by', __('Deleted by'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Galerie());

        $form->text('titre', __('Titre'));
        $form->file('fichier', __('Fichier'));
        $form->text('type', __('Type'))->default('image');
        $form->textarea('description', __('Description'));
        $form->switch('est_visible', __('Est visible'))->default(1);
        $form->hidden('created_by', 'Created by')->default(Auth::guard('admin')->user()->id);
        $form->hidden('updated_by', 'Updated by')->default(Auth::guard('admin')->user()->id);
        // $form->number('deleted_by', __('Deleted by'));

        return $form;
    }
}
