<?php
    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use App\Models\ReportType;

    class ReportTypeSeeder extends Seeder
    {
        public function run()
        {
            ReportType::insert([
                ['id' => 1, 'name' => 'Queimada'],
                ['id' => 2, 'name' => 'Foco de lixo'],
            ]);
        }
    }
