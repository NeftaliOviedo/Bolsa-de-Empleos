var vm5 = new Vue({
    el: "#app_post",
    data() {
        return {
          id: "",
            ruleForm: {
              created_at: "",
              updated_at: "",
              company: "",
              logo: "",
              URL: "",
              time_type: "Full time",
              position: "",
              location: "",
              job_category: "",
              description: "",
              email: "",
              application: "",
              id_company: 25668,
          }
        }
    },
    beforeMount(){
      this.id = $("input[name=idEdit]").val();
    },
    mounted() {
      axios.get('http://127.0.0.1:8000/api/Job/'+this.id)
      .then(response => {
          this.ruleForm = response.data.data;
          console.log(this.ruleForm)
      })
      .catch(error => {
          console.log(error);
      });
    },
    methods: {
      update (){
        axios.put("http://127.0.0.1:8000/api/update/Job", this.ruleForm).then((result) => {
          console.log(result);
        });
      }
    }
});

/*function() {
  axios.put("http://127.0.0.1:8000/api/update/Job", this.job).then((result) => {
      console.log(result);
  });
}*/

/*function() {
      axios.post("http://127.0.0.1:8000/api/create/Job", this.job).then((result) => {
          console.log(result);
      });
  }*/