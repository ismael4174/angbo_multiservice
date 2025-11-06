<?php

namespace App\Admin\Controllers;

use App\Models\Caroussel;
use App\Models\TypeCarousel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CarousselController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Caroussel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Caroussel());

        $grid->column('id', __('Id'));
        $grid->column('type_carousel_id', __('Type carousel id'));
        $grid->column('titre', __('Titre'));
        $grid->column('sous_titre', __('Sous titre'));
        $grid->column('description', __('Description'));
        $grid->column('photo', __('Photo'));

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
        $show = new Show(Caroussel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type_carousel_id', __('Type carousel id'));
        $show->field('titre', __('Titre'));
        $show->field('sous_titre', __('Sous titre'));
        $show->field('description', __('Description'));
        $show->field('photo', __('Photo'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Caroussel());

        $form->select('type_carousel_id', __('Type de carrousel'))
            ->options(TypeCarousel::pluck('nom', 'id'))
            ->required();

        $form->text('titre', __('Titre'))->required();
        $form->text('sous_titre', __('Sous-titre'));
        $form->textarea('description', __('Description'));
        $form->image('photo', __('Photo'));


        return $form;
    }
}
