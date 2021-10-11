<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */

use \Encore\Admin\Form;
use \Encore\Admin\Grid;

Form::forget(['map', 'editor']);
Form::extend('editor', \Encore\WangEditor\Editor::class);


Grid::init(function (Grid $grid) {
    $grid->actions(function ($actions) {
        // $actions->disableDelete();

        // 去掉编辑
        // $actions->disableEdit();

        // 去掉查看
        $actions->disableView();

    });
    // 去掉删除
});

Form::init(function (Form $form) {

    $form->disableEditingCheck();

    $form->disableCreatingCheck();

    $form->disableViewCheck();

    $form->tools(function (Form\Tools $tools) {
        $tools->disableDelete();
        $tools->disableView();
        $tools->disableList();
    });
});
