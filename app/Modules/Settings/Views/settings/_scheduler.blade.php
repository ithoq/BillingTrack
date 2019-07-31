<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('bt.past_days')</label>
            {!! Form::text('setting[schedulerPastdays]', config('bt.schedulerPastdays'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('bt.event_limit')</label>
            {!! Form::text('setting[schedulerEventLimit]', config('bt.schedulerEventLimit'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('bt.enable_cwo')</label>
            {!! Form::select('setting[schedulerCreateWorkorder]', ['0' => 'No', '1' => 'Yes'], config('bt.schedulerCreateWorkorder'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('bt.fc_themesystem')</label>
            {!! Form::select('setting[schedulerFcThemeSystem]', ['standard' => 'Standard', 'bootstrap4' => 'Bootstrap4', 'jquery-ui' => 'JQuery-ui'], config('bt.schedulerFcThemeSystem'), ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('bt.timestep')</label>
            {!! Form::select('setting[schedulerTimestep]',['60' => '60', '30' => '30', '15' => '15', '10' => '10','5' => '5','1' => '1'], config('bt.schedulerTimestep'), ['class' => 'form-control' ]) !!}
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>@lang('bt.fc_aspectratio')</label>
            {!! Form::number('setting[schedulerFcAspectRatio]', config('bt.schedulerFcAspectRatio'), ['min'=>'1', 'max'=>'2','step'=>'.05','class' => 'form-control' ]) !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label>@lang('bt.coreeventslist')</label>
            <div class="col-lg-8 col-sm-8">
                @foreach (\BT\Modules\Settings\Models\Setting::$coreevents as $entityType => $value)
                    <div class="form-check">
                        <label for="enabledCoreEvents{{ $value}}">
                            <input name="enabledCoreEvents[]" id="enabledCoreEvents{{ $value}}" type="checkbox" {{ (new \BT\Modules\Settings\Models\Setting())->isCoreeventEnabled($entityType) ? 'checked="checked"' : '' }} value="{{ $value }}">{{ trans("bt.{$entityType}") }}</label>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>@lang('bt.show_invoiced')</label>
            {!! Form::select('setting[schedulerDisplayInvoiced]', ['0' => 'No', '1' => 'Yes'], config('bt.schedulerDisplayInvoiced'), ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-md-5">
        <br>
        <span class="form-text text-muted">Display Defaults:</span><br>
        <span class="form-text text-muted">Quotes: if expires_at, else quote_date</span><br>
        <span class="form-text text-muted">Workorders: job_date</span><br>
        <span class="form-text text-muted">Invoices: If due_at, else invoice_date</span><br>
        <span class="form-text text-muted">Payments: paid_at</span><br>
        <span class="form-text text-muted">Expenses: expense_date</span><br>
        <span class="form-text text-muted">Projects: due_at</span><br>
        <span class="form-text text-muted">Tasks: start time of first timer in task</span>
    </div>
</div>
