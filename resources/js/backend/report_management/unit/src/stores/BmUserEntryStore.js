import { defineStore } from "pinia";

export const store = defineStore(`bm_user_entry_store`, {
    state: () => ({
        bm_user_entry:[],
        total_paid:[],
        is_permitted: false,
        unit_user_all:[]
        
    }),
    actions: {
        show_bm_user_entry :async function(){
            let response = await  axios.get('/bm-user-entry/all');

            if(response.data.status == "success"){
                this.bm_user_entry = response?.data?.data?.data;
                console.log("from store user entry" ,this.bm_entry);
                
            }
        },

        delete_entry : function(entry_id){
            if (window.confirm("Are you sure you want to delete this Entry?")) {
                this.submit_delete_form(entry_id);
            } else {
                window.toaster('Entry is safe', 'info');
            }

        },

        submit_delete_form :async function(entry_id){
            try {
                const form = document.getElementById('delete_entry_form_' + entry_id);
                console.log("from from",form);
                
                if (!form) {
                    console.error('Form not found!');
                    return;
                }

                const formData = new FormData(form);
                const response = await axios.post('/bm-user-entry/destroy', formData);

                window.toaster('Entry deleted successfully', 'success');

                // Refresh the entries list (you can modify this to match your needs)
                this.show_bm_user_entry();
            } catch (error) {
                console.error(error);
            }
        },

        unit_users_list:function(){
            axios.get('/user/show_unit_user')
                .then(responce =>{
                    this.unit_user_all = responce.data
                })
        },
    }


})
