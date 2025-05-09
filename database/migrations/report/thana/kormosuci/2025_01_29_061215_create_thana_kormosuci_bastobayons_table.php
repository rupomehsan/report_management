<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('thana_kormosuci_bastobayons', function (Blueprint $table) {
            $table->id();

            // Report Reference
            $table->bigInteger('report_info_id')->nullable();

            // Unit Masik Sadaron Sova
            $table->bigInteger('unit_masik_sadaron_sova_total')->nullable();
            $table->bigInteger('unit_masik_sadaron_sova_target')->nullable();
            $table->bigInteger('unit_masik_sadaron_sova_uposthiti')->nullable();

            // Alochona Sova
            $table->bigInteger('dawati_sova_total')->nullable();
            $table->bigInteger('dawati_sova_target')->nullable();
            $table->bigInteger('dawati_sova_uposthiti')->nullable();

            // Alochona Sova
            $table->bigInteger('alochona_sova_total')->nullable();
            $table->bigInteger('alochona_sova_target')->nullable();
            $table->bigInteger('alochona_sova_uposthiti')->nullable();

            // Sudhi Somabesh
            $table->bigInteger('sudhi_somabesh_total')->nullable();
            $table->bigInteger('sudhi_somabesh_target')->nullable();
            $table->bigInteger('sudhi_somabesh_uposthiti')->nullable();

            // Siratunnabi Mahfil
            $table->bigInteger('siratunnabi_mahfil_total')->nullable();
            $table->bigInteger('siratunnabi_mahfil_target')->nullable();
            $table->bigInteger('siratunnabi_mahfil_uposthiti')->nullable();

            // Eid Reunion
            $table->bigInteger('eid_reunion_total')->nullable();
            $table->bigInteger('eid_reunion_target')->nullable();
            $table->bigInteger('eid_reunion_uposthiti')->nullable();

            // Dars
            $table->bigInteger('dars_total')->nullable();
            $table->bigInteger('dars_target')->nullable();
            $table->bigInteger('dars_uposthiti')->nullable();

            // Tafsir
            $table->bigInteger('tafsir_total')->nullable();
            $table->bigInteger('tafsir_target')->nullable();
            $table->bigInteger('tafsir_uposthiti')->nullable();

            // Dawati Jonosova
            $table->bigInteger('dawati_jonosova_total')->nullable();
            $table->bigInteger('dawati_jonosova_target')->nullable();
            $table->bigInteger('dawati_jonosova_uposthiti')->nullable();

            // Iftar Mahfil (Personal)
            $table->bigInteger('iftar_mahfil_personal_total')->nullable();
            $table->bigInteger('iftar_mahfil_personal_target')->nullable();
            $table->bigInteger('iftar_mahfil_personal_uposthiti')->nullable();

            // Iftar Mahfil (Samostic)
            $table->bigInteger('iftar_mahfil_samostic_total')->nullable();
            $table->bigInteger('iftar_mahfil_samostic_target')->nullable();
            $table->bigInteger('iftar_mahfil_samostic_uposthiti')->nullable();

            // Cha Chakra
            $table->bigInteger('cha_chakra_total')->nullable();
            $table->bigInteger('cha_chakra_target')->nullable();
            $table->bigInteger('cha_chakra_uposthiti')->nullable();

            // Samostic Khawa
            $table->bigInteger('samostic_khawa_total')->nullable();
            $table->bigInteger('samostic_khawa_target')->nullable();
            $table->bigInteger('samostic_khawa_uposthiti')->nullable();

            // Sikkha Sofor
            $table->bigInteger('sikkha_sofor_total')->nullable();
            $table->bigInteger('sikkha_sofor_target')->nullable();
            $table->bigInteger('sikkha_sofor_uposthiti')->nullable();

            // Kirat Protijogita
            $table->bigInteger('kirat_protijogita_total')->nullable();
            $table->bigInteger('kirat_protijogita_target')->nullable();
            $table->bigInteger('kirat_protijogita_uposthiti')->nullable();

            // Hamd Nat Protijogita
            $table->bigInteger('hamd_nat_protijogita_total')->nullable();
            $table->bigInteger('hamd_nat_protijogita_target')->nullable();
            $table->bigInteger('hamd_nat_protijogita_uposthiti')->nullable();

            // Others
            $table->bigInteger('others_total')->nullable();
            $table->bigInteger('others_target')->nullable();
            $table->bigInteger('others_uposthiti')->nullable();

            // Common Fields
            $table->bigInteger('creator')->nullable();
            $table->tinyInteger('status')->default(1);


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thana_kormosuci_bastobayons');
    }
};
