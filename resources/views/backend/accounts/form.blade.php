{!! form_start($form) !!}
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">{{ trans('motor-backend::backend/global.base_info') }}</h3>
    </div>
    <div class="box-body">
        {!! form_until($form, 'has_pos') !!}
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
        {!! form_row($form->submit) !!}
    </div>
</div>
{!! form_end($form) !!}
