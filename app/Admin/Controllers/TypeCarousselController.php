<?php

namespace App\Admin\Controllers;

use App\Models\TypeCarousel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class TypeCarousselController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'TypeCarousel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new TypeCarousel());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));

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
        $show = new Show(TypeCarousel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new TypeCarousel());

        $form->text('nom', __('Nom'));

        return $form;
    }
}
