<template>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            সকল ব্যক্তিগত ধার্যের তালিকা
            <div class="btn btn-info btn-sm">
                <router-link :to="{name:'ThanaBmCategoryUserCreate'}" class="text-dark">ব্যক্তিগত ধার্য নির্ধারণ করুন</router-link>
            </div>
        </div>
        <div class="card-body">
            <div class="d-flex flex-wrap gap-2 mb-2 align-items-center table-responsive" >
                <table class="table table-striped table-bordered text-start">
                    <thead>
                        <tr class="table-dark">
                            <th>Name</th>
                            <th>Category</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(category_user,index) in bm_category_user" :key="index">
                            <td>{{category_user.user.full_name}}</td>
                            <td>{{category_user.thana_bm_income_category.title}}</td>
                            <td>{{category_user.amount}}</td>
                            <td>
                                <div class="action">
                                    <div class="btn btn-success btn-sm me-2">
                                        <router-link :to="{name:'ThanaBmCategoryUserDetails',params: { category_user_id: category_user.id }}"  class="text-dark">show</router-link>
                                    </div>
                                    <div class="btn btn-warning btn-sm me-2">
                                        <router-link :to="{name:'ThanaBmCategoryUserEdit',params: { category_user_id: category_user.id }}"  class="text-dark">Edit</router-link>
                                    </div>
                                    <div class="btn btn-danger btn-sm">
                                        <a @click="delete_category_user(category_user.id)" class="text-dark">Delete</a>

                                        <form :id="'delete_category_user_form_'+category_user.id" >
                                            <input type="text" name="id" :value="category_user.id" class="d-none">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
export default {
    data() {
        return {
            bm_category_user:[],
        }
    },

    created:function(){
        this.show_bm_category_user()
    },
    methods:{
        show_bm_category_user : function(){
            axios.get('/thana-bm-category-user/single-thana')
                .then(response => {
                    this.bm_category_user = response.data
                    console.log(this.bm_category_user);

                })
        },
        delete_category_user : function(category_user_id){
            if (window.confirm("Are you sure you want to delete this Category User?")) {
                this.submit_delete_form(category_user_id);
            } else {
                window.toaster('Entry is safe', 'info');
            }

        },
        submit_delete_form : function(category_user_id){
            event.preventDefault();
            const formData = new FormData(document.getElementById('delete_category_user_form_'+category_user_id));
            axios.post("/thana-bm-category-user/destroy",formData)
                    .then(response => {
                        // console.log(response);
                        window.toaster('Category User delete successfuly', 'success');
                        this.show_bm_category_user();
                    })
                    .catch(error => {
                        console.error(error);
                    });
        }
    }

}
</script>

<style>

</style>
