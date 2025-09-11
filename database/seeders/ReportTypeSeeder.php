<?php
    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use App\Models\ReportType;

    class ReportTypeSeeder extends Seeder
    {
        public function run()
        {
            ReportType::updateOrCreate(['id' => 1], ['name' => 'Queimada']);
            ReportType::updateOrCreate(['id' => 2], ['name' => 'Foco de Lixo']);
        }
    }