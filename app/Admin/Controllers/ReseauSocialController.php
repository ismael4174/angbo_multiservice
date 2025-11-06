<?php

namespace App\Admin\Controllers;

use App\Models\ReseauSocial;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ReseauSocialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ReseauSocial';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ReseauSocial());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('icone', __('Icone'));
        $grid->column('lien', __('Lien'));

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
        $show = new Show(ReseauSocial::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('icone', __('Icone'));
        $show->field('lien', __('Lien'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ReseauSocial());

        $form->text('nom', __('Nom'));
        $form->text('icone', __('Icone'));
        $form->textarea('lien', __('Lien'));

        return $form;
    }
}
