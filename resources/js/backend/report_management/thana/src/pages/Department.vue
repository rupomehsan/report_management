<template>
    <div class="max_with_550_auto">
        <!-- <h1 class="dofa_heading">দাওয়াত ও তাবলিগ</h1> -->
        <div class="card mb-3">
            <div class="card-header border-bottom-0">
                মাস:
                <input
                    type="month"
                    @change="get_monthly_data"
                    v-model="month"
                    ref="month"
                    name="month"
                />
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-bolder">খ) বিভাগ ভিত্তিক তথ্য:</h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-bold">১. তালিমুল কুরআনের মাধ্যমে দাওয়াত:</h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>ব্যক্তিগত উদ্যোগে:</h1>
            </div>
            <div class="card-body">
                <div class="mb-1 border-bottom">
                    <h1 class="font_bng fw-bold">কতজন কুরআন শিক্ষা প্রদান করেছেন :</h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in department1_teacher"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">কতজনকে কুরআন শিক্ষা প্রদান করা হয়েছে:</h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in department1_student"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>সামষ্টিক উদ্যোগ:</h1>
            </div>
            <div class="card-body">
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">কুরআন শিক্ষার গ্রুপ:</h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields3"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">মক্তব:</h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields4"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">ফোরকানিয়া মাদ্রাসা:</h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields5"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields6"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">
                        মোট কতজনের নিকট দাওয়াত পৌঁছানো হয়েছে:
                    </h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields7"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">
                        মোট কতজন সহযোগী সদস্য হয়েছেন:
                    </h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields8"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-body">
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">
                        তা'লিমুল কুরআন : মুয়াল্লিম সংখ্যা :
                    </h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields9"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
                <div class="mb-1 border-bottom mt-2">
                    <h1 class="font_bng fw-bold">
                        তা'লিমুল কুরআন : বৃদ্ধি সংখ্যা :
                    </h1>
                </div>
                <form action="">
                    <form-input
                        v-for="(field, index) in fields10"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department1-talimul-quran'"
                        :unique_key="1"
                    ></form-input>
                </form>
            </div>
        </div>

        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-semibold">২. গ্রাম ও মহল্লাভিত্তিক দাওয়াত:</h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>সরকারি হিসাবে:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields11"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department2-moholla-vittik-dawat'"
                        :unique_key="2"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>গ্রাম কমিটি:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields12"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department2-moholla-vittik-dawat'"
                        :unique_key="2"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>মহল্লা কমিটি :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields13"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department2-moholla-vittik-dawat'"
                        :unique_key="2"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>বিশেষ দাওয়াতের অন্তর্ভুক্ত গ্রাম:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields14"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department2-moholla-vittik-dawat'"
                        :unique_key="2"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>বিশেষ দাওয়াতের অন্তর্ভুক্ত মহল্লা:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields15"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department2-moholla-vittik-dawat'"
                        :unique_key="2"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields16"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department2-moholla-vittik-dawat'"
                        :unique_key="2"
                    ></form-input>
                </form>
            </div>
        </div>

        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-semibold">৩. যুব বিভাগের মাধ্যমে দাওয়াত :</h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields17"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department3-jubo-somaj-dawat'"
                        :unique_key="3"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>যুব কমিটি:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields18"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department3-jubo-somaj-dawat'"
                        :unique_key="3"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>নতুন সমিতি/ক্লাব প্রতিষ্ঠা করা হয়েছে:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields19"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department3-jubo-somaj-dawat'"
                        :unique_key="3"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>প্রতিষ্ঠিত সমিতি/ক্লাবে দাওয়াত পৌঁছানো হয়েছে:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields20"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department3-jubo-somaj-dawat'"
                        :unique_key="3"
                    ></form-input>
                </form>
            </div>
        </div>

        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-semibold">
                    ৪. বিভিন্ন শ্রেণি-পেশার মানুষের মাঝে দাওয়াত :
                </h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>রাজনৈতিক ও বিশিষ্ট ব্যক্তিবর্গ :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields21"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department4-different-job-holders-dawat'"
                        :unique_key="4"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>পেশাজীবী :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields22"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department4-different-job-holders-dawat'"
                        :unique_key="4"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>উলামা মাশায়েখ :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields23"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department4-different-job-holders-dawat'"
                        :unique_key="4"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>শ্রমজীবী :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields24"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department4-different-job-holders-dawat'"
                        :unique_key="4"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>প্রান্তিক জনগোষ্ঠী (অতি দরিদ্র) :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields25"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'department4-different-job-holders-dawat'"
                        :unique_key="4"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>ভিন্নধর্মাবলম্বী :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields26"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'department4-different-job-holders-dawat'"
                        :unique_key="4"
                    ></form-input>
                </form>
            </div>
        </div>

        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-semibold">৫. পরিবারভিত্তিক দাওয়াত :</h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields27"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department5-paribarik-dawat'"
                        :unique_key="5"
                    ></form-input>
                </form>
            </div>
        </div>

        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-semibold">
                    ৬. মসজিদ/দাওয়াহ্ সেন্টার/তথ্যসেবা কেন্দ্রভিত্তিক দাওয়াত :
                </h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>মসজিদ:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields28"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department6-mosjid-dawah-infomation-centers'"
                        :unique_key="6"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>দাওয়াতের আওতাভুক্ত মসজিদ:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields29"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department6-mosjid-dawah-infomation-centers'"
                        :unique_key="6"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>মসজিদভিত্তিক দাওয়াহ্ সেন্টার:</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields30"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department6-mosjid-dawah-infomation-centers'"
                        :unique_key="6"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>সাধারণ দাওয়াহ্ সেন্টার :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields31"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department6-mosjid-dawah-infomation-centers'"
                        :unique_key="6"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>তথ্যসেবা কেন্দ্র (মসজিদভিত্তিক) :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields32"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department6-mosjid-dawah-infomation-centers'"
                        :unique_key="6"
                    ></form-input>
                </form>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1>তথ্যসেবা কেন্দ্র (সাধারণ) :</h1>
            </div>
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields33"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department6-mosjid-dawah-infomation-centers'"
                        :unique_key="6"
                    ></form-input>
                </form>
            </div>
        </div>

        <div class="card mb-3" v-if="month">
            <div class="card-header">
                <h1 class="fw-semibold">৭. তথ্যপ্রযুক্তির মাধ্যমে দাওয়াত:</h1>
            </div>
        </div>
        <div class="card mb-3" v-if="month">
            <div class="card-body">
                <form action="">
                    <form-input
                        v-for="(field, index) in fields34"
                        :label="field.label"
                        :name="field.name"
                        :key="index"
                        :onchange="dawat_upload"
                        :endpoint="'ward-department7-dawat-in-technology'"
                        :unique_key="7"
                    ></form-input>
                </form>
            </div>
        </div>

        <previous-next
            :prev-route="{ name: 'Dawat' }"
            :next-route="{ name: 'DawahAndProkashona' }"
            :month="month"
        >
        </previous-next>
    </div>
</template>

<script>
import axios from "axios";
import FormInput from "../components/FormInput.vue";
import PreviousNext from "../components/PreviousNext.vue";
import { store as data_store } from "../stores/ReportStore";
import { mapState, mapWritableState } from "pinia";

export default {
    components: { FormInput, PreviousNext },
    data: () => ({
        // কতজন কুরআন শিক্ষা প্রদান করেছেন 
        department1_teacher: [
            {
                label: "সদস্য(রুকন)-(পুরুষ)",
                name: "teacher_rokon_man",
            },
            {
                label: "সদস্য(রুকন)-(পুরুষ)",
                name: "teacher_rokon_woman",
            },
            {
                label: "কর্মী-(পুরুষ)",
                name: "teacher_worker_man",
            },
            {
                label: "কর্মী-(মহিলা)",
                name: "teacher_worker_woman",
            },
        ],
        // কতজনকে কুরআন শিক্ষা প্রদান করা হয়েছে
        department1_student: [
            {
                label: "সদস্য(রুকন)(পুরুষ)",
                name: "student_rokon_man",
            },
            {
                label: "সদস্য(রুকন)(পুরুষ)",
                name: "student_rokon_woman",
            },
            {
                label: "কর্মী(পুরুষ)",
                name: "student_worker_man",
            },
            {
                label: "কর্মী(মহিলা)",
                name: "student_worker_woman",
            },
        ],
        // কুরআন শিক্ষার গ্রুপ
        department1_quran_learning_group: [
            {
                label: "মোট সংখ্যা",
                name: "quran_learning_total_group",
            },
            {
                label: "মোট শিক্ষার্থী সংখ্যা",
                name: "quran_learning_total_students",
            },
        ],
        // মক্তব
        department1_moktob: [
            {
                label: "মোট সংখ্যা",
                name: "total_moktob",
            },
            {
                label: "মোট শিক্ষার্থী সংখ্যা",
                name: "total_moktob_students",
            },
        ],
        // ফোরকানিয়া মাদ্রাসা
        department1_forkania: [
            {
                label: "মোট সংখ্যা",
                name: "total_forkania_madrasah",
            },
            {
                label: "মোট শিক্ষার্থী সংখ্যা",
                name: "total_forkania_madrasah_students",
            },
        ],

        department1_learned_sohih_tilawat: [
            {
                label: "মোট সংখ্যা",
                name: "how_much_learned_sohih_tilawat",
            },
        ],

        department1_invited: [
            {
                label: "পুরুষ",
                name: "how_much_invited_man",
            },
            {
                label: "মহিলা",
                name: "how_much_invited_woman",
            },
        ],
        department1_associated: [
            {
                label: "পুরুষ",
                name: "how_much_been_associated_man",
            },
            {
                label: "মহিলা",
                name: "how_much_been_associated_woman",
            },
        ],

        department1_total_muallim: [
            {
                label: "পুরুষ",
                name: "total_muallim_man",
            },
            {
                label: "মহিলা",
                name: "total_muallim_woman",
            },
        ],

        department1_muallim_increased: [
            {
                label: "পুরুষ",
                name: "total_muallim_increased_man",
            },
            {
                label: "মহিলা",
                name: "total_muallim_increased_woman",
            },
        ],
        
    }),
    created: function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth",
        });

        if (this.month != null) {
            this.get_monthly_data();
        }
    },
    computed: {
        ...mapWritableState(data_store, ["month"]),
    },
    methods: {
        dawat_upload: function (endpoint) {
            var value = event.target.value;
            var name = event.target.name;
            var month = new Date(this.$refs.month.value);
            axios.post(`${endpoint}/store-single`, {
                value,
                name,
                month,
            });
        },
        get_data_by_api: function (endpoint, unique_key) {
            axios
                .get(`${endpoint}/data?month=${this.month}-01`)
                .then(({ data: object }) => {
                    for (const key in object) {
                        if (Object.hasOwnProperty.call(object, key)) {
                            const value = object[key];
                            let el = document.querySelector(
                                `input[id="${unique_key}${key}"]`
                            );
                            if (el) {
                                el.value = value;
                            }
                        }
                    }
                });
        },
        get_monthly_data: function () {
            let els = document.querySelectorAll('input[type="text"]');
            els = [...els].forEach((e) => (e.value = ""));

            this.get_data_by_api("thana-department1-talimul-quran", 1);
            this.get_data_by_api("thana-department2-moholla-vittik-dawat", 2);
            this.get_data_by_api("thana-department3-jubo-somaj-dawat", 3);
            this.get_data_by_api(
                "thana-department4-different-job-holders-dawat",
                4
            );
            this.get_data_by_api("thana-department5-paribarik-dawat", 5);
            this.get_data_by_api(
                "thana-department6-mosjid-dawah-infomation-centers",
                6
            );
            this.get_data_by_api("thana-department7-dawat-in-technology", 7);
        },
    },
};
</script>

<style></style>
