Vue.component('padre',{
    template:
    `
    <fieldset>
    <div id ="componente"
    >
 


    <el-menu :default-active="activeIndex" class="el-menu-demo" mode="horizontal" @select="handleSelect">
 
    <el-menu-item index="1">Inicio</el-menu-item>
   
    <el-submenu index="2">
      <template slot="title">Informacion</template>
      <el-menu-item index="2-1">Empleo Disponibles</el-menu-item>
      <el-menu-item index="2-2">Empleos</el-menu-item>
      <el-menu-item index="2-3">Informacion de Empleo</el-menu-item>
      
    </el-submenu>
    <el-submenu index="3">
    <template slot="title">Configuracion</template>
    <el-menu-item index="2-1">Registrar Empleo</el-menu-item>
    <el-menu-item index="2-2">Confgurar Empleo</el-menu-item>
    <el-menu-item index="2-3">Configuar Ultimos Puestos</el-menu-item>
    <el-menu-item index="2-4">Configurar Categorias</el-menu-item>
    
  </el-submenu>
    <el-menu-item index="4"><a href="https://habbo.es" target="_blank">Salir</a></el-menu-item>
  </el-menu>
  <div class="line"></div>

</el-menu-item>

  </el-menu>
</el-col>
<el-col :span="12">
    </div>
    </fieldset>
    
    `, 
    
        });