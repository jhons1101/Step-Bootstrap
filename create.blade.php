@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.setMagneticMedia') }}
@endsection


@section('css')
    <link href="{{ asset('/css/general/step-bootstrap.css') }}" rel="stylesheet">
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('adminlte_lang::message.set') }}</div>
                <div class="panel-body">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-user"></i>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-list-alt"></i>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-list-alt"></i>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab" title="Step 4">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-list-alt"></i>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-ok"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <form role="form" method="POST" action="{{ route('literals.store') }}">
                            @csrf
                            <div class="tab-content">
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <label for="">{{ trans('adminlte_lang::message.selectOperator') }}</label>
                                            <div class="form-group has-feedback">
                                                <select class="form-control" name="selectOperator" value="{{ old('selectOperator') }}">
                                                    <option value="">Seleccione</option>
                                                    <option value="">Aportes en línea</option>
                                                    <option value="">Mi planillla</option>
                                                    <option value="">Asopagos</option>
                                                    <option value="">FedeCajas (pila fácil)</option>
                                                    <option value="">Simple</option>
                                                    <option value="">Arus (enlace operativo)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 text-right">
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step">
                                                        Siguiente &nbsp; &nbsp;
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step2">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <label for="">{{ trans('adminlte_lang::message.newList') }}</label>
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="TIPO_RIESGO_ARL" onkeyup="this.value = this.value.toUpperCase();">
                                                <span class="glyphicon glyphicon-equalizer form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br />
                                            <br />
                                            <button type="button" class="btn btn-primary">
                                                Crear valores &nbsp; &nbsp;
                                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                            </button>
                                            <br />
                                            <br />
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Descripción</th>
                                                    <th>% cotización</th>
                                                    <th>Fecha desde</th>
                                                    <th>Fecha hasta</th>
                                                    <th>Activo</th>
                                                    <th>Lista</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="R1" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="Riesgo 1" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="0,552" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Nov-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="30-Mar-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active" checked>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="R1" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="Riesgo 1" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="0,530" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="30-Oct-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp; &nbsp;
                                                        Anterior
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step">
                                                        Siguiente &nbsp; &nbsp;
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <label for="">{{ trans('adminlte_lang::message.newList') }}</label>
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="LISTA_EPS" onkeyup="this.value = this.value.toUpperCase();">
                                                <span class="glyphicon glyphicon-equalizer form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br />
                                            <br />
                                            <button type="button" class="btn btn-primary">
                                                Crear valores &nbsp; &nbsp;
                                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                            </button>
                                            <br />
                                            <br />
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Descripción</th>
                                                    <th>% cotización</th>
                                                    <th>Fecha desde</th>
                                                    <th>Fecha hasta</th>
                                                    <th>Activo</th>
                                                    <th>Lista</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="EPS2019" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="EPS" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="12,5" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active" checked>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="EPS2018" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="EPS" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="11,8" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp; &nbsp;
                                                        Anterior
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step">
                                                        Siguiente &nbsp; &nbsp;
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <label for="">{{ trans('adminlte_lang::message.newList') }}</label>
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="LISTA_PENSION" onkeyup="this.value = this.value.toUpperCase();">
                                                <span class="glyphicon glyphicon-equalizer form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br />
                                            <br />
                                            <button type="button" class="btn btn-primary">
                                                Crear valores &nbsp; &nbsp;
                                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                            </button>
                                            <br />
                                            <br />
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Descripción</th>
                                                    <th>% cotización</th>
                                                    <th>Fecha desde</th>
                                                    <th>Fecha hasta</th>
                                                    <th>Activo</th>
                                                    <th>Lista</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="PENSION2019" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="PENSION" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="12" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active" checked>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="PENSION2018" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="PENSION" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="12" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2018" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp; &nbsp;
                                                        Anterior
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step">
                                                        Siguiente &nbsp; &nbsp;
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="complete">
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <label for="">{{ trans('adminlte_lang::message.newList') }}</label>
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="TIPO_RETENCION" onkeyup="this.value = this.value.toUpperCase();">
                                                <span class="glyphicon glyphicon-equalizer form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br />
                                            <br />
                                            <button type="button" class="btn btn-primary">
                                                Crear valores &nbsp; &nbsp;
                                                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
                                            </button>
                                            <br />
                                            <br />
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Código</th>
                                                    <th>Descripción</th>
                                                    <th>% cotización</th>
                                                    <th>Fecha desde</th>
                                                    <th>Fecha hasta</th>
                                                    <th>Activo</th>
                                                    <th>Lista</th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="EPS" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="Retención EPS" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active" checked>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="LISTA_EPS" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="ARL" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="Retención ARL" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active" checked>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="TIPO_RIESGO_ARL" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <input type="text" value="PENSIÓN" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="Pensión" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="" size="10" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="01-Ene-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="text" value="31-Dic-2019" size="12" class="form-control">
                                                    </td>
                                                    <td>
                                                        <input type="checkbox" name="active" id="active" checked>
                                                    </td>
                                                    <td>
                                                        <input type="text" value="LISTA_PENSION" size="15" class="form-control">
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="list-inline pull-right">
                                                <li>
                                                    <button type="button" class="btn btn-default prev-step">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp; &nbsp;
                                                        Anterior
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <button type="submit" class="btn btn-primary btn-info-full next-step" onclick="return openModal('loading-modal')">
                                                {{ trans('adminlte_lang::message.save') }} &nbsp;
                                                <span class="glyphicon glyphicon-saved" aria-hidden="true"></span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('/js/general/step-bootstrap.js') }}"></script>
@endsection