<template>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            Create Bm Expense
            <div class="btn btn-info btn-sm">
                <router-link :to="{name:'BmExpenseAll'}" class="text-dark">All Bm Expense</router-link>
            </div>
        </div>
        <div class="card-body">
            <form action="" @submit.prevent="create_expense">
                <div class="d-flex flex-wrap gap-2 mb-2 align-items-center" v-for="(field, index) in fields1" :key="index">
                    <div class="form_label">
                        <label for="">{{field.label}}</label>
                    </div>
                    <div class="form_input" v-if="field.field_type == 'select'">
                        <select type="text" :name="field.name" class="form-control text-center" v-model="selected_bm_expense_category_id">
                            <option value="">-- select Category --</option>
                            <option v-for="(bm_category, i) in bm_expense_category.data" :key="i" :value="bm_category['id']" >{{bm_category["title"]}}</option>

                        </select>
                    </div>
                    <div class="form_input" v-else>
                        <input type="text" :name="field.name" v-model="amount" class="form-control">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary btn-sm mt-3">Expense Entry</button>
            </form>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import { store as data_store} from "../../../stores/ReportStore";
import { mapWritableState } from 'pinia';

export default {
    data(){
        return {
            fields1:[
                {
                    label:"Title",
                    name:"bm_expense_category_id",
                    field_type:"select",
                },
                {
                    label:"Amount",
                    name:"amount",
                },
            ],
            bm_expense_category:[],
            selected_bm_expense_category_id:"",
            amount: "",

        }
    },
    created:function(){
        this.expense_category_list();
        if (!this.month) {
            this.$router.push({ name: "BmExpenseAll" });
        }
    },
    watch:{
        selected_bm_expense_category_id:function(){
            this.existing_data();
        }
    },
    computed: {
        ...mapWritableState(data_store, ['month']),
    },
    methods:{
        expense_category_list:function(){
            axios.get('/bm-expense-category/all')
                .then(responce => {
                    if(responce.data.status == 'success'){
                        this.bm_expense_category = responce?.data?.data
                        console.log('bm_expense_category',this.bm_expense_category);
                    }

                })
        },
        existing_data :async function(){
            let response = await  axios.get('/bm-expense/existing-data',{
                                params: {
                                    category_id: this.selected_bm_expense_category_id,
                                }
                            });

            if(response.data.status == "success"){
                this.amount = response.data.amount;
            }
        },
        create_expense:function(){
            event.preventDefault();
            let e = event;
            let formData = new FormData(event.target);
            formData.append('month', this.month);
            for (const entry of formData.entries()) {
                console.log(entry);
            }
            axios.post('/bm-expense/store',formData)
                .then(function (response) {
                    console.log(response.statusText);
                    window.toaster('New BM Expense Created successfuly', 'success');
                    e.target.reset();

                })
                .catch(function (error) {
                    console.log(error.response);
                });
        },

    }
}
</script>

<style>

</style>
