<?php

namespace App\Admin\Controllers;

use App\Models\Category;
use App\Models\Service;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Auth;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('description', __('Description'));
        $grid->column('slug', __('Slug'));
        $grid->column('service_id', __('Service'))->display(function ($id) {
            $query = Service::find($id);
            return $query ? $query->titre : 'Non renseigné';
        });
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('description', __('Description'));
        $show->field('slug', __('Slug'));
        $show->field('service_id', __('Service id'));
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
        $form = new Form(new Category());

        $form->text('nom', __('Nom'));
        $form->textarea('description', __('Description'));
        $form->text('slug', __('Slug'));
        $form->select('service_id', __('Service'))->options(Service::pluck('titre', 'id'));
        $form->hidden('created_by', 'Created by')->default(Auth::guard('admin')->user()->id);
        $form->hidden('updated_by', 'Updated by')->default(Auth::guard('admin')->user()->id);
        // $form->number('deleted_by', __('Deleted by'));

        return $form;
    }
}
