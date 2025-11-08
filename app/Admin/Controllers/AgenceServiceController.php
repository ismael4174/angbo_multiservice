<?php

namespace App\Admin\Controllers;

use App\Models\Agence;
use App\Models\AgenceService;
use App\Models\ServiceAgence;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AgenceServiceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'AgenceService';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new AgenceService());

        $grid->column('agence_id', __('Agence'))->display(function ($id) {
            $query = Agence::find($id);
            return $query ? $query->nom : 'Non renseigné';
        });
        $grid->column('service_id', __('Service'))->display(function ($id) {
            $query = ServiceAgence::find($id);
            return $query ? $query->nom : 'Non renseigné';
        });

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
        $show = new Show(AgenceService::findOrFail($id));

        $show->field('agence_id', __('Agence id'));
        $show->field('service_id', __('Service id'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new AgenceService());

        $form->select('agence_id', __('Agence '))->options(Agence::all()->pluck('nom', 'id'));
        $form->select('service_id', __('Service '))->options(ServiceAgence::all()->pluck('nom', 'id'));

        return $form;
    }
}
