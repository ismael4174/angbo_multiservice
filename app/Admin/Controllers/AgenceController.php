<?php

namespace App\Admin\Controllers;

use App\Models\Agence;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AgenceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Agence';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Agence());

        $grid->column('id', __('Id'));
        $grid->column('nom', __('Nom'));
        $grid->column('adresse', __('Adresse'));
        $grid->column('telephone', __('Telephone'));
        $grid->column('email', __('Email'));
        $grid->column('responsable', __('Responsable'));
        $grid->column('latitude', __('Latitude'));
        $grid->column('longitude', __('Longitude'));
        $grid->column('ville', __('Ville'));
        $grid->column('commune', __('Commune'));
        $grid->column('quartier', __('Quartier'));
        $grid->column('localisation', __('Localisation'));
        $grid->column('pays', __('Pays'));
        $grid->column('description', __('Description'));
        $grid->column('heure_ouverture', __('Heure ouverture'));
        $grid->column('heure_fermeture', __('Heure fermeture'));
        $grid->column('statut', __('Statut'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));

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
        $show = new Show(Agence::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom', __('Nom'));
        $show->field('adresse', __('Adresse'));
        $show->field('telephone', __('Telephone'));
        $show->field('email', __('Email'));
        $show->field('responsable', __('Responsable'));
        $show->field('latitude', __('Latitude'));
        $show->field('longitude', __('Longitude'));
        $show->field('ville', __('Ville'));
        $show->field('commune', __('Commune'));
        $show->field('quartier', __('Quartier'));
        $show->field('localisation', __('Localisation'));
        $show->field('pays', __('Pays'));
        $show->field('description', __('Description'));
        $show->field('heure_ouverture', __('Heure ouverture'));
        $show->field('heure_fermeture', __('Heure fermeture'));
        $show->field('statut', __('Statut'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Agence());

        $form->text('nom', __('Nom'));
        $form->textarea('adresse', __('Adresse'));
        $form->text('telephone', __('Telephone'));
        $form->email('email', __('Email'));
        $form->text('responsable', __('Responsable'));
        $form->decimal('latitude', __('Latitude'));
        $form->decimal('longitude', __('Longitude'));
        $form->text('ville', __('Ville'));
        $form->text('commune', __('Commune'));
        $form->text('quartier', __('Quartier'));
        $form->textarea('localisation', __('Localisation'));
        $form->text('pays', __('Pays'))->default('Côte d\'Ivoire');
        $form->textarea('description', __('Description'));
        $form->datetime('heure_ouverture', __('Heure ouverture'))->default(date('Y-m-d H:i:s'));
        $form->datetime('heure_fermeture', __('Heure fermeture'))->default(date('Y-m-d H:i:s'));
        $form->text('statut', __('Statut'))->default('active');

        return $form;
    }
}
