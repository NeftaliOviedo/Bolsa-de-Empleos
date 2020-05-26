@extends('layouts.app')

@section('content')
 <!-- Div App relacionado con el archivo js -->
 <div id="app_MoreJobs">
    <div id="componente1">
      <!-- Componente que es donde esta el Nav-->

    </div> 
     <!-- Buscador-->
      <div id="div12"> 
        <!-- Input Buscador-->
       <el-input placeholder="Buscar un trabajo" prefix-icon="el-icon-search" id="search" name="search"  v-model="buscador">
     </el-input> 
      </div>
              <!-- Button Buscar -->
     <div id="div13"> 
      <el-button type="primary" icon="el-icon-search" circle></el-button>
     </div>
         <!-- Buttom Ver mas-->
        
        
       
       
        
      
       <!-- Tabla -->
    <div id="div16">
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
       
      </el-table>
    </template>
    </div>
    
    
         <!-- Buttom de Post a Job-->
    
    </div>
    @endsection