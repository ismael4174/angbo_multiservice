<?php

namespace App\Admin\Controllers;

use App\Models\Newsletter;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsletterController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Newsletter';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Newsletter());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('prenom', __('Prenom'));
        $grid->column('email', __('Email'));
        $grid->column('telephone', __('Telephone'));
        $grid->column('statut', __('Statut'));
        $grid->column('source', __('Source'));
        $grid->column('date_inscription', __('Date inscription'));
        $grid->column('date_desinscription', __('Date desinscription'));

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
        $show = new Show(Newsletter::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('prenom', __('Prenom'));
        $show->field('email', __('Email'));
        $show->field('telephone', __('Telephone'));
        $show->field('statut', __('Statut'));
        $show->field('source', __('Source'));
        $show->field('date_inscription', __('Date inscription'));
        $show->field('date_desinscription', __('Date desinscription'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Newsletter());

        $form->text('nom', __('Nom'));
        $form->text('prenom', __('Prenom'));
        $form->email('email', __('Email'));
        $form->text('telephone', __('Telephone'));
        $form->text('statut', __('Statut'))->default('actif');
        $form->text('source', __('Source'));
        $form->datetime('date_inscription', __('Date inscription'))->default(date('Y-m-d H:i:s'));
        $form->datetime('date_desinscription', __('Date desinscription'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
