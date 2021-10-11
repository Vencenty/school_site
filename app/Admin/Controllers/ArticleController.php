<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Admin;
use Encore\Admin\Auth\Database\Administrator;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;
use Illuminate\Support\Optional;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '文章管理';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', __('Id'));
        $grid->column('category.title', __('Category id'))->default('-');
        $grid->column('title', __('Title'));
        // $grid->column('sub_title', __('Sub title'));
        // $grid->column('content', __('Content'));
        $grid->column('operator', __('Operator'))->display(function () {
            return \optional(Administrator::find($this->operator))->username ?? '未知';
        });
        $grid->column('created_at', __('Created at'))->sortable();
        $grid->column('updated_at', __('Updated at'))->sortable();

        // $grid->

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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('sub_title', __('Sub title'));
        $show->field('content', __('Content'));
        $show->field('operator', __('Operator'));
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
        $form = new Form(new Article());

        $form->text('title', __('Title'));
        $form->text('sub_title', __('Sub title'));
        $form->editor('content', __('Content'));
        $form->hidden('operator', __('Operator'))->default(auth()->user()->id);

        return $form;
    }
}
