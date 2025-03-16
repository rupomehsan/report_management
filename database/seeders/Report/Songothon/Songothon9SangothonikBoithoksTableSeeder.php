<?php

namespace Database\Seeders\Report\Songothon;

use App\Models\Report\Songothon\Songothon9SangothonikBoithok;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Songothon9SangothonikBoithoksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Songothon9SangothonikBoithok::truncate();
        $report_info_id = 1;
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                Songothon9SangothonikBoithok::create([
                    'report_info_id' => $report_info_id,
                    'unit_kormi_boithok_total' => rand(1, 10),
                    'unit_kormi_boithok_uposthiti' => rand(1, 10),
                    'creator' => 8 + $i,
                    'status' => 1,
                ]);
                $report_info_id++;
            }
        }
        // Songothon9SangothonikBoithok::create([
        //     'unit_kormi_boithok_total' => rand(1, 10),
        //     'unit_kormi_boithok_uposthiti' => rand(1, 10),

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'unit_kormi_boithok_total' => 3,
        //     'unit_kormi_boithok_uposthiti' => 33,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'unit_kormi_boithok_total' => 4,
        //     'unit_kormi_boithok_uposthiti' => 43,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'unit_kormi_boithok_total' => 5,
        //     'unit_kormi_boithok_uposthiti' => 53,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'word_sura_boithok_man_total' => 23,
        //     'word_sura_boithok_man_target' => 23,
        //     'word_sura_boithok_man_uposthiti' => 23,
        //     'word_sura_boithok_women_total' => 23,
        //     'word_sura_boithok_women_target' => 23,
        //     'word_sura_boithok_women_uposthiti' => 23,

        //     'kormoporishod_boithok_man_total' => 23,
        //     'kormoporishod_boithok_man_target' => 23,
        //     'kormoporishod_boithok_man_uposthiti' => 23,
        //     'kormoporishod_boithok_women_total' => 23,
        //     'kormoporishod_boithok_women_target' => 23,
        //     'kormoporishod_boithok_women_uposthiti' => 23,

        //     'upozilla_rokon_boithok_man_total' => 23,
        //     'upozilla_rokon_boithok_man_target' => 23,
        //     'upozilla_rokon_boithok_man_uposthiti' => 23,
        //     'upozilla_rokon_boithok_women_total' => 23,
        //     'upozilla_rokon_boithok_women_target' => 23,
        //     'upozilla_rokon_boithok_women_uposthiti' => 23,

        //     'thana_rokon_boithok_man_total' => 23,
        //     'thana_rokon_boithok_man_target' => 23,
        //     'thana_rokon_boithok_man_uposthiti' => 23,
        //     'thana_rokon_boithok_women_total' => 23,
        //     'thana_rokon_boithok_women_target' => 23,
        //     'thana_rokon_boithok_women_uposthiti' => 23,

        //     'division_committee_boithok_man_total' => 23,
        //     'division_committee_boithok_man_target' => 23,
        //     'division_committee_boithok_man_uposthiti' => 23,
        //     'division_committee_boithok_women_total' => 23,
        //     'division_committee_boithok_women_target' => 23,
        //     'division_committee_boithok_women_uposthiti' => 23,

        //     'pourosova_boithok_man_total' => 23,
        //     'pourosova_boithok_man_target' => 23,
        //     'pourosova_boithok_man_uposthiti' => 23,
        //     'pourosova_boithok_women_total' => 23,
        //     'pourosova_boithok_women_target' => 23,
        //     'pourosova_boithok_women_uposthiti' => 23,

        //     'union_boithok_man_total' => 23,
        //     'union_boithok_man_target' => 23,
        //     'union_boithok_man_uposthiti' => 23,
        //     'union_boithok_women_total' => 23,
        //     'union_boithok_women_target' => 23,
        //     'union_boithok_women_uposthiti' => 23,

        //     'word_boithok_man_total' => 23,
        //     'word_boithok_man_target' => 23,
        //     'word_boithok_man_uposthiti' => 23,
        //     'word_boithok_women_total' => 23,
        //     'word_boithok_women_target' => 23,
        //     'word_boithok_women_uposthiti' => 23,

        //     'team_boithok_man_total' => 23,
        //     'team_boithok_man_target' => 23,
        //     'team_boithok_man_uposthiti' => 23,
        //     'team_boithok_women_total' => 23,
        //     'team_boithok_women_target' => 23,
        //     'team_boithok_women_uposthiti' => 23,

        //     'masik_sodosso_boithok_man_total' => 23,
        //     'masik_sodosso_boithok_man_target' => 23,
        //     'masik_sodosso_boithok_man_uposthiti' => 23,
        //     'masik_sodosso_boithok_women_total' => 23,
        //     'masik_sodosso_boithok_women_target' => 23,
        //     'masik_sodosso_boithok_women_uposthiti' => 23,

        //     'pourosova_masik_sodosso_boithok_man_total' => 23,
        //     'pourosova_masik_sodosso_boithok_man_target' => 23,
        //     'pourosova_masik_sodosso_boithok_man_uposthiti' => 23,
        //     'pourosova_masik_sodosso_boithok_women_total' => 23,
        //     'pourosova_masik_sodosso_boithok_women_target' => 23,
        //     'pourosova_masik_sodosso_boithok_women_uposthiti' => 23,

        //     'union_masik_sodosso_boithok_man_total' => 23,
        //     'union_masik_sodosso_boithok_man_target' => 23,
        //     'union_masik_sodosso_boithok_man_uposthiti' => 23,
        //     'union_masik_sodosso_boithok_women_total' => 23,
        //     'union_masik_sodosso_boithok_women_target' => 23,
        //     'union_masik_sodosso_boithok_women_uposthiti' => 23,

        //     'unit_kormi_boithok_man_total' => 23,
        //     'unit_kormi_boithok_man_target' => 23,
        //     'unit_kormi_boithok_man_uposthiti' => 23,
        //     'unit_kormi_boithok_women_total' => 23,
        //     'unit_kormi_boithok_women_target' => 23,
        //     'unit_kormi_boithok_women_uposthiti' => 23,

        //     'ulama_somabesh_man_total' => 23,
        //     'ulama_somabesh_man_target' => 23,
        //     'ulama_somabesh_man_uposthiti' => 23,
        //     'ulama_somabesh_women_total' => 23,
        //     'ulama_somabesh_women_target' => 23,
        //     'ulama_somabesh_women_uposthiti' => 23,

        //     'jubok_somabesh_man_total' => 23,
        //     'jubok_somabesh_man_target' => 23,
        //     'jubok_somabesh_man_uposthiti' => 23,
        //     'jubok_somabesh_women_total' => 23,
        //     'jubok_somabesh_women_target' => 23,
        //     'jubok_somabesh_women_uposthiti' => 23,

        //     'sromik_somabesh_man_total' => 23,
        //     'sromik_somabesh_man_target' => 23,
        //     'sromik_somabesh_man_uposthiti' => 23,
        //     'sromik_somabesh_women_total' => 23,
        //     'sromik_somabesh_women_target' => 23,
        //     'sromik_somabesh_women_uposthiti' => 23,

        //     'trimasik_rokon_sommelon_man_total' => 23,
        //     'trimasik_rokon_sommelon_man_target' => 23,
        //     'trimasik_rokon_sommelon_man_uposthiti' => 23,
        //     'trimasik_rokon_sommelon_women_total' => 23,
        //     'trimasik_rokon_sommelon_women_target' => 23,
        //     'trimasik_rokon_sommelon_women_uposthiti' => 23,

        //     'sammasik_rokon_sommelon_man_total' => 23,
        //     'sammasik_rokon_sommelon_man_target' => 23,
        //     'sammasik_rokon_sommelon_man_uposthiti' => 23,
        //     'sammasik_rokon_sommelon_women_total' => 23,
        //     'sammasik_rokon_sommelon_women_target' => 23,
        //     'sammasik_rokon_sommelon_women_uposthiti' => 23,

        //     'barsik_rokon_sommelon_man_total' => 23,
        //     'barsik_rokon_sommelon_man_target' => 23,
        //     'barsik_rokon_sommelon_man_uposthiti' => 23,
        //     'barsik_rokon_sommelon_women_total' => 23,
        //     'barsik_rokon_sommelon_women_target' => 23,
        //     'barsik_rokon_sommelon_women_uposthiti' => 23,

        //     'upozila_ward_sovapoti_sommelon_man_total' => 23,
        //     'upozila_ward_sovapoti_sommelon_man_target' => 23,
        //     'upozila_ward_sovapoti_sommelon_man_uposthiti' => 23,
        //     'upozila_ward_sovapoti_sommelon_women_total' => 23,
        //     'upozila_ward_sovapoti_sommelon_women_target' => 23,
        //     'upozila_ward_sovapoti_sommelon_women_uposthiti' => 23,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'word_sura_boithok_man_total' => 43,
        //     'word_sura_boithok_man_target' => 43,
        //     'word_sura_boithok_man_uposthiti' => 43,
        //     'word_sura_boithok_women_total' => 43,
        //     'word_sura_boithok_women_target' => 43,
        //     'word_sura_boithok_women_uposthiti' => 43,

        //     'kormoporishod_boithok_man_total' => 43,
        //     'kormoporishod_boithok_man_target' => 43,
        //     'kormoporishod_boithok_man_uposthiti' => 43,
        //     'kormoporishod_boithok_women_total' => 43,
        //     'kormoporishod_boithok_women_target' => 43,
        //     'kormoporishod_boithok_women_uposthiti' => 43,

        //     'upozilla_rokon_boithok_man_total' => 43,
        //     'upozilla_rokon_boithok_man_target' => 43,
        //     'upozilla_rokon_boithok_man_uposthiti' => 43,
        //     'upozilla_rokon_boithok_women_total' => 43,
        //     'upozilla_rokon_boithok_women_target' => 43,
        //     'upozilla_rokon_boithok_women_uposthiti' => 43,

        //     'thana_rokon_boithok_man_total' => 43,
        //     'thana_rokon_boithok_man_target' => 43,
        //     'thana_rokon_boithok_man_uposthiti' => 43,
        //     'thana_rokon_boithok_women_total' => 43,
        //     'thana_rokon_boithok_women_target' => 43,
        //     'thana_rokon_boithok_women_uposthiti' => 43,

        //     'division_committee_boithok_man_total' => 43,
        //     'division_committee_boithok_man_target' => 43,
        //     'division_committee_boithok_man_uposthiti' => 43,
        //     'division_committee_boithok_women_total' => 43,
        //     'division_committee_boithok_women_target' => 43,
        //     'division_committee_boithok_women_uposthiti' => 43,

        //     'pourosova_boithok_man_total' => 43,
        //     'pourosova_boithok_man_target' => 43,
        //     'pourosova_boithok_man_uposthiti' => 43,
        //     'pourosova_boithok_women_total' => 43,
        //     'pourosova_boithok_women_target' => 43,
        //     'pourosova_boithok_women_uposthiti' => 43,

        //     'union_boithok_man_total' => 43,
        //     'union_boithok_man_target' => 43,
        //     'union_boithok_man_uposthiti' => 43,
        //     'union_boithok_women_total' => 43,
        //     'union_boithok_women_target' => 43,
        //     'union_boithok_women_uposthiti' => 43,

        //     'word_boithok_man_total' => 43,
        //     'word_boithok_man_target' => 43,
        //     'word_boithok_man_uposthiti' => 43,
        //     'word_boithok_women_total' => 43,
        //     'word_boithok_women_target' => 43,
        //     'word_boithok_women_uposthiti' => 43,

        //     'team_boithok_man_total' => 43,
        //     'team_boithok_man_target' => 43,
        //     'team_boithok_man_uposthiti' => 43,
        //     'team_boithok_women_total' => 43,
        //     'team_boithok_women_target' => 43,
        //     'team_boithok_women_uposthiti' => 43,

        //     'masik_sodosso_boithok_man_total' => 43,
        //     'masik_sodosso_boithok_man_target' => 43,
        //     'masik_sodosso_boithok_man_uposthiti' => 43,
        //     'masik_sodosso_boithok_women_total' => 43,
        //     'masik_sodosso_boithok_women_target' => 43,
        //     'masik_sodosso_boithok_women_uposthiti' => 43,

        //     'pourosova_masik_sodosso_boithok_man_total' => 43,
        //     'pourosova_masik_sodosso_boithok_man_target' => 43,
        //     'pourosova_masik_sodosso_boithok_man_uposthiti' => 43,
        //     'pourosova_masik_sodosso_boithok_women_total' => 43,
        //     'pourosova_masik_sodosso_boithok_women_target' => 43,
        //     'pourosova_masik_sodosso_boithok_women_uposthiti' => 43,

        //     'union_masik_sodosso_boithok_man_total' => 43,
        //     'union_masik_sodosso_boithok_man_target' => 43,
        //     'union_masik_sodosso_boithok_man_uposthiti' => 43,
        //     'union_masik_sodosso_boithok_women_total' => 43,
        //     'union_masik_sodosso_boithok_women_target' => 43,
        //     'union_masik_sodosso_boithok_women_uposthiti' => 43,

        //     'unit_kormi_boithok_man_total' => 43,
        //     'unit_kormi_boithok_man_target' => 43,
        //     'unit_kormi_boithok_man_uposthiti' => 43,
        //     'unit_kormi_boithok_women_total' => 43,
        //     'unit_kormi_boithok_women_target' => 43,
        //     'unit_kormi_boithok_women_uposthiti' => 43,

        //     'ulama_somabesh_man_total' => 43,
        //     'ulama_somabesh_man_target' => 43,
        //     'ulama_somabesh_man_uposthiti' => 43,
        //     'ulama_somabesh_women_total' => 43,
        //     'ulama_somabesh_women_target' => 43,
        //     'ulama_somabesh_women_uposthiti' => 43,

        //     'jubok_somabesh_man_total' => 43,
        //     'jubok_somabesh_man_target' => 43,
        //     'jubok_somabesh_man_uposthiti' => 43,
        //     'jubok_somabesh_women_total' => 43,
        //     'jubok_somabesh_women_target' => 43,
        //     'jubok_somabesh_women_uposthiti' => 43,

        //     'sromik_somabesh_man_total' => 43,
        //     'sromik_somabesh_man_target' => 43,
        //     'sromik_somabesh_man_uposthiti' => 43,
        //     'sromik_somabesh_women_total' => 43,
        //     'sromik_somabesh_women_target' => 43,
        //     'sromik_somabesh_women_uposthiti' => 43,

        //     'trimasik_rokon_sommelon_man_total' => 43,
        //     'trimasik_rokon_sommelon_man_target' => 43,
        //     'trimasik_rokon_sommelon_man_uposthiti' => 43,
        //     'trimasik_rokon_sommelon_women_total' => 43,
        //     'trimasik_rokon_sommelon_women_target' => 43,
        //     'trimasik_rokon_sommelon_women_uposthiti' => 43,

        //     'sammasik_rokon_sommelon_man_total' => 43,
        //     'sammasik_rokon_sommelon_man_target' => 43,
        //     'sammasik_rokon_sommelon_man_uposthiti' => 43,
        //     'sammasik_rokon_sommelon_women_total' => 43,
        //     'sammasik_rokon_sommelon_women_target' => 43,
        //     'sammasik_rokon_sommelon_women_uposthiti' => 43,

        //     'barsik_rokon_sommelon_man_total' => 43,
        //     'barsik_rokon_sommelon_man_target' => 43,
        //     'barsik_rokon_sommelon_man_uposthiti' => 43,
        //     'barsik_rokon_sommelon_women_total' => 43,
        //     'barsik_rokon_sommelon_women_target' => 43,
        //     'barsik_rokon_sommelon_women_uposthiti' => 43,

        //     'upozila_ward_sovapoti_sommelon_man_total' => 43,
        //     'upozila_ward_sovapoti_sommelon_man_target' => 43,
        //     'upozila_ward_sovapoti_sommelon_man_uposthiti' => 43,
        //     'upozila_ward_sovapoti_sommelon_women_total' => 43,
        //     'upozila_ward_sovapoti_sommelon_women_target' => 43,
        //     'upozila_ward_sovapoti_sommelon_women_uposthiti' => 43,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'word_sura_boithok_man_total' => 12,
        //     'word_sura_boithok_man_target' => 12,
        //     'word_sura_boithok_man_uposthiti' => 12,
        //     'word_sura_boithok_women_total' => 12,
        //     'word_sura_boithok_women_target' => 12,
        //     'word_sura_boithok_women_uposthiti' => 12,

        //     'kormoporishod_boithok_man_total' => 12,
        //     'kormoporishod_boithok_man_target' => 12,
        //     'kormoporishod_boithok_man_uposthiti' => 12,
        //     'kormoporishod_boithok_women_total' => 12,
        //     'kormoporishod_boithok_women_target' => 12,
        //     'kormoporishod_boithok_women_uposthiti' => 12,

        //     'upozilla_rokon_boithok_man_total' => 12,
        //     'upozilla_rokon_boithok_man_target' => 12,
        //     'upozilla_rokon_boithok_man_uposthiti' => 12,
        //     'upozilla_rokon_boithok_women_total' => 12,
        //     'upozilla_rokon_boithok_women_target' => 12,
        //     'upozilla_rokon_boithok_women_uposthiti' => 12,

        //     'thana_rokon_boithok_man_total' => 12,
        //     'thana_rokon_boithok_man_target' => 12,
        //     'thana_rokon_boithok_man_uposthiti' => 12,
        //     'thana_rokon_boithok_women_total' => 12,
        //     'thana_rokon_boithok_women_target' => 12,
        //     'thana_rokon_boithok_women_uposthiti' => 12,

        //     'division_committee_boithok_man_total' => 12,
        //     'division_committee_boithok_man_target' => 12,
        //     'division_committee_boithok_man_uposthiti' => 12,
        //     'division_committee_boithok_women_total' => 12,
        //     'division_committee_boithok_women_target' => 12,
        //     'division_committee_boithok_women_uposthiti' => 12,

        //     'pourosova_boithok_man_total' => 12,
        //     'pourosova_boithok_man_target' => 12,
        //     'pourosova_boithok_man_uposthiti' => 12,
        //     'pourosova_boithok_women_total' => 12,
        //     'pourosova_boithok_women_target' => 12,
        //     'pourosova_boithok_women_uposthiti' => 12,

        //     'union_boithok_man_total' => 12,
        //     'union_boithok_man_target' => 12,
        //     'union_boithok_man_uposthiti' => 12,
        //     'union_boithok_women_total' => 12,
        //     'union_boithok_women_target' => 12,
        //     'union_boithok_women_uposthiti' => 12,

        //     'word_boithok_man_total' => 12,
        //     'word_boithok_man_target' => 12,
        //     'word_boithok_man_uposthiti' => 12,
        //     'word_boithok_women_total' => 12,
        //     'word_boithok_women_target' => 12,
        //     'word_boithok_women_uposthiti' => 12,

        //     'team_boithok_man_total' => 12,
        //     'team_boithok_man_target' => 12,
        //     'team_boithok_man_uposthiti' => 12,
        //     'team_boithok_women_total' => 12,
        //     'team_boithok_women_target' => 12,
        //     'team_boithok_women_uposthiti' => 12,

        //     'masik_sodosso_boithok_man_total' => 12,
        //     'masik_sodosso_boithok_man_target' => 12,
        //     'masik_sodosso_boithok_man_uposthiti' => 12,
        //     'masik_sodosso_boithok_women_total' => 12,
        //     'masik_sodosso_boithok_women_target' => 12,
        //     'masik_sodosso_boithok_women_uposthiti' => 12,

        //     'pourosova_masik_sodosso_boithok_man_total' => 12,
        //     'pourosova_masik_sodosso_boithok_man_target' => 12,
        //     'pourosova_masik_sodosso_boithok_man_uposthiti' => 12,
        //     'pourosova_masik_sodosso_boithok_women_total' => 12,
        //     'pourosova_masik_sodosso_boithok_women_target' => 12,
        //     'pourosova_masik_sodosso_boithok_women_uposthiti' => 12,

        //     'union_masik_sodosso_boithok_man_total' => 12,
        //     'union_masik_sodosso_boithok_man_target' => 12,
        //     'union_masik_sodosso_boithok_man_uposthiti' => 12,
        //     'union_masik_sodosso_boithok_women_total' => 12,
        //     'union_masik_sodosso_boithok_women_target' => 12,
        //     'union_masik_sodosso_boithok_women_uposthiti' => 12,

        //     'unit_kormi_boithok_man_total' => 12,
        //     'unit_kormi_boithok_man_target' => 12,
        //     'unit_kormi_boithok_man_uposthiti' => 12,
        //     'unit_kormi_boithok_women_total' => 12,
        //     'unit_kormi_boithok_women_target' => 12,
        //     'unit_kormi_boithok_women_uposthiti' => 12,

        //     'ulama_somabesh_man_total' => 12,
        //     'ulama_somabesh_man_target' => 12,
        //     'ulama_somabesh_man_uposthiti' => 12,
        //     'ulama_somabesh_women_total' => 12,
        //     'ulama_somabesh_women_target' => 12,
        //     'ulama_somabesh_women_uposthiti' => 12,

        //     'jubok_somabesh_man_total' => 12,
        //     'jubok_somabesh_man_target' => 12,
        //     'jubok_somabesh_man_uposthiti' => 12,
        //     'jubok_somabesh_women_total' => 12,
        //     'jubok_somabesh_women_target' => 12,
        //     'jubok_somabesh_women_uposthiti' => 12,

        //     'sromik_somabesh_man_total' => 12,
        //     'sromik_somabesh_man_target' => 12,
        //     'sromik_somabesh_man_uposthiti' => 12,
        //     'sromik_somabesh_women_total' => 12,
        //     'sromik_somabesh_women_target' => 12,
        //     'sromik_somabesh_women_uposthiti' => 12,

        //     'trimasik_rokon_sommelon_man_total' => 12,
        //     'trimasik_rokon_sommelon_man_target' => 12,
        //     'trimasik_rokon_sommelon_man_uposthiti' => 12,
        //     'trimasik_rokon_sommelon_women_total' => 12,
        //     'trimasik_rokon_sommelon_women_target' => 12,
        //     'trimasik_rokon_sommelon_women_uposthiti' => 12,

        //     'sammasik_rokon_sommelon_man_total' => 12,
        //     'sammasik_rokon_sommelon_man_target' => 12,
        //     'sammasik_rokon_sommelon_man_uposthiti' => 12,
        //     'sammasik_rokon_sommelon_women_total' => 12,
        //     'sammasik_rokon_sommelon_women_target' => 12,
        //     'sammasik_rokon_sommelon_women_uposthiti' => 12,

        //     'barsik_rokon_sommelon_man_total' => 12,
        //     'barsik_rokon_sommelon_man_target' => 12,
        //     'barsik_rokon_sommelon_man_uposthiti' => 12,
        //     'barsik_rokon_sommelon_women_total' => 12,
        //     'barsik_rokon_sommelon_women_target' => 12,
        //     'barsik_rokon_sommelon_women_uposthiti' => 12,

        //     'upozila_ward_sovapoti_sommelon_man_total' => 12,
        //     'upozila_ward_sovapoti_sommelon_man_target' => 12,
        //     'upozila_ward_sovapoti_sommelon_man_uposthiti' => 12,
        //     'upozila_ward_sovapoti_sommelon_women_total' => 12,
        //     'upozila_ward_sovapoti_sommelon_women_target' => 12,
        //     'upozila_ward_sovapoti_sommelon_women_uposthiti' => 12,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
        // Songothon9SangothonikBoithok::create([
        //     'word_sura_boithok_man_total' => 35,
        //     'word_sura_boithok_man_target' => 35,
        //     'word_sura_boithok_man_uposthiti' => 35,
        //     'word_sura_boithok_women_total' => 35,
        //     'word_sura_boithok_women_target' => 35,
        //     'word_sura_boithok_women_uposthiti' => 35,

        //     'kormoporishod_boithok_man_total' => 35,
        //     'kormoporishod_boithok_man_target' => 35,
        //     'kormoporishod_boithok_man_uposthiti' => 35,
        //     'kormoporishod_boithok_women_total' => 35,
        //     'kormoporishod_boithok_women_target' => 35,
        //     'kormoporishod_boithok_women_uposthiti' => 35,

        //     'upozilla_rokon_boithok_man_total' => 35,
        //     'upozilla_rokon_boithok_man_target' => 35,
        //     'upozilla_rokon_boithok_man_uposthiti' => 35,
        //     'upozilla_rokon_boithok_women_total' => 35,
        //     'upozilla_rokon_boithok_women_target' => 35,
        //     'upozilla_rokon_boithok_women_uposthiti' => 35,

        //     'thana_rokon_boithok_man_total' => 35,
        //     'thana_rokon_boithok_man_target' => 35,
        //     'thana_rokon_boithok_man_uposthiti' => 35,
        //     'thana_rokon_boithok_women_total' => 35,
        //     'thana_rokon_boithok_women_target' => 35,
        //     'thana_rokon_boithok_women_uposthiti' => 35,

        //     'division_committee_boithok_man_total' => 35,
        //     'division_committee_boithok_man_target' => 35,
        //     'division_committee_boithok_man_uposthiti' => 35,
        //     'division_committee_boithok_women_total' => 35,
        //     'division_committee_boithok_women_target' => 35,
        //     'division_committee_boithok_women_uposthiti' => 35,

        //     'pourosova_boithok_man_total' => 35,
        //     'pourosova_boithok_man_target' => 35,
        //     'pourosova_boithok_man_uposthiti' => 35,
        //     'pourosova_boithok_women_total' => 35,
        //     'pourosova_boithok_women_target' => 35,
        //     'pourosova_boithok_women_uposthiti' => 35,

        //     'union_boithok_man_total' => 35,
        //     'union_boithok_man_target' => 35,
        //     'union_boithok_man_uposthiti' => 35,
        //     'union_boithok_women_total' => 35,
        //     'union_boithok_women_target' => 35,
        //     'union_boithok_women_uposthiti' => 35,

        //     'word_boithok_man_total' => 35,
        //     'word_boithok_man_target' => 35,
        //     'word_boithok_man_uposthiti' => 35,
        //     'word_boithok_women_total' => 35,
        //     'word_boithok_women_target' => 35,
        //     'word_boithok_women_uposthiti' => 35,

        //     'team_boithok_man_total' => 35,
        //     'team_boithok_man_target' => 35,
        //     'team_boithok_man_uposthiti' => 35,
        //     'team_boithok_women_total' => 35,
        //     'team_boithok_women_target' => 35,
        //     'team_boithok_women_uposthiti' => 35,

        //     'masik_sodosso_boithok_man_total' => 35,
        //     'masik_sodosso_boithok_man_target' => 35,
        //     'masik_sodosso_boithok_man_uposthiti' => 35,
        //     'masik_sodosso_boithok_women_total' => 35,
        //     'masik_sodosso_boithok_women_target' => 35,
        //     'masik_sodosso_boithok_women_uposthiti' => 35,

        //     'pourosova_masik_sodosso_boithok_man_total' => 35,
        //     'pourosova_masik_sodosso_boithok_man_target' => 35,
        //     'pourosova_masik_sodosso_boithok_man_uposthiti' => 35,
        //     'pourosova_masik_sodosso_boithok_women_total' => 35,
        //     'pourosova_masik_sodosso_boithok_women_target' => 35,
        //     'pourosova_masik_sodosso_boithok_women_uposthiti' => 35,

        //     'union_masik_sodosso_boithok_man_total' => 35,
        //     'union_masik_sodosso_boithok_man_target' => 35,
        //     'union_masik_sodosso_boithok_man_uposthiti' => 35,
        //     'union_masik_sodosso_boithok_women_total' => 35,
        //     'union_masik_sodosso_boithok_women_target' => 35,
        //     'union_masik_sodosso_boithok_women_uposthiti' => 35,

        //     'unit_kormi_boithok_man_total' => 35,
        //     'unit_kormi_boithok_man_target' => 35,
        //     'unit_kormi_boithok_man_uposthiti' => 35,
        //     'unit_kormi_boithok_women_total' => 35,
        //     'unit_kormi_boithok_women_target' => 35,
        //     'unit_kormi_boithok_women_uposthiti' => 35,

        //     'ulama_somabesh_man_total' => 35,
        //     'ulama_somabesh_man_target' => 35,
        //     'ulama_somabesh_man_uposthiti' => 35,
        //     'ulama_somabesh_women_total' => 35,
        //     'ulama_somabesh_women_target' => 35,
        //     'ulama_somabesh_women_uposthiti' => 35,

        //     'jubok_somabesh_man_total' => 35,
        //     'jubok_somabesh_man_target' => 35,
        //     'jubok_somabesh_man_uposthiti' => 35,
        //     'jubok_somabesh_women_total' => 35,
        //     'jubok_somabesh_women_target' => 35,
        //     'jubok_somabesh_women_uposthiti' => 35,

        //     'sromik_somabesh_man_total' => 35,
        //     'sromik_somabesh_man_target' => 35,
        //     'sromik_somabesh_man_uposthiti' => 35,
        //     'sromik_somabesh_women_total' => 35,
        //     'sromik_somabesh_women_target' => 35,
        //     'sromik_somabesh_women_uposthiti' => 35,

        //     'trimasik_rokon_sommelon_man_total' => 35,
        //     'trimasik_rokon_sommelon_man_target' => 35,
        //     'trimasik_rokon_sommelon_man_uposthiti' => 35,
        //     'trimasik_rokon_sommelon_women_total' => 35,
        //     'trimasik_rokon_sommelon_women_target' => 35,
        //     'trimasik_rokon_sommelon_women_uposthiti' => 35,

        //     'sammasik_rokon_sommelon_man_total' => 35,
        //     'sammasik_rokon_sommelon_man_target' => 35,
        //     'sammasik_rokon_sommelon_man_uposthiti' => 35,
        //     'sammasik_rokon_sommelon_women_total' => 35,
        //     'sammasik_rokon_sommelon_women_target' => 35,
        //     'sammasik_rokon_sommelon_women_uposthiti' => 35,

        //     'barsik_rokon_sommelon_man_total' => 35,
        //     'barsik_rokon_sommelon_man_target' => 35,
        //     'barsik_rokon_sommelon_man_uposthiti' => 35,
        //     'barsik_rokon_sommelon_women_total' => 35,
        //     'barsik_rokon_sommelon_women_target' => 35,
        //     'barsik_rokon_sommelon_women_uposthiti' => 35,

        //     'upozila_ward_sovapoti_sommelon_man_total' => 35,
        //     'upozila_ward_sovapoti_sommelon_man_target' => 35,
        //     'upozila_ward_sovapoti_sommelon_man_uposthiti' => 35,
        //     'upozila_ward_sovapoti_sommelon_women_total' => 35,
        //     'upozila_ward_sovapoti_sommelon_women_target' => 35,
        //     'upozila_ward_sovapoti_sommelon_women_uposthiti' => 35,

        //     'creator' => 3,
        //     'status' => 1,
        // ]);
    }
}
