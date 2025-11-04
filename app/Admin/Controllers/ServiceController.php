<?php

namespace App\Admin\Controllers;

use App\Models\Service;
use App\Models\TypeService;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Auth;

class ServiceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Service';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Service());

        $grid->column('id', __('Id'));
        $grid->column('type_service_id', __('Type service id'))->display(function ($id) {
            $query = TypeService::find($id);
            return $query ? $query->nom : 'Non renseigné';
        });
        $grid->column('titre', __('Titre'));
        $grid->column('description', __('Description'));
        $grid->column('image', __('Image'))->image();
        $grid->column('galerie', __('Galerie'))->image();
        $grid->column('slug', __('Slug'));
        $grid->column('ordre_affichage', __('Ordre affichage'));
        $grid->column('est_actif', __('Est actif'));
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
        $show = new Show(Service::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('type_service_id', __('Type service id'));
        $show->field('titre', __('Titre'));
        $show->field('description', __('Description'));
        $show->field('image', __('Image'));
        $show->field('galerie', __('Galerie'));
        $show->field('slug', __('Slug'));
        $show->field('ordre_affichage', __('Ordre affichage'));
        $show->field('est_actif', __('Est actif'));
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
        $form = new Form(new Service());

        $form->select('type_service_id', __('Type service id'))->options(TypeService::all()->pluck('nom', 'id'));
        $form->text('titre', __('Titre'));
        $form->textarea('description', __('Description'));
        $form->image('image', __('Image'))->removable()->uniqueName();
        $form->multipleImage('galerie', __('Galerie'))
            ->removable()
            ->uniqueName()
            ->sortable()
            ->help('Sélectionnez plusieurs images pour la galerie du produit.');
        $form->text('slug', __('Slug'));
        $form->number('ordre_affichage', __('Ordre affichage'));
        $form->switch('est_actif', __('Est actif'))->default(1);
        $form->hidden('created_by', 'Created by')->default(Auth::guard('admin')->user()->id);
        $form->hidden('updated_by', 'Updated by')->default(Auth::guard('admin')->user()->id);
        // $form->number('deleted_by', __('Deleted by'));

        return $form;
    }
}
