Vue.component('todo-item', {
    props: ['todo'],
    template: '<li>{{todo.text}}</li>'

})

Vue.component('lista', {
    props: ['nombre','apellidos'],
    template: '<li>{{nombre}}</li>'
})

Vue.component('carta' ,{
    props:{
        info: [],
        url: ''
    },
    template: '<div style="display: block; "><div style="margin-left: 10px;margin-bottom: 10px" class="el-col el-col-4 el-col-offset-0"><div class="el-card is-always-shadow"><!----><div class="el-card__body" style="padding: 0px;"><img style="min-width: 235px; min-height: 235px;" src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image"> <div style="padding: 14px;"><span><strong>{{info.company}}</strong></span><br> <span>{{info.time_type}}</span> <div class="bottom clearfix"><time class="time"></time><a v-bind:href="url + info.id"><button type="button" class="el-button button el-button--text"><!----><!----><span>Mostrar</span></button></a></div></div></div></div></div></div>'
});

var app = new Vue({
    el: "#app_ShowJobs",
    data: {
        users: '',
        buscador: '',
        groceryList: [
            { id: 0, text: 'Vegetables' },
            { id: 1, text: 'Cheese' },
            { id: 2, text: 'Whatever else humans are supposed to eat' }
        ],
    },


    computed: {
        filteredList() {
          return this.users.filter(user => {
            return user.company.toLowerCase().includes(this.buscador.toLowerCase())
        })
        }
    },

    mounted: function() {
        axios.get('http://127.0.0.1:8000/api/Jobs')
        .then(response => {
            this.users = response.data.data;
        })
        .catch(error => {
            console.log(error);
        });      
    },
    
        
    
    methods: {
        hola (id){
            window.open("Details/"+id, '_self');
        },

        selectCategory(category) {
           axios.delete('http://127.0.0.1:8000/api/category/' + category)
              .then(response => {
                    this.users = response.data.data
             });

       }
        
    
}
     
});
