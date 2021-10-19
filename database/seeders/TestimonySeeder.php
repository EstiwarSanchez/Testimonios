<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TestimonySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $verified = 'Verified Graduate';
        DB::table('testimonies')->insert(
            [
                [
                    'name' => 'Daniel Clifford',
                    'verified' => $verified,
                    'title' => 'I received a job offer mid-course, and the subjects I learned were current, if not more so, in the company I joined. I honestly feel I got every penny’s worth.',
                    'description' => 'I was an EMT for many years before I joined the bootcamp. I’ve been looking to make a transition and have heard some people who had an amazing experience here. I signed up for the free intro course and found it incredibly fun! I enrolled shortly thereafter. The next 12 weeks was the best - and most grueling - time of my life. Since completing the course, I’ve successfully switched careers, working as a Software Engineer at a VR startup.',
                    'path_img' => 'testimonials/image-daniel.jpg',
                    'background' => 'violet',
                    'color' => 'white',
                    'class' => 'desktop:col-span-2 desktop:order-1 md:col-span-2 xl:col-span-1',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Jonathan Walters',
                    'verified' => $verified,
                    'title' => 'The team was very supportive and kept me motivated',
                    'description' => '  I started as a total newbie with virtually no coding skills. I now work as a mobile engineer for a big company. This was one of the best investments I’ve made in myself.',
                    'path_img' => 'testimonials/image-jonathan.jpg',
                    'background' => 'dark-grayish-blue',
                    'color'=>'white',
                    'class'=>'desktop:order-2',
                    'created_at' => now(),
                    'updated_at' => now()

                ],
                [
                    'name' => 'Jeanette Harmon',
                    'verified' => $verified,
                    'title' => 'An overall wonderful and rewarding experience',
                    'description' => 'Thank you for the wonderful experience! I now have a job I really enjoy, and make a good living while doing something I love. ',
                    'path_img' => 'testimonials/image-jeanette.jpg',
                    'background' => 'white',
                    'color'=>'dark-grayish-blue',
                    'class' => 'desktop:order-4',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Patrick Abrams',
                    'verified' => $verified,
                    'title' => 'Awesome teaching support from TAs who did the bootcamp themselves. Getting guidance from them and learning from their experiences was easy.',
                    'description' => 'The staff seem genuinely concerned about my progress which I find really refreshing. The program gave me the confidence necessary to be able to go out in the world and present myself as a capable junior developer. The standard is above the rest. You will get the personal attention you need from an incredible community of smart and amazing people. ',
                    'path_img' => 'testimonials/image-patrick.jpg',
                    'background' => 'dark-blackish-blue',
                    'color'=>'white',
                    'class' => 'desktop:col-span-2 desktop:order-5',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Kira Whittle',
                    'verified' => $verified,
                    'title' => 'Such a life-changing experience. Highly recommended!',
                    'description' => 'Before joining the bootcamp, I’ve never written a line of code. I needed some structure from professionals who can help me learn programming step by step. I was encouraged to enroll by a former student of theirs who can only say wonderful things about the program. The entire curriculum and staff did not disappoint. They were very hands-on and I never had to wait long for assistance. The agile team project, in particular, was outstanding. It took my learning to the next level in a way that no tutorial could ever have. In fact, I’ve often referred to it during interviews as an example of my developent experience. It certainly helped me land a job as a full-stack developer after receiving multiple offers. 100% recommend! ',
                    'path_img' => 'testimonials/image-kira.jpg',
                    'background' => 'white',
                    'color'=>'dark-grayish-blue',
                    'class' => 'desktop:row-span-2 desktop:order-3 xl:col-span-2 desktop:col-span-1',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
