<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class MakePostgresMigrations extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'zz:migrate:postgres';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sql = "
        SELECT
            table_schema,
            column_name,
            data_type,
            character_maximum_length,
            is_nullable
        FROM
            INFORMATION_SCHEMA.COLUMNS
        WHERE
            table_name = ‘aact’
        ORDER BY ordinal_position
      ";
        $result = DB::select($sql);
        // $this->info(
        // );
        return Command::SUCCESS;
    }
}
