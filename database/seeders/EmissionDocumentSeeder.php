<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmissionDocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('emission_documents')->upsert([
            [
                'title' => 'Список аффилированных лиц',
                'description' => 'Актуальная информация об аффилированных лицах компании.',
                'file' => '/storage/docs/affiliated-persons.pdf',
                'sort_order' => 100,
            ],
            [
                'title' => 'Годовой отчет',
                'description' => 'Годовая финансовая и производственная отчетность.',
                'file' => '/storage/docs/annual-report.pdf',
                'sort_order' => 110,
            ],
        ], ['title'], ['description', 'file', 'sort_order']);
    }
}
