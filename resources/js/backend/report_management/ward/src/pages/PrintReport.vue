<template>
    <div class="card mb-3">
        <div class="card-header">
           ওয়ার্ডের মাসিক রিপোর্ট
        </div>
        <div class="card-body border-bottom-0">
            <form ref="report_form" action="" method="GET">
                <input type="text" class="d-none" name="user_id" :value = "this.user?.user?.id" >
                মাস: <input type="month" v-model="month" name="month">
                <button class="btn btn-success ms-5" type="button" @click="get_monthly_report">দেখুন</button>
            </form>
        </div>
    </div>
    <div class="card mb-3 ">
        <div class="card-header">
            print month to month
        </div>
        <div class="card-body border-bottom-0">
            <form ref="report_form_sum">
                <label for="" class="form-label">শুরুর মাস:</label>
                <input type="month" v-model="start_month" name="start_month" class="form-control">
                <label for="" class="form-label">শেষের মাস:</label>
                <input type="month" v-model="end_month" name="end_month" class="form-control">

                <button class="btn btn-success mt-2 me-2" type="button" @click.prevent="report_sum('any')">Month to
                    Month</button>
                <button class="btn btn-warning mt-2 me-2" type="button" @click.prevent="report_sum('half_yearly')">Half
                    Yearly</button>
                <button class="btn btn-info mt-2 me-2" type="button"
                    @click.prevent="report_sum('annual')">Annual</button>
            </form>
        </div>
    </div>
    <div class="card mb-3">
        <div class="card-header">
            মাসিক ইউনিট রিপোর্ট (এপ্রুভড ইউনিটের টোটাল ) - টোটাল ইউনিট - {{ total_units_counts }} টি এবং এপ্রুভড হয়েছে - {{ approved_units_count }}  টি।
        </div>
        <div class="card-body border-bottom-0">
            <form ref="report_form" action="" method="GET" >
                <input type="text" class="d-none" name="user_id" :value = "this.user?.user?.id" >
                মাস: <input type="month" v-model="month" name="month" @change="report_status">
                <button class="btn btn-success ms-5" type="button" @click.prevent="total_unit_report" v-if="approved_unit.length">দেখুন</button>
            </form>
            <p class="text-danger mt-2" v-if="!approved_unit.length">সিলেক্ট করা মাসে কোনো রিপোর্ট জমা হয়নি</p>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import { store as data_store} from "../stores/ReportStore";
import { mapState, mapWritableState } from 'pinia';

export default {
    data:function(){
        return {
            user_id:"",
            start_month: null,
            end_month: null,
            user: [],
            approved_unit:[],
            approved_units_count:'',
            total_units_counts:'',
        }
    },
    created:function(){
        this.user_info()
        this.report_status()
        this.count_units()
    },
    computed: {
        ...mapWritableState(data_store, ['month']),
    },
    watch:{
        month:function(){
            this.count_units()
        }
    },
    methods:{
        formatBangla(number) {
            return number !== null && number !== undefined
                        ? number.toLocaleString("bn-BD")
                        : "";
        },
        get_monthly_report: async function (event) {
            event?.preventDefault();

            if (!this.month) {
                return window.s_warning("Please select a month.", 'error');
            }

            try {
                const { data } = await axios.get('/ward/check-report-info', {
                    params: { month: this.month }
                });

                if (data.data) {
                    const url = `/ward/ward-report-monthly?user_id=${this.user?.user?.id}&month=${this.month}&print=true`;
                    window.open(url);
                } else {
                    const errMessage = 'আপনার রিপোর্ট দেখার অনুমতি নেই। রিপোর্ট দেখার অনুমতির জন্য আপনার ঊর্ধ্বতন দায়িত্বশীলের সাথে যোগাযোগ করুন।';
                    window.s_warning(errMessage, 'error');
                }
            } catch (error) {
                console.error("An error occurred while fetching report information:", error);
                window.s_warning("An unexpected error occurred. Please try again.", 'error');
            }
        },
        total_unit_report: function(){
            if(this.month != null){
                // window.open(`/ward/unit/total-unit-report?user_id=${this.user?.user?.id}&month=${this.month}`)
                window.open(`/unit/total-approved-unit-report?user_id=${this.user?.user?.id}&month=${this.month}`)
            }
        },
        report_sum: async function (sum_type) {
            const current_year = new Date().getFullYear();
            if (sum_type == 'half_yearly') {
                this.start_month = `${current_year}-01`; // January of the current year
                this.end_month = `${current_year}-06`;
            } else if (sum_type == 'annual') {
                this.start_month = `${current_year}-01`; // January of the current year
                this.end_month = `${current_year}-12`;
            }
            let response = await axios.get('/ward/check-report-info-in-range', {
                params: {
                    start_month: this.start_month,
                    end_month: this.end_month
                }
            });
            // console.log(response);
            if(response.data.data){
                window.open(`/ward/report/ward-report-sum?user_id=${this.user?.user?.id}&start_month=${this.start_month}&end_month=${this.end_month}&print=true`)
            }else{
                const errMessage = 'আপনার এই মাস গুলিতে কোনো প্রতিবেদন অনুমোদন হয়নি।';
                window.s_warning(errMessage, 'error');
            }
        },
        user_info:function(){
            axios.get("/user/ward-user-info")
                .then(responce =>{
                    this.user = responce.data
                })
        },
        report_status:async function(){
            let response = await axios.get('/ward/unit/report-status', {
                            params: {
                                month: this.month
                            }
                        })
            if(response.data.status == 'success'){
                this.approved_unit = null,
                this.approved_unit = response.data.approved_unit ?? [];

                // this.unsubmitted_unit = response.data.unsubmitted_unit
                // this.pending_unit = response.data.pending_unit
                // this.rejected_unit = response.data.rejected_unit
                // this.report_month = response.data.report_month
                // console.log({
                //     '1': this.unsubmitted_unit,
                //     '2': this.pending_unit,
                //     '3': this.rejected_unit,
                //     '4': this.approved_unit,
                // });


            }
        },
        count_units:async function(){
            if(this.month){
                let response = await axios.get('/ward/count-approved-unit', {
                                params: {
                                    month: this.month
                                }
                            })
                if(response.data.status == 'success'){
                    let approved = response.data.approved_units;
                    let total = response.data.total_units;

                    this.approved_units_count = this.formatBangla(approved)
                    this.total_units_counts = this.formatBangla(total)
                }
            }
        }
    }
}
</script>

<style>

</style>
