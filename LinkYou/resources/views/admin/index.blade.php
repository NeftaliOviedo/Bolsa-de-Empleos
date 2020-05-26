@extends('layouts.app')

@section('content')

<!-- Div App relacionado con el archivo js -->
<div id="app_ShowJobs">
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->
    </div> 
     <!-- Buscador-->
      <div id="div2"> 
        <!-- Input Buscador-->
       <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador">
     </el-input> 
      </div>
              <!-- Button Buscar -->
     <div id="div3"> 
      <el-button type="primary" icon="el-icon-search" circle></el-button>
     </div>
         <!-- Buttom Ver mas-->
        
        
       
        <div id="post"> 
          <el-button type="primary"  name="postear"  id="postear" round >Post a Job<i class="el-icon-edit"></i></el-button>
        </div>
        
        
      
       <!-- Tabla -->
    <div id="div6">
        <template>
      <el-table
        :data="tableData"
        style="width: 100%"
        max-height="250">
        <el-table-column
          fixed
          prop="date"
          label="Fecha"
          width="150">
        </el-table-column>
        <el-table-column
          prop="name"
          label="Nombre"
          width="120">
        </el-table-column>
        <el-table-column
          prop="state"
          label="Estado"
          width="120">
        </el-table-column>
        <el-table-column
          prop="city"
          label="Ciudad"
          width="120">
        </el-table-column>
        <el-table-column
          prop="address"
          label="Dirección"
          width="300">
        </el-table-column>
        <el-table-column
          prop="zip"
          label="Código postal"
          width="120">
        </el-table-column>
        <el-table-column
          fixed="right"
          label="Operaciones"
          width="120">
          <template slot-scope="scope">
            <el-button
    
              type="text"
              size="small">
            Editar
            </el-button>
            <el-button
            @click.native.prevent="deleteRow(scope.$index, tableData)"
            type="text"
            size="small">
            Eliminar
          </el-button>
          </template>
        </el-table-column>
      </el-table>
    </template>
    </div>
    <div id="div5">
      <el-button  type="primary"  name="vermas"   id="vermas" 
        round  >Ver Mas<i class="el-icon-view"></i></el-button> 
    </div>
    
         <!-- Buttom de Post a Job-->
    
    </div>


@endsection