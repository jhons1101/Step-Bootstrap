@extends('adminlte::layouts.app')

@section('contentheader_title')
    {{ trans('adminlte_lang::message.generateMagneticMedia') }}
@endsection


@section('css')
    <link href="{{ asset('/css/general/step-bootstrap.css') }}" rel="stylesheet">
    <style>
        .wizard .nav-tabs > li {
            width: 33.33%;
        }
    </style>
@endsection


@section('main-content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('adminlte_lang::message.generate') }}</div>
                <div class="panel-body">
                    <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-indent-left"></i>
                                        </span>
                                    </a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                        <span class="round-tab">
                                            <i class="glyphicon glyphicon-check"></i>
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
                                            {{-- <label for="">{{ trans('adminlte_lang::message.selectOperator') }}</label>
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
                                            </div> --}}
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
                                        <div class="col-xs-12 col-md-3">&nbsp;</div>
                                        <div class="col-xs-12 col-md-2">Unidad operativa</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="UNIVERSIDAD DEL BOSQUE">
                                                <span class="glyphicon glyphicon-equalizer form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">&nbsp;</div>
                                        <div class="col-xs-12 col-md-2">Periodo</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="Ene-2019">
                                                <span class="glyphicon glyphicon-calendar form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-3">&nbsp;</div>
                                        <div class="col-xs-12 col-md-2">Proveedor</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <div class="form-group has-feedback">
                                                <input class="form-control" name="newListOperator" value="">
                                                <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-md-3">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                        <div class="col-xs-12 col-md-4 text-center">
                                            <button type="button" class="btn btn-primary">
                                                Validar &nbsp; &nbsp;
                                                <span class="glyphicon glyphicon-transfer" aria-hidden="true"></span>
                                            </button>
                                            
                                        </div>
                                        <div class="col-xs-12 col-md-4">&nbsp;</div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br />
                                            <br />
                                            <br />
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Compañia</th>
                                                    <th>Periodo</th>
                                                    <th>Proveedor</th>
                                                    <th>Tipo documento</th>
                                                    <th>Valor retención</th>
                                                    <th>IBC</th>
                                                    <th>Valor doc</th>
                                                    <th>Total</th>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Jaime Lopéz</td>
                                                    <td>Nota crédito</td>
                                                    <td>52000</td>
                                                    <td>800000</td>
                                                    <td>2000000</td>
                                                    <td>1948000</td>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Andrea Rosero</td>
                                                    <td>Nota crédito</td>
                                                    <td>80000</td>
                                                    <td>1200000</td>
                                                    <td>3000000</td>
                                                    <td>2920000</td>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Carlos Rengifo</td>
                                                    <td>Factura</td>
                                                    <td>110000</td>
                                                    <td>1640000</td>
                                                    <td>4100000</td>
                                                    <td>3990000</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Compensar</td>
                                                    <td>Factura</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>242000</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <ul class="list-inline pull-right">
                                                {{-- <li>
                                                    <button type="button" class="btn btn-default prev-step">
                                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>&nbsp; &nbsp;
                                                        Anterior
                                                    </button>
                                                </li> --}}
                                                <li>
                                                    <button type="button" class="btn btn-primary next-step">
                                                        Procesar &nbsp; &nbsp;
                                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="complete">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <br />
                                            <br />
                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Compañia</th>
                                                    <th>Periodo</th>
                                                    <th>Proveedor</th>
                                                    <th>Tipo documento</th>
                                                    <th>Valor retención</th>
                                                    <th>Total</th>
                                                    <th>Estado</th>
                                                    <th>Mensaje</th>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Jaime Lopéz</td>
                                                    <td>Nota crédito</td>
                                                    <td>52000</td>
                                                    <td>1948000</td>
                                                    <td>Creado</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Andrea Rosero</td>
                                                    <td>Nota crédito</td>
                                                    <td>80000</td>
                                                    <td>2920000</td>
                                                    <td>Advertencia</td>
                                                    <td>El proveedor no existe</td>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Carlos Rengifo</td>
                                                    <td>Factura</td>
                                                    <td>110000</td>
                                                    <td>3990000</td>
                                                    <td>Creado</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                    <td>&nbsp;</td>
                                                </tr>
                                                <tr>
                                                    <td>Universidad del bosque</td>
                                                    <td>Ene-2019</td>
                                                    <td>Compensar</td>
                                                    <td>Factura</td>
                                                    <td>242000</td>
                                                    <td>&nbsp;</td>
                                                    <td>Creado</td>
                                                    <td>&nbsp;</td>
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
                                            <br />
                                            <br />
                                            <button type="submit" class="btn btn-primary btn-info-full next-step" onclick="return openModal('loading-modal')">
                                                Finalizar &nbsp;
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