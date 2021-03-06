Vue.component('carta' ,{
  props:{
      info: {},
      url: '',
  },
  template: '<div style="display: block; "><div style="margin-left: 10px;margin-bottom: 10px" class="el-col el-col-4 el-col-offset-0"><div class="el-card is-always-shadow"><!----><div class="el-card__body" style="padding: 0px;"><img style="min-width: 235px; min-height: 235px;" :src="info.logo" class="image"> <div style="padding: 14px;"><span><strong>{{info.company}}</strong></span><br> <span>{{info.position}}</span><span>{{info.position}}</span> <div class="bottom clearfix"><time class="time"></time><a><button type="button" class="el-button el-button--primary btn-block btn-sm" @click="borrar(url)" ><i class="el-icon-delete"></i><!----><!----><span></span></></a></div></div></div></div></div></div>'
});

var app = new Vue({
  el: "#app_AdminJobs",
  data: {
    selected: '',
    selectedField:'company',
      users: [],
      buscador: '',
      meta: {},
        links: {},
        categories: [],
  },
 
  mounted: function() {
    axios.get('api/Jobs')
    .then(response => {
        this.users = response.data.data;
       
        
    })
    .catch(error => {
        console.log(error);
    });
    axios.get("api/category/").then((result) => {
        this.categories = result.data.data;
     
    
    });
    this.fetchStories()
  },
  methods:{
      
      borrar(id){
        axios.delete('api/Job/delete/' + id) 
        .then(response => {
          console.log(response);
          location.reload();

        });
           
          }, refresh(){
            location.reload()
            },
            searchData() {
                url = "/api/search/Jobs/"+this.selectedField +"/"+
                this.buscador +
                  "?page=1";
                if(this.buscador == ''){
                    this.fetchStories();
                }else{
                    axios
                    .get(url)
                    .then(response => {
                      this.users = response.data.data;
                      this.makePagination(response.data);
                     
                    })
                    .catch(e => {
                      console.log(e);
                    });
                    this.fetchStories(url)
                }
                
               
              },
            fetchStories(page_url) {
                url = page_url || 'api/Jobs'
                axios.get(url)
                    .then( response => {
                        console.log(response.data.links)
                        this.makePagination(response.data)
                        this.users = response.data.data
                    });
            },
            onChange(){
                axios.get('/api/Jobs/category/'+this.selected)
                .then(response => {
                    this.users = response.data.data
                });
    },
            makePagination(data){
                let meta = {
                    current_page: data.meta.current_page,
                    last_page: data.meta.last_page,
                    
                    
                }
                let links ={
                    next: data.links.next,
                    prev: data.links.prev
                }
     
    
                this.meta = meta
                this.links = links
    
            }
          
          
  }
 
});
