<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            [
                'name' => 'Wilderman-Adams',
                'subtitle' => 'Focused content-based',
                'project_url' => 'https://picsum.photos/id/1/640/480',
                'image_url' => 'https://picsum.photos/id/1/640/480',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
            ],
            [
                'name' => 'Vandervort-Rolfson',
                'subtitle' => 'Robust analyzing forecast',
                'project_url' => 'https://picsum.photos/id/2/640/480',
                'image_url' => 'https://picsum.photos/id/2/640/480',
                'description' => 'Sed vulputate mi sit amet mauris commodo quis imperdiet massa. Scelerisque viverra mauris in aliquam. Fringilla est ullamcorper eget nulla facilisi etiam dignissim diam quis.'
            ],
            [
                'name' => 'Schimmel, Stiedemann and Pollich',
                'subtitle' => 'Persistent discrete firmware',
                'project_url' => 'https://picsum.photos/id/3/640/480',
                'image_url' => 'https://picsum.photos/id/3/640/480',
                'description' => 'At elementum eu facilisis sed odio morbi quis commodo odio. Sed lectus vestibulum mattis ullamcorper velit sed. Felis imperdiet proin fermentum leo vel orci porta non pulvinar.'
            ],
            [
                'name' => 'Pagac-Feeney',
                'subtitle' => 'Customer-focused leverage',
                'project_url' => 'https://picsum.photos/id/4/640/480',
                'image_url' => 'https://picsum.photos/id/4/640/480',
                'description' => 'Non pulvinar neque laoreet suspendisse interdum. Leo vel orci porta non pulvinar neque. Eu sem integer vitae justo eget magna fermentum iaculis eu.'
            ],
            [
                'name' => 'Kuhn-Sawayn',
                'subtitle' => 'Intuitive object-oriented policy',
                'project_url' => 'https://picsum.photos/id/5/640/480',
                'image_url' => 'https://picsum.photos/id/5/640/480',
                'description' => 'Tellus pellentesque eu tincidunt tortor aliquam. Amet luctus venenatis lectus magna fringilla urna porttitor rhoncus. Ut etiam sit amet nisl purus in mollis. Sagittis eu volutpat odio facilisis.'
            ],
            [
                'name' => 'Gutmann Ltd',
                'subtitle' => 'Future-proofed heuristic monitoring',
                'project_url' => 'https://picsum.photos/id/6/640/480',
                'image_url' => 'https://picsum.photos/id/6/640/480',
                'description' => 'Viverra ipsum nunc aliquet bibendum enim facilisis gravida neque. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed.'
            ],
            [
                'name' => 'Nolan and Muller',
                'subtitle' => 'Universal transitional capacity',
                'project_url' => 'https://picsum.photos/id/7/640/480',
                'image_url' => 'https://picsum.photos/id/7/640/480',
                'description' => 'Odio facilisis mauris sit amet massa. Ac orci phasellus egestas tellus. Fusce ut placerat orci nulla pellentesque. Netus et malesuada fames ac turpis egestas sed tempus urna.'
            ],
            [
                'name' => 'Pfannerstill-Gaylord',
                'subtitle' => 'Stand-alone zerotolerance challenge',
                'project_url' => 'https://picsum.photos/id/8/640/480',
                'image_url' => 'https://picsum.photos/id/8/640/480',
                'description' => 'Malesuada fames ac turpis egestas integer. Imperdiet dui accumsan sit amet nulla facilisi morbi tempus iaculis. Tristique et egestas quis ipsum suspendisse ultrices. Orci sagittis eu volutpat odio facilisis mauris.'
            ],
            [
                'name' => 'Jerde-Witting',
                'subtitle' => 'Reduced clear-thinking hardware',
                'project_url' => 'https://picsum.photos/id/9/640/480',
                'image_url' => 'https://picsum.photos/id/9/640/480',
                'description' => 'Mauris in aliquam sem fringilla. Neque convallis a cras semper auctor neque. Tincidunt tortor aliquam nulla facilisi cras fermentum. Vel orci porta non pulvinar neque laoreet suspendisse.'
            ]

        ]);
    }
}
