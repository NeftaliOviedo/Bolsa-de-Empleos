const app = new Vue({

    el: '#viewjob',

        methods: {
          deleteRow(index, rows) {
            rows.splice(index, 1);
          }
        },
        data() {
          return {
            buscador:[''],
            tableData: [{
             
              date: '2016-05-03',
              name: 'Tom',
              state: 'California',
              city: 'Los Angeles',
              address: 'No. 189, Grove St, Los Angeles',
              zip: 'CA 90036'
            }]
          }
        }
      
    })