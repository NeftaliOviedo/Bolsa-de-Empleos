@extends('layouts.app')

@section('content')
<div class="all">
    <div class="">
        <div id="app2">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="120px" class="demo-ruleForm">
                <div class="grid-container">
                    
                    <!-- div Company name -->
                    <div class="item1">Company name</div>

                    <!-- div Company Image -->
                    <div class="item2"><img id="imgCompany" src="https://i.imgur.com/ohZYczI.jpg" alt=""></div>
                    
                    <!-- div Posicon - Horario -->
                    <div class="item3">Posicion - horario</div> 
                    
                    <!-- div Sueldo -->
                    <div class="item4">Sueldo - $$$$</div>

                    <!-- div Informacion -->
                    <div class="item5">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</div>
                  </div>
                
                
            </el-form>
        </div>
    </div>
</div>

@endsection