<?php

namespace App\Admin\Controllers;

use App\Models\Marque;
use App\Models\Vehicule;
use Carbon\Carbon;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class VehiculeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Vehicule';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Vehicule());

        $grid->column('id', __('Id'));
        $grid->column('titre', __('Titre'));
        $grid->column('marque_id', __('Marque id'))->display(function ($id) {
            $query = Marque::find($id);
            return $query ? $query->nom : 'Non renseigné';
        });
        $grid->column('modele', __('Modele'));
        $grid->column('annee', __('Annee'))->display(function ($date) {
            return Carbon::parse($date)->format('d/m/Y');
        });
        $grid->column('immatriculation', __('Immatriculation'));
        $grid->column('carburant', __('Carburant'));
        $grid->column('puissance', __('Puissance'));
        $grid->column('kilometrage', __('Kilometrage'));
        $grid->column('transmission', __('Transmission'));
        $grid->column('nombre_places', __('Nombre places'));
        $grid->column('nombre_portes', __('Nombre portes'));
        $grid->column('couleur', __('Couleur'));
        $grid->column('type_transac', __('Type transac'));
        $grid->column('prix', __('Prix'));
        $grid->column('devise', __('Devise'));
        $grid->column('whatsapp_contact', __('Whatsapp contact'));
        $grid->column('disponible', __('Disponible'));
        $grid->column('image_principale', __('Image principale'))->image();
        $grid->column('galerie', __('Galerie'))->image();
        $grid->column('description', __('Description'));
        $grid->column('en_vedette', __('En vedette'));
        $grid->column('archive', __('Archive'));
        $grid->column('created_at', __('Created at'))->display(function ($date) {
            return Carbon::parse($date)->format('d/m/Y');
        });
        // $grid->column('updated_at', __('Updated at'))->display(function ($date) {
        //     return Carbon::parse($date)->format('d/m/Y');
        // });

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
        $show = new Show(Vehicule::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('titre', __('Titre'));
        $show->field('marque_id', __('Marque id'));
        $show->field('modele', __('Modele'));
        $show->field('annee', __('Annee'));
        $show->field('immatriculation', __('Immatriculation'));
        $show->field('carburant', __('Carburant'));
        $show->field('puissance', __('Puissance'));
        $show->field('kilometrage', __('Kilometrage'));
        $show->field('transmission', __('Transmission'));
        $show->field('nombre_places', __('Nombre places'));
        $show->field('nombre_portes', __('Nombre portes'));
        $show->field('couleur', __('Couleur'));
        $show->field('type_transac', __('Type transac'));
        $show->field('prix', __('Prix'));
        $show->field('devise', __('Devise'));
        $show->field('whatsapp_contact', __('Whatsapp contact'));
        $show->field('disponible', __('Disponible'));
        $show->field('image_principale', __('Image principale'));
        $show->field('galerie', __('Galerie'));
        $show->field('description', __('Description'));
        $show->field('en_vedette', __('En vedette'));
        $show->field('archive', __('Archive'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Vehicule());

        $form->text('titre', __('Titre'));
        $form->select('marque_id', __('Marque id'))->options(Marque::all()->pluck('nom', 'id'));
        $form->text('modele', __('Modele'));
        $form->date('annee', __('Annee'))->default(date('Y-m-d'));
        $form->text('immatriculation', __('Immatriculation'));
        $form->text('carburant', __('Carburant'));
        $form->number('puissance', __('Puissance'));
        $form->number('kilometrage', __('Kilometrage'));
        $form->text('transmission', __('Transmission'));
        $form->number('nombre_places', __('Nombre places'));
        $form->number('nombre_portes', __('Nombre portes'));
        $form->text('couleur', __('Couleur'));
        $form->text('type_transac', __('Type transac'))->default('vente');
        $form->decimal('prix', __('Prix'));
        $form->text('devise', __('Devise'))->default('FCFA');
        $form->text('whatsapp_contact', __('Whatsapp contact'));
        $form->switch('disponible', __('Disponible'))->default(1);
        $form->image('image_principale', __('Image principale'))->removable()->uniqueName();
        $form->multipleImage('galerie', __('Galerie'))->removable()
            ->uniqueName()
            ->sortable()
            ->help('Sélectionnez plusieurs images pour la galerie du produit.');
        $form->textarea('description', __('Description'));
        $form->switch('en_vedette', __('En vedette'));
        $form->switch('archive', __('Archive'));

        return $form;
    }
}
