@extends('layouts.app')

@section('content')
@if(Auth::user()->type==1)
<div class="all">
    <h3> Publicar empleo</h3>
    <hr>
    <div class="principal">
        <div id="app_post">
            <el-form :model="ruleForm" ref="ruleForm" method="POST" label-width="120px" class="demo-ruleForm">
                <!-- inputs Informacion -->
                <el-form-item label="Categoria:" required>
                    <el-col :span="11">
                        <el-select v-model="ruleForm.job_category" placeholder="Seleccionar categoria" style="width: 100%;">                            
                            <el-option v-for="cat in categories" v-bind:label="cat.category" v-bind:value="cat.category"></el-option>
                        </el-select>
                    </el-col>
                </el-form-item>
                
                <!-- select Tipo de Empleo-->
                <el-form-item label="Tipo de empleo:">
                    <el-radio-group v-model="ruleForm.time_type">
                    <el-radio label="Full time"></el-radio>
                    <el-radio label="Part time"></el-radio>
                    <el-radio label="Free lance"></el-radio>
                    </el-radio-group>
                </el-form-item>

                <!-- input URL -->
                <el-form-item label="URL">
                    <el-input type="text" v-model="ruleForm.URL" placeholder="URL"></el-ipunt>
                </el-form-item>

                <!-- inputs Informacion -->
                <el-form-item label="Informacion" required>
                    <el-col :span="11" style="margin-right: 20px;">
                        <el-form-item>
                            <el-input type="text" v-model="ruleForm.location" placeholder="Ubicacion"></el-ipunt>
                        </el-form-item>
                    </el-col>
                    <el-col :span="12">
                        <el-input type="text" v-model="ruleForm.position" placeholder="Posicion"></el-ipunt>
                    </el-col>
                </el-form-item>

                <!-- textare Descripcion -->
                <el-form-item label="Descripcion">
                    <el-input type="textarea" v-model="ruleForm.description"></el-input>
                </el-form-item>

                <!-- textare Aplicar -->
                <el-form-item label="Como aplicar">
                    <el-input type="textarea" v-model="ruleForm.application"></el-input>
                </el-form-item>
                
                <!-- Botones -->
                <el-form-item>
                    <el-button type="success" v-on:click="create()">Crear</el-button>
                    <el-button v-on:click="">Limpiar</el-button>
                </el-form-item>

                <!-- Advertencia, no tocar -->
                    <input v-model="ruleForm.company" name="company" id="company" value="{{Auth::user()->name }}" hidden>
                    <input v-model="ruleForm.id_company" name="id_company" id="id_company" value="{{Auth::user()->id }}" hidden>
                    <input v-model="ruleForm.logo" name="logo" id="logo" value="{{Auth::user()->logo }}" hidden>
                    <input v-model="ruleForm.email" name="email" id="email" value="{{Auth::user()->email }}" hidden>
            </el-form>
        </div>
    </div>
</div>
@else

<div style="margin:auto; text-align:center; margin-top:20px ">
<img src="https://image.flaticon.com/icons/png/512/61/61457.png">

</div>
@endif
@endsection