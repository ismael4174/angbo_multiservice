<?php

namespace App\Admin\Controllers;

use App\Models\Produit;
use App\Models\Service;
use App\Models\TypeProduit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Auth;

class ProduitController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Produit';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Produit());

        $grid->column('id', __('Id'));
        $grid->column('service_id', __('Service id'))->display(function ($id) {
            $query = Service::find($id);
            return $query ? $query->titre : 'Non renseigné';
        });
        $grid->column('type_produit_id', __('Type produit id'))->display(function ($id) {
            $query = TypeProduit::find($id);
            return $query ? $query->nom : 'Non renseigné';
        });
        $grid->column('titre', __('Titre'));
        $grid->column('description', __('Description'));
        $grid->column('prix', __('Prix'));
        $grid->column('devise', __('Devise'));
        $grid->column('image_principale', __('Image principale'))->image();
        $grid->column('galerie', __('Galerie'))->image();
        $grid->column('whatsapp_link', __('Whatsapp link'));
        $grid->column('disponible', __('Disponible'));
        $grid->column('slug', __('Slug'));
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
        $show = new Show(Produit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('service_id', __('Service id'));
        $show->field('type_produit_id', __('Type produit id'));
        $show->field('titre', __('Titre'));
        $show->field('description', __('Description'));
        $show->field('prix', __('Prix'));
        $show->field('devise', __('Devise'));
        $show->field('image_principale', __('Image principale'));
        $show->field('galerie', __('Galerie'));
        $show->field('whatsapp_link', __('Whatsapp link'));
        $show->field('disponible', __('Disponible'));
        $show->field('slug', __('Slug'));
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
        $form = new Form(new Produit());

        $form->select('service_id', __('Service id'))->options(Service::all()->pluck('titre', 'id'));
        $form->select('type_produit_id', __('Type produit id'))->options(TypeProduit::all()->pluck('nom', 'id'));
        $form->text('titre', __('Titre'));
        $form->textarea('description', __('Description'));
        $form->decimal('prix', __('Prix'));
        $form->text('devise', __('Devise'))->default('FCFA');
        $form->image('image_principale', __('Image principale'))->removable()->uniqueName();
        $form->multipleImage('galerie', __('Galerie'))
            ->removable()
            ->uniqueName()
            ->sortable()
            ->help('Sélectionnez plusieurs images pour la galerie du produit.');
        $form->url('whatsapp_link', __('Whatsapp link'));
        $form->switch('disponible', __('Disponible'))->default(1);
        $form->text('slug', __('Slug'));
        $form->hidden('created_by', 'Created by')->default(Auth::guard('admin')->user()->id);
        $form->hidden('updated_by', 'Updated by')->default(Auth::guard('admin')->user()->id);
        // $form->number('deleted_by', __('Deleted by'));

        return $form;
    }
}
