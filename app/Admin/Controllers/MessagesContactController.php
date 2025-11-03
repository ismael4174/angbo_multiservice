<?php

namespace App\Admin\Controllers;

use App\Models\MessagesContact;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Http\Request;

class MessagesContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MessagesContact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MessagesContact());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('email', __('Email'));
        $grid->column('sujet', __('Sujet'));
        $grid->column('message', __('Message'));
        $grid->column('date_message', __('Date message'))->display(function ($date) {
            return \Carbon\Carbon::parse($date)->format('d/m/Y');
        });

        $grid->column('lu', __('Lu'))->display(function ($value) {
            return $value ? '<span class="label label-success">Lu</span>'
                : '<span class="label label-danger">Non lu</span>';
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
        $show = new Show(MessagesContact::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('email', __('Email'));
        $show->field('sujet', __('Sujet'));
        $show->field('message', __('Message'));
        $show->field('date_message', __('Date message'));
        $show->field('lu', __('Lu'));
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
        $form = new Form(new MessagesContact());

        $form->text('nom', __('Nom'));
        $form->email('email', __('Email'));
        $form->text('sujet', __('Sujet'));
        $form->textarea('message', __('Message'));
        $form->datetime('date_message', __('Date message'))->default(date('Y-m-d H:i:s'));
        $form->switch('lu', __('Lu'))->states([
            'on'  => ['value' => 1, 'text' => 'Lu', 'color' => 'success'],
            'off' => ['value' => 0, 'text' => 'Non lu', 'color' => 'danger'],
        ]);
        $form->hidden('created_by', 'Created by')->default(Auth::guard('admin')->user()->id);
        $form->hidden('updated_by', 'Updated by')->default(Auth::guard('admin')->user()->id);
        // $form->number('deleted_by', __('Deleted by'));

        return $form;
    }

}
