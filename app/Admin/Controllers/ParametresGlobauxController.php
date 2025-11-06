<?php

namespace App\Admin\Controllers;

use App\Models\ParametresGlobaux;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ParametresGlobauxController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ParametresGlobaux';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ParametresGlobaux());

        $grid->column('id', __('Id'));
        $grid->column('nom_directeur', __('Nom directeur'));
        $grid->column('logo', __('Logo'));
        $grid->column('nom_entreprise', __('Nom entreprise'));
        $grid->column('localisation', __('Localisation'));
        $grid->column('annee_experience', __('Annee experience'));
        $grid->column('titre', __('Titre'));
        $grid->column('caracteristique_1', __('Caracteristique 1'));
        $grid->column('caracteristique_2', __('Caracteristique 2'));
        $grid->column('caracteristique_3', __('Caracteristique 3'));
        $grid->column('caracteristique_4', __('Caracteristique 4'));
        $grid->column('caracteristique_5', __('Caracteristique 5'));
        $grid->column('caracteristique_6', __('Caracteristique 6'));
        $grid->column('email', __('Email'));
        $grid->column('telephone', __('Telephone'));
        $grid->column('mobile', __('Mobile'));
        $grid->column('heure_ouverture', __('Heure ouverture'));
        $grid->column('heure_fermerture', __('Heure fermerture'));
        $grid->column('slogan', __('Slogan'));

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
        $show = new Show(ParametresGlobaux::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nom_directeur', __('Nom directeur'));
        $show->field('logo', __('Logo'));
        $show->field('nom_entreprise', __('Nom entreprise'));
        $show->field('localisation', __('Localisation'));
        $show->field('annee_experience', __('Annee experience'));
        $show->field('titre', __('Titre'));
        $show->field('caracteristique_1', __('Caracteristique 1'));
        $show->field('caracteristique_2', __('Caracteristique 2'));
        $show->field('caracteristique_3', __('Caracteristique 3'));
        $show->field('caracteristique_4', __('Caracteristique 4'));
        $show->field('caracteristique_5', __('Caracteristique 5'));
        $show->field('caracteristique_6', __('Caracteristique 6'));
        $show->field('email', __('Email'));
        $show->field('telephone', __('Telephone'));
        $show->field('mobile', __('Mobile'));
        $show->field('heure_ouverture', __('Heure ouverture'));
        $show->field('heure_fermerture', __('Heure fermerture'));
        $show->field('slogan', __('Slogan'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new ParametresGlobaux());

        $form->text('nom_directeur', __('Nom directeur'));
        $form->text('logo', __('Logo'));
        $form->text('nom_entreprise', __('Nom entreprise'));
        $form->text('localisation', __('Localisation'));
        $form->number('annee_experience', __('Annee experience'));
        $form->text('titre', __('Titre'));
        $form->text('caracteristique_1', __('Caracteristique 1'));
        $form->text('caracteristique_2', __('Caracteristique 2'));
        $form->text('caracteristique_3', __('Caracteristique 3'));
        $form->text('caracteristique_4', __('Caracteristique 4'));
        $form->text('caracteristique_5', __('Caracteristique 5'));
        $form->text('caracteristique_6', __('Caracteristique 6'));
        $form->email('email', __('Email'));
        $form->text('telephone', __('Telephone'));
        $form->mobile('mobile', __('Mobile'));
        $form->datetime('heure_ouverture', __('Heure ouverture'))->default(date('Y-m-d H:i:s'));
        $form->datetime('heure_fermerture', __('Heure fermerture'))->default(date('Y-m-d H:i:s'));
        $form->text('slogan', __('Slogan'));

        return $form;
    }
}
