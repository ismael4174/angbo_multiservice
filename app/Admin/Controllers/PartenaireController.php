<?php

namespace App\Admin\Controllers;

use App\Models\Partenaire;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Auth;

class PartenaireController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Partenaire';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Partenaire());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('logo', __('Logo'))->image();
        $grid->column('lien_site', __('Lien site'));
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
        $show = new Show(Partenaire::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('logo', __('Logo'));
        $show->field('lien_site', __('Lien site'));
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
        $form = new Form(new Partenaire());

        $form->text('nom', __('Nom'));
        $form->image('logo', __('Logo'))->removable()->uniqueName();
        $form->url('lien_site', __('Lien site'));
        $form->switch('est_visible', __('Est visible'))->default(1);
        $form->hidden('created_by', 'Created by')->default(Auth::guard('admin')->user()->id);
        $form->hidden('updated_by', 'Updated by')->default(Auth::guard('admin')->user()->id);
        // $form->number('deleted_by', __('Deleted by'));

        return $form;
    }
}
