<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class User_questions extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_questions')->insert([
        [
          'id' => '',
          'type' => 'intro',
          'ui_type' => '',
          'question' => 'Name',
          'options' => '',
          'have_followup' => false,
          'followup_questions' => [],
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
            'id' => '1',
            'type' => 'intro',
            'ui_type' => '',
            'question' => 'Gender?',
            'options' => ['male', 'female', 'other'],
            'have_followup' => false,
            'followup_questions' => [],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
        [
          'id' => '',
          'type' => 'intro',
          'ui_type' => '',
          'question' => 'Height',
          'options' => '',
          'have_followup' => false,
          'followup_questions' => [],
          'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
          'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ],
            [
                'id' => '',
                'type' => 'intro',
                'ui_type' => '',
                'question' => 'Weight',
                'options' => '',
                'have_followup' => false,
                'followup_questions' => [],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '',
                'type' => 'intro',
                'ui_type' => '',
                'question' => 'Age',
                'options' => '',
                'have_followup' => false,
                'followup_questions' => [],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
            'id' => '2',
            'type' => 'intro',
            'ui_type' => '',
            'question' => 'How do you feel during exercise?',
            'options' => ['Get tired quickly',
                          'Strong and active',
                          'Prefer slow and easy',
                          'Push hard',
                          'recover fast'],
            'have_followup' => false,
            'followup_questions' => [],
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '3',
                'type' => 'intro',
                'ui_type' => '',
                'question' => 'How much do you move in a day?',
                'options' => ['Sit a lot',
                              'On my feet all day',
                              'Mix of both',
                              'Changes daily'],
                'have_followup' => false,
                'followup_questions' => [],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '4',
                'type' => 'intro',
                'ui_type' => '',
                'question' => 'Do you have any health issues?',
                'options' => ['No health issues',
                              'Thyroid',
                              'Diabetes',
                              'Cancer',
                              'Hypertension(high bp)',
                              'Other'],
                'have_followup' => false,
                'followup_questions' => [],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '5',
                'type' => 'intro',
                'ui_type' => '',
                'question' => 'Does anyone in your family have these health problems?',
                'options' => ['Heart problem',
                              'Diabetes',
                              'High blood pressure(hypertension)',
                              'None of these',
                              'Other'],
                'have_followup' => false,
                'followup_questions' => [],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '6',
                'type' => 'intro',
                'ui_type' => '',
                'question' => 'Do you have any allergies?',
                'options' => ['Yes to food',
                              'Yes to medications',
                              'Yes to dust/pollens',
                              'No allergies'],
                'have_followup' => false,
                'followup_questions' => [],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '7',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How do you feel in different weather?",
                'options' => [
                    [
                        'option' => 'I feel too hot and sweat a lot in summer',
                        'type' => 'pita'
                    ],
                    [
                        'option' => 'I feel very cold even others are fine',
                        'type' => 'vata'
                    ],
                    [
                        'option' => 'I feel heavy and tired when its humid',
                        'type' => 'kapha'
                    ],
                    [
                        'option' => 'I feel okay in all weather',
                        'type' => 'balance_prakruti'],
                    ],
                'have_followup' => true,
                'followup_questions' => [
                    [
                        'question'=>'Do you get acidity or heart burn in summer?',
                        'options'=>['Yes','No'],
                        'type'=>'pita'
                    ],
                    [
                        'question'=>'Do you have gas or bloating in cold weather?',
                        'options'=>['Yes','No'],
                        'type'=>'vata'
                    ],
                    [
                        'question'=>'Do you get blocked nose or mucus in humid weather?',
                        'options'=>['Yes','No'],
                        'type'=>'kapha'
                    ],
                    [
                        'question'=>'Do you feel active and fresh most of the time?',
                        'options'=>['Yes','No'],
                        'type'=>'balance_prakruti'
                    ]
                ],
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '8',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How often do you feel hungry?",
                'options' => [
                    [
                        'option' => 'Rarely hungry',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'Very often hungry',
                        'type' => 'pitta',
                    ],
                    [
                        'option' => 'Slow hunger but can eat a lot',
                        'type' => 'kapha',
                    ],
                    [
                        'option' => 'Balanced hunger',
                        'type' => 'balance_prakruti',
                    ],
                    [
                        'option' => 'Hunger changes daily',
                        'type' => 'Vata-pitta',
                    ],
                ],
                'have_followup' => true,
                'followup_questions' => [
                    [
                        'question' => 'Do you eat small meals but snack often?',
                        'options' => ['Yes', 'No'],
                        'type' => 'vata'
                    ],
                    [
                        'question' => 'Do you feel hot or get headaches when hungry',
                        'options' => ['Yes', 'No'],
                        'type' => 'pitta'
                    ],
                    [
                        'question' => 'Do you eat more when stressed or at night?',
                        'options' => ['Yes', 'No'],
                        'type' => 'kapha'
                    ],
                ],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '9',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How is your digestion?",
                'options' => [
                    [
                        'option' => 'Irregular or bloated',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'Fast and loose',
                        'type' => 'pitta',
                    ],
                    [
                        'option' => 'Slow and heavy',
                        'type' => 'kapha',
                    ],
                    [
                        'option' => 'Balanced and regular',
                        'type' => 'balance_prakruti',
                    ],
                    [
                        'option' => 'Sensitive or easily upset',
                        'type' => 'Vata-pitta',
                    ]
                ],
                'have_followup' => false,
                'followup_questions' => [],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '10',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How is your sleep?",
                'options' => [
                    [
                        'option' => 'Light, wake up often',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'Okay, but wake from heat or dreams',
                        'type' => 'pitta',
                    ],
                    [
                        'option' => 'Deep, sleep long',
                        'type' => 'kapha',
                    ]
                ],
                'have_followup' => true,
                'followup_questions' => [
                    [
                        'question' => 'Is it hard for you to relax before sleep?',
                        'options' => ['Yes', 'No'],
                        'type' => 'vata'
                    ],
                    [
                        'question' => 'DO you wake up hot and sweaty at night?',
                        'options' => ['Yes', 'No'],
                        'type' => 'pitta'
                    ],
                    [
                        'question' => 'Do you struggle to wake up early?',
                        'options' => ['Yes', 'No'],
                        'type' => 'kapha'
                    ]
                ],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '11',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How do you respond to stress?",
                'options' => [
                    [
                        'option' => 'I get anxious and overthink',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'I get angry or frustrated',
                        'type' => 'pitta',
                    ],
                    [
                        'option' => 'I go away and stay quiet',
                        'type' => 'kapha',
                    ]
                ],
                'have_followup' => false,
                'followup_questions' => [],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '12',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How do you feel most of the time?",
                'options' => [
                    [
                        'option' => 'Anxious or overthinking',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'Angry or frustrated',
                        'type' => 'pitta',
                    ],
                    [
                        'option' => 'Calm but sometimes lazy',
                        'type' => 'km kapha',
                    ]
                ],
                'have_followup' => true,
                'followup_questions' => [
                    [
                        'question' => 'Do you often feel restless or nervous?',
                        'options' => ['Yes', 'No'],
                        'type' => 'vata'
                    ],
                    [
                        'question' => 'Do you get frustrated if things dont go your way?',
                        'options' => ['Yes', 'No'],
                        'type' => 'pitta'
                    ],
                    [
                        'question' => 'Do you struggle with motivation?',
                        'options' => ['Yes', 'No'],
                        'type' => 'kapha'
                    ]
                ],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '13',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How would you describe your skin?",
                'options' => [
                    [
                        'option' => 'Dry',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'Oily',
                        'type' => 'Kapha',
                    ],
                    [
                        'option' => 'Combination',
                        'type' => 'Mix of vata pitta and kapha',
                    ],
                    [
                        'option' => 'Normal',
                        'type' => 'Balanced_prakruti',
                    ],
                    [
                        'option' => 'Sensitive',
                        'type' => 'Pitta',
                    ]
                ],
                'have_followup' => true,
                'followup_questions' => [
                    [
                        'question' => 'Does your skin feel rough or flaky?',
                        'options' => ['Yes', 'No'],
                        'type' => 'vata'
                    ],
                    [
                        'question' => 'Do you get acne after eating spicy food?',
                        'options' => ['Yes', 'No'],
                        'type' => 'Pitta'
                    ],
                    [
                        'question' => 'Does your skin feel sticky or heavy in humid weather?',
                        'options' => ['Yes', 'No'],
                        'type' => 'Kapha'
                    ],
                    [
                        'question' => 'Does your skin change a lot with seasons?',
                        'options' => ['Yes', 'No'],
                        'type' => 'Mix of vata pitta and kapha'
                    ]
                ],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [
                'id' => '14',
                'type' => "prakruti",
                'ui_type' => '',
                'question' => "How is your memory?",
                'options' => [
                    [
                        'option' => 'Forget easily',
                        'type' => 'vata',
                    ],
                    [
                        'option' => 'Remember details well',
                        'type' => 'pitta',
                    ],
                    [
                        'option' => 'Slow but never forget',
                        'type' => 'kapha',
                    ],
                    [
                        'option' => 'Mostly good sometimes forget',
                        'type' => 'balance_prakruti',
                    ]
                ],
                'have_followup' => 'true',
                'followup_questions' => [
                    [
                        'question' => 'Do you often forget things or name?',
                        'options' => ['Yes', 'No'],
                        'type' => 'vata'
                    ],
                    [
                        'question' => 'Do too many details stress you?',
                        'options' => ['Yes', 'No'],
                        'type' => 'pitta'
                    ],
                    [
                        'question' => 'Do you need to repeat things to remember?',
                        'options' => ['Yes', 'No'],
                        'type' => 'kapha'
                    ]
                ],
                
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ]);
    }
}
